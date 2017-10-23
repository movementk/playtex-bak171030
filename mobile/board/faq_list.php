 <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="board">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="faq">
		<div class="page-header">
		    <h2 class="title">FAQ</h2>
		</div>
        <div class="container">
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
            <nav class="faq-nav product-nav">
                <ul>
                    <li class="active"><a href="#">전체보기</a></li>
                    <li><a href="#">회원가입/정보</a></li>
                    <li class="space"><a href="#">상품구매/<br>주문및취소</a></li>
                    <li><a href="#">결제/배송</a></li>
                    <li><a href="#">교환/반품/환불</a></li>
                    <li><a href="#">적립금</a></li>
                    <li><a href="#">기타</a></li>
                </ul>
            </nav>
        </div>
        <article>
            <div class="container">
                <ul class="faq-list">
                    <li>
                        <div class="collapse-content">
                            <a class="btn btn-primary collapsed" role="button" data-toggle="collapse" href="#faq-list-1" aria-expanded="false" aria-controls="faq-list-1">
                                <p class="faq-title"><b>Q</b>회원가입/정보</p>
                                <p class="subject">상품이 다른데도 묶음배송 가능한가요?</p>
                            </a>
                            <div class="collapse" id="faq-list-1">
                                <div class="well">
                                    <b>A</b>
                                    묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. 주문 시 확인 부탁 드립니다. 
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="collapse-content">
                            <a class="btn btn-primary collapsed" role="button" data-toggle="collapse" href="#faq-list-2" aria-expanded="false" aria-controls="faq-list-2">
                                <p class="faq-title"><b>Q</b>교환/반품/환불 </p>
                                <p class="subject">주문 후 언제까지 입금해야 하나요?</p>
                            </a>
                            <div class="collapse" id="faq-list-2">
                                <div class="well">
                                    <b>A</b>
                                    묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. 주문 시 확인 부탁 드립니다. 
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="collapse-content">
                            <a class="btn btn-primary collapsed" role="button" data-toggle="collapse" href="#faq-list-3" aria-expanded="false" aria-controls="faq-list-3">
                                <p class="faq-title"><b>Q</b>교환/반품/환불</p>
                                <p class="subject">교환절차는 어떻게 진행되나요?</p>
                            </a>
                            <div class="collapse" id="faq-list-3">
                                <div class="well">
                                    <b>A</b>
                                    묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. 주문 시 확인 부탁 드립니다. 
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="collapse-content">
                            <a class="btn btn-primary collapsed" role="button" data-toggle="collapse" href="#faq-list-4" aria-expanded="false" aria-controls="faq-list-4">
                                <p class="faq-title"><b>Q</b>기타</p>
                                <p class="subject">결제완료 후 취소 가능한가요?</p>
                            </a>
                            <div class="collapse" id="faq-list-4">
                                <div class="well">
                                    <b>A</b>
                                    묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. 주문 시 확인 부탁 드립니다. 
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="collapse-content">
                            <a class="btn btn-primary collapsed" role="button" data-toggle="collapse" href="#faq-list-5" aria-expanded="false" aria-controls="faq-list-5">
                                <p class="faq-title"><b>Q</b>교환/반품/환불</p>
                                <p class="subject">환불신청은 어떻게 진행되나요?</p>
                            </a>
                            <div class="collapse" id="faq-list-5">
                                <div class="well">
                                    <b>A</b>
                                    묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. 주문 시 확인 부탁 드립니다. 
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="collapse-content">
                            <a class="btn btn-primary collapsed" role="button" data-toggle="collapse" href="#faq-list-6" aria-expanded="false" aria-controls="faq-list-6">
                                <p class="faq-title"><b>Q</b>교환/반품/환불</p>
                                <p class="subject">교환 및 반품절차를 알려주세요.</p>
                            </a>
                            <div class="collapse" id="faq-list-6">
                                <div class="well">
                                    <b>A</b>
                                    묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. 주문 시 확인 부탁 드립니다. 
                                </div>
                            </div>
                        </div>
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
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>