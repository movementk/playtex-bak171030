<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="mypage">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="cart-list">
		<div class="page-header">
		    <h2 class="title">Cart</h2>
		</div>
        <div class="container">
		    <article>
		        <div class="article-header">
		            <ul class="step-list">
                        <li class="active">
                            <p class="figure">
                                <img src="/design/playtex/mobile/images/mypage/step_active_img01.png" alt="STEP 01">
                            </p>
                            <p class="details">STEP 01</p>
                        </li>
                        <li>
                            <p class="figure">
                                <img src="/design/playtex/mobile/images/mypage/step_img02.png" alt="STEP 02">
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
		            <div class="basket-order">
		                <div class="product-info">
                            <div class="info-header">
                                <a href="#">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <figure>
                                                <img src="/design/playtex/mobile/images/mypage/details_info_img.gif" class="img-responsive" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-xs-7">
                                            <p class="title">★57%+세컨3종증정★ [Playtex]플레이텍스 에센셜 노와이어 브라팬티 11종세트 PXI03_08 </p>
                                        </div>
                                    </div>
                                </a>
		                    </div>
		                    <div class="details">
		                        <ul>
		                            <li>
		                                <dl>
		                                    <dt>수량</dt>
		                                    <dd>
		                                        <div class="form-group">
		                                            <input type="text" id="p-count" class="form-control">
		                                            <label for="p-count" class="sr-only">수량</label>
		                                        </div>
		                                        <p class="count-modify">
		                                            <a href="#" class="btn btn-xs" role="button">수정</a>
		                                        </p>
		                                    </dd>
		                                </dl>
		                            </li>
		                            <li>
		                                <dl>
		                                    <dt>가격</dt>
		                                    <dd>71,900</dd>
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
		                                    <dt>배송비</dt>
		                                    <dd>[기본배송] 무료</dd>
		                                </dl>
		                            </li>
		                        </ul>
		                        <div class="details-btn">
		                            <a href="#" class="btn btn-white" role="button">삭제하기</a>
		                            <a href="#" class="btn btn-beige" role="button">관심상품</a>
		                        </div>
		                    </div>
		                    <div class="total">
		                        <p class="purchase">총 구매금액 <b>71,900</b></p>
		                        <p class="total-pay">총 결제금액 <b>71,900</b>원 <small>적립금<i>980</i>원</small></p>
		                    </div>
		                </div>
		                <div class="btn-area">
		                    <p>
		                        <a href="#" class="btn btn-lg" role="button">주문하기</a>
		                    </p>
		                    <p>
		                        <a href="#" class="btn btn-sm" role="button">장바구니 비우기</a>
		                        <a href="#" class="btn btn-sm" role="button">계속 쇼핑하기</a>
		                    </p>
		                </div>
		            </div>
		            <div class="interest-product">
		                <h3>관심상품</h3>
		                <div class="table-wrap">
		                    <table class="table">
		                        <thead>
		                            <tr>
		                                <th>
                                            <p class="checking">
		                                        <input type="checkbox">
		                                    </p>
		                                </th>
		                                <th>상품명</th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                            <tr>
		                                <td>
		                                    <p class="checking">
		                                        <input type="checkbox">
		                                    </p>
		                                </td>
		                                <td>
                                            <a href="#">
                                                <figure>
                                                    <img src="/design/playtex/mobile/images/mypage/details_info_img.gif" alt="">
                                                </figure>
                                                <p class="title">★57%+세컨3종증정★[Playtex]플레이 텍스 에센셜 노와이어 브라팬티 11종세트 PXI03_08 </p>
                                            </a>
		                                    <div class="details">
		                                        <ul>
		                                            <li>
		                                                <dl>
		                                                    <dt>수량</dt>
		                                                    <dd>1</dd>
		                                                </dl>
		                                            </li>
		                                            <li>
		                                                <dl>
		                                                    <dt>재고</dt>
		                                                    <dd>있음</dd>
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
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>