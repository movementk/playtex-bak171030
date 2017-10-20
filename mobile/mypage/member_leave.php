<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="mypage">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="member-leave">
		<div class="page-header">
		    <h2 class="title">My Profile</h2>
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
                    <li><a href="/mobile/mypage/inquiry_list.php">1:1 문의</a></li>
                    <li class="active"><a href="/mobile/mypage/pw_confirm.php">회원정보 수정</a></li>
                    <li><a href="/mobile/mypage/cart_list.php">장바구니</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
		    <article class="leave-info">
		        <div class="article-header">
		            <h3>회원탈퇴 안내</h3>
		        </div>
		        <div class="article-content">
		            <p class="summary">
		                고객님께서 회원 탈퇴를 원하신다니 저희 쇼핑몰의 서비스가 많이 부족하고 미흡했나 봅니다. <br>
		                불편하셨던 점이나 불만사항을 알려주시면 적극 반영해서 고객님의 불편함을 해결해 드리도록 노력하겠습니다.<br>아울러 회원 탈퇴시의 아래 사항을 숙지하시기 바랍니다.
		            </p>
		            <ol>
		                <li>
		                    회원 탈퇴 시 고객님의 정보는 상품 반품 및 A/S를 위해 전자상거래 등에서의 소비자 보호에 관한 법률에 의거한 고객정보 보호 정책에 따라 관리 됩니다.
                        </li>
		                <li>
		                    탈퇴 시 고객님께서 보유하셨던 적립금은 삭제되며 30일 동안 사이트 재가입이 불가능합니다.
		                </li>
		            </ol>
		            <p class="attention">
		                간혹 비밀번호가 맞지 않는다고 나오시는 고객님 께서는 1:1 문의에 남겨주시면 고객센터에서 신속히 처리하여 드리겠습니다.
		            </p>
		        </div>
		    </article>
            <article class="leave-write">
                <h3>회원 탈퇴하기</h3>
                <form action="#">
                    <div class="table-wrap">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>회원 아이디</th>
                                    <td>movementk</td>
                                </tr>
                                <tr>
                                    <th class="v-align"><label for="reason">탈퇴사유</label></th>
                                    <td>
                                        <div class="form-group">
                                            <textarea id="reason" class="form-control"></textarea>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-gray" role="button">취소</a>
                            <button type="submit" class="btn btn-black">회원탈퇴</button>
                        </p>
                    </div>
                </form>
            </article>
        </div>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>