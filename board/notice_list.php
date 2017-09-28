<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>

<!-- 대메뉴 Class -->
<body class="board">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- 서브페이지 배경 -->
    <div class="page-header">
        <h2>Notice</h2>
    </div>
    <!-- 페이지 Class -->
    <main id="content" class="notice-list">
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
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Hit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="title">
                                        <a href="/board/notice_view.php">회원등급 업그레이드 안내</a>
                                    </td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">123</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="title">
                                        <a href="/board/notice_view.php">플레이텍스몰 1주년 기념 무상팬티 배송안내</a>
                                    </td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">55</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="title">
                                        <a href="/board/notice_view.php">5월 첫 주 황금연휴 고객센터/배송안내</a>
                                    </td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">13</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="title">
                                        <a href="/board/notice_view.php">플레이텍스몰 가격대별 사은품 안내</a>
                                    </td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">5</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="title">
                                        <a href="/board/notice_view.php">2017년 구정연휴 고객센터/배송 안내 </a>
                                    </td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">123</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="title">
                                        <a href="/board/notice_view.php">회원등급 업그레이드 안내</a>
                                    </td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">123</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="title">
                                        <a href="/board/notice_view.php">플레이텍스몰 1주년 기념 무상팬티 배송안내</a>
                                    </td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">55</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="title">
                                        <a href="/board/notice_view.php">5월 첫 주 황금연휴 고객센터/배송안내</a>
                                    </td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">13</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="title">
                                        <a href="/board/notice_view.php">플레이텍스몰 가격대별 사은품 안내</a>
                                    </td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">5</td>
                                </tr>
                                <tr>
                                    <td class="num">123</td>
                                    <td class="title">
                                        <a href="/board/notice_view.php">2017년 구정연휴 고객센터/배송 안내 </a>
                                    </td>
                                    <td class="date">2017-08-01</td>
                                    <td class="hit">123</td>
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