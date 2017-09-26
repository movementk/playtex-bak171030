<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>

<!-- 대메뉴 Class -->
<body class="mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- 서브페이지 배경 -->
    <div class="page-header">
        <h2>Order List</h2>
    </div>
    <!-- 페이지 Class -->
    <main id="content" class="order-list">
        <div class="container">
            <article>
                <div class="article-header">
                    <nav class="mypage-tab">
                        <ul>
                            <li class="active"><a href="#">주문내역/배송조회</a></li>
                            <li><a href="#">취소/교환/환불 조회</a></li>
                            <li><a href="#">적립금</a></li>
                            <li><a href="#">할인쿠폰</a></li>
                            <li><a href="#">위시리스트</a></li>
                            <li><a href="#">최근 본 상품</a></li>
                            <li><a href="#">Q&amp;A</a></li>
                            <li><a href="#">1:1문의</a></li>
                            <li><a href="#">회원정보 수정</a></li>
                            <li><a href="#">장바구니</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="article-content">
                    <div class="table-wrap">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>주문일자</th>
                                    <th>상품명</th>
                                    <th>결제금액</th>
                                    <th>주문상세</th>
                                    <th>주문현황</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="num">2017-08-01</td>
                                    <td class="title">
                                        <a href="#">★57%+세컨3종증정★[Playtex]플레이텍스 에센셜 노와이어 브라팬티 11종세트 PXI03_08</a>
                                    </td>
                                    <td class="payment">71,900</td>
                                    <td>
                                        <div class="btn-inquiry">
                                            <p>
                                                <a href="#" class="btn btn-xs btn-gray" role="button" data-toggle="modal" data-target="#inquiry-Modal">주문조회</a>
                                                <a href="#" class="btn btn-xs btn-beige" role="button">배송조회</a>
                                            </p>
                                        </div>
                                    </td>
                                    <td>배송완료</td>
                                </tr>
                                <tr>
                                    <td class="num">2017-08-01</td>
                                    <td class="title">
                                        <a href="#">★57%+세컨3종증정★[Playtex]플레이텍스 에센셜 노와이어 브라팬티 11종세트 PXI03_11</a>
                                    </td>
                                    <td class="payment">71,900</td>
                                    <td>
                                        <div class="btn-inquiry">
                                            <p>
                                                <a href="#" class="btn btn-xs btn-gray" role="button" data-toggle="modal" data-target="#inquiry-Modal">주문조회</a>
                                                <a href="#" class="btn btn-xs btn-beige" role="button">배송중</a>
                                            </p>
                                        </div>
                                    </td>
                                    <td>배송완료</td>
                                </tr>
                                <tr>
                                    <td class="num">2017-08-01</td>
                                    <td class="title">
                                        <a href="#">★80%할인★[Playtex]플레이텍스 에센셜 노와이어 30종 택1_PXI_SELECT10</a>
                                    </td>
                                    <td class="payment">16,900</td>
                                    <td>
                                        <div class="btn-inquiry">
                                            <p>
                                                <a href="#" class="btn btn-xs btn-gray" role="button" data-toggle="modal" data-target="#inquiry-Modal">주문조회</a>
                                                <a href="#" class="btn btn-xs btn-beige" role="button">주문취소</a>
                                            </p>
                                        </div>
                                    </td>
                                    <td>배송완료</td>
                                </tr>
                            </tbody>
                        </table>
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
                    <div class="attention">
                        <ul>
                            <li>구매확정 버튼을 통해 구매 확정된 상품에 대해서는 후기쓰기 버튼으로 제품의 구매 후기를 작성하실수 있으며 해당 상품에 대한 적립금이 바로 증정됩니다.</li>
                            <li>구매확정 후에는 판매자에게 정산을 지급함에 따라 교환/환불이 불가하며, 문제 발생시 판매자와 구매자가 직접 처리하셔야 합니다.</li>
                            <li>별도 '구매확정'을 하지 않으실 경우, 배송업체에 따라 상품 배송완료일로부터 7일 이후에 자동으로 구매확정되며 해당 상품에 대한 적립금이 증정됩니다.</li>
                        </ul>
                    </div>
                </div>
            </article>
            
            <!-- 주문 조회 및 리뷰 -->
            <div class="modal fade" id="inquiry-Modal" tabindex="-1" role="dialog" aria-labelledby="inquiry-ModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="inquiry-ModalLabel">Order Details</h4>
                            <p><b>무브먼트케이</b> 님께서 2017년 08월 01에 주문하신 내역입니다.</p>
                        </div>
                        <div class="modal-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#order-details" aria-controls="order-details" role="tab" data-toggle="tab">주문상세내역</a>
                                </li>
                                <li role="presentation">
                                    <a href="#product-review" aria-controls="product-review" role="tab" data-toggle="tab">상품후기등록</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="order-details">
                                    <article class="user-info">
                                        <h5 class="table-title">주문자 정보</h5>
                                        <div class="table-wrap">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>주문번호</th>
                                                        <td>12345787-546453138</td>
                                                    </tr>
                                                    <tr>
                                                        <th>주문일자</th>
                                                        <td>2017-08-01</td>
                                                    </tr>
                                                    <tr>
                                                        <th>주문자</th>
                                                        <td>무브먼트케이</td>
                                                    </tr>
                                                    <tr>
                                                        <th>주문서 입금현황</th>
                                                        <td>미입금</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </article>
                                    <article class="shipping-address">
                                        <h5 class="table-title">배송지 정보</h5>
                                        <div class="table-wrap">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>배송번호</th>
                                                        <td>12345787-546453138</td>
                                                    </tr>
                                                    <tr>
                                                        <th>송장번호</th>
                                                        <td>2017-08-01</td>
                                                    </tr>
                                                    <tr>
                                                        <th>수취인</th>
                                                        <td>무브먼트케이</td>
                                                    </tr>
                                                    <tr>
                                                        <th>연락처</th>
                                                        <td>미입금</td>
                                                    </tr>
                                                    <tr>
                                                        <th>주소</th>
                                                        <td>미입금</td>
                                                    </tr>
                                                    <tr>
                                                        <th>배송메세지</th>
                                                        <td>미입금</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </article>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="product-review">
                                    상품후기등록
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="btn-area">
                                <p>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>