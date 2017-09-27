<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>

<!-- 대메뉴 Class -->
<body class="mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- 서브페이지 배경 -->
    <div class="page-header">
        <h2>Wish List</h2>
    </div>
    <!-- 페이지 Class -->
    <main id="content" class="wish-list">
        <div class="container">
            <article>
                <div class="article-header">
                    <nav class="mypage-tab">
                        <ul>
                            <li><a href="/mypage/order_list.php">주문내역/배송조회</a></li>
                            <li><a href="#">취소/교환/환불 조회</a></li>
                            <li><a href="/mypage/mileage.php">적립금</a></li>
                            <li><a href="/mypage/coupon.php">할인쿠폰</a></li>
                            <li class="active"><a href="/mypage/wish_list.php">위시리스트</a></li>
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
                                    <th>
                                        <div class="form-group">
                                            <input type="checkbox">
                                        </div>
                                    </th>
                                    <th>상품명</th>
                                    <th>수량</th>
                                    <th>재고</th>
                                    <th>적립금</th>
                                    <th>가격</th>
                                    <th>장바구니</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="item-details">
                                            <input type="checkbox">
                                        </div>
                                    </td>
                                    <td class="item-details">
                                        <a href="#">
                                            <p class="item">
                                                <img src="/assets/images/mypage/wisi_list_img01.jpg" alt="">
                                            </p>
                                            <p class="item-title">★80%할인★[Playtex]플레이텍스 에센셜 노와이어 30종 택1_PXI_SELECT10</p>
                                        </a>
                                    </td>
                                    <td class="item-count">
                                        <p class="count">1</p>
                                    </td>
                                    <td>있음</td>
                                    <td class="mileage">630</td>
                                    <td class="payment">71,900</td>
                                    <td class="basket">
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-xs btn-gray" role="button">장바구니 담기</a>
                                                <a href="#" class="btn btn-xs btn-beige" role="button">삭제하기</a>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="item-details">
                                            <input type="checkbox">
                                        </div>
                                    </td>
                                    <td class="item-details">
                                        <a href="#">
                                            <p class="item">
                                                <img src="/assets/images/mypage/wisi_list_img02.jpg" alt="">
                                            </p>
                                            <p class="item-title">★57%+세컨3종증정★[Playtex]플레이텍스 에센셜 노와이어 브라팬티 11종세트</p>
                                        </a>
                                    </td>
                                    <td class="item-count">
                                        <p class="count">1</p>
                                    </td>
                                    <td>있음</td>
                                    <td class="mileage">350</td>
                                    <td class="payment">16,900</td>
                                    <td class="basket">
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-xs btn-gray" role="button">장바구니 담기</a>
                                                <a href="#" class="btn btn-xs btn-beige" role="button">삭제하기</a>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="item-details">
                                            <input type="checkbox">
                                        </div>
                                    </td>
                                    <td class="item-details">
                                        <a href="#">
                                            <p class="item">
                                                <img src="/assets/images/mypage/wisi_list_img03.jpg" alt="">
                                            </p>
                                            <p class="item-title">[Playtex] 플레이텍스 2종세트 12스타일택1 PX_SELECT464815</p>
                                        </a>
                                    </td>
                                    <td class="item-count">
                                        <p class="count">1</p>
                                    </td>
                                    <td>있음</td>
                                    <td class="mileage">300</td>
                                    <td class="payment">15,900</td>
                                    <td class="basket">
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-xs btn-gray" role="button">장바구니 담기</a>
                                                <a href="#" class="btn btn-xs btn-beige" role="button">삭제하기</a>
                                            </p>
                                        </div>
                                    </td>
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
                </div>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>