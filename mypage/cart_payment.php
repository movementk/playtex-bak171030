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
    <main id="content" class="cart cart-payment">
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
                                <li class="active">
                                    <div>
                                        <p class="figure">
                                            <img src="/assets/images/mypage/step_active_img02.png" alt="STEP 02">
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
                                <p class="amount">총 구매금액 <span>88,800</span>원</p>
                                <p class="total-payment">총 결제금액 <b>88,800</b>원 <small>(적립금 <i>980</i>원)</small></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="order-form">
                        <form action="#">
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
                                                <td class="phone">
                                                    <div class="form-group">
                                                        <input type="text" id="u-phone-1" class="form-control"> -
                                                        <input type="text" id="u-phone-2" class="form-control"> -
                                                        <input type="text" id="u-phone-3" class="form-control">
                                                        <label for="u-phone-1" class="sr-only">휴대폰번호</label>
                                                        <label for="u-phone-2" class="sr-only">휴대폰번호</label>
                                                        <label for="u-phone-3" class="sr-only">휴대폰번호</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="usr-mail">이메일</label></th>
                                                <td class="e-mail">
                                                    <div class="form-group">
                                                        <input type="email" id="usr-mail" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </article>
                            
                            <article class="delivery-info">
                                <h3>배송정보 입력</h3>
                                <label><input type="checkbox"> 주문고객 정보와 동일합니다.</label>
                                <div class="table-wrap">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>받으시는 분</th>
                                                <td>무브먼트케이</td>
                                            </tr>
                                            <tr>
                                                <th>연락처1</th>
                                                <td class="phone">
                                                    <div class="form-group">
                                                        <input type="text" id="u-tel-1" class="form-control"> -
                                                        <input type="text" id="u-tel-2" class="form-control"> -
                                                        <input type="text" id="u-tel-3" class="form-control">
                                                        <label for="u-tel-1" class="sr-only">연락처</label>
                                                        <label for="u-tel-2" class="sr-only">연락처</label>
                                                        <label for="u-tel-3" class="sr-only">연락처</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>연락처2</th>
                                                <td class="phone">
                                                    <div class="form-group">
                                                        <input type="text" id="u-tel-4" class="form-control"> -
                                                        <input type="text" id="u-tel-5" class="form-control"> -
                                                        <input type="text" id="u-tel-6" class="form-control">
                                                        <label for="u-tel-4" class="sr-only">연락처</label>
                                                        <label for="u-tel-5" class="sr-only">연락처</label>
                                                        <label for="u-tel-6" class="sr-only">연락처</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="v-align"><label for="u-addr-1">배송지 주소</label></th>
                                                <td class="u-addr">
                                                    <div class="form-group">
                                                        <label><input type="radio">자택</label>
                                                        <label><input type="radio">최근 배송지</label>
                                                        <label><input type="radio">신규 배송지</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" id="u-addr-1" class="form-control">
                                                        <p class="addr-btn">
                                                            <a href="#" class="btn btn-default">우편번호</a>
                                                        </p>
                                                        <input type="text" id="u-addr-2" class="form-control">
                                                        <input type="text" id="u-addr-3" class="form-control">
                                                        <label for="u-addr-3" class="sr-only">지역</label>
                                                        <label for="u-addr-3" class="sr-only">상세주소</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="v-align"><label for="delivery-note">배송요청메세지</label></th>
                                                <td class="content">
                                                    <div class="form-group">
                                                        <textarea id="delivery-note" class="form-control"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>주문동의</th>
                                                <td class="consent">
                                                    <div class="form-group">
                                                        <label><input type="checkbox"> 상기 결제정보를 확인하였으며, 구매진행에 동의합니다.</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </article>
                            
                            <article class="amount-info">
                                <h3>결제금액 정보</h3>
                                <div class="table-wrap">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>상품금액</th>
                                                <td><i class="t-maven">88,800</i> 원</td>
                                            </tr>
                                            <tr>
                                                <th>배송비</th>
                                                <td>무료</td>
                                            </tr>
                                            <tr>
                                                <th>할인금액</th>
                                                <td><i class="t-maven">0</i> 원</td>
                                            </tr>
                                            <tr>
                                                <th>추가금액</th>
                                                <td><i class="t-maven">0</i> 원</td>
                                            </tr>
                                            <tr>
                                                <th>결제 예정금액</th>
                                                <td><i class="t-maven">88,800</i> 원</td>
                                            </tr>
                                            <tr>
                                                <th>적립금 사용</th>
                                                <td class="mileage">
                                                    <div class="form-group">
                                                        <label><input type="text" class="form-control" placeholder="0"> 원</label>
                                                        <label class="using"><input type="checkbox"> 전액사용</label>
                                                    </div>
                                                    <div class="possession-mileage">
                                                        <p>5,000</p> 원 (사용가능 적립금)
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="v-align"><label for="coupon">쿠폰 사용</label></th>
                                                <td class="coupon">
                                                    <div class="form-group">
                                                        <input type="text" id="coupon" class="form-control">
                                                        <p class="coupon-btn">
                                                            <a href="#" class="btn btn-default" role="button" data-toggle="modal" data-target="#coupon-Modal">쿠폰등록</a>
                                                        </p>
                                                    </div>
                                                    <p class="note">
                                                        보유하신 쿠폰을 적용하시면 할인 또는 추가적립 혜택을 받으실 수 있습니다.<br>
                                                        결제 실패 시에는 <b>1:1문의</b> 혹은 <b>고객센터 1544-6101</b>에 연락주시면 처리해드리겠습니다. 
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </article>
                            
                            <article class="payment-info">
                                <h3>결제 정보</h3>
                                <label><input type="checkbox"> 선택하신 결제수단을 다음에도 적용</label>
                                <div class="table-wrap">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <p class="kcp-logo">
                                                        <img src="/assets/images/mypage/kcp_logo_img.gif" alt="">
                                                    </p>
                                                </th>
                                                <td>고객님은 안전거래를 위해 현금으로결제하실 때 저희 쇼핑몰에 가입한 KCP의 구매안전서비스를 이용할 수 있습니다.</td>
                                            </tr>
                                            <tr>
                                                <th class="v-align">결제방법</th>
                                                <td class="payment-option">
                                                    <div class="form-group">
                                                        <label><input type="radio"> 신용카드</label>
                                                        <label><input type="radio"> 페이코(PAYCO) </label>
                                                        <label><input type="radio"> 카카오페이(KAKAOPAY)</label>
                                                        <div class="account">
                                                            <label><input type="radio"> 가상계좌</label>
                                                            <select class="form-control">
                                                                <option>입금 계좌번호 선택 (반드시 주문자 성함으로 입금)</option>
                                                            </select>
                                                        </div>
                                                        <label><input type="radio"> 실시간 계좌이체</label>
                                                        <label><input type="radio"> 에스크로</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </article>
                            
                            <div class="final-payment">
                                <p>
                                    <b>총 결제금액</b>
                                    적립 예정금액과 최종 적립금액은 상이할 수 있습니다. 주문 완료 시 지급되는 적립금을 확인해주시기 바랍니다.
                                </p>
                                <p>
                                    <strong>88,800</strong>원 <small>(적립예정 : <b>980</b>원)</small>
                                </p>
                            </div>
                            
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-lg btn-gray" role="button">취소하기</a>
                                    <button type="submit" class="btn btn-lg btn-black">주문하기</button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </article>
            
            <!-- 쿠폰적용 Modal popup -->
            <div class="modal fade" id="coupon-Modal" tabindex="-1" role="dialog" aria-labelledby="coupon-ModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="coupon-ModalLabel">Coupon</h4>
                            <p>할인율(%) 쿠폰은 해당되는 상품별로 할인내역이 표시됩니다.</p>
                        </div>
                        <div class="modal-body">
                            <article class="possession-coupon">
                                <h3>보유 쿠폰 내역</h3>
                                <div class="table-wrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>쿠폰번호</th>
                                                <th>쿠폰이름</th>
                                                <th>쿠폰<br>전용품목</th>
                                                <th>사용<br>가능금액</th>
                                                <th>할인액<br>(률)</th>
                                                <th>적립액<br>(률)</th>
                                                <th>사용기간</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="coupon-num">41126240</td>
                                                <td class="title">신규회원<br>가입 할인쿠폰</td>
                                                <td>전상품</td>
                                                <td>50,000<br>원 이상</td>
                                                <td>10,000<br>원</td>
                                                <td></td>
                                                <td class="using-date">
                                                    2016-03-30<br> 
                                                    ~ 2017-12-30
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="coupon-num">41126240</td>
                                                <td class="title">신규회원<br>가입 할인쿠폰</td>
                                                <td>전상품</td>
                                                <td>100,000<br>원 이상</td>
                                                <td>20,000<br>원</td>
                                                <td></td>
                                                <td class="using-date">
                                                    2016-03-30<br> 
                                                    ~ 2017-12-30
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="coupon-num">41126240</td>
                                                <td class="title">신규회원<br>가입 할인쿠폰</td>
                                                <td>전상품</td>
                                                <td>10,000<br>원 이상</td>
                                                <td>1,000<br>원</td>
                                                <td></td>
                                                <td class="using-date">
                                                    2016-03-30<br> 
                                                    ~ 2017-12-30
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </article>
                            <article class="using-coupon">
                                <h3>사용 쿠폰 선택</h3>
                                <div class="table-wrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>상품명</th>
                                                <th>가격</th>
                                                <th>쿠폰<br>선택</th>
                                                <th>할인액<br>(률)</th>
                                                <th>적립액<br>(률)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="title">
                                                    ★57%+세컨3종증정★[Playtex]플레이
                                                    텍스 에센셜 노와이어 브라팬티 11종세트 PXI03_08 
                                                </td>
                                                <td class="payment">35,900</td>
                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>쿠폰선택</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="title">
                                                    ★57%+세컨3종증정★[Playtex]플레이
                                                    텍스 에센셜 노와이어 브라팬티 11종세트 PXI03_08 
                                                </td>
                                                <td class="payment">35,900</td>
                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>쿠폰선택</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p class="total-payment">총 구매금액 <strong>123,400</strong>원</p>
                            </article>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-sm btn-gray" role="button">취소</a>
                                    <a href="#" class="btn btn-sm btn-black" role="button">확인</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>