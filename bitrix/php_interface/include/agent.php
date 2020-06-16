<?
function AgentCheckPrice()
{
	if (CModule::IncludeModule("iblock"))
	{
		$arFilter = array('ACTIVE' => 'Y', 'IBLOCK_ID' => CATALOG_IBLOCK_ID, 'PROPERTY_price'=>false);
		$arSelect = array('ID', 'NAME', 'DATE_ACTIVE_FROM', 'PROPERTY_price');


		$res = CIBlockElement::getList(array(), $arFilter, false, false, $arSelect);
		while ($ob = $res->GetNextElement()) 
		{
			$arFields = $ob->GetFields();
			$arItems[] = $arFields;
		}
	
	
		CEventLog::Add(Array(
			"SEVERITY" => "SECURITY",
			"AUDIT_TYPE_ID" => "CHECK_PRICE",
			"MODULE_ID" => "iblock",
			"ITEM_ID" => "",
			"DESCRIPTION" => "Проверка цен, нет цен для " .count($arItems)." элементов",
			));
			
		if (count($arItems) > 0)
		{
			$arEmail = array();
			$filter = array("GROUPS_ID"=>array(GROUP_ADMIN_ID));
			$rsUsers = CUser::GetList(($by='personal_country'), ($order ="desc"), $filter);
			while($arUser = $rsUsers->GetNext())
			{
				$arEmail[] =  $arUser["EMAIL"];
			}
			
			if (count($arEmail) > 0)
			{
				$arEventFields = array(
					"TEXT" => count($arItems),
					"EMAIL" => implode(", ", $arEmail),
				);
				CEvent::Send("CHECK_CATALOG", SITE_ID, $arEventFields);
			}
		}
	}
	return "AgentCheckPrice();";
}
?>



