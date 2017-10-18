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
                            <li class="active"><a href="/mypage/order_list.php">주문내역/배송조회</a></li>
                            <li><a href="#">취소/교환/환불 조회</a></li>
                            <li><a href="/mypage/mileage.php">적립금</a></li>
                            <li><a href="/mypage/coupon.php">할인쿠폰</a></li>
                            <li><a href="/mypage/wish_list.php">위시리스트</a></li>
                            <li><a href="/mypage/viewed_items.php">최근 본 상품</a></li>
                            <li><a href="#">Q&amp;A</a></li>
                            <li><a href="/mypage/inquiry_list.php">1:1문의</a></li>
                            <li><a href="/mypage/pw_confirm.php">회원정보 수정</a></li>
                            <li><a href="/mypage/cart_list.php">장바구니</a></li>
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
                                                        <td>S-12345787-546453138-00</td>
                                                    </tr>
                                                    <tr>
                                                        <th>송장번호</th>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>수취인</th>
                                                        <td>무브먼트케이</td>
                                                    </tr>
                                                    <tr>
                                                        <th>연락처</th>
                                                        <td>010-1234-5678</td>
                                                    </tr>
                                                    <tr>
                                                        <th>주소</th>
                                                        <td>서울시 서초구 양재동 120-1</td>
                                                    </tr>
                                                    <tr>
                                                        <th>배송메세지</th>
                                                        <td>부재 시 연락주세요</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </article>
                                    <article class="product-info">
                                        <h5 class="table-title">주문상품 정보</h5>
                                        <div class="table-wrap type-2">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>주문상품정보</th>
                                                        <th>상품별주문번호</th>
                                                        <th>수량</th>
                                                        <th>가격</th>
                                                        <th>적립금</th>
                                                        <th>처리상태</th>
                                                        <th>배송번호</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="item-details">
                                                            <a href="#">
                                                                <p class="item">
                                                                    <img src="/design/playtex/assets/images/mypage/order_list_img01.jpg" alt="">
                                                                </p>
                                                                <p class="item-title">
                                                                    ★80%할인★[Playtex]플레이텍스 
                                                                    에센셜 노와이어 30종 택1_PXI_
                                                                    SELECT10
                                                                </p>
                                                            </a>
                                                        </td>
                                                        <td class="order-num">
                                                            2017125754548-
                                                            45826784287_[1]
                                                        </td>
                                                        <td class="product-count">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control">
                                                                <div class="count-btn">
                                                                    <button type="button" class="btn btn-up">
                                                                        <i class="icon-up-dir">
                                                                            <span class="sr-only">수량 추가</span>
                                                                        </i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-down">
                                                                        <i class="icon-down-dir">
                                                                            <span class="sr-only">수량 빼기</span>
                                                                        </i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="item-payment">71,900</td>
                                                        <td class="saved-money">630</td>
                                                        <td class="payment-state">결제대기</td>
                                                        <td class="delivery-num">
                                                            S-45804193-
                                                            54821464-00
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="payment-total">
                                                <p>71,900원(상품구매금액) (할인/추가금액) <b>71,900</b>원</p>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="payment-info">
                                        <h5 class="table-title">결제정보</h5>
                                        <div class="table-wrap type-2">
                                            <table class="table tbale-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>결제방법</th>
                                                        <th>결제금액</th>
                                                        <th>세부내역</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="title-th">사용한 적립금</td>
                                                        <td>0 원</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="title-th">사용한 예치금</td>
                                                        <td>0 원</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="title-th">무통장</td>
                                                        <td>59,900 원 (미입금)</td>
                                                        <td>우리은행 (가상) 128964868318 무브먼트케이</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </article>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-sm btn-black" data-dismiss="modal" role="button">주문취소</a>
                                            <button type="button" class="btn btn-sm btn-gray">확인</button>
                                        </p>
                                    </div>
                                </div>
                                
                                <div role="tabpanel" class="tab-pane" id="product-review">
                                    <article class="review-info">
                                        <div class="table-wrap type-2">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>주문상품정보</th>
                                                        <th>수량</th>
                                                        <th>가격</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="item-details">
                                                            <a href="#">
                                                                <p class="item">
                                                                    <img src="/design/playtex/assets/images/mypage/order_list_img01.jpg" alt="">
                                                                </p>
                                                                <p class="item-title">
                                                                    ★80%할인★[Playtex]플레이텍스 
                                                                    에센셜 노와이어 30종 택1_PXI_
                                                                    SELECT10
                                                                </p>
                                                            </a>
                                                        </td>
                                                        <td class="product-count">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control">
                                                                <div class="count-btn">
                                                                    <button type="button" class="btn btn-up">
                                                                        <i class="icon-up-dir">
                                                                            <span class="sr-only">수량 추가</span>
                                                                        </i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-down">
                                                                        <i class="icon-down-dir">
                                                                            <span class="sr-only">수량 빼기</span>
                                                                        </i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="item-payment">71,900</td>
                                                        <td>
                                                            <p class="review-btn">
                                                                <a href="#" class="btn btn-default" role="button">후기작성</a>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </article>
                                    <form action="#">
                                        <article class="review-write">
                                            <h5 class="table-title">상품후기 등록</h5>
                                            <div class="table-wrap">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <th>작성자</th>
                                                            <td>무브먼트케이</td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="u-pw">비밀번호</label></th>
                                                            <td class="password">
                                                                <div class="form-group">
                                                                    <input type="password" id="u-pw" class="form-control">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="u-mail">이메일</label></th>
                                                            <td class="e-mail">
                                                                <div class="form-group">
                                                                    <input type="email" id="u-mail" class="form-control">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>평점</th>
                                                            <td class="product-grade">
                                                                <div class="form-group">
                                                                    <label>
                                                                        <input type="radio">
                                                                        <i class="icon-star"></i>
                                                                        <i class="icon-star"></i>
                                                                        <i class="icon-star"></i>
                                                                        <i class="icon-star"></i>
                                                                        <i class="icon-star"></i>
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio">
                                                                        <i class="icon-star-empty"></i>
                                                                        <i class="icon-star"></i>
                                                                        <i class="icon-star"></i>
                                                                        <i class="icon-star"></i>
                                                                        <i class="icon-star"></i>
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio">
                                                                        <i class="icon-star-empty"></i>
                                                                        <i class="icon-star-empty"></i>
                                                                        <i class="icon-star"></i>
                                                                        <i class="icon-star"></i>
                                                                        <i class="icon-star"></i>
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio">
                                                                        <i class="icon-star-empty"></i>
                                                                        <i class="icon-star-empty"></i>
                                                                        <i class="icon-star-empty"></i>
                                                                        <i class="icon-star"></i>
                                                                        <i class="icon-star"></i>
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio">
                                                                        <i class="icon-star-empty"></i>
                                                                        <i class="icon-star-empty"></i>
                                                                        <i class="icon-star-empty"></i>
                                                                        <i class="icon-star-empty"></i>
                                                                        <i class="icon-star"></i>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="subject">제목</label></th>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="text" id="subject" class="form-control">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="review-content"><label for="review-content">내용</label></th>
                                                            <td class="review-content">
                                                                <div class="form-group">
                                                                    <textarea id="review-content" class="form-control"></textarea>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>첨부파일</th>
                                                            <td class="attach">
                                                                <div class="form-group">
                                                                    <input type="file" id="attach" class="form-control">
                                                                    <label for="attach">찾아보기</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </article>
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-sm btn-black" data-dismiss="modal" role="button">취소</a>
                                                <button type="button" class="btn btn-sm btn-gray">확인</button>
                                            </p>
                                        </div>
                                    </form>
                                </div>
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