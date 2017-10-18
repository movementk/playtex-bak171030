<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="member">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="login">
		<div class="page-header">
		    <h2 class="title">Login</h2>
		</div>
		<article>
		    <div class="container">
		        <div class="article-header">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#login-type1" aria-controls="login-type1" role="tab" data-toggle="tab">로그인</a>
                        </li>
                        <li role="presentation">
                            <a href="#login-type2" aria-controls="login-type2" role="tab" data-toggle="tab">비회원 주문조회</a>
                        </li>
                    </ul>
		        </div>
		        <div class="article-content">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="login-type1">
                            <p class="summary">
                                회원 로그인하시면 플레이텍스만의<br>다양한 회원 혜택을 누리실 수 있습니다.
                            </p>
                            <div class="login-form">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="u-id" class="sr-only">아이디</label>
                                        <input type="text" id="u-id" class="form-control" placeholder="아이디를 입력하세요">
                                    </div>
                                    <div class="form-group">
                                        <label for="u-pw" class="sr-only">비밀번호</label>
                                        <input type="password" id="u-pw" class="form-control" placeholder="비밀번호를 입력하세요">
                                    </div>
                                    <div class="btn-area">
                                        <p>
                                            <button type="submit" class="btn btn-gray btn-default">로그인</button>
                                            <!-- 비회원으로 구매시 -->
                                            <a href="#" class="btn btn-gray btn-primary" role="button">비회원으로 구매하기</a>
                                        </p>
                                    </div>
                                    <div class="check-box">
                                        <label><input type="checkbox">아이디 저장</label>
                                    </div>
                                </form>
                            </div>
                            <div class="member-branch">
                                <ul class="row">
                                    <li class="col-xs-4">
                                        <a href="/mobile/member/join.php" class="join">
                                            <p class="figure">
                                                <img src="/design/playtex/mobile/assets/images/member/icon_join.gif" alt="">
                                            </p>
                                            <p class="details">회원가입</p>
                                        </a>
                                    </li>
                                    <li class="col-xs-4">
                                        <a href="/mobile/member/find_for.php" class="id-find">
                                            <p class="figure">
                                                <img src="/design/playtex/mobile/assets/images/member/icon_id_find.gif" alt="">
                                            </p>
                                            <p class="details">아이디찾기</p>
                                        </a>
                                    </li>
                                    <li class="col-xs-4">
                                        <a href="/mobile/member/find_for.php" class="pw-find">
                                            <p class="figure">
                                                <img src="/design/playtex/mobile/assets/images/member/icon_pw_find.gif" alt="">
                                            </p>
                                            <p class="details">비밀번호 찾기</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sns-login">
                                <p>
                                    <a href="#" class="btn btn-lg facebook" role="button">
                                        <img src="/design/playtex/mobile/assets/images/member/icon_facebook.gif" alt=""> 페이스북으로 로그인
                                    </a>
                                    <a href="#" class="btn btn-lg naver" role="button">
                                        <img src="/design/playtex/mobile/assets/images/member/icon_naver.gif" alt=""> 네이버로 로그인
                                    </a>
                                    <a href="#" class="btn btn-lg kakao" role="button">
                                        <img src="/design/playtex/mobile/assets/images/member/icon_kakao.gif" alt=""> 카카오로 로그인
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="login-type2">
                            <p class="summary">
                                비회원 구매를 하신 경우에는 이름과<br>주문번호로 조회가능합니다.
                            </p>
                            <div class="login-form">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="u-name" class="sr-only">이름</label>
                                        <input type="text" id="u-name" class="form-control" placeholder="이름을 입력하세요">
                                    </div>
                                    <div class="form-group">
                                        <label for="u-product-num" class="sr-only">주문번호</label>
                                        <input type="text" id="u-product-num" class="form-control" placeholder="주문번호를 입력하세요">
                                    </div>
                                    <div class="btn-area">
                                        <p>
                                            <button type="submit" class="btn btn-gray btn-default">주문조회</button>
                                        </p>
                                    </div>
                                </form>
                            </div>
                            <div class="member-branch">
                                <ul class="row">
                                    <li class="col-xs-4">
                                        <a href="/mobile/member/join.php" class="join">
                                            <p class="figure">
                                                <img src="/design/playtex/mobile/assets/images/member/icon_join.gif" alt="">
                                            </p>
                                            <p class="details">회원가입</p>
                                        </a>
                                    </li>
                                    <li class="col-xs-4">
                                        <a href="/mobile/member/find_for.php" class="id-find">
                                            <p class="figure">
                                                <img src="/design/playtex/mobile/assets/images/member/icon_id_find.gif" alt="">
                                            </p>
                                            <p class="details">아이디찾기</p>
                                        </a>
                                    </li>
                                    <li class="col-xs-4">
                                        <a href="/mobile/member/find_for.php" class="pw-find">
                                            <p class="figure">
                                                <img src="/design/playtex/mobile/assets/images/member/icon_pw_find.gif" alt="">
                                            </p>
                                            <p class="details">비밀번호 찾기</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sns-login">
                                <p>
                                    <a href="#" class="btn btn-lg facebook" role="button">
                                        <img src="/design/playtex/mobile/assets/images/member/icon_facebook.gif" alt=""> 페이스북으로 로그인
                                    </a>
                                    <a href="#" class="btn btn-lg naver" role="button">
                                        <img src="/design/playtex/mobile/assets/images/member/icon_naver.gif" alt=""> 네이버로 로그인
                                    </a>
                                    <a href="#" class="btn btn-lg kakao" role="button">
                                        <img src="/design/playtex/mobile/assets/images/member/icon_kakao.gif" alt=""> 카카오로 로그인
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
		</article>

	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>