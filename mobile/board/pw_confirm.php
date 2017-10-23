<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="member board">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="find-for pw-confirm">
		<div class="page-header">
		    <h2 class="title">Password</h2>
		    <figure>
		        <img src="/design/playtex/mobile/images/board/pw_confirm_img.gif" alt="">
		    </figure>
		    <p class="summary">
                저희 쇼핑몰에서는 회원님의 소중한 개인정보를<br>
                안전하게 보호하고 개인정보 도용으로 인한<br>
                피해를 예방하기 위하여 비밀번호를 확인합니다.<br> 
                비밀번호는 타인에게 노출되지 않도록<br>
                주의해주세요.
		    </p>
		</div>
		<article>
		    <div class="container">
		        <div class="article-content">
		            <form action="#">
		                <div class="form-group">
		                    <label for="u-pw" class="sr-only">비밀번호</label>
		                    <input type="password" id="u-pw" class="form-control" placeholder="비밀번호를 입력하세요">
		                </div>
		                <div class="btn-area">
		                    <p>
		                        <a href="#" class="btn btn-sm btn-gray" role="button">취소</a>
		                        <a href="#" class="btn btn-sm btn-black" role="button">확인</a>
		                    </p>
		                </div>
		            </form>
		        </div>
		    </div>
		</article>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>