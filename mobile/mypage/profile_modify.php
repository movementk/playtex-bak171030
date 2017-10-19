<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="mypage">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="profile-modify">
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
		    <article class="profile-write">
		        <form action="#">
		            <div class="table-wrap">
		                <table class="table">
		                    <tbody>
		                        <tr>
		                            <th>이름</th>
		                            <td>무브먼트케이</td>
		                        </tr>
		                        <tr>
		                            <th>아이디</th>
		                            <td>movementk</td>
		                        </tr>
		                        <tr>
		                            <th class="v-align"><label for="u-pw">비밀번호</label></th>
		                            <td>
		                                <div class="form-group">
		                                    <input type="password" id="u-pw" class="form-control">
		                                </div>
		                                <p class="note">
		                                    영문 대소문자/숫자/특수문자를 혼용 하여 2종류 10~16자 또는 3종류 8~16자
		                                </p>
		                            </td>
		                        </tr>
		                        <tr>
		                            <th><label for="pw-confirm">비밀번호<br>확인</label></th>
		                            <td>
		                                <div class="form-group">
		                                    <input type="password" id="pw-confirm" class="form-control">
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
		                            <th>생년월일</th>
		                            <td class="birthday">
		                                <div class="form-group">
		                                    <select class="form-control">
		                                        <option>년도</option>
		                                    </select>
		                                    <select class="form-control">
		                                        <option>월</option>
		                                    </select>
		                                    <select class="form-control">
		                                        <option>일</option>
		                                    </select>
		                                </div>
		                            </td>
		                        </tr>
		                        <tr>
                                    <th><label for="u-phone">휴대폰번호</label></th>
                                    <td class="certificate">
                                        <div class="form-group">
                                            <input type="text" id="u-phone" class="form-control">
                                        </div>
                                        <p class="btn-certificate">
                                            <a href="#" class="btn btn-xs" role="button">인증하기</a>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="authentication">SMS인증<br>번호</label></th>
                                    <td class="certificate">
                                        <div class="form-group">
                                            <input type="text" id="authentication" class="form-control">
                                        </div>
                                        <p class="btn-certificate">
                                            <a href="#" class="btn btn-xs" role="button">확인</a>
                                        </p>
                                    </td>
                                </tr>
		                    </tbody>
		                </table>
		                <div class="check-box">
		                    <label><input type="checkbox"> 14세 이상입니다.(필수)</label>
		                    <p class="summary">
		                        회원가입에 필요한 최소한의 정보만 입력 받음으로써 고객님의 개인정보 수집을 최소화하고 편리한 회원가입을 제공합니다.
		                    </p>
		                </div>
		            </div>
		            <div class="btn-area">
		                <p>
                            <a href="#" class="btn btn-gray" role="button">취소</a>
		                    <button type="submit" class="btn btn-black">수정하기</button>
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