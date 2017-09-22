<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>

<!-- 대메뉴 Class -->
<body class="member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- 서브페이지 배경 -->
    <div class="page-header">
        <h2>Join</h2>
    </div>
    <!-- 페이지 Class -->
    <main id="content" class="agreement">
        <div class="container">
            <article>
                <div class="article-header">
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2">
                            <ul class="step-list">
                                <li>
                                    <div>
                                        <p class="figure">
                                            <img src="/assets/images/member/step_active_img01.png" alt="STEP 01">
                                        </p>
                                        <p class="details">STEP 01</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p class="figure">
                                            <img src="/assets/images/member/step_img02.png" alt="STEP 02">
                                        </p>
                                        <p class="details">STEP 02</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p class="figure">
                                            <img src="/assets/images/member/step_img02.png" alt="STEP 03">
                                        </p>
                                        <p class="details">STEP 03</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="article-content">
                    <p class="summary">
                        회원 가입시 입력하신 이름 &amp; 이메일 주소를 입력해주세요
                    </p>
                    <div class="find-form">
                        <form action="#">
                            <div class="input-box">
                                <div class="form-group">
                                    <input type="text" id="u-name" class="form-control" placeholder="이름을 입력하세요">
                                    <label for="u-name" class="sr-only">아이디</label>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="u-mail" class="form-control" placeholder="이메일 주소를 입력하세요">
                                    <label for="u-mail" class="sr-only">비밀번호</label>
                                </div>
                                <p class="btn-find">
                                    <button type="submit" class="btn btn-default">로그인</button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>