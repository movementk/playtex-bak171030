<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="mypage">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="viewed-items">
		<div class="page-header">
		    <h2 class="title">Viewed Items</h2>
		</div>
        <nav class="mypage-nav">
            <div class="container">
                <ul>
                    <li class="space"><a href="/mobile/mypage/order_list.php">주문내역/<br>배송조회</a></li>
                    <li><a href="/mobile/mypage/mileage.php">적립금</a></li>
                    <li><a href="/mobile/mypage/coupon.php">할인쿠폰</a></li>
                    <li><a href="/mobile/mypage/wish_list.php">위시리스트</a></li>
                    <li class="active"><a href="/mobile/mypage/viewed_items.php">최근 본 상품</a></li>
                    <li><a href="#">Q&amp;A</a></li>
                    <li><a href="/mobile/mypage/inquiry_list.php">1:1 문의</a></li>
                    <li><a href="/mobile/mypage/pw_confirm.php">회원정보 수정</a></li>
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
                                </p>
                            </div>
                        </div>
		            </li>
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
                                </p>
                            </div>
                        </div>
		            </li>
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
                                </p>
                            </div>
                        </div>
		            </li>
		        </ul>
		        <nav class="paging" aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="first">
                            <a href="#" aria-label="Previous">
                                <i class="icon-angle-double-left">
                                    <span class="sr-only">first</span>
                                </i>
                            </a>
                        </li>
                        <li class="prev">
                            <a href="#" aria-label="Previous">
                                <i class="icon-angle-left">
                                    <span class="sr-only">prev</span>
                                </i>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li class="next">
                            <a href="#" aria-label="Next">
                                <i class="icon-angle-right">
                                    <span class="sr-only">next</span>
                                </i>
                            </a>
                        </li>
                        <li class="last">
                            <a href="#" aria-label="Next">
                                <i class="icon-angle-double-right">
                                    <span class="sr-only">last</span>
                                </i>
                            </a>
                        </li>
                    </ul>
                </nav>
		    </article>
        </div>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>