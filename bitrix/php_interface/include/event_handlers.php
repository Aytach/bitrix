<?
AddEventHandler("main", "OnBeforeEventAdd", array("MyClass", "OnBeforeEventAddHandler"));
class MyClass
{
   function OnBeforeEventAddHandler(&$event, &$lid, &$arFields)
   {
	   
		if($event == "FEEDBACK_FORM")
		{
			
			if (CModule::IncludeModule("iblock"))
			{
				$el = new CIBlockElement;
				
				$PROP = array();
				$PROP['PHONE'] = $arFields["PHONE"]; 
				$PROP['EMAIL'] = $arFields["AUTHOR_EMAIL"];

				$arLoadProductArray = array(
					"IBLOCK_ID" => FEEDBACK_IBLOCK_ID,
					"NAME" => $arFields["AUTHOR"],
					"DETAIL_TEXT" => $arFields["TEXT"],
					"DATE_ACTIVE_FROM" => ConvertTimeStamp(false, "FULL"),
					"PROPERTY_VALUES" => $PROP,
				);
				$el->Add($arLoadProductArray);
			}		
		}
   }
}
?>