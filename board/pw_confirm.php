<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>

<!-- 대메뉴 Class -->
<body class="board">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- 서브페이지 배경 -->
    <div class="page-header">
        <h2>Password</h2>
    </div>
    <!-- 페이지 Class -->
    <main id="content" class="pw-confirm">
        <div class="container">
            <article>
                <div class="article-content">
                    <figure>
                        <img src="/assets/images/mypage/rock_img.gif" alt="">
                        <figcaption>
                            저희 쇼핑몰에서는 회원님의 소중한 개인정보를 안전하게 보호하고 <br>
                            개인정보 도용으로 인한 피해를 예방하기 위하여 비밀번호를 확인합니다. <br>
                            비밀번호는 타인에게 노출되지 않도록 주의해주세요.
                        </figcaption>
                    </figure>
                    <form action="#">
                        <div class="form-group">
                            <input type="password" id="usr-pw" class="form-control" placeholder="비밀번호를 입력하세요">
                            <label for="usr-pw" class="sr-only">비밀번호 확인</label>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-sm btn-gray" role="button">취소</a>
                                <button type="submit" class="btn btn-sm btn-black">확인</button>
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