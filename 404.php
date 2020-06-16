<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
?>
<!-- Banner -->
<section id="banner">
	<header>
		<h2>404: <em>Страница не найдена!</em></h2>
		<a href="index.php" class="button">Главная / о нас</a>
	</header>
</section>

<section class="wrapper style1">
	<div class="container">
		<div class="row gtr-200">
			<section class="col-12 col-12-narrower">
				<div class="box highlight">
					<h1>404</h1>
					<p>Страница, которую вы ищете, не найдена!</p>
					<a href="index.php" class="button">На главную</a>
				</div>
			</section>
		</div>
	</div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>