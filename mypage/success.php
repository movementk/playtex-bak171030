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
    <main id="content" class="cart success">
        <div class="container">
            <article>
                <div class="article-header">
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2">
                            <ul class="step-list">
                                <li>
                                    <div>
                                        <p class="figure">
                                            <img src="/assets/images/mypage/step_img01.png" alt="STEP 01">
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
                                <li class="active">
                                    <div>
                                        <p class="figure">
                                            <img src="/assets/images/mypage/step_active_img03.png" alt="STEP 03">
                                        </p>
                                        <p class="details">STEP 03</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="article-content">
                    <div class="selection-product">
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>상품명</th>
                                        <th>수량</th>
                                        <th>적립금</th>
                                        <th>가격</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="item-details">
                                            <a href="#">
                                                <p class="item">
                                                    <img src="/assets/images/mypage/wisi_list_img01.jpg" alt="">
                                                </p>
                                                <p class="item-title">★80%할인★[Playtex]플레이텍스 에센셜 노와이어 30종 택1_PXI_SELECT10</p>
                                            </a>
                                        </td>
                                        <td class="product-quantity">1</td>
                                        <td class="mileage">630</td>
                                        <td class="payment">71,900</td>
                                    </tr>
                                    <tr>
                                        <td class="item-details">
                                            <a href="#">
                                                <p class="item">
                                                    <img src="/assets/images/mypage/wisi_list_img02.jpg" alt="">
                                                </p>
                                                <p class="item-title">★57%+세컨3종증정★[Playtex]플레이텍스 에센셜 노와이어 브라팬티 11종세트</p>
                                            </a>
                                        </td>
                                        <td class="product-quantity">1</td>
                                        <td class="mileage">350</td>
                                        <td class="payment">16,900</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="total">
                                <p class="amount">결제금액 <span>88,800</span>원 + 배송료 <span>0</span>원</p>
                                <p class="total-payment"><b>88,800</b>원 <small>(배송 후 <i>980</i>원 적립)</small></p>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-lg btn-black" role="button">주문 배송내역</a>
                                </p>
                            </div>
                        </div>
                    </div>
                           
                    <div class="order-information">
                        <article class="user-info">
                            <h3>주문자 정보확인</h3>
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>주문자</th>
                                            <td>무브먼트케이</td>
                                        </tr>
                                        <tr>
                                            <th>연락처</th>
                                            <td>010-123-5678</td>
                                        </tr>
                                        <tr>
                                            <th>이메일</th>
                                            <td>mk_manager@mkdesign.co.kr</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </article>

                        <article class="delivery-info">
                            <h3>배송정보 입력</h3>
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>받으시는 분</th>
                                            <td>무브먼트케이</td>
                                        </tr>
                                        <tr>
                                            <th>연락처1</th>
                                            <td>010-1234-5678</td>
                                        </tr>
                                        <tr>
                                            <th>연락처2</th>
                                            <td>010-1234-5678</td>
                                        </tr>
                                        <tr>
                                            <th>배송지 주소</th>
                                            <td>서울시 서초구 양재동 120-1</td>
                                        </tr>
                                        <tr>
                                            <th>배송요청메세지</th>
                                            <td>부재시 연락 부탁드립니다.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </article>

                        <article class="payment-info">
                            <h3>결제 정보</h3>
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>결제정보</th>
                                            <td>
                                                무통장 입금<br>
                                                <b>우리은행(가상) 12345-4567815-8956 무브먼트케이 7일 이내</b> (입금확인 후 배송이 시작됩니다.)
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </article>
                        
                        <div class="success-txt">
                            <h4>무브먼트케이 님의 주문의 완료되었습니다.</h4>
                            <p>
                                귀하의 주문확인 번호는 <b>201712345678901-45825886482</b> 입니다. 귀하의 제품 구입에 따른 적립금 590원은 배송과 함께 바로 적립됩니다.<br>
                                입금방법이 무통장입금의 경우 계좌번호를 메모하세요. 입금 확인 후 상품을 준비하여 배송해 드리겠습니다.
                            </p>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-lg btn-black" role="button">주문확인</a>
                                    <a href="#" class="btn btn-lg btn-gray" role="button">프린트하기</a>
                                </p>
                            </div>
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