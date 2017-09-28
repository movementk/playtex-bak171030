<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>

<!-- 대메뉴 Class -->
<body class="board">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- 서브페이지 배경 -->
    <div class="page-header">
        <h2>FAQ</h2>
    </div>
    <!-- 페이지 Class -->
    <main id="content" class="faq-list">
        <div class="container">
            <article>
                <div class="search-form">
                    <form action="#">
                        <div class="form-group">
                            <select class="form-control">
                                <option>선택</option>
                            </select>
                            <input type="text" class="form-control">
                        </div>
                        <p class="search-btn">
                            <button type="submit" class="btn btn-default">
                                <i class="icon-search">
                                    <span class="sr-only">검색버튼</span>
                                </i>
                            </button>
                        </p>
                    </form>
                </div>
                <div class="article-content">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs-faq" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#all-faq" aria-controls="all-faq" role="tab" data-toggle="tab">전체보기</a>
                        </li>
                        <li role="presentation">
                            <a href="#member-faq" aria-controls="member-faq" role="tab" data-toggle="tab">회원가입/정보</a>
                        </li>
                        <li role="presentation">
                            <a href="#product-faq" aria-controls="product-faq" role="tab" data-toggle="tab">상품구매/주문및취소</a>
                        </li>
                        <li role="presentation">
                            <a href="#delivery-faq" aria-controls="delivery-faq" role="tab" data-toggle="tab">결제/배송</a>
                        </li>
                        <li role="presentation">
                            <a href="#refund-faq" aria-controls="refund-faq" role="tab" data-toggle="tab">교환/반품/환불</a>
                        </li>
                        <li role="presentation">
                            <a href="#mileage-faq" aria-controls="mileage-faq" role="tab" data-toggle="tab">적립금</a>
                        </li>
                        <li role="presentation">
                            <a href="#etc-faq" aria-controls="etc-faq" role="tab" data-toggle="tab">기타</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="all-faq">
                            
                            <div class="panel-group" id="faqlist" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="a-heading-1">
                                        <a role="button" data-toggle="collapse" data-parent="#faqlist" href="#all-list-1" aria-expanded="true" aria-controls="all-list-1">
                                            <p class="category">회원가입/정보</p>
                                            <p class="title">상품이 다른데도 묶음배송 가능한가요?</p>
                                        </a>
                                    </div>
                                    <div id="all-list-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="a-heading-1">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="a-heading-2">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqlist" href="#all-list-2" aria-expanded="false" aria-controls="all-list-2">
                                            <p class="category">교환/반품/환불</p>
                                            <p class="title">주문 후 언제까지 입금해야 하나요?</p>
                                        </a>
                                    </div>
                                    <div id="all-list-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="a-heading-2">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="a-heading-3">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqlist" href="#all-list-3" aria-expanded="false" aria-controls="all-list-3">
                                            <p class="category">교환/반품/환불</p>
                                            <p class="title">교환절차는 어떻게 진행되나요?</p>
                                        </a>
                                    </div>
                                    <div id="all-list-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="a-heading-3">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="a-heading-4">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqlist" href="#all-list-4" aria-expanded="false" aria-controls="all-list-4">
                                            <p class="category">기타</p>
                                            <p class="title">결제완료 후 취소 가능한가요?</p>
                                        </a>
                                    </div>
                                    <div id="all-list-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="a-heading-4">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="a-heading-5">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqlist" href="#all-list-5" aria-expanded="false" aria-controls="all-list-5">
                                            <p class="category">교환/반품/환불</p>
                                            <p class="title">환불신청은 어떻게 진행되나요?</p>
                                        </a>
                                    </div>
                                    <div id="all-list-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="a-heading-5">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="a-heading-6">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqlist" href="#all-list-6" aria-expanded="false" aria-controls="all-list-6">
                                            <p class="category">교환/반품/환불</p>
                                            <p class="title">교환 및 반품절차를 알려주세요.</p>
                                        </a>
                                    </div>
                                    <div id="all-list-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="a-heading-6">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="a-heading-7">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqlist" href="#all-list-7" aria-expanded="false" aria-controls="all-list-7">
                                            <p class="category">회원가입/정보</p>
                                            <p class="title">배송비가 무료인데 택배사에서 돈을 받아갔어요.</p>
                                        </a>
                                    </div>
                                    <div id="all-list-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="a-heading-7">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="a-heading-8">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqlist" href="#all-list-8" aria-expanded="false" aria-controls="all-list-8">
                                            <p class="category">회원가입/정보</p>
                                            <p class="title">주문했는데 사이즈를 바꾸고 싶어요 어떻게 하나요?</p>
                                        </a>
                                    </div>
                                    <div id="all-list-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="a-heading-8">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="a-heading-9">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqlist" href="#all-list-9" aria-expanded="false" aria-controls="all-list-9">
                                            <p class="category">기타</p>
                                            <p class="title">쿠폰은 어떻게 사용하면 되나요?</p>
                                        </a>
                                    </div>
                                    <div id="all-list-9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="a-heading-9">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="a-heading-10">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqlist" href="#all-list-10" aria-expanded="false" aria-controls="all-list-10">
                                            <p class="category">회원가입/정보</p>
                                            <p class="title">배송정보변경 가능하죠?</p>
                                        </a>
                                    </div>
                                    <div id="all-list-10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="a-heading-10">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav class="paging" aria-label="Page navigation">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <i class="icon-angle-double-left"></i>
                                        </a>
                                    </li><li class="arrow-left">
                                        <a href="#" aria-label="Previous">
                                            <i class="icon-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="arrow-right">
                                        <a href="#" aria-label="Next">
                                            <i class="icon-angle-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <i class="icon-angle-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            
                        </div>
                        <div role="tabpanel" class="tab-pane" id="member-faq">
                            
                            <div class="panel-group" id="m-faq" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="m-heading-1">
                                        <a role="button" data-toggle="collapse" data-parent="#m-faq" href="#member-faq-1" aria-expanded="true" aria-controls="member-faq-1">
                                            <p class="category">회원가입/정보</p>
                                            <p class="title">상품이 다른데도 묶음배송 가능한가요?</p>
                                        </a>
                                    </div>
                                    <div id="member-faq-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="m-heading-1">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="m-heading-2">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#m-faq" href="#member-faq-2" aria-expanded="false" aria-controls="member-faq-2">
                                            <p class="category">회원가입/정보</p>
                                            <p class="title">주문 후 언제까지 입금해야 하나요?</p>
                                        </a>
                                    </div>
                                    <div id="member-faq-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="m-heading-2">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="m-heading-3">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#m-faq" href="#member-faq-3" aria-expanded="false" aria-controls="member-faq-3">
                                            <p class="category">회원가입/정보</p>
                                            <p class="title">교환절차는 어떻게 진행되나요?</p>
                                        </a>
                                    </div>
                                    <div id="member-faq-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="m-heading-3">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="m-heading-4">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#m-faq" href="#member-faq-4" aria-expanded="false" aria-controls="member-faq-4">
                                            <p class="category">회원가입/정보</p>
                                            <p class="title">결제완료 후 취소 가능한가요?</p>
                                        </a>
                                    </div>
                                    <div id="member-faq-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="m-heading-4">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="m-heading-5">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#m-faq" href="#member-faq-5" aria-expanded="false" aria-controls="member-faq-5">
                                            <p class="category">회원가입/정보</p>
                                            <p class="title">환불신청은 어떻게 진행되나요?</p>
                                        </a>
                                    </div>
                                    <div id="member-faq-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="m-heading-5">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="m-heading-6">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#m-faq" href="#member-faq-6" aria-expanded="false" aria-controls="member-faq-6">
                                            <p class="category">회원가입/정보</p>
                                            <p class="title">교환 및 반품절차를 알려주세요.</p>
                                        </a>
                                    </div>
                                    <div id="member-faq-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="m-heading-6">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="m-heading-7">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#m-faq" href="#member-faq-7" aria-expanded="false" aria-controls="member-faq-7">
                                            <p class="category">회원가입/정보</p>
                                            <p class="title">배송비가 무료인데 택배사에서 돈을 받아갔어요.</p>
                                        </a>
                                    </div>
                                    <div id="member-faq-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="m-heading-7">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="m-heading-8">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#m-faq" href="#member-faq-8" aria-expanded="false" aria-controls="member-faq-8">
                                            <p class="category">회원가입/정보</p>
                                            <p class="title">주문했는데 사이즈를 바꾸고 싶어요 어떻게 하나요?</p>
                                        </a>
                                    </div>
                                    <div id="member-faq-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="m-heading-8">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="m-heading-9">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#m-faq" href="#member-faq-9" aria-expanded="false" aria-controls="member-faq-9">
                                            <p class="category">회원가입/정보</p>
                                            <p class="title">쿠폰은 어떻게 사용하면 되나요?</p>
                                        </a>
                                    </div>
                                    <div id="member-faq-9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="m-heading-9">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="m-heading-10">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#m-faq" href="#member-faq-10" aria-expanded="false" aria-controls="member-faq-10">
                                            <p class="category">회원가입/정보</p>
                                            <p class="title">배송정보변경 가능하죠?</p>
                                        </a>
                                    </div>
                                    <div id="member-faq-10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="m-heading-10">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav class="paging" aria-label="Page navigation">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <i class="icon-angle-double-left"></i>
                                        </a>
                                    </li><li class="arrow-left">
                                        <a href="#" aria-label="Previous">
                                            <i class="icon-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="arrow-right">
                                        <a href="#" aria-label="Next">
                                            <i class="icon-angle-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <i class="icon-angle-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            
                        </div>
                        <div role="tabpanel" class="tab-pane" id="product-faq">
                            
                            <div class="panel-group" id="p-faq" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="p-heading-1">
                                        <a role="button" data-toggle="collapse" data-parent="#p-faq" href="#product-faq-1" aria-expanded="true" aria-controls="product-faq-1">
                                            <p class="category">상품구매/주문및취소</p>
                                            <p class="title">상품이 다른데도 묶음배송 가능한가요?</p>
                                        </a>
                                    </div>
                                    <div id="product-faq-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="p-heading-1">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="p-heading-2">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#p-faq" href="#product-faq-2" aria-expanded="false" aria-controls="product-faq-2">
                                            <p class="category">상품구매/주문및취소</p>
                                            <p class="title">주문 후 언제까지 입금해야 하나요?</p>
                                        </a>
                                    </div>
                                    <div id="product-faq-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="p-heading-2">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="p-heading-3">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#p-faq" href="#product-faq-3" aria-expanded="false" aria-controls="product-faq-3">
                                            <p class="category">상품구매/주문및취소</p>
                                            <p class="title">교환절차는 어떻게 진행되나요?</p>
                                        </a>
                                    </div>
                                    <div id="product-faq-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="p-heading-3">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="p-heading-4">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#p-faq" href="#product-faq-4" aria-expanded="false" aria-controls="product-faq-4">
                                            <p class="category">상품구매/주문및취소</p>
                                            <p class="title">결제완료 후 취소 가능한가요?</p>
                                        </a>
                                    </div>
                                    <div id="product-faq-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="p-heading-4">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="p-heading-5">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#p-faq" href="#product-faq-5" aria-expanded="false" aria-controls="product-faq-5">
                                            <p class="category">상품구매/주문및취소</p>
                                            <p class="title">환불신청은 어떻게 진행되나요?</p>
                                        </a>
                                    </div>
                                    <div id="product-faq-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="p-heading-5">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="p-heading-6">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#p-faq" href="#product-faq-6" aria-expanded="false" aria-controls="product-faq-6">
                                            <p class="category">상품구매/주문및취소</p>
                                            <p class="title">교환 및 반품절차를 알려주세요.</p>
                                        </a>
                                    </div>
                                    <div id="product-faq-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="p-heading-6">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="p-heading-7">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#p-faq" href="#product-faq-7" aria-expanded="false" aria-controls="product-faq-7">
                                            <p class="category">상품구매/주문및취소</p>
                                            <p class="title">배송비가 무료인데 택배사에서 돈을 받아갔어요.</p>
                                        </a>
                                    </div>
                                    <div id="product-faq-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="p-heading-7">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="p-heading-8">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#p-faq" href="#product-faq-8" aria-expanded="false" aria-controls="product-faq-8">
                                            <p class="category">상품구매/주문및취소</p>
                                            <p class="title">주문했는데 사이즈를 바꾸고 싶어요 어떻게 하나요?</p>
                                        </a>
                                    </div>
                                    <div id="product-faq-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="p-heading-8">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="p-heading-9">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#p-faq" href="#product-faq-9" aria-expanded="false" aria-controls="product-faq-9">
                                            <p class="category">상품구매/주문및취소</p>
                                            <p class="title">쿠폰은 어떻게 사용하면 되나요?</p>
                                        </a>
                                    </div>
                                    <div id="product-faq-9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="p-heading-9">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="p-heading-10">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#p-faq" href="#product-faq-10" aria-expanded="false" aria-controls="product-faq-10">
                                            <p class="category">상품구매/주문및취소</p>
                                            <p class="title">배송정보변경 가능하죠?</p>
                                        </a>
                                    </div>
                                    <div id="product-faq-10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="p-heading-10">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav class="paging" aria-label="Page navigation">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <i class="icon-angle-double-left"></i>
                                        </a>
                                    </li><li class="arrow-left">
                                        <a href="#" aria-label="Previous">
                                            <i class="icon-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="arrow-right">
                                        <a href="#" aria-label="Next">
                                            <i class="icon-angle-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <i class="icon-angle-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            
                        </div>
                        <div role="tabpanel" class="tab-pane" id="delivery-faq">
                            
                            <div class="panel-group" id="d-faq" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="d-heading-1">
                                        <a role="button" data-toggle="collapse" data-parent="#d-faq" href="#delivery-faq-1" aria-expanded="true" aria-controls="delivery-faq-1">
                                            <p class="category">결제/배송</p>
                                            <p class="title">상품이 다른데도 묶음배송 가능한가요?</p>
                                        </a>
                                    </div>
                                    <div id="delivery-faq-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="d-heading-1">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="d-heading-2">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#d-faq" href="#delivery-faq-2" aria-expanded="false" aria-controls="delivery-faq-2">
                                            <p class="category">결제/배송</p>
                                            <p class="title">주문 후 언제까지 입금해야 하나요?</p>
                                        </a>
                                    </div>
                                    <div id="delivery-faq-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="d-heading-2">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="d-heading-3">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#d-faq" href="#delivery-faq-3" aria-expanded="false" aria-controls="delivery-faq-3">
                                            <p class="category">결제/배송</p>
                                            <p class="title">교환절차는 어떻게 진행되나요?</p>
                                        </a>
                                    </div>
                                    <div id="delivery-faq-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="d-heading-3">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="d-heading-4">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#d-faq" href="#delivery-faq-4" aria-expanded="false" aria-controls="delivery-faq-4">
                                            <p class="category">결제/배송</p>
                                            <p class="title">결제완료 후 취소 가능한가요?</p>
                                        </a>
                                    </div>
                                    <div id="delivery-faq-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="d-heading-4">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="d-heading-5">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#d-faq" href="#delivery-faq-5" aria-expanded="false" aria-controls="delivery-faq-5">
                                            <p class="category">결제/배송</p>
                                            <p class="title">환불신청은 어떻게 진행되나요?</p>
                                        </a>
                                    </div>
                                    <div id="delivery-faq-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="d-heading-5">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="d-heading-6">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#d-faq" href="#delivery-faq-6" aria-expanded="false" aria-controls="delivery-faq-6">
                                            <p class="category">결제/배송</p>
                                            <p class="title">교환 및 반품절차를 알려주세요.</p>
                                        </a>
                                    </div>
                                    <div id="delivery-faq-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="d-heading-6">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="d-heading-7">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#d-faq" href="#delivery-faq-7" aria-expanded="false" aria-controls="delivery-faq-7">
                                            <p class="category">결제/배송</p>
                                            <p class="title">배송비가 무료인데 택배사에서 돈을 받아갔어요.</p>
                                        </a>
                                    </div>
                                    <div id="delivery-faq-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="d-heading-7">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="d-heading-8">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#d-faq" href="#delivery-faq-8" aria-expanded="false" aria-controls="delivery-faq-8">
                                            <p class="category">결제/배송</p>
                                            <p class="title">주문했는데 사이즈를 바꾸고 싶어요 어떻게 하나요?</p>
                                        </a>
                                    </div>
                                    <div id="delivery-faq-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="d-heading-8">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="d-heading-9">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#d-faq" href="#delivery-faq-9" aria-expanded="false" aria-controls="delivery-faq-9">
                                            <p class="category">결제/배송</p>
                                            <p class="title">쿠폰은 어떻게 사용하면 되나요?</p>
                                        </a>
                                    </div>
                                    <div id="delivery-faq-9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="d-heading-9">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="d-heading-10">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#d-faq" href="#delivery-faq-10" aria-expanded="false" aria-controls="delivery-faq-10">
                                            <p class="category">결제/배송</p>
                                            <p class="title">배송정보변경 가능하죠?</p>
                                        </a>
                                    </div>
                                    <div id="delivery-faq-10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="d-heading-10">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav class="paging" aria-label="Page navigation">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <i class="icon-angle-double-left"></i>
                                        </a>
                                    </li><li class="arrow-left">
                                        <a href="#" aria-label="Previous">
                                            <i class="icon-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="arrow-right">
                                        <a href="#" aria-label="Next">
                                            <i class="icon-angle-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <i class="icon-angle-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            
                        </div>
                        <div role="tabpanel" class="tab-pane" id="refund-faq">
                            
                            <div class="panel-group" id="r-faq" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="r-heading-1">
                                        <a role="button" data-toggle="collapse" data-parent="#r-faq" href="#refund-faq-1" aria-expanded="true" aria-controls="refund-faq-1">
                                            <p class="category">교환/반품/환불</p>
                                            <p class="title">상품이 다른데도 묶음배송 가능한가요?</p>
                                        </a>
                                    </div>
                                    <div id="refund-faq-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="r-heading-1">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="r-heading-2">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#r-faq" href="#refund-faq-2" aria-expanded="false" aria-controls="refund-faq-2">
                                            <p class="category">교환/반품/환불</p>
                                            <p class="title">주문 후 언제까지 입금해야 하나요?</p>
                                        </a>
                                    </div>
                                    <div id="refund-faq-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="r-heading-2">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="r-heading-3">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#r-faq" href="#refund-faq-3" aria-expanded="false" aria-controls="refund-faq-3">
                                            <p class="category">교환/반품/환불</p>
                                            <p class="title">교환절차는 어떻게 진행되나요?</p>
                                        </a>
                                    </div>
                                    <div id="refund-faq-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="r-heading-3">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="r-heading-4">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#r-faq" href="#refund-faq-4" aria-expanded="false" aria-controls="refund-faq-4">
                                            <p class="category">교환/반품/환불</p>
                                            <p class="title">결제완료 후 취소 가능한가요?</p>
                                        </a>
                                    </div>
                                    <div id="refund-faq-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="r-heading-4">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="r-heading-5">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#r-faq" href="#refund-faq-5" aria-expanded="false" aria-controls="refund-faq-5">
                                            <p class="category">교환/반품/환불</p>
                                            <p class="title">환불신청은 어떻게 진행되나요?</p>
                                        </a>
                                    </div>
                                    <div id="refund-faq-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="r-heading-5">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="r-heading-6">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#r-faq" href="#refund-faq-6" aria-expanded="false" aria-controls="refund-faq-6">
                                            <p class="category">교환/반품/환불</p>
                                            <p class="title">교환 및 반품절차를 알려주세요.</p>
                                        </a>
                                    </div>
                                    <div id="refund-faq-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="r-heading-6">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="r-heading-7">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#r-faq" href="#refund-faq-7" aria-expanded="false" aria-controls="refund-faq-7">
                                            <p class="category">교환/반품/환불</p>
                                            <p class="title">배송비가 무료인데 택배사에서 돈을 받아갔어요.</p>
                                        </a>
                                    </div>
                                    <div id="refund-faq-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="r-heading-7">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="r-heading-8">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#r-faq" href="#refund-faq-8" aria-expanded="false" aria-controls="refund-faq-8">
                                            <p class="category">교환/반품/환불</p>
                                            <p class="title">주문했는데 사이즈를 바꾸고 싶어요 어떻게 하나요?</p>
                                        </a>
                                    </div>
                                    <div id="refund-faq-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="r-heading-8">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="r-heading-9">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#r-faq" href="#refund-faq-9" aria-expanded="false" aria-controls="refund-faq-9">
                                            <p class="category">교환/반품/환불</p>
                                            <p class="title">쿠폰은 어떻게 사용하면 되나요?</p>
                                        </a>
                                    </div>
                                    <div id="refund-faq-9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="r-heading-9">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="r-heading-10">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#r-faq" href="#refund-faq-10" aria-expanded="false" aria-controls="refund-faq-10">
                                            <p class="category">교환/반품/환불</p>
                                            <p class="title">배송정보변경 가능하죠?</p>
                                        </a>
                                    </div>
                                    <div id="refund-faq-10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="r-heading-10">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav class="paging" aria-label="Page navigation">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <i class="icon-angle-double-left"></i>
                                        </a>
                                    </li><li class="arrow-left">
                                        <a href="#" aria-label="Previous">
                                            <i class="icon-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="arrow-right">
                                        <a href="#" aria-label="Next">
                                            <i class="icon-angle-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <i class="icon-angle-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            
                        </div>
                        <div role="tabpanel" class="tab-pane" id="mileage-faq">
                           
                            <div class="panel-group" id="ml-faq" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="ml-heading-1">
                                        <a role="button" data-toggle="collapse" data-parent="#ml-faq" href="#mileage-faq-1" aria-expanded="true" aria-controls="mileage-faq-1">
                                            <p class="category">적립금</p>
                                            <p class="title">상품이 다른데도 묶음배송 가능한가요?</p>
                                        </a>
                                    </div>
                                    <div id="mileage-faq-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="ml-heading-1">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="ml-heading-2">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#ml-faq" href="#mileage-faq-2" aria-expanded="false" aria-controls="mileage-faq-2">
                                            <p class="category">적립금</p>
                                            <p class="title">주문 후 언제까지 입금해야 하나요?</p>
                                        </a>
                                    </div>
                                    <div id="mileage-faq-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ml-heading-2">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="ml-heading-3">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#ml-faq" href="#mileage-faq-3" aria-expanded="false" aria-controls="mileage-faq-3">
                                            <p class="category">적립금</p>
                                            <p class="title">교환절차는 어떻게 진행되나요?</p>
                                        </a>
                                    </div>
                                    <div id="mileage-faq-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ml-heading-3">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="ml-heading-4">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#ml-faq" href="#mileage-faq-4" aria-expanded="false" aria-controls="mileage-faq-4">
                                            <p class="category">적립금</p>
                                            <p class="title">결제완료 후 취소 가능한가요?</p>
                                        </a>
                                    </div>
                                    <div id="mileage-faq-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ml-heading-4">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="ml-heading-5">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#ml-faq" href="#mileage-faq-5" aria-expanded="false" aria-controls="mileage-faq-5">
                                            <p class="category">적립금</p>
                                            <p class="title">환불신청은 어떻게 진행되나요?</p>
                                        </a>
                                    </div>
                                    <div id="mileage-faq-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ml-heading-5">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="ml-heading-6">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#ml-faq" href="#mileage-faq-6" aria-expanded="false" aria-controls="mileage-faq-6">
                                            <p class="category">적립금</p>
                                            <p class="title">교환 및 반품절차를 알려주세요.</p>
                                        </a>
                                    </div>
                                    <div id="mileage-faq-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ml-heading-6">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="ml-heading-7">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#ml-faq" href="#mileage-faq-7" aria-expanded="false" aria-controls="mileage-faq-7">
                                            <p class="category">적립금</p>
                                            <p class="title">배송비가 무료인데 택배사에서 돈을 받아갔어요.</p>
                                        </a>
                                    </div>
                                    <div id="mileage-faq-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ml-heading-7">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="ml-heading-8">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#ml-faq" href="#mileage-faq-8" aria-expanded="false" aria-controls="mileage-faq-8">
                                            <p class="category">적립금</p>
                                            <p class="title">주문했는데 사이즈를 바꾸고 싶어요 어떻게 하나요?</p>
                                        </a>
                                    </div>
                                    <div id="mileage-faq-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ml-heading-8">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="ml-heading-9">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#ml-faq" href="#mileage-faq-9" aria-expanded="false" aria-controls="mileage-faq-9">
                                            <p class="category">적립금</p>
                                            <p class="title">쿠폰은 어떻게 사용하면 되나요?</p>
                                        </a>
                                    </div>
                                    <div id="mileage-faq-9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ml-heading-9">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="ml-heading-10">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#ml-faq" href="#mileage-faq-10" aria-expanded="false" aria-controls="mileage-faq-10">
                                            <p class="category">적립금</p>
                                            <p class="title">배송정보변경 가능하죠?</p>
                                        </a>
                                    </div>
                                    <div id="mileage-faq-10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ml-heading-10">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav class="paging" aria-label="Page navigation">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <i class="icon-angle-double-left"></i>
                                        </a>
                                    </li><li class="arrow-left">
                                        <a href="#" aria-label="Previous">
                                            <i class="icon-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="arrow-right">
                                        <a href="#" aria-label="Next">
                                            <i class="icon-angle-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <i class="icon-angle-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            
                        </div>
                        <div role="tabpanel" class="tab-pane" id="etc-faq">
                            
                            <div class="panel-group" id="e-faq" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="e-heading-1">
                                        <a role="button" data-toggle="collapse" data-parent="#e-faq" href="#etc-faq-1" aria-expanded="true" aria-controls="etc-faq-1">
                                            <p class="category">기타</p>
                                            <p class="title">상품이 다른데도 묶음배송 가능한가요?</p>
                                        </a>
                                    </div>
                                    <div id="etc-faq-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="e-heading-1">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="e-heading-2">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#e-faq" href="#etc-faq-2" aria-expanded="false" aria-controls="etc-faq-2">
                                            <p class="category">기타</p>
                                            <p class="title">주문 후 언제까지 입금해야 하나요?</p>
                                        </a>
                                    </div>
                                    <div id="etc-faq-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="e-heading-2">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="e-heading-3">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#e-faq" href="#etc-faq-3" aria-expanded="false" aria-controls="etc-faq-3">
                                            <p class="category">기타</p>
                                            <p class="title">교환절차는 어떻게 진행되나요?</p>
                                        </a>
                                    </div>
                                    <div id="etc-faq-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="e-heading-3">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="e-heading-4">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#e-faq" href="#etc-faq-4" aria-expanded="false" aria-controls="etc-faq-4">
                                            <p class="category">기타</p>
                                            <p class="title">결제완료 후 취소 가능한가요?</p>
                                        </a>
                                    </div>
                                    <div id="etc-faq-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="e-heading-4">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="e-heading-5">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#e-faq" href="#etc-faq-5" aria-expanded="false" aria-controls="etc-faq-5">
                                            <p class="category">기타</p>
                                            <p class="title">환불신청은 어떻게 진행되나요?</p>
                                        </a>
                                    </div>
                                    <div id="etc-faq-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="e-heading-5">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="e-heading-6">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#e-faq" href="#etc-faq-6" aria-expanded="false" aria-controls="etc-faq-6">
                                            <p class="category">기타</p>
                                            <p class="title">교환 및 반품절차를 알려주세요.</p>
                                        </a>
                                    </div>
                                    <div id="etc-faq-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="e-heading-6">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="e-heading-7">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#e-faq" href="#etc-faq-7" aria-expanded="false" aria-controls="etc-faq-7">
                                            <p class="category">기타</p>
                                            <p class="title">배송비가 무료인데 택배사에서 돈을 받아갔어요.</p>
                                        </a>
                                    </div>
                                    <div id="etc-faq-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="e-heading-7">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="e-heading-8">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#e-faq" href="#etc-faq-8" aria-expanded="false" aria-controls="etc-faq-8">
                                            <p class="category">기타</p>
                                            <p class="title">주문했는데 사이즈를 바꾸고 싶어요 어떻게 하나요?</p>
                                        </a>
                                    </div>
                                    <div id="etc-faq-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="e-heading-8">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="e-heading-9">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#e-faq" href="#etc-faq-9" aria-expanded="false" aria-controls="etc-faq-9">
                                            <p class="category">기타</p>
                                            <p class="title">쿠폰은 어떻게 사용하면 되나요?</p>
                                        </a>
                                    </div>
                                    <div id="etc-faq-9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="e-heading-9">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="e-heading-10">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#e-faq" href="#etc-faq-10" aria-expanded="false" aria-controls="etc-faq-10">
                                            <p class="category">기타</p>
                                            <p class="title">배송정보변경 가능하죠?</p>
                                        </a>
                                    </div>
                                    <div id="etc-faq-10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="e-heading-10">
                                        <div class="panel-body">
                                            묶음상품의 경우 수령자 성함/연락처/주소지가 동일해야만 묶음으로 출고 가능합니다. <br>
                                            주문 시 확인 부탁 드립니다. 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav class="paging" aria-label="Page navigation">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <i class="icon-angle-double-left"></i>
                                        </a>
                                    </li><li class="arrow-left">
                                        <a href="#" aria-label="Previous">
                                            <i class="icon-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="arrow-right">
                                        <a href="#" aria-label="Next">
                                            <i class="icon-angle-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <i class="icon-angle-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>