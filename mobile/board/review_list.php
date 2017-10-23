<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="board">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="review-list">
		<div class="page-header">
		    <h2 class="title">Best Review</h2>
		    <p class="summary">
		        제품에 대한 상세한 설명과 후기를 남겨주세요!<br>
		        후기를 남겨주시면 적립금을 드립니다!<br>
		        (텍스트리뷰 100원 / 포토리뷰 500원-캡처사진제외)
		    </p>
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
		                        <div class="title">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <figure>
                                                <img src="/design/playtex/mobile/images/board/qna_list_img.jpg" class="img-responsive" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-xs-7">
                                            <h3 class="p-title">★80%할인★[Playtex] 플레이텍스 에센셜 노와이어 30종 택1_PXI_SELECT10</h3>
                                        </div>
                                    </div>
		                        </div>
                                <p class="subject">역시 플레이텍스네요!</p>
                                <div class="board-info">
                                    <p class="user">송혜*</p>
                                    <p class="date">2017-08-01</p>
                                </div>
                            </a>
		                </li>
		                <li>
                            <a href="#">
		                        <div class="title">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <figure>
                                                <img src="/design/playtex/mobile/images/board/review_img02.jpg" class="img-responsive" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-xs-7">
                                            <h3 class="p-title">★80%할인★[Playtex] 플레이텍스 에센셜 노와이어 30종 택1_PXI_SELECT10</h3>
                                        </div>
                                    </div>
		                        </div>
                                <p class="subject">배송도 빠르고 너무 좋아요</p>
                                <div class="board-info">
                                    <p class="user">송혜*</p>
                                    <p class="date">2017-08-01</p>
                                </div>
                            </a>
		                </li>
		                <li>
                            <a href="#">
		                        <div class="title">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <figure>
                                                <img src="/design/playtex/mobile/images/board/review_img03.jpg" class="img-responsive" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-xs-7">
                                            <h3 class="p-title">★80%할인★[Playtex] 플레이텍스 에센셜 노와이어 30종 택1_PXI_SELECT10</h3>
                                        </div>
                                    </div>
		                        </div>
                                <p class="subject">좋은 재질, 좋은 착용감 추천합니다</p>
                                <div class="board-info">
                                    <p class="user">송혜*</p>
                                    <p class="date">2017-08-01</p>
                                </div>
                            </a>
		                </li>
		                <li>
                            <a href="#">
		                        <div class="title">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <figure>
                                                <img src="/design/playtex/mobile/images/board/qna_list_img.jpg" class="img-responsive" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-xs-7">
                                            <h3 class="p-title">★80%할인★[Playtex] 플레이텍스 에센셜 노와이어 30종 택1_PXI_SELECT10</h3>
                                        </div>
                                    </div>
		                        </div>
                                <p class="subject">좋아요 배송도 빠르고 항상 여기꺼만 입어요 </p>
                                <div class="board-info">
                                    <p class="user">송혜*</p>
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