<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="board">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="qna-list">
		<div class="page-header">
		    <h2 class="title">Q&amp;A</h2>
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
<!--
		            <div class="table-wrap">
		                <table class="table">
		                    <tbody>
		                        <tr>
		                            <td></td>
		                            <td></td>
		                        </tr>
		                        <tr>
		                            <td colspan="2"></td>
		                        </tr>
		                        <tr>
		                            <td colspan="2"></td>
		                        </tr>
		                    </tbody>
		                </table>
		            </div>
-->
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
                                <p class="subject">[상품문의] 구성품이 어떻게 되나요?</p>
                                <div class="board-info">
                                    <p class="user">송혜*</p>
                                    <p class="date">2017-08-01</p>
                                </div>
                            </a>
		                </li>
		                <li class="reply">
                            <a href="#">
		                        <div class="title">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h3 class="p-title">★80%할인★[Playtex] 플레이텍스 에센셜 노와이어 30종 택1_PXI_SELECT10</h3>
                                        </div>
                                    </div>
		                        </div>
                                <p class="subject">[상품문의] 구성품이 어떻게 되나요?</p>
                                <div class="board-info">
                                    <p class="user"><img src="/design/playtex/mobile/images/board/logo.jpg" alt=""></p>
                                    <p class="date">2017-08-01</p>
                                </div>
                            </a>
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