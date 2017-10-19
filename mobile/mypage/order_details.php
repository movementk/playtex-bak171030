<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="mypage">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="order-details">
		<div class="page-header">
		    <h2 class="title">Order Details</h2>
		    <p class="summary">
		        <b class="u-name">무브먼트케이</b> 님께서<br>
		        2017년 08월 01일에 주문하신 내역입니다.
		    </p>
		</div>
        <div class="container">
		    <section>
		        <div class="section-header">
		            <ul class="nav nav-tabs order-nav">
                        <li class="active">
                            <a href="/mobile/mypage/order_details.php">주문상세내역</a>
                        </li>
                        <li>
                            <a href="/mobile/mypage/product_review.php">상품후기등록</a>
                        </li>
                    </ul>
		        </div>
		        <div class="section-content">
		            <article class="order-info">
		                <h3>주문자 정보</h3>
		                <div class="table-wrap">
		                    <table class="table">
		                        <tbody>
		                            <tr>
		                                <th>주문번호</th>
		                                <td>12345787-546453138</td>
		                            </tr>
		                            <tr>
		                                <th>주문일자</th>
		                                <td>2017-08-01</td>
		                            </tr>
		                            <tr>
		                                <th>주문자</th>
		                                <td>무브먼트케이</td>
		                            </tr>
		                            <tr>
		                                <th>주문서 입금현황</th>
		                                <td>미입금</td>
		                            </tr>
		                        </tbody>
		                    </table>
		                </div>
		            </article>
		            <article class="delivery-info">
		                <h3>배송지 정보</h3>
		                <div class="table-wrap">
		                    <table class="table">
		                        <tbody>
		                            <tr>
		                                <th>배송번호</th>
		                                <td>S-12345787-546453138-00</td>
		                            </tr>
		                            <tr>
		                                <th>송장번호</th>
		                                <td></td>
		                            </tr>
		                            <tr>
		                                <th>수취인</th>
		                                <td>무브먼트케이</td>
		                            </tr>
		                            <tr>
		                                <th>연락처</th>
		                                <td>010-1234-5678</td>
		                            </tr>
		                            <tr>
		                                <th>주소</th>
		                                <td>서울시 서초구 양재동 120-1</td>
		                            </tr>
		                            <tr>
		                                <th>배송메세지</th>
		                                <td>부재 시 연락주세요</td>
		                            </tr>
		                        </tbody>
		                    </table>
		                </div>
		            </article>
		            <article class="product-info">
		                <h3>주문상품 정보</h3>
		                <div class="info-content">
		                    <div class="row">
		                        <div class="col-xs-5">
		                            <figure>
		                                <img src="/design/playtex/mobile/assets/images/mypage/details_info_img.gif" class="img-responsive" alt="">
		                            </figure>
		                        </div>
		                        <div class="col-xs-7">
		                            <h4 class="p-title">★57%+세컨3종증정★ [Playtex]플레이텍스 에센셜 노와이어 브라팬티 11종세트 PXI03_08 </h4>
		                        </div>
		                    </div>
		                    <div class="details">
		                        <ul>
		                            <li>
		                                <dl>
		                                    <dt>상품별주문번호</dt>
		                                    <dd>21017125754548-45826784287_(1)</dd>
		                                </dl>
		                            </li>
		                        </ul>
		                    </div>
		                </div>
		            </article>
		            <article class="payment-info">
		                <h3>결제정보</h3>
		                <div class="table-wrap">
		                    <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
		                        <tbody>
		                            <tr>
		                                <td></td>
		                                <td></td>
		                                <td></td>
		                            </tr>
		                            <tr>
		                                <td></td>
		                                <td></td>
		                                <td></td>
		                            </tr>
		                            <tr>
		                                <td></td>
		                                <td></td>
		                                <td></td>
		                            </tr>
		                            <tr>
		                                <td></td>
		                                <td></td>
		                                <td></td>
		                            </tr>
		                        </tbody>
		                    </table>
		                </div>
		            </article>
		        </div>
		    </section>
        </div>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>