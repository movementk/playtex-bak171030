<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>

<!-- 대메뉴 Class -->
<body class="mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- 서브페이지 배경 -->
    <div class="page-header">
        <h2>Coupon</h2>
    </div>
    <!-- 페이지 Class -->
    <main id="content" class="coupon">
        <div class="container">
            <article>
                <div class="article-header">
                    <nav class="mypage-tab">
                        <ul>
                            <li><a href="/mypage/order_list.php">주문내역/배송조회</a></li>
                            <li><a href="#">취소/교환/환불 조회</a></li>
                            <li><a href="/mypage/mileage.php">적립금</a></li>
                            <li class="active"><a href="/mypage/coupon.php">할인쿠폰</a></li>
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
                                    <th>쿠폰번호</th>
                                    <th>쿠폰이름</th>
                                    <th>쿠폰전용품목</th>
                                    <th>사용가능금액</th>
                                    <th>할인액(률)/적립액(률)</th>
                                    <th>사용기간</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="coupon-num">41126240</td>
                                    <td class="coupon-name">
                                        <a href="#">신규회원가입 할인쿠폰</a>
                                    </td>
                                    <td class="apply-coupon">전상품</td>
                                    <td class="coupon-conditional">50,000원 이상</td>
                                    <td class="discount-mileage">할인액 10,000원</td>
                                    <td class="coupon-period">2016-03-30 ~ 2017-12-30</td>
                                </tr>
                                <tr>
                                    <td class="coupon-num">41126240</td>
                                    <td class="coupon-name">
                                        <a href="#">신규회원가입 할인쿠폰</a>
                                    </td>
                                    <td class="apply-coupon">전상품</td>
                                    <td class="coupon-conditional">100,000원 이상</td>
                                    <td class="discount-mileage">할인액 2,000원</td>
                                    <td class="coupon-period">2016-03-30 ~ 2017-12-30</td>
                                </tr>
                                <tr>
                                    <td class="coupon-num">41126240</td>
                                    <td class="coupon-name">
                                        <a href="#">신규회원가입 할인쿠폰</a>
                                    </td>
                                    <td class="apply-coupon">전상품</td>
                                    <td class="coupon-conditional">1,000원 이상</td>
                                    <td class="discount-mileage">할인액 1,000원</td>
                                    <td class="coupon-period">2016-03-30 ~ 2017-12-30</td>
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
                        <h3>주문 할인쿠폰 적용방법</h3>
                        <ul>
                            <li>주문서 쿠폰 선택에서 고객님이 보유하신 [쿠폰번호]를 선택하시면 할인금액(또는 적립금액)이 나타납니다.</li>
                            <li>정률할인(적립)의 경우, 할인율(적립률)이 나타납니다.</li>
                        </ul>
                        <h3>쿠폰 사용시 유의사항</h3>
                        <ul>
                            <li>쿠폰마다 사용 가능 금액과 사용기한이 정해져 있으며, 1개 주문서에 1개의 쿠폰만을 사용하실 수 있습니다.</li>
                            <li>쿠폰을 사용한 주문 후 반품/환불/취소의 경우 한번 사용하신 쿠폰은 다시 사용하실 수 없습니다.</li>
                            <li>쿠폰 적용 품목 및 카테고리가 제한된 경우 해당 품목 또는 카테고리에서만 쿠폰을 사용하실 수 있습니다.</li>
                            <li>할인/적립 쿠폰은 적립금할인 등을 제외한 실제 결제금액에 적용됩니다.</li>
                            <li>할인쿠폰은 주문하시는 품목별로 쪼개져 할인됩니다. (일부 행사쿠폰 제외)</li>
                            <li>주문하신 상품의 부분반품(취소)으로 취소처리 된 쿠폰은 복구되지 않습니다.</li>
                            <li>모바일 아이콘 표시 쿠폰은 모바일에서만 사용이 가능합니다.</li>
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