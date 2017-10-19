<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="mypage">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="product-review">
		<div class="page-header">
		    <h2 class="title">Review</h2>
		    <p class="summary">
		        <b class="u-name">무브먼트케이</b> 님께서<br>
		        2017년 08월 01일에 주문하신 내역입니다.
		    </p>
		</div>
        <div class="container">
		    <section>
		        <div class="section-header">
		            <ul class="nav nav-tabs order-nav">
                        <li>
                            <a href="/mobile/mypage/order_details.php">주문상세내역</a>
                        </li>
                        <li class="active">
                            <a href="/mobile/mypage/product_review.php">상품후기등록</a>
                        </li>
                    </ul>
		        </div>
		        <div class="section-content">
		            <article class="order-info">
                        <div class="row">
                            <div class="col-xs-5">
                                <figure>
                                    <img src="/design/playtex/mobile/images/mypage/details_info_img.gif" class="img-responsive" alt="">
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
                                        <dt>수량</dt>
                                        <dd>
                                            <div class="form-group">
                                                <input type="text" id="p-count" class="form-control">
                                                <label for="p-count" class="sr-only">수량</label>
                                            </div>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>가격</dt>
                                        <dd>71,900</dd>
                                    </dl>
                                </li>
                            </ul>
                            <p class="review-btn">
                                <a href="#" class="btn btn-sm" role="button">후기작성</a>
                            </p>
                        </div>
		            </article>
		            <article class="review-write">
		                <form action="#">
		                    <h3>상품후기 등록</h3>
		                    <div class="table-wrap">
		                        <table class="table">
		                            <tbody>
		                                <tr>
		                                    <th>작성자</th>
		                                    <td>무브먼트케이</td>
		                                </tr>
		                                <tr>
		                                    <th><label for="u-pw">비밀번호</label></th>
		                                    <td>
		                                        <div class="form-group">
		                                            <input type="password" id="u-pw" class="form-control">
		                                        </div>
		                                    </td>
		                                </tr>
		                                <tr>
		                                    <th><label for="u-email">이메일</label></th>
		                                    <td>
		                                        <div class="form-group">
		                                            <input type="email" id="u-email" class="form-control">
		                                        </div>
		                                    </td>
		                                </tr>
		                                <tr>
		                                    <th class="v-align">평점</th>
		                                    <td class="grade">
		                                        <div class="form-group">
		                                            <label>
                                                        <input type="radio">
		                                                <i class="icon-star"></i>
		                                                <i class="icon-star"></i>
		                                                <i class="icon-star"></i>
		                                                <i class="icon-star"></i>
		                                                <i class="icon-star"></i>
		                                            </label>
		                                            <label>
                                                        <input type="radio">
		                                                <i class="icon-star"></i>
		                                                <i class="icon-star"></i>
		                                                <i class="icon-star"></i>
		                                                <i class="icon-star"></i>
		                                                <i class="icon-star-empty"></i>
		                                            </label>
		                                            <label>
                                                        <input type="radio">
		                                                <i class="icon-star"></i>
		                                                <i class="icon-star"></i>
		                                                <i class="icon-star"></i>
		                                                <i class="icon-star-empty"></i>
		                                                <i class="icon-star-empty"></i>
		                                            </label>
		                                            <label>
                                                        <input type="radio">
		                                                <i class="icon-star"></i>
		                                                <i class="icon-star"></i>
		                                                <i class="icon-star-empty"></i>
		                                                <i class="icon-star-empty"></i>
		                                                <i class="icon-star-empty"></i>
		                                            </label>
		                                            <label>
                                                        <input type="radio">
		                                                <i class="icon-star"></i>
		                                                <i class="icon-star-empty"></i>
		                                                <i class="icon-star-empty"></i>
		                                                <i class="icon-star-empty"></i>
		                                                <i class="icon-star-empty"></i>
		                                            </label>
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
		                                    <th class="v-align"><label for="u-content">내용</label></th>
		                                    <td>
		                                        <div class="form-group">
		                                            <textarea id="u-content" class="form-control"></textarea>
		                                        </div>
		                                    </td>
		                                </tr>
		                                <tr>
		                                    <th>첨부파일</th>
		                                    <td class="file">
		                                        <div class="form-group">
		                                            <input type="file" id="attach" class="form-control">
		                                            <label for="attach">찾아보기</label>
		                                        </div>
		                                    </td>
		                                </tr>
		                            </tbody>
		                        </table>
		                    </div>
		                    <div class="btn-area">
		                        <p>
		                            <a href="#" class="btn btn-gray" role="button">취소</a>
		                            <button type="submit" class="btn btn-black">확인</button>
		                        </p>
		                    </div>
		                </form>
		            </article>
		        </div>
		    </section>
        </div>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>