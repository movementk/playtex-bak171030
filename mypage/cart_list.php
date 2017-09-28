<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>

<!-- 대메뉴 Class -->
<body class="mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- 서브페이지 배경 -->
    <div class="page-header">
        <h2>Cart</h2>
    </div>
    <!-- 페이지 Class -->
    <main id="content" class="cart cart-list">
        <div class="container">
            <article>
                <div class="article-header">
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2">
                            <ul class="step-list">
                                <li class="active">
                                    <div>
                                        <p class="figure">
                                            <img src="/assets/images/mypage/step_active_img01.png" alt="STEP 01">
                                        </p>
                                        <p class="details">STEP 01</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p class="figure">
                                            <img src="/assets/images/mypage/step_img02.png" alt="STEP 02">
                                        </p>
                                        <p class="details">STEP 02</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p class="figure">
                                            <img src="/assets/images/mypage/step_img03.png" alt="STEP 03">
                                        </p>
                                        <p class="details">STEP 03</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="article-content">
                    <div class="save-cart">
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
                                        <th>적립금</th>
                                        <th>가격</th>
                                        <th>배송비</th>
                                        <th>삭제</th>
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
                                        <td class="product-count">
                                            <div class="form-group">
                                                <input type="text" class="form-control">
                                                <div class="count-btn">
                                                    <button type="button" class="btn btn-up">
                                                        <i class="icon-up-dir">
                                                            <span class="sr-only">수량 추가</span>
                                                        </i>
                                                    </button>
                                                    <button type="button" class="btn btn-down">
                                                        <i class="icon-down-dir">
                                                            <span class="sr-only">수량 빼기</span>
                                                        </i>
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="modify-btn">
                                                <a href="#" class="btn btn-default" role="button">수정</a>
                                            </p>
                                        </td>
                                        <td class="mileage">630</td>
                                        <td class="payment">71,900</td>
                                        <td>
                                            [기본배송]<br>
                                            무료
                                        </td>
                                        <td class="delete-selection">
                                            <div class="delete-btn">
                                                <a href="#" class="btn btn-xs btn-gray btn-beige" role="button">관심상품</a>
                                                <a href="#" class="btn btn-xs btn-white" role="button">삭제하기</a>
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
                                        <td class="product-count">
                                            <div class="form-group">
                                                <input type="text" class="form-control">
                                                <div class="count-btn">
                                                    <button type="button" class="btn btn-up">
                                                        <i class="icon-up-dir">
                                                            <span class="sr-only">수량 추가</span>
                                                        </i>
                                                    </button>
                                                    <button type="button" class="btn btn-down">
                                                        <i class="icon-down-dir">
                                                            <span class="sr-only">수량 빼기</span>
                                                        </i>
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="modify-btn">
                                                <a href="#" class="btn btn-default" role="button">수정</a>
                                            </p>
                                        </td>
                                        <td class="mileage">350</td>
                                        <td class="payment">16,900</td>
                                        <td>
                                            [기본배송]<br>
                                            무료
                                        </td>
                                        <td class="delete-selection">
                                            <div class="delete-btn">
                                                <a href="#" class="btn btn-xs btn-gray btn-beige" role="button">관심상품</a>
                                                <a href="#" class="btn btn-xs btn-white" role="button">삭제하기</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="total">
                                <p class="amount">총 구매금액 <span>88,800</span>원</p>
                                <p class="total-payment">총 결제금액 <b>88,800</b>원 <small>(적립금 <i>980</i>원)</small></p>
                            </div>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-lg btn-gray" role="button">장바구니 비우기</a>
                                <a href="#" class="btn btn-lg btn-gray" role="button">계속 쇼핑하기</a>
                                <a href="/mypage/cart_payment.php" class="btn btn-lg btn-black" role="button">주문하기</a>
                            </p>
                        </div>
                    </div>
                    <div class="interest-product">
                        <div class="table-wrap">
                            <h3>관심상품</h3>
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
                    </div>
                </div>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>