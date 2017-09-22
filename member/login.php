<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>

<!-- 대메뉴 Class -->
<body class="member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- 서브페이지 배경 -->
    <div class="page-header">
        <h2>Login</h2>
    </div>
    <!-- 페이지 Class -->
    <main id="content" class="login">
        <div class="container">
            <article>
                <div class="article-header">
                    <ul class="login-tab">
                        <li class="active"><a href="/member/login.php">로그인</a></li>
                        <li><a href="/member/nonmember_login.php">비회원 주문조회</a></li>
                    </ul>
                </div>
                <div class="article-content">
                    <p class="summary">
                        회원 로그인하시면 플레이텍스만의<br>
                        다양한 회원 혜택을 누리실 수 있습니다.
                    </p>
                    <div class="login-form">
                        <form action="#">
                            <div class="input-box">
                                <div class="form-group">
                                    <input type="text" id="u-id" class="form-control" placeholder="아이디를 입력하세요">
                                    <label for="u-id" class="sr-only">아이디</label>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="u-pw" class="form-control" placeholder="비밀번호를 입력하세요">
                                    <label for="u-pw" class="sr-only">비밀번호</label>
                                </div>
                                <p class="btn-login">
                                    <button type="submit" class="btn btn-default">로그인</button>
                                </p>
                                <label class="id-save"><input type="checkbox">아이디 저장</label>
                                <p class="none-member-btn">
                                    <a href="#" class="btn btn-primary" role="button">비회원으로 구매하기</a>
                                </p>
                            </div>
                        </form>
                        <div class="member-link">
                            <ul class="row">
                                <li class="col-xs-4">
                                    <a href="#">
                                        <p class="figure">
                                            <img src="/assets/images/member/link_img01.png" alt="회원가입">
                                        </p>
                                        <p class="details">회원가입</p>
                                    </a>
                                </li>
                                <li class="col-xs-4">
                                    <a href="#">
                                        <p class="figure">
                                            <img src="/assets/images/member/link_img02.png" alt="아이디찾기">
                                        </p>
                                        <p class="details">아이디찾기</p>
                                    </a>
                                </li>
                                <li class="col-xs-4">
                                    <a href="#">
                                        <p class="figure">
                                            <img src="/assets/images/member/link_img03.png" alt="비밀번호 찾기">
                                        </p>
                                        <p class="details">비밀번호 찾기</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="sns-login">
                            <ul>
                                <li>
                                    <a href="#" class="face-book">
                                        <img src="/assets/images/member/icon_facebook.gif" alt="face book">
                                        페이스북으로 로그인
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="naver">
                                        <img src="/assets/images/member/icon_naver.gif" alt="face book">
                                        네이버로 로그인
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="kakao">
                                        <img src="/assets/images/member/icon_kakao.gif" alt="face book">
                                        카카오로 로그인
                                    </a>
                                </li>
                            </ul>
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