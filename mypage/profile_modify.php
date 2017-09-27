<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>

<!-- 대메뉴 Class -->
<body class="mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- 서브페이지 배경 -->
    <div class="page-header">
        <h2>My Profile</h2>
    </div>
    <!-- 페이지 Class -->
    <main id="content" class="profile-modify">
        <div class="container">
            <article>
                <div class="article-header">
                    <nav class="mypage-tab">
                        <ul>
                            <li><a href="/mypage/order_list.php">주문내역/배송조회</a></li>
                            <li><a href="#">취소/교환/환불 조회</a></li>
                            <li><a href="/mypage/mileage.php">적립금</a></li>
                            <li><a href="/mypage/coupon.php">할인쿠폰</a></li>
                            <li><a href="/mypage/wish_list.php">위시리스트</a></li>
                            <li><a href="/mypage/viewed_items.php">최근 본 상품</a></li>
                            <li><a href="#">Q&amp;A</a></li>
                            <li><a href="/mypage/inquiry_list.php">1:1문의</a></li>
                            <li class="active"><a href="/mypage/pw_confirm.php">회원정보 수정</a></li>
                            <li><a href="/mypage/cart_list.php">장바구니</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="article-content">
                    <form action="#">
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>이름</th>
                                        <td>무브먼트케이</td>
                                    </tr>
                                    <tr>
                                        <th>아이디</th>
                                        <td>mevementk</td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-pw">비밀번호</label></th>
                                        <td class="u-pw">
                                            <div class="form-group">
                                                <input type="password" id="u-pw" class="form-control">
                                            </div>
                                            <p class="note">영문 대소문자/숫자/특수문자를 혼용하여 2종류 10~16자 또는 3종류 8~16자</p> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-pw2">비밀번호 확인</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="password" id="u-pw2" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="email">이메일</label></th>
                                        <td class="e-mail">
                                            <div class="form-group">
                                                <input type="email" id="email" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>생년월일</th>
                                        <td class="birthdate">
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
                                        <td class="phone">
                                            <div class="form-group">
                                                <input type="text" id="u-phone" class="form-control">
                                            </div>
                                            <p class="btn-certification">
                                                <a href="#" class="btn btn-xs" role="button">인증하기</a>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="sms-certification">SMS인증번호</label></th>
                                        <td class="sms">
                                            <div class="form-group">
                                                <input type="text" id="sms-certification" class="form-control">
                                            </div>
                                            <p class="btn-certification">
                                                <a href="#" class="btn btn-xs" role="button">확인</a>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"> 14세 이상입니다.(필수)</label>
                            <p class="summary">회원가입에 필요한 최소한의 정보만 입력 받음으로써 고객님의 개인정보 수집을 최소화하고 편리한 회원가입을 제공합니다.</p>
                            <p class="btn-leave">
                                <a href="#" class="btn btn-white" role="button">회원탈퇴</a>
                            </p>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-lg btn-gray" role="button">취소하기</a>
                                <button type="submit" class="btn btn-lg btn-black">회원정보 수정</button>
                            </p>
                        </div>
                    </form>
                </div>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>