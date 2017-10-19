<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="mypage">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="mileage">
		<div class="page-header">
		    <h2 class="title">Mileage</h2>
		</div>
        <nav class="mypage-nav">
            <div class="container">
                <ul>
                    <li class="space"><a href="/mobile/mypage/order_list.php">주문내역/<br>배송조회</a></li>
                    <li class="active"><a href="/mobile/mypage/mileage.php">적립금</a></li>
                    <li><a href="/mobile/mypage/coupon.php">할인쿠폰</a></li>
                    <li><a href="/mobile/mypage/wish_list.php">위시리스트</a></li>
                    <li><a href="/mobile/mypage/viewed_items.php">최근 본 상품</a></li>
                    <li><a href="#">Q&amp;A</a></li>
                    <li><a href="/mobile/mypage/inquiry_list.php">1:1 문의</a></li>
                    <li><a href="/mobile/mypage/pw_confirm.php">회원정보 수정</a></li>
                    <li><a href="/mobile/mypage/cart_list.php">장바구니</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
		    <article class="mileage-info">
		        <ul class="list">
		            <li>
		                <h3 class="m-title">관리자가 임의로 적립금 수정(우수고객등)</h3>
		                <p class="date">2017-08-01</p>
		                <p class="mileage-pay">5,000</p>
		            </li>
		            <li>
		                <h3 class="m-title">관리자가 임의로 적립금 수정(우수고객등)</h3>
		                <p class="date">2017-08-01</p>
		                <p class="mileage-pay minus">3,000</p>
		            </li>
		            <li>
		                <h3 class="m-title">추천인 적립금입니다.</h3>
		                <p class="date">2017-08-01</p>
		                <p class="mileage-pay">3,000</p>
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
                <div class="attention">
                    <ul>
                        <li>
                            적립된 금액이 0원 이상 누적되었을 때, 사용하실 수 있습니다.
                        </li>
                        <li>
                            결제 시 적립금 사용 여부를 확인할 수 있는 안내문이 나옵니다.
                        </li>
                        <li>
                            플레이텍스몰의 회원등급 유지기간은 해당연도 까지 이며, 매년 1월 1일 적립금은 소멸되어 회원등급은 신규회원으로 리셋됩니다.
                        </li>
                    </ul>
                </div>
		    </article>
        </div>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>