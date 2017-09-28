<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>

<!-- 대메뉴 Class -->
<body class="board">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- 서브페이지 배경 -->
    <div class="page-header">
        <h2>Best Review</h2>
        <p class="summary">
            제품에 대한 상세한 설명과 후기를 남겨주세요!<br>
            후기를 남겨주시면 적립금을 드립니다! (텍스트리뷰 100원 / 포토리뷰 500원-캡처사진제외)
        </p>
    </div>
    <!-- 페이지 Class -->
    <main id="content" class="review-view">
        <div class="container">
            <article>
                <div class="article-content">
                    <div class="view">
                        <div class="view-header">
                            <h3>역시 플레이텍스네요!</h3>
                            <p class="date">2017-08-01</p>
                        </div>
                        <div class="view-content">
                            <a href="#">
                                <div class="item">
                                    <img src="/assets/images/board/review_view_img.jpg" alt="">
                                </div>
                                <div class="details">
                                    <p class="title">★80%할인★[Playtex]플레이텍스 에센셜 노와이어 30종 택1_PXI_SELECT10</p>
                                    <strong class="payment">16,900</strong>
                                </div>
                            </a>
                            <div class="review-content">
                                전에 입던거라 좋아요.뭐랄까,, <br>
                                두번의 출산후 겨드랑이 밑 살이 다른곳보다 유독 많아서 걱정하는데..<br>
                                드라마틱하게는 아니어도 다른 브라에 비해  모아주고 업시켜주는건 맞아요 
                            </div>
                        </div>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-gray" role="button">삭제하기</a>
                            <a href="#" class="btn btn-sm btn-gray" role="button">수정하기</a>
                            <a href="/board/review_list.php" class="btn btn-sm btn-black" role="button">목록보기</a>
                        </p>
                    </div>
                </div>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>