<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="mypage">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="wish-list">
		<div class="page-header">
		    <h2 class="title">Mileage</h2>
		</div>
        <nav class="mypage-nav">
            <div class="container">
                <ul>
                    <li class="space"><a href="/mobile/mypage/order_list.php">주문내역/<br>배송조회</a></li>
                    <li><a href="/mobile/mypage/mileage.php">적립금</a></li>
                    <li><a href="/mobile/mypage/coupon.php">할인쿠폰</a></li>
                    <li class="active"><a href="/mobile/mypage/wish_list.php">위시리스트</a></li>
                    <li><a href="/mobile/mypage/viewed_items.php">최근 본 상품</a></li>
                    <li><a href="#">Q&amp;A</a></li>
                    <li><a href="/mobile/mypage/inquiry_list.php">1:1 문의</a></li>
                    <li><a href="/mobile/mypage/profile_modify.php">회원정보 수정</a></li>
                    <li><a href="/mobile/mypage/cart_list.php">장바구니</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
		    <article class="coupon-info">
		        <div class="selection-all">
                    <p class="checking">
                        <input type="checkbox">
                    </p>
		            <p class="selection-btn">
		                <a href="#" class="btn btn-xs" role="button">전체삭제</a>
		            </p>
		        </div>
		        <ul class="list">
		            <li>
                        <p class="checking">
                            <input type="checkbox">
                        </p>
                        <div class="row">
                            <div class="col-xs-4">
                                <figure>
                                    <img src="/design/playtex/mobile/images/mypage/details_info_img.gif" class="img-responsive" alt="">
                                </figure>
                            </div>
                            <div class="col-xs-8">
                                <h4 class="p-title">★57%+세컨3종증정★ [Playtex]플레이텍스 에센셜 노와이어 브라팬티 11종세트 PXI03_08 </h4>
                            </div>
                        </div>
                        <div class="product-info">
                            <dl>
                                <dt>수량</dt>
                                <dd>1</dd>
                                <dt>재고</dt>
                                <dd>있음</dd>
                                <dt>적립금</dt>
                                <dd>630</dd>
                                <dt>가격</dt>
                                <dd>71,900</dd>
                            </dl>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-gray" role="button">장바구니 담기</a>
                                    <a href="#" class="btn btn-beige" role="button">삭제하기</a>
                                </p>
                            </div>
                        </div>
		            </li>
		        </ul>
		    </article>
        </div>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>