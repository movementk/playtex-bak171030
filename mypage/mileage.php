<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>

<!-- 대메뉴 Class -->
<body class="mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- 서브페이지 배경 -->
    <div class="page-header">
        <h2>Mileage</h2>
    </div>
    <!-- 페이지 Class -->
    <main id="content" class="mileage">
        <div class="container">
            <article>
                <div class="article-header">
                    <nav class="mypage-tab">
                        <ul>
                            <li><a href="/mypage/order_list.php">주문내역/배송조회</a></li>
                            <li><a href="#">취소/교환/환불 조회</a></li>
                            <li class="active"><a href="/mypage/mileage.php">적립금</a></li>
                            <li><a href="/mypage/coupon.php">할인쿠폰</a></li>
                            <li><a href="/mypage/wish_list.php">위시리스트</a></li>
                            <li><a href="/mypage/viewed_items.php">최근 본 상품</a></li>
                            <li><a href="#">Q&amp;A</a></li>
                            <li><a href="/mypage/inquiry_list.php">1:1문의</a></li>
                            <li><a href="/mypage/pw_confirm.php">회원정보 수정</a></li>
                            <li><a href="/mypage/cart_list.php">장바구니</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="article-content">
                    <div class="table-wrap">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>날짜</th>
                                    <th>적립내역</th>
                                    <th>적립금</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="date">2017-08-01</td>
                                    <td class="mileage-history">
                                        <a href="#">관리자가 임의로 적립금 수정(우수고객등)</a>
                                    </td>
                                    <td class="save-mileage">5,000</td>
                                </tr>
                                <tr>
                                    <td class="date">2017-08-01</td>
                                    <td class="mileage-history">
                                        <a href="#">관리자가 임의로 적립금 수정(우수고객등)</a>
                                    </td>
                                    <td class="save-mileage minus">3,000</td>
                                </tr>
                                <tr>
                                    <td class="date">2017-08-01</td>
                                    <td class="mileage-history">
                                        <a href="#">추천인 적립금입니다.</a>
                                    </td>
                                    <td class="save-mileage">3,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-double-left"></i>
                                </a>
                            </li><li class="arrow-left">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-left"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="arrow-right">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="attention">
                        <ul>
                            <li>적립된 금액이 0원 이상 누적되었을 때, 사용하실 수 있습니다.</li>
                            <li>결제 시 적립금 사용 여부를 확인할 수 있는 안내문이 나옵니다.</li>
                            <li>플레이텍스몰의 회원등급 유지기간은 해당연도 까지이며, 매년 1월 1일 적립금은 소멸되며 회원등급은 신규회원으로 리셋됩니다.</li>
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>