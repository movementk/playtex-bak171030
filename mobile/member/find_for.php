<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="member">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="find-for">
		<div class="page-header">
		    <h2 class="title">Find for</h2>
		    <p class="summary">
		        회원 가입시 입력하신 이름 &amp; 이메일<br>주소를 입력해주세요
		    </p>
		</div>
		<article>
		    <div class="container">
		        <div class="article-content">
		            <form action="#">
		                <div class="form-group">
		                    <label for="u-name" class="sr-only">이름</label>
		                    <input type="text" id="u-name" class="form-control" placeholder="이름을 입력하세요">
		                </div>
		                <div class="form-group">
		                    <label for="u-mail" class="sr-only">이메일</label>
		                    <input type="email" id="u-mail" class="form-control" placeholder="이메일 주소를 입력하세요">
		                </div>
		                <div class="btn-area">
		                    <p>
		                        <button type="submit" class="btn btn-gray btn-default">확인</button>
		                    </p>
		                </div>
		            </form>
		        </div>
		    </div>
		</article>

	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>