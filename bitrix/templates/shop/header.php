<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?$APPLICATION->ShowTitle();?></title><?$APPLICATION->ShowHead();?>
		
		<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/main.css" />
		<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/main.css" />

	</head>
	<body class="is-preload">
		<div id="page-wrapper">
			<div id="panel"><?$APPLICATION->ShowPanel();?></div>
			
				<!-- Header -->
					<div id="header">

					<!-- Logo -->
						<h1><a href="index.html" id="logo">Интернет-магазин <em> NiX</em></a></h1>

					<!-- Nav -->
					<?$APPLICATION->IncludeComponent("bitrix:menu", "template1", Array(
					"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
						"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
						"DELAY" => "N",	// Откладывать выполнение шаблона меню
						"MAX_LEVEL" => "2",	// Уровень вложенности меню
						"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
							0 => "",
						),
						"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
						"MENU_CACHE_TYPE" => "N",	// Тип кеширования
						"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
						"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
						"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
					),
					false
				);?>
				
				</div>

						