<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?><?/*<section id="banner">
					<header>
						<h2>Arcana: <em>A responsive site template freebie by <a href="http://html5up.net">HTML5 UP</a></em></h2>
						<a href="#" class="button">Learn More</a>
					</header>
				</section>*/?> <!-- Banner -->
<table height="448" width="1280" collpadding="0" colspan="0">
<tbody>
<tr>
	<td width="60%">
		 <?$APPLICATION->IncludeComponent("bitrix:news.list", "slider", Array(
	"COMPONENT_TEMPLATE" => "official",
		"IBLOCK_TYPE" => "-",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "3",	// Код информационного блока
		"NEWS_COUNT" => "10",	// Количество новостей на странице
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"FILTER_NAME" => "",	// Фильтр
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SHOW_404" => "N",	// Показ специальной страницы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
	),
	false
);?>
	</td>
	<td width="40%">
	</td>
</tr>
</tbody>
</table>
 <!--Registration-->
<div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.confirmation",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"CONFIRM_CODE" => "confirm_code",
		"LOGIN" => "login",
		"USER_ID" => "confirm_user_id"
	)
);?>
</div>
 <!--Authorization-->
<div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"FORGOT_PASSWORD_URL" => "/auth/forget.php",
		"PROFILE_URL" => "/personal/",
		"REGISTER_URL" => "/auth/registration.php",
		"SHOW_ERRORS" => "Y"
	)
);?>
</div>
 <!-- Highlights --> <section class="wrapper style1">
<div class="container">
	<div class="row gtr-200">
 <section class="col-4 col-12-narrower">
		<div class="box highlight">
			<h3>Акции</h3>
			 <?$APPLICATION->IncludeComponent(
	"mycomponents:photo.random", 
	"main", 
	array(
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "180",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "main",
		"DETAIL_URL" => "",
		"IBLOCKS_PROP" => "11",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "information",
		"IMG_HEIGHT" => "150",
		"IMG_WIDTH" => "150",
		"PARENT_SECTION" => ""
	),
	false
);?>
		</div>
 </section> <section class="col-4 col-12-narrower">
		<div class="box highlight">
			<h3>Новинки</h3>
			 <?$APPLICATION->IncludeComponent(
	"mycomponents:photo.random", 
	"main", 
	array(
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "180",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "main",
		"DETAIL_URL" => "",
		"IBLOCKS_PROP" => "12",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "information",
		"IMG_HEIGHT" => "150",
		"IMG_WIDTH" => "150",
		"PARENT_SECTION" => ""
	),
	false
);?>
 </section> <section class="col-4 col-12-narrower">
		<div class="box highlight">
			<h3>Спец предложения</h3>
			 <?$APPLICATION->IncludeComponent(
				"mycomponents:photo.random",
				"main",
				Array(
					"CACHE_GROUPS" => "N",
					"CACHE_TIME" => "180",
					"CACHE_TYPE" => "A",
					"COMPONENT_TEMPLATE" => ".default",
					"DETAIL_URL" => "",
					"IBLOCKS_PROP" => "10",
					"IBLOCK_ID" => "2",
					"IBLOCK_TYPE" => "information",
					"IMG_HEIGHT" => "150",
					"IMG_WIDTH" => "150",
					"PARENT_SECTION" => ""
				)
			);?>
		</div>
 </section>
	</div>
</div>
 </section>
<!-- Gigantic Heading --> <section class="wrapper style2">
<div class="container">
	<div class="major">
		<h2>A gigantic heading you can use for whatever</h2>
		<p>
			With a much smaller subtitle hanging out just below it
		</p>
	</div>
</div>
 </section>
<!-- Posts --> <section class="wrapper style1">
<div class="container">
	<div class="row">
 <section class="col-6 col-12-narrower">
		<div class="box post">
 <a href="#" class="image left"><img src="/bitrix/templates/shop/images/pic01.jpg" alt=""></a>
			<div class="inner">
				<h3>The First Thing</h3>
				<p>
					Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.
				</p>
			</div>
		</div>
 </section> <section class="col-6 col-12-narrower">
		<div class="box post">
 <a href="#" class="image left"><img src="/bitrix/templates/shop/images/pic02.jpg" alt=""></a>
			<div class="inner">
				<h3>The Second Thing</h3>
				<p>
					Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.
				</p>
			</div>
		</div>
 </section>
	</div>
	<div class="row">
 <section class="col-6 col-12-narrower">
		<div class="box post">
 <a href="#" class="image left"><img src="/bitrix/templates/shop/images/pic03.jpg" alt=""></a>
			<div class="inner">
				<h3>The Third Thing</h3>
				<p>
					Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.
				</p>
			</div>
		</div>
 </section> <section class="col-6 col-12-narrower">
		<div class="box post">
 <a href="#" class="image left"><img src="/bitrix/templates/shop/images/pic04.jpg" alt=""></a>
			<div class="inner">
				<h3>The Fourth Thing</h3>
				<p>
					Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.
				</p>
			</div>
		</div>
 </section>
	</div>
</div>
 </section>
<!-- CTA --> <section id="cta" class="wrapper style3">
<div class="container">
	<div>
		<h2>Are you ready to continue your quest?</h2>
 <a href="#" class="button">Insert Coin</a>
	</div>
</div>
 </section><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>