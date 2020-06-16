<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Статьи");
?><section class="wrapper style1">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-8 col-12-narrower">
								<div id="content">

									<!-- Content -->
										<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	".default", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Статьи",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "VIDEO",
			2 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "information",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/stati/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => ".default",
		"TAGS_CLOUD_ELEMENTS" => "150",
		"PERIOD_NEW_TAGS" => "",
		"DISPLAY_AS_RATING" => "rating",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"COLOR_NEW" => "3E74E6",
		"COLOR_OLD" => "C0C0C0",
		"TAGS_CLOUD_WIDTH" => "100%",
		"TEMPLATE_THEME" => "blue",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>

								</div>
							</div>
							<div class="col-4 col-12-narrower">
								<div id="sidebar">

									<!-- Sidebar -->

										<section>
											<h3>Статьи</h3>
											<p>Статьи о ремонте компьютеров<br/>
											Самостоятельная установка Windows дома<br/>
											Чистка компонентов персонального компьютера...</p>
											<footer>
												<a href="#" class="button">Читать дальше</a>
											</footer>
										</section>

										<section>
											<h3>Разделы</h3>
											<?$APPLICATION->IncludeComponent(
											"bitrix:catalog.section.list",
											"",
											Array(
												"ADD_SECTIONS_CHAIN" => "Y",
												"CACHE_FILTER" => "N",
												"CACHE_GROUPS" => "Y",
												"CACHE_TIME" => "36000000",
												"CACHE_TYPE" => "A",
												"COUNT_ELEMENTS" => "Y",
												"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
												"FILTER_NAME" => "sectionsFilter",
												"IBLOCK_ID" => "1",
												"IBLOCK_TYPE" => "information",
												"SECTION_CODE" => "",
												"SECTION_FIELDS" => array("",""),
												"SECTION_ID" => $_REQUEST["SECTION_ID"],
												"SECTION_URL" => "/novosti/#SECTION_CODE_PATH#/",
												"SECTION_USER_FIELDS" => array("",""),
												"SHOW_PARENT_NAME" => "Y",
												"TOP_DEPTH" => "2",
												"VIEW_MODE" => "LIST"
											)
										);?>
										</section>
								</div>
							</div>
						</div>
					</div>
				</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>