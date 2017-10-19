<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>

<body>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content">
		<div id="visual">
			<ul>
				<li><a href="#"><img class="img-responsive" src="/design/playtex/mobile/images/main/img_visual.jpg" alt=""></a>
				</li>
				<li><a href="#"><img class="img-responsive" src="/design/playtex/mobile/images/main/img_visual.jpg" alt=""></a></li>
				<li><a href="#"><img class="img-responsive" src="/design/playtex/mobile/images/main/img_visual.jpg" alt=""></a></li>
				<li><a href="#"><img class="img-responsive" src="/design/playtex/mobile/images/main/img_visual.jpg" alt=""></a></li>
			</ul>
		</div>
		<section id="best-seller">
			<div class="container">
				<header>
					<h4>Best Seller</h4>
					<ul>
						<li><a href="#">1<span class="sr-only">1열로 보기</span></a></li>
						<li><a href="#">2<span class="sr-only">2열로 보기</span></a></li>
						<li><a href="#">3<span class="sr-only">3열로 보기</span></a></li>
					</ul>
				</header>
				<ul class="row">
					<li class="col-xs-12">
						<a href="#">
							<figure>
								<p></p>
							</figure>
						</a>
					</li>
				</ul>
			</div>
		</section>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
	<script src="/design/playtex/mobile/jquery.bxslider/jquery.bxslider.min.js"></script>
	<style>
		@import url(/design/playtex/mobile/css/main.css);
	</style>
	<script>
		(function($) {
			$("#visual ul").bxSlider({
				controls: false,
				buildPager: function(slideIndex) {
					return "<span class='sr-only'>"+ slideIndex +"</span>";
				}
			});
		})(jQuery);
	</script>
</body>

</html>