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
$this->setFrameMode(true);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(function() {
var sldr = $('.sldr'),
sldrContent = sldr.html(),
slideWidth = $('.sl_ctr').outerWidth(),
slideCount = $('.sldr img').length,
prv_b = $('.prv_b'),
nxt_b = $('.nxt_b'),
sldrInterval = 3100,
animateTime = 1000,
course = 1,
margin = - slideWidth;
$('.sldr img:last').clone().prependTo('.sldr');$('.sldr img').eq(1).clone().appendTo('.sldr');$('.sldr').css('margin-left',-slideWidth);function nxt_bSlide(){interval=window.setInterval(animate,sldrInterval)}function animate(){if(margin==-slideCount*slideWidth-slideWidth){sldr.css({'marginLeft':-slideWidth});margin=-slideWidth*2}else if(margin==0&&course==-1){sldr.css({'marginLeft':-slideWidth*slideCount});margin=-slideWidth*slideCount+slideWidth}else{margin=margin-slideWidth*(course)}sldr.animate({'marginLeft':margin},animateTime)}function sldrStop(){window.clearInterval(interval)}prv_b.click(function(){if(sldr.is(':animated')){return false}var course2=course;course=-1;animate();course=course2});nxt_b.click(function(){if(sldr.is(':animated')){return false}var course2=course;course=1;animate();course=course2});sldr.add(nxt_b).add(prv_b).hover(function(){sldrStop()},nxt_bSlide);nxt_bSlide()});
</script>


<div class="sl_ctr">
<div class="sldr"> 
	<?if($arParams["DISPLAY_TOP_PAGER"]):?>
				<?=$arResult["NAV_STRING"]?><br />
			<?endif;?>
			
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
         	
			<img border="0" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["NAME"]?>" hspace="0" vspace="3" title="<?=$arItem["NAME"]?>" style="float:left" />
			
				<h5><span><?=$arItem["NAME"]?></span></h5>
        <?endforeach;?> 

</div>
<div class="prv_b"></div>
<div class="nxt_b"></div>
</div>


		
		
			
			
			