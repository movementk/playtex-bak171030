<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="mypage">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="inquiry-list">
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
                    <li><a href="/mobile/mypage/pw_confirm.php">회원정보 수정</a></li>
                    <li><a href="/mobile/mypage/cart_list.php">장바구니</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
		    <article>
		        <ul class="list">
		            <li>
                        <a href="/mobile/mypage/inquiry_view.php">
                            <h3 class="title">[배송문의] 언제 배송 받을까요 ㅠㅠ</h3>
                            <p class="date">2017-08-01</p>
                            <p class="reply waiting">답변대기</p>
		                </a>
		            </li>
		            <li>
                        <a href="/mobile/mypage/inquiry_view.php">
                            <h3 class="title">[상품문의] 그럼 이렇게 주문하면 괜찮을까요?</h3>
                            <p class="date">2017-08-01</p>
                            <p class="reply">답변완료</p>
		                </a>
		            </li>
		            <li>
                        <a href="/mobile/mypage/inquiry_view.php">
                            <h3 class="title">[상품문의] 그럼 이렇게 주문하면 괜찮을까요?</h3>
                            <p class="date">2017-08-01</p>
                            <p class="reply">답변완료</p>
		                </a>
		            </li>
		            <li>
                        <a href="/mobile/mypage/inquiry_view.php">
                            <h3 class="title">[상품문의] 그럼 이렇게 주문하면 괜찮을까요?</h3>
                            <p class="date">2017-08-01</p>
                            <p class="reply">답변완료</p>
		                </a>
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