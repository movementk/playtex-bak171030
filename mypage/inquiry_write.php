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
    <main id="content" class="inquiry-write">
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
                    <form action="#">
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>이름</th>
                                        <td>무브먼트케이</td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-email">이메일</label></th>
                                        <td class="e-mail">
                                            <div class="form-group">
                                                <input type="email" id="u-email" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-phone">핸드폰</label></th>
                                        <td class="phone">
                                            <div class="form-group">
                                                <input type="text" id="u-phone" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>문의유형</th>
                                        <td class="inquiry-type">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>선택</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="subject">제목</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="subject" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="content"><label for="u-content">내용</label></th>
                                        <td class="content">
                                            <div class="form-group">
                                                <textarea id="u-content" class="form-control"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>첨부파일</th>
                                        <td class="attach">
                                            <div class="form-group">
                                                <input type="text" id="attach" class="form-control">
                                                <label for="attach">찾아보기</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-sm btn-gray" role="button">취소</a>
                                <button type="submit" class="btn btn-sm btn-black">등록하기</button>
                            </p>
                        </div>
                    </form>
                </div>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>