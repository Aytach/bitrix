<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<br>

	<div class="row">
		<section class="col-3 col-6-narrower col-12-mobilep">
			<h3>Links to Stuff</h3>
			<ul class="links">
				<li><a href="#">Mattis et quis rutrum</a></li>
				<li><a href="#">Suspendisse amet varius</a></li>
				<li><a href="#">Sed et dapibus quis</a></li>
				<li><a href="#">Rutrum accumsan dolor</a></li>
				<li><a href="#">Mattis rutrum accumsan</a></li>
				<li><a href="#">Suspendisse varius nibh</a></li>
				<li><a href="#">Sed et dapibus mattis</a></li>
			</ul>
		</section>
		<section class="col-3 col-6-narrower col-12-mobilep">
			<h3>More Links to Stuff</h3>
			<ul class="links">
				<li><a href="#">Duis neque nisi dapibus</a></li>
				<li><a href="#">Sed et dapibus quis</a></li>
				<li><a href="#">Rutrum accumsan sed</a></li>
				<li><a href="#">Mattis et sed accumsan</a></li>
				<li><a href="#">Duis neque nisi sed</a></li>
				<li><a href="#">Sed et dapibus quis</a></li>
				<li><a href="#">Rutrum amet varius</a></li>
			</ul>
		</section>
		<section class="col-6 col-12-narrower">
		<h3>Связаться</h3>
			<?$APPLICATION->IncludeComponent(
			"mycomponents:main.feedback",
			"ContactsPageForm",
			Array(
				"EMAIL_TO" => "admin@admin.ru",
				"EVENT_MESSAGE_ID" => array("7"),
				"OK_TEXT" => "Спасибо, ваше сообщение принято.",
				"REQUIRED_FIELDS" => array("NAME","EMAIL", "PHONE"),
				"USE_CAPTCHA" => "N",
				"AJAX_MODE" => "Y"
			)
		);?>
		</section>
	</div>



					
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>