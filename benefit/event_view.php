<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>

<!-- 대메뉴 Class -->
<body class="benefit">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- 서브페이지 배경 -->
    <div class="page-header">
        <h2>Event</h2>
    </div>
    <!-- 페이지 Class -->
    <main id="content" class="event-view">
        <div class="container">
            <article>
                <div class="article-content">
                    <div class="view">
                        <div class="view-header">
                            <h3>[상품문의] 구성품이 어떻게 되나요?</h3>
                            <p class="date">2017-08-01</p>
                        </div>
                        <div class="view-content">
                            <figure>
                                <img src="/design/playtex/assets/images/benefit/event_view_img.jpg" alt="">
                            </figure>
                            <br><br><br>
                            <figure>
                                <img src="/design/playtex/assets/images/benefit/event_benefit_img.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-gray" role="button">삭제하기</a>
                            <a href="#" class="btn btn-sm btn-gray" role="button">수정하기</a>
                            <a href="/board/notice_list.php" class="btn btn-sm btn-black" role="button">목록보기</a>
                        </p>
                    </div>
                    <div class="reply-area">
                        <form action="#">
                            <div class="reply-write">
                                <div class="form-group">
                                    <textarea id="reply-content" class="form-control"></textarea>
                                    <label for="reply-content" class="sr-only">댓글달기</label>
                                </div>
                                <p class="reply-btn">
                                    <button type="submit" class="btn btn-default">확인</button>
                                </p>
                            </div>
                        </form>
                        <ul class="reply-list">
                            <li>
                                <dl>
                                    <dt>김태희</dt>
                                    <dd>2017-08-01</dd>
                                </dl>
                                <div class="modify-btn">
                                     <a href="#" class="btn btn-modify" role="button"><i class="icon-pencil"></i>수정</a>
                                    <a href="#" class="btn btn-delete" role="button"><i class="icon-trash"></i>삭제</a>
                                </div>
                                <p>댓글을 남겨주세요 댓글을 남겨주세요 댓글을 남겨주세요!</p>
                            </li>
                            <li class="reply">
                                <dl>
                                    <dt>플레이텍스</dt>
                                    <dd>2017-08-01</dd>
                                </dl>
                                <div class="modify-btn">
                                     <a href="#" class="btn btn-modify" role="button"><i class="icon-pencil"></i>수정</a>
                                    <a href="#" class="btn btn-delete" role="button"><i class="icon-trash"></i>삭제</a>
                                </div>
                                <p>댓글을 남겨주세요 댓글을 남겨주세요 댓글을 남겨주세요!</p>
                            </li>
                            <li>
                                <dl>
                                    <dt>송혜교</dt>
                                    <dd>2017-08-01</dd>
                                </dl>
                                <div class="modify-btn">
                                    <a href="#" class="btn btn-modify" role="button"><i class="icon-pencil"></i>수정</a>
                                    <a href="#" class="btn btn-delete" role="button"><i class="icon-trash"></i>삭제</a>
                                </div>
                                <p>댓글을 남겨주세요 댓글을 남겨주세요 댓글을 남겨주세요!</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>