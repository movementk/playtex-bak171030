<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>

<!-- 대메뉴 Class -->
<body class="mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- 서브페이지 배경 -->
    <div class="page-header">
        <h2>Inquiry</h2>
    </div>
    <!-- 페이지 Class -->
    <main id="content" class="inquiry-list">
        <div class="container">
            <article>
                <div class="article-header">
                    <nav class="mypage-tab">
                        <ul>
                            <li><a href="/mypage/order_list.php">주문내역/배송조회</a></li>
                            <li><a href="#">취소/교환/환불 조회</a></li>
                            <li><a href="/mypage/mileage.php">적립금</a></li>
                            <li><a href="/mypage/coupon.php">할인쿠폰</a></li>
                            <li><a href="/mypage/wish_list.php">위시리스트</a></li>
                            <li><a href="/mypage/viewed_items.php">최근 본 상품</a></li>
                            <li><a href="#">Q&amp;A</a></li>
                            <li class="active"><a href="/mypage/inquiry_list.php">1:1문의</a></li>
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
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>작성일</th>
                                    <th>답변여부</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="subject">
                                        <a href="/mypage/inquiry_view.php">[상품문의] 이 상품 구성이 어떻게 되나요?</a>
                                    </td>
                                    <td class="date">2017-08-01</td>
                                    <td>답변완료</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="subject">
                                        <a href="/mypage/inquiry_view.php">[배송문의] 언제 배송 받을까요 ㅠㅠ</a>
                                    </td>
                                    <td class="date">2017-08-01</td>
                                    <td>답변대기</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="subject">
                                        <a href="/mypage/inquiry_view.php">[상품문의] 그럼 이렇게 주문하면 괜찮을까요?</a>
                                    </td>
                                    <td class="date">2017-08-01</td>
                                    <td class="reply-success">답변완료</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="subject">
                                        <a href="/mypage/inquiry_view.php">[상품문의] 제품 라인이...</a>
                                    </td>
                                    <td class="date">2017-08-01</td>
                                    <td class="reply-success">답변완료</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="subject">
                                        <a href="/mypage/inquiry_view.php">[매장문의] 홍대 근처에 오프라인 매장</a>
                                    </td>
                                    <td class="date">2017-08-01</td>
                                    <td class="reply-success">답변완료</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="subject">
                                        <a href="/mypage/inquiry_view.php">[배송문의] 몇 일정도 걸릴까요? </a>
                                    </td>
                                    <td class="date">2017-08-01</td>
                                    <td class="reply-success">답변완료</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="/mypage/inquiry_write.php" class="btn btn-sm btn-black" role="button">글쓰기</a>
                        </p>
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
                </div>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>