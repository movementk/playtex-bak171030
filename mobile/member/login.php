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
                                        <label for="" class="sr-only">아이디</label>
                                        <input type="text" class="form-control" placeholder="아이디를 입력하세요">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="sr-only">아이디</label>
                                        <input type="text" class="form-control" placeholder="비밀번호를 입력하세요">
                                    </div>
                                    <div class="btn-area">
                                        <p>
                                            <button type="submit" class="btn btn-gray btn-default">로그인</button>
                                        </p>
                                    </div>
                                    <div class="check-box">
                                        <label><input type="checkbox">아이디 저장</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="login-type2">
                            <p class="summary"></p>
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