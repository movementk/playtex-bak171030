<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="mypage">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="pw-confirm">
		<div class="page-header">
		    <h2 class="title">My Profile</h2>
		</div>
        <nav class="mypage-nav">
            <div class="container">
                <ul>
                    <li class="space"><a href="/mobile/mypage/order_list.php">주문내역/<br>배송조회</a></li>
                    <li><a href="/mobile/mypage/mileage.php">적립금</a></li>
                    <li><a href="/mobile/mypage/coupon.php">할인쿠폰</a></li>
                    <li><a href="/mobile/mypage/wish_list.php">위시리스트</a></li>
                    <li><a href="/mobile/mypage/viewed_items.php">최근 본 상품</a></li>
                    <li><a href="#">Q&amp;A</a></li>
                    <li><a href="/mobile/mypage/inquiry_list.php">1:1 문의</a></li>
                    <li class="active"><a href="/mobile/mypage/pw_confirm.php">회원정보 수정</a></li>
                    <li><a href="/mobile/mypage/cart_list.php">장바구니</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
		    <article>
		        <div class="article-header">
		            <figure>
		                <img src="/design/playtex/mobile/images/mypage/lock_img.jpg" alt="">
		            </figure>
		            <p class="summary">
		                저희 쇼핑몰에서는 회원님의 소중한 개인정보를<br>
		                안전하게 보호하고 개인정보 도용으로 인한<br>
		                피해를 예방하기 위하여 비밀번호를 확인합니다.<br> 
		                비밀번호는 타인에게 노출되지 않도록<br>
		                주의해주세요.
		            </p>
		        </div>
		        <div class="article-content">
		            <form action="#">
                        <p class="user-id">movementk</p>
		                <div class="form-group">
		                    <input type="password" id="u-pw" class="form-control" placeholder="비밀번호를 입력하세요">
		                    <label for="u-pw" class="sr-only">비밀번호 입력</label>
		                </div>
		                <div class="btn-area">
		                    <p>
		                        <a href="#" class="btn btn-gray" role="button">취소</a>
		                        <button type="submit" class="btn btn-black">확인</button>
		                    </p>
		                </div>
		            </form>
		        </div>
		    </article>
        </div>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>