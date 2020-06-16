<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>	
	<div class="row gtr-50">
		<div class="col-6 col-12-mobilep">
			<input type="text" name="user_name" id="name" placeholder="Имя*" />
		</div>
		<div class="col-6 col-12-mobilep">
			<input type="email" name="user_email" id="email" placeholder="Email*" />
		</div>
		<div class="col-12 col-12-mobilep">
			<input type="text" name="user_phone" id="phone" placeholder="Phone*" />
		</div>
		<div class="col-12">
			<textarea name="MESSAGE" id="message" placeholder="Сообщение" rows="5"></textarea>
		</div>
		<div class="col-12">
			<ul class="actions">
				<li><input type="submit" name="submit" class="button alt" value="Отправить сообщение" /></li>
			</ul>
		</div>
		<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	</div>
</form>