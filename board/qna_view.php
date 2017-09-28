<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>

<!-- 대메뉴 Class -->
<body class="board">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- 서브페이지 배경 -->
    <div class="page-header">
        <h2 class="lora">Q<span>&amp;</span>A</h2>
    </div>
    <!-- 페이지 Class -->
    <main id="content" class="board-view qna-view">
        <div class="container">
            <article>
                <div class="article-content">
                    <div class="view">
                        <div class="view-header">
                            <h3>[상품문의] 구성품이 어떻게 되나요?</h3>
                            <p class="date">2017-08-01</p>
                        </div>
                        <div class="view-content">
                            ★ 배송/교환/반품/취소문의는 주문번호를 적어주셔야 빠른 처리가 가능합니다 ★<br><br>
                            20170910164707-31174782870<br>
                            팬티 교환신청했는데<br>
                            18일날 보내주신다던데<br>
                            보내신건가요?<br>
                            운송장 어디서 봐요?? 
                        </div>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-gray" role="button">삭제하기</a>
                            <a href="#" class="btn btn-sm btn-gray" role="button">수정하기</a>
                            <a href="/board/qna_list.php" class="btn btn-sm btn-black" role="button">목록보기</a>
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