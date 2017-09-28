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
    <main id="content" class="qna-list">
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
                                    <th>NO.</th>
                                    <th>Product</th>
                                    <th>Title</th>
                                    <th>Writer</th>
                                    <th>Date</th>
                                    <th>Hit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="product">
                                        <figure>
                                            <img src="/assets/images/board/qna_list_img01.jpg" alt="">
                                        </figure>
                                    </td>
                                    <td class="title">
                                        <a href="#" class="product-title">★80%할인★[Playtex]플레이텍스 에센셜 노와이어 30종 택1_PXI_SELECT10</a>
                                        <a href="/board/qna_view.php" class="subject">[상품문의] 구성품이 어떻게 되나요?</a>
                                    </td>
                                    <td>송혜*</td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">123</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="product"></td>
                                    <td class="title">
                                        <a href="#" class="product-title">★80%할인★[Playtex]플레이텍스 에센셜 노와이어 30종 택1_PXI_SELECT10</a>
                                        <a href="/board/qna_view.php" class="subject reply">[상품문의] 구성품이 어떻게 되나요?</a>
                                    </td>
                                    <td>
                                        <figure>
                                            <img src="/assets/images/board/playtex_logo.jpg" alt="">
                                        </figure>
                                    </td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">55</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="product"></td>
                                    <td class="title">
                                        <a href="/board/qna_view.php" class="subject">[배송문의] 언제쯤 배송이 될까요?</a>
                                    </td>
                                    <td>전지*</td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">13</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="product"></td>
                                    <td class="title">
                                        <a href="/board/qna_view.php" class="subject reply">[배송문의] 언제쯤 배송이 될까요?</a>
                                    </td>
                                    <td>
                                        <figure>
                                            <img src="/assets/images/board/playtex_logo.jpg" alt="">
                                        </figure>
                                    </td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">5</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="product">
                                        <figure>
                                            <img src="/assets/images/board/qna_list_img02.jpg" alt="">
                                        </figure>
                                    </td>
                                    <td class="title">
                                        <a href="#" class="product-title">★57%+세컨3종증정★[Playtex]플레이텍스 에센셜 노와이어 브라팬티 11종세트 PXI03_08</a>
                                        <a href="/board/qna_view.php" class="subject">[교환문의] 주문을 확인했는데 사이즈가 잘못선택 되었어요</a>
                                    </td>
                                    <td>김소*</td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">123</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="product">
                                        <figure>
                                            <img src="/assets/images/board/qna_list_img03.jpg" alt="">
                                        </figure>
                                    </td>
                                    <td class="title">
                                        <a href="#" class="product-title">★66%할인★[Playtex] 플레이텍스 노와이어 4종세트 PXW6H6566_T</a>
                                        <a href="/board/qna_view.php" class="subject">[배송문의] 문의합니다.</a>
                                    </td>
                                    <td>이나*</td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">123</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="product">
                                        <figure>
                                            <img src="/assets/images/board/qna_list_img04.jpg" alt="">
                                        </figure>
                                    </td>
                                    <td class="title">
                                        <a href="#" class="product-title">[Playtex] 플레이텍스 2종세트 12스타일택1 PX_SELECT464815</a>
                                        <a href="/board/qna_view.php" class="subject">[상품문의] 문의합니다.</a>
                                    </td>
                                    <td>박보*</td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">123</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="product"></td>
                                    <td class="title">
                                        <a href="/board/qna_view.php" class="subject">[취소/환불문의] 문의드립니다</a>
                                    </td>
                                    <td>전지*</td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">13</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="product"></td>
                                    <td class="title">
                                        <a href="/board/qna_view.php" class="subject">[취소/환불문의] 문의드립니다</a>
                                    </td>
                                    <td>김지*</td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">13</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="product"></td>
                                    <td class="title">
                                        <a href="/board/qna_view.php" class="subject">[상품문의] 80c 재입고 예정이나 80d 사이즈는 안나오나요?</a>
                                    </td>
                                    <td>김희*</td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">13</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="/board/qna_write.php" class="btn btn-sm btn-black" role="button">문의하기</a>
                        </p>
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