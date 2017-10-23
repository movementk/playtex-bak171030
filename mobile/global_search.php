<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>

<body class="global-search">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content">
		<div class="search-area">
		    <div class="container">
                <form action="#">
                    <div class="form-group">
                        <input type="text" id="g-search" class="form-control">
                        <label for="g-search" class="sr-only">검색하기</label>
                    </div>
                    <div class="form-group">
                        <p>
                            <input type="text" id="low-pay" class="form-control">
                            <label for="low-pay">원 ~</label>
                        </p>
                        <p>
                            <input type="text" id="high-pay" class="form-control">
                            <label for="high-pay">원</label>
                        </p>
                    </div>
                    <p class="search-btn">
                        <button type="button" class="btn btn-default">SEARCH</button>
                    </p>
                </form>
		    </div>
		</div>
		<article class="search-list">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="item-choice">
                            <div class="choice-list dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    전체상품
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">ITEM</a></li>
                                    <li><a href="#">DESIGN</a></li>
                                    <li><a href="#">SIZE</a></li>
                                    <li><a href="#">COLOR</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="conditioned-choice">
                            <div class="choice-list dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    인기 순으로보기
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <li><a href="#">인기 순으로보기</a></li>
                                    <li><a href="#">인기 순으로보기</a></li>
                                    <li><a href="#">인기 순으로보기</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="result">
                    <!-- 검색결과 없을때 
                    <p class="none-search">검색 결과가 없습니다.</p>
                    -->
                    <ul class="result-list">
                        <li>
                            <a href="#">
                                <figure>
                                    <img src="/design/playtex/mobile/images/search/result_img01.jpg" class="img-responsive" alt="">
                                </figure>
                                <div class="details">
                                    <p class="title">플레이텍스 에센셜 노와이어 브라팬티 4종 PXW7E2527_T</p>
                                    <ul class="recommend-list">
                                        <li class="hot">HOT</li>
                                    </ul>
                                    <b>39,900</b>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <figure>
                                    <img src="/design/playtex/mobile/images/search/result_img02.jpg" class="img-responsive" alt="">
                                </figure>
                                <div class="details">
                                    <p class="title">플레이텍스 에센셜 노와이어 브라팬티 4종 PXW7E2527_T</p>
                                    <ul class="recommend-list">
                                        <li class="hot">HOT</li>
                                    </ul>
                                    <b>39,900</b>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <figure>
                                    <img src="/design/playtex/mobile/images/search/result_img01.jpg" class="img-responsive" alt="">
                                </figure>
                                <div class="details">
                                    <p class="title">플레이텍스 에센셜 노와이어 브라팬티 4종 PXW7E2527_T</p>
                                    <ul class="recommend-list">
                                        <li class="hot">HOT</li>
                                    </ul>
                                    <b>39,900</b>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <figure>
                                    <img src="/design/playtex/mobile/images/search/result_img02.jpg" class="img-responsive" alt="">
                                </figure>
                                <div class="details">
                                    <p class="title">플레이텍스 에센셜 노와이어 브라팬티 4종 PXW7E2527_T</p>
                                    <ul class="recommend-list">
                                        <li class="hot">HOT</li>
                                    </ul>
                                    <b>39,900</b>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <figure>
                                    <img src="/design/playtex/mobile/images/search/result_img01.jpg" class="img-responsive" alt="">
                                </figure>
                                <div class="details">
                                    <p class="title">플레이텍스 에센셜 노와이어 브라팬티 4종 PXW7E2527_T</p>
                                    <ul class="recommend-list">
                                        <li class="hot">HOT</li>
                                    </ul>
                                    <b>39,900</b>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <figure>
                                    <img src="/design/playtex/mobile/images/search/result_img02.jpg" class="img-responsive" alt="">
                                </figure>
                                <div class="details">
                                    <p class="title">플레이텍스 에센셜 노와이어 브라팬티 4종 PXW7E2527_T</p>
                                    <ul class="recommend-list">
                                        <li class="hot">HOT</li>
                                    </ul>
                                    <b>39,900</b>
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
		    </div>
		</article>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>

</html>