<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$frame = $this->createFrame()->begin('');
?>
<?if(is_array($arResult["PICTURE"])):?>
<img src="<?=$arResult["PICTURE"]["src"]?>" alt="<?=$arResult["PICTURE"]["NAME"]?>"/>
<?endif?>
<p><?=substr($arResult["PREVIEW_TEXT"], 0, 70)?> ...</p>
<?
$frame->end();
?>