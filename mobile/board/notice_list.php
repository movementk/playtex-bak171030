<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="board">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="notice-list">
		<div class="page-header">
		    <h2 class="title">Notice</h2>
		</div>
        <div class="container">
		    <article>
		        <div class="sub-search-form">
		            <form action="#">
		                <div class="form-group">
		                    <select class="form-control">
		                        <option>선택</option>
		                    </select>
		                    <input type="text" id="board-search" class="form-control">
		                    <label for="board-search" class="sr-only">게시판 검색</label>
		                </div>
		                <p class="search-btn">
		                    <button type="submit" class="btn-default">
		                        <i class="icon-search">
		                            <span class="sr-only">검색버튼</span>
		                        </i>
		                    </button>
		                </p>
		            </form>
		        </div>
		        <div class="article-content">
		            <ul class="list">
		                <li>
                            <a href="#">
                                <p class="subject">회원등급 업그레이드 안내</p>
                                <div class="board-info">
                                    <p class="user"><img src="/design/playtex/mobile/images/board/logo.jpg" alt=""></p>
                                    <p class="date">2017-08-01</p>
                                </div>
                            </a>
		                </li>
		                <li>
                            <a href="#">
                                <p class="subject">플레이텍스몰 1주년 기념 무상팬티 배송안내</p>
                                <div class="board-info">
                                    <p class="user"><img src="/design/playtex/mobile/images/board/logo.jpg" alt=""></p>
                                    <p class="date">2017-08-01</p>
                                </div>
                            </a>
		                </li>
		                <li>
                            <a href="#">
                                <p class="subject">5월 첫 주 황금연휴 고객센터/배송안내</p>
                                <div class="board-info">
                                    <p class="user"><img src="/design/playtex/mobile/images/board/logo.jpg" alt=""></p>
                                    <p class="date">2017-08-01</p>
                                </div>
                            </a>
		                </li>
		                <li>
                            <a href="#">
                                <p class="subject">2017년 구정연휴 고객센터/배송 안내</p>
                                <div class="board-info">
                                    <p class="user"><img src="/design/playtex/mobile/images/board/logo.jpg" alt=""></p>
                                    <p class="date">2017-08-01</p>
                                </div>
                            </a>
		                </li>
		                <li>
                            <a href="#">
                                <p class="subject">플레이텍스몰 10월27일(목) 물류센터 휴무 안내</p>
                                <div class="board-info">
                                    <p class="user"><img src="/design/playtex/mobile/images/board/logo.jpg" alt=""></p>
                                    <p class="date">2017-08-01</p>
                                </div>
                            </a>
		                </li>
		                <li>
                            <a href="#">
                                <p class="subject">플레이텍스몰 10월14일(금) 임시휴무 안내</p>
                                <div class="board-info">
                                    <p class="user"><img src="/design/playtex/mobile/images/board/logo.jpg" alt=""></p>
                                    <p class="date">2017-08-01</p>
                                </div>
                            </a>
		                </li>
		                <li>
                            <a href="#">
                                <p class="subject">플레이텍스몰 ★추석연휴★ 배송안내</p>
                                <div class="board-info">
                                    <p class="user"><img src="/design/playtex/mobile/images/board/logo.jpg" alt=""></p>
                                    <p class="date">2017-08-01</p>
                                </div>
                            </a>
		                </li>
		            </ul>
		            <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="first">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-double-left">
                                        <span class="sr-only">first</span>
                                    </i>
                                </a>
                            </li>
                            <li class="prev">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-left">
                                        <span class="sr-only">prev</span>
                                    </i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="next">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-right">
                                        <span class="sr-only">next</span>
                                    </i>
                                </a>
                            </li>
                            <li class="last">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-double-right">
                                        <span class="sr-only">last</span>
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </nav>
		        </div>
		    </article>
        </div>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>