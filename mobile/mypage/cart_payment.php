<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="mypage">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="cart-payment">
		<div class="page-header">
		    <h2 class="title">Cart</h2>
		</div>
        <div class="container">
		    <article>
		        <div class="article-header">
		            <ul class="step-list">
                        <li>
                            <p class="figure">
                                <img src="/design/playtex/mobile/images/mypage/step_img01.png" alt="STEP 01">
                            </p>
                            <p class="details">STEP 01</p>
                        </li>
                        <li class="active">
                            <p class="figure">
                                <img src="/design/playtex/mobile/images/mypage/step_active_img02.png" alt="STEP 02">
                            </p>
                            <p class="details">STEP 02</p>
                        </li>
                        <li>
                            <p class="figure">
                                <img src="/design/playtex/mobile/images/mypage/step_img03.png" alt="STEP 03">
                            </p>
                            <p class="details">STEP 03</p>
                        </li>
                    </ul>
		        </div>
		        <div class="article-content">
		            <div class="product-info">
		                <div class="row">
		                    <div class="col-xs-5">
		                        <figure>
		                            <img src="/design/playtex/mobile/images/mypage/details_info_img.gif" class="img-responsive" alt="">
		                        </figure>
		                    </div>
		                    <div class="col-xs-7">
		                        <div class="details">
		                            <p class="title">
		                                ★57%+세컨3종증정★ [Playtex]플레이텍스 에센셜 노와이어 브라팬티 11종세트 PXI03_08 
		                            </p>
		                            <ul>
		                                <li>
		                                    <dl>
		                                        <dt>수량</dt>
		                                        <dd>1</dd>
		                                    </dl>
		                                </li>
		                                <li>
		                                    <dl>
		                                        <dt>적립금</dt>
		                                        <dd>630</dd>
		                                    </dl>
		                                </li>
		                                <li>
		                                    <dl>
		                                        <dt>가격</dt>
		                                        <dd>71,900</dd>
		                                    </dl>
		                                </li>
		                            </ul>
		                        </div>
		                    </div>
		                </div>
		                <div class="total">
                            <p class="purchase">총 구매금액 <b>71,900</b></p>
                            <p class="total-pay">총 결제금액 <b>71,900</b>원 <small>적립금<i>980</i>원</small></p>
                        </div>
		            </div>
		            <div class="write-form">
		                <form action="#">
		                    <article class="user-info">
		                        <div class="article-header">
		                            <h3 class="article-title">주문자 정보확인</h3>
		                        </div>
		                        <div class="table-wrap">
		                            <table class="table">
		                                <tbody>
		                                    <tr>
		                                        <th>주문자 정보확인</th>
		                                        <td>무브먼트케이</td>
		                                    </tr>
		                                    <tr>
		                                        <th><label for="u-contact">연락처</label></th>
		                                        <td>
		                                            <div class="form-group">
		                                                <input type="text" id="u-contact" class="form-control">
		                                            </div>
		                                        </td>
		                                    </tr>
		                                    <tr>
		                                        <th><label for="u-mail">이메일</label></th>
		                                        <td>
		                                            <div class="form-group">
		                                                <input type="text" id="u-mail" class="form-control">
		                                            </div>
		                                        </td>
		                                    </tr>
		                                </tbody>
		                            </table>
		                        </div>
		                    </article>
		                    <article class="delivery-info">
		                        <div class="article-header">
		                            <h3 class="article-title">배송정보 입력</h3>
		                            <p class="checking">
		                                <label><input type="checkbox"> 주문고객 정보와 동일 합니다</label>
		                            </p>
		                        </div>
		                        <div class="table-wrap">
		                            <table class="table">
		                                <tbody>
		                                    <tr>
		                                        <th>받으시는 분</th>
		                                        <td>무브먼트케이</td>
		                                    </tr>
		                                    <tr>
		                                        <th><label for="d-contact-1">연락처1</label></th>
		                                        <td>
		                                            <div class="form-group">
		                                                <input type="text" id="d-contact-1" class="form-control">
		                                            </div>
		                                        </td>
		                                    </tr>
		                                    <tr>
		                                        <th><label for="d-contact-2">연락처2</label></th>
		                                        <td>
		                                            <div class="form-group">
		                                                <input type="text" id="d-contact-2" class="form-control">
		                                            </div>
		                                        </td>
		                                    </tr>
		                                    <tr>
		                                        <th class="v-align">배송지 주소</th>
		                                        <td class="u-addr">
		                                            <div class="form-group">
		                                                <label><input type="radio">자택</label>
		                                                <label><input type="radio">최근 배송지</label>
		                                                <label><input type="radio">신규배송지</label>
		                                            </div>
		                                            <div class="form-group">
                                                        <div class="zipcode">
                                                            <input type="text" id="u-zipcode" class="form-control">
                                                            <label for="u-zipcode" class="sr-only">우편번호</label>
                                                            <p class="zipcode-btn">
                                                                <a href="#" class="btn btn-xs" role="button">우편번호</a>
                                                            </p>
		                                                </div>
		                                                <input type="text" id="addr-1" class="form-control">
		                                                <input type="text" id="addr-2" class="form-control">
		                                                <label for="addr-1" class="sr-only">주소</label>
		                                                <label for="addr-2" class="sr-only">상세주소</label>
		                                            </div>
		                                        </td>
		                                    </tr>
		                                    <tr>
		                                        <th class="v-align"><label for="message">배송요청<br>메세지</label></th>
		                                        <td class="message">
		                                            <div class="form-group">
		                                                <textarea id="message" class="form-control"></textarea>
		                                            </div>
		                                        </td>
		                                    </tr>
		                                    <tr>
		                                        <th class="v-align">주문동의</th>
		                                        <td>
		                                            <label class="consent"><input type="checkbox">상기 결제정보를 확인하였으며, 구매진행에 동의합니다.</label>
		                                        </td>
		                                    </tr>
		                                </tbody>
		                            </table>
		                        </div>
		                    </article>
		                    <article class="amount-info">
		                        <div class="article-header">
		                            <h3 class="article-title">결제금액 정보</h3>
		                        </div>
		                        <div class="table-wrap">
		                            <table class="table">
		                                <tbody>
		                                    <tr>
		                                        <th>상품금액</th>
		                                        <td><b>88,800</b> 원</td>
		                                    </tr>
		                                    <tr>
		                                        <th>배송비</th>
		                                        <td>무료</td>
		                                    </tr>
		                                    <tr>
		                                        <th>할인금액</th>
		                                        <td><b>0</b> 원</td>
		                                    </tr>
		                                    <tr>
		                                        <th>추가금액</th>
		                                        <td><b>0</b> 원</td>
		                                    </tr>
		                                    <tr>
		                                        <th>결제 예정금액</th>
		                                        <td><b>88,800</b> 원</td>
		                                    </tr>
		                                    <tr>
		                                        <th><label for="u-mileage">적립금 사용</label></th>
		                                        <td class="u-mileage">
		                                            <div class="form-group">
		                                                <input type="text" id="u-mileage" class="form-control" placeholder="0"> 원
		                                            </div>
		                                            <p class="checking">
		                                                <label><input type="checkbox">전액사용</label>
		                                            </p>
		                                            <div class="use">
		                                                <p class="use-mileage">5,000</p>
		                                                원 (사용가능 적립금)
		                                            </div>
		                                        </td>
		                                    </tr>
		                                    <tr>
		                                        <th class="v-align"><label for="u-coupon">쿠폰 사용</label></th>
		                                        <td class="u-coupon">
		                                            <div class="form-group">
		                                                <input type="text" id="u-coupon" class="form-control">
		                                                <p class="coupon-btn">
		                                                    <a href="#" class="btn btn-lg" role="button">쿠폰등록</a>
		                                                </p>
		                                            </div>
		                                            <p class="note">
		                                                보유하신 쿠폰을 적용하시면 할인 또는 추가적립 혜택을 받으실 수 있습니다.<br>
                                                        결제 실패 시에는 <i>1:1문의</i> 혹은 <i>고객센터 <a href="tel:15446101">1544-6101</a></i>에 연락주시면 처리해드리겠습니다.
		                                            </p>
		                                        </td>
		                                    </tr>
		                                </tbody>
		                            </table>
		                        </div>
		                    </article>
		                    <article class="payment-info">
		                        <div class="article-header">
		                            <h3 class="article-title">결제정보</h3>
		                            <p class="checking">
		                                <label><input type="checkbox"> 선택하신 결제수단을 다음에도 적용</label>
		                            </p>
		                        </div>
		                        <div class="table-wrap">
		                            <table class="table">
		                                <tbody>
		                                    <tr>
		                                        <th class="v-align">
                                                    <p class="logo">
                                                        <img src="/design/playtex/mobile/images/mypage/kcp_logo.gif" alt="kcp logo">
                                                    </p>
		                                        </th>
		                                        <td>
		                                            고객님은 안전거래를 위해 현금으로 결제하실 때 저희 쇼핑몰에 가입한 KCP의 구매안전서비스를 이용할 수 있습니다.
		                                        </td>
		                                    </tr>
		                                    <tr>
		                                        <th class="v-align">결제방법</th>
		                                        <td class="payment-option">
		                                            <div class="form-group">
		                                                <label><input type="radio">신용카드</label>
		                                                <label><input type="radio">페이코(PAYCO)</label>
		                                                <label><input type="radio">카카오페이(KAKAOPAY)</label>
		                                                <div class="account">
		                                                    <label><input type="radio">가상계좌</label>
		                                                    <select class="form-control">
		                                                        <option>입금 계좌번호 선택</option>
		                                                    </select>
		                                                </div>
		                                                
		                                                <label><input type="radio">실시간 계좌이체</label>
		                                                <label><input type="radio">에스크로</label>
		                                            </div>
		                                        </td>
		                                    </tr>
		                                </tbody>
		                            </table>
		                        </div>
		                    </article>
		                    <article class="total-payment">
		                        <h4>총 결제금액</h4>
		                        <p class="summary">
		                            적립 예정금액과 최종 적립금액은 상이할 수 있습니다.<br>
		                            주문 완료 시 지급되는 적립금을 확인해주시기 바랍니다.
		                        </p>
		                        <p class="payment">
		                            <b>88,800</b>원 <small>적립예정 : <span>980</span>원</small>
		                        </p>
		                    </article>
		                    <div class="btn-area">
		                        <p>
		                            <a href="#" class="btn btn-gray" role="button">취소하기</a>
		                            <button type="submit" class="btn btn-black">주문하기</button>
		                        </p>
		                    </div>
		                </form>
		            </div>
		        </div>
		    </article>
        </div>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>