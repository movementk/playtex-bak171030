<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="mypage">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="inquiry-write">
		<div class="page-header">
		    <h2 class="title">Inquiry</h2>
		</div>
        <nav class="mypage-nav">
            <div class="container">
                <ul>
                    <li class="space"><a href="/mobile/mypage/order_list.php">주문내역/<br>배송조회</a></li>
                    <li><a href="/mobile/mypage/mileage.php">적립금</a></li>
                    <li><a href="/mobile/mypage/coupon.php">할인쿠폰</a></li>
                    <li><a href="/mobile/mypage/wish_list.php">위시리스트</a></li>
                    <li><a href="/mobile/mypage/viewed_items.php">최근 본 상품</a></li>
                    <li><a href="#">Q&amp;A</a></li>
                    <li class="active"><a href="/mobile/mypage/inquiry_list.php">1:1 문의</a></li>
                    <li><a href="/mobile/mypage/profile_modify.php">회원정보 수정</a></li>
                    <li><a href="/mobile/mypage/cart_list.php">장바구니</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <article>
                <form action="#">
                    <div class="table-wrap">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th><label for="u-name">이름</label></th>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="u-name" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="u-mail">이메일</label></th>
                                    <td>
                                        <div class="form-group">
                                            <input type="email" id="u-mail" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="u-phone">핸드폰</label></th>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="u-phone" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>문의유형</th>
                                    <td>
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
                                            <input type="text" id="u-phone" class="form-control">
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

                    </div>
                </form>
            </article>
        </div>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>