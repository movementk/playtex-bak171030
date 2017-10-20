<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="benefit">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="event-view">
		<div class="page-header">
		    <h2 class="title">Event</h2>
		</div>
        <div class="container">
		    <article class="view">
		        <div class="article-header">
		            <h3>플레이텍스몰 오픈 이벤트</h3>
		            <p class="date">2017-08-01</p>
		        </div>
		        <div class="article-content">
		            <figure>
		                <img src="/design/playtex/mobile/images/benefit/event_view_img.jpg" class="img-responsive" alt="">
		            </figure>
		        </div>
		        <div class="btn-area">
		            <p>
		                <a href="#" class="btn btn-black" role="button">목록보기</a>
		                <a href="#" class="btn btn-gray" role="button">수정하기</a>
		                <a href="#" class="btn btn-gray" role="button">삭제하기</a>
		            </p>
		        </div>
		    </article>
            <article class="reply-form">
                <div class="reply-write">
                    <form action="#">
                        <div class="form-group">
                            <textarea id="u-comment" class="form-control"></textarea>
                            <label for="u-comment" class="sr-only">댓글달</label>
                        </div>
                        <p class="reply-btn">
                            <button type="submit" class="btn btn-xs">확인</button>
                        </p>
                    </form>
                </div>
                <div class="article-content">
                    <ul class="comment-list">
                        <li>
                            <ul class="info">
                                <li>김태희</li>
                                <li class="date">2017-08-01</li>
                            </ul>
                            <p class="modify-btn">
                                <a href="#"><i class="icon-pencil"></i>수정</a>
                                <a href="#"><i class="icon-trash"></i>삭제</a>
                            </p>
                            <div class="comment-content">
                                댓글을 남겨주세요 댓글을 남겨주세요...
                            </div>
                        </li>
                        <li class="reply">
                            <ul class="info">
                                <li>김태희</li>
                                <li class="date">2017-08-01</li>
                            </ul>
                            <p class="modify-btn">
                                <a href="#"><i class="icon-pencil"></i>수정</a>
                                <a href="#"><i class="icon-trash"></i>삭제</a>
                            </p>
                            <div class="comment-content">
                                댓글을 남겨주세요 댓글을 남겨주세요...
                            </div>
                        </li>
                        <li>
                            <ul class="info">
                                <li>김태희</li>
                                <li class="date">2017-08-01</li>
                            </ul>
                            <p class="modify-btn">
                                <a href="#"><i class="icon-pencil"></i>수정</a>
                                <a href="#"><i class="icon-trash"></i>삭제</a>
                            </p>
                            <div class="comment-content">
                                댓글을 남겨주세요 댓글을 남겨주세요...
                            </div>
                        </li>
                    </ul>
                </div>
            </article>
        </div>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>