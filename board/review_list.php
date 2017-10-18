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
    <main id="content" class="review-list">
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
                    <div class="table-wrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Title</th>
                                    <th>Writer</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product">
                                        <figure>
                                            <img src="/design/playtex/assets/images/board/review_img01.jpg" alt="">
                                        </figure>
                                    </td>
                                    <td class="title">
                                        <a href="#" class="product-title">★80%할인★[Playtex]플레이텍스 에센셜 노와이어 30종 택1_PXI_SELECT10</a>
                                        <a href="/board/review_view.php" class="subject">역시 플레이텍스네요!</a>
                                    </td>
                                    <td>송혜*</td>
                                    <td class="date">2017-08-01</td>
                                </tr>
                                <tr>
                                    <td class="product">
                                        <figure>
                                            <img src="/design/playtex/assets/images/board/review_img02.jpg" alt="">
                                        </figure>
                                    </td>
                                    <td class="title">
                                        <a href="#" class="product-title">★57%+세컨3종증정★[Playtex]플레이텍스 에센셜 노와이어 브라팬티 11종세트 PXI03_08</a>
                                        <a href="/board/review_view.php" class="subject">배송도 빠르고 너무 좋아요</a>
                                    </td>
                                    <td>전지*</td>
                                    <td class="date">2017-08-01</td>
                                </tr>
                                <tr>
                                    <td class="product">
                                        <figure>
                                            <img src="/design/playtex/assets/images/board/review_img03.jpg" alt="">
                                        </figure>
                                    </td>
                                    <td class="title">
                                        <a href="#" class="product-title">★66%할인★[Playtex] 플레이텍스 노와이어 4종세트 PXW6H6567_T</a>
                                        <a href="/board/review_view.php" class="subject">좋은 재질, 좋은 착용감 추천합니다</a>
                                    </td>
                                    <td>박보*</td>
                                    <td class="date">2017-08-01</td>
                                </tr>
                                <tr>
                                    <td class="product">
                                        <figure>
                                            <img src="/design/playtex/assets/images/board/review_img04.jpg" alt="">
                                        </figure>
                                    </td>
                                    <td class="title">
                                        <a href="#" class="product-title">[Playtex] 플레이텍스 2종세트 12스타일택1 PX_SELECT464815</a>
                                        <a href="/board/review_view.php" class="subject">가격대비 좋은 제품입니다.</a>
                                    </td>
                                    <td>김희*</td>
                                    <td class="date">2017-08-01</td>
                                </tr>
                                <tr>
                                    <td class="product">
                                        <figure>
                                            <img src="/design/playtex/assets/images/board/review_img01.jpg" alt="">
                                        </figure>
                                    </td>
                                    <td class="title">
                                        <a href="#" class="product-title">★80%할인★[Playtex]플레이텍스 에센셜 노와이어 30종 택1_PXI_SELECT10</a>
                                        <a href="/board/review_view.php" class="subject">좋아요 배송도 빠르고 항상 여기꺼만 입어요</a>
                                    </td>
                                    <td>김혜*</td>
                                    <td class="date">2017-08-01</td>
                                </tr>
                                <tr>
                                    <td class="product">
                                        <figure>
                                            <img src="/design/playtex/assets/images/board/review_img02.jpg" alt="">
                                        </figure>
                                    </td>
                                    <td class="title">
                                        <a href="#" class="product-title">★57%+세컨3종증정★[Playtex]플레이텍스 에센셜 노와이어 브라팬티 11종세트 PXI03_08</a>
                                        <a href="/board/review_view.php" class="subject">너무 만족합니다</a>
                                    </td>
                                    <td>설*</td>
                                    <td class="date">2017-08-01</td>
                                </tr>
                                <tr>
                                    <td class="product">
                                        <figure>
                                            <img src="/design/playtex/assets/images/board/review_img03.jpg" alt="">
                                        </figure>
                                    </td>
                                    <td class="title">
                                        <a href="#" class="product-title">★80%할인★[Playtex]플레이텍스 에센셜 노와이어 30종 택1_PXI_SELECT10</a>
                                        <a href="/board/review_view.php" class="subject">잘 구매했습니다~~</a>
                                    </td>
                                    <td>신민*</td>
                                    <td class="date">2017-08-01</td>
                                </tr>
                                <tr>
                                    <td class="product">
                                        <figure>
                                            <img src="/design/playtex/assets/images/board/review_img04.jpg" alt="">
                                        </figure>
                                    </td>
                                    <td class="title">
                                        <a href="#" class="product-title">★66%할인★[Playtex] 플레이텍스 노와이어 4종세트 PXW6H6567_T</a>
                                        <a href="/board/review_view.php" class="subject">역시 플레이텍스네요!</a>
                                    </td>
                                    <td>이나*</td>
                                    <td class="date">2017-08-01</td>
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
                </div>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>