<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="mypage">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="inquiry-view">
		<div class="page-header">
		    <h2 class="title">Inquiry</h2>
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
                    <li class="active"><a href="/mobile/mypage/inquiry_list.php">1:1 문의</a></li>
                    <li><a href="/mobile/mypage/profile_modify.php">회원정보 수정</a></li>
                    <li><a href="/mobile/mypage/cart_list.php">장바구니</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
		    <article>
		        <div class="article-header">
		            <h3>[상품문의] 구성품이 어떻게 되나요?</h3>
		        </div>
		        <div class="article-content">
		            <p class="date">2017-08-01</p>
		            ★ 배송/교환/반품/취소문의는 주문번호를 적어주셔야 빠른 처리가 가능합니다 ★<br><br>
		            20170910164707-31174782870<br>
                    팬티 교환신청했는데<br>
                    18일날 보내주신다던데<br>
                    보내신건가요?<br>
                    운송장 어디서 봐요?? 
		        </div>
		        <div class="btn-area">
		            <p>
		                <a href="/mobile/mypage/inquiry_list.php" class="btn btn-lg" role="button">목록보기</a>
		            </p>
		            <p>
		                <a href="#" class="btn btn-sm" role="button">삭제하기</a>
		                <a href="#" class="btn btn-sm" role="button">수정하기</a>
		            </p>
		        </div>
		    </article>
        </div>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>