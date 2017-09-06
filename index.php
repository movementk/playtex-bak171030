<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>플레이텍스</title>
        <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/fontello/css/fontello.css" rel="stylesheet">
        <link href="/assets/css/default.css" rel="stylesheet">

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    
    <!-- 대메뉴 Class -->
    <body class="">
        <header id="header">
            <div class="container-fluid">
                <h1 class="logo">
                    <a href="/"><img src="/assets/images/main/logo.png" alt="playtex logo"></a>
                </h1>
                <nav id="nav">
                    <ul>
                        <li><a href="#">LINE</a></li>
                        <li><a href="#">ITEM</a></li>
                        <li><a href="#">EVENT</a></li>
                        <li><a href="#">SPECIAL</a></li>
                        <li><a href="#">BOARD</a></li>
                    </ul>
                </nav>
            </div>
            <div id="quick-nav">
                <ul>
                    <li><a href="#"><i class="icon-user"></i></a></li>
                    <li><a href="#"><i class="icon-lock"></i></a></li>
                    <li><a href="#"><i class="icon-cart"></i></a></li>
                </ul>
                <button type="button" class="btn-search">
                    <i class="icon-search">
                        <snap class="sr-only">검색하기</snap>
                    </i>
                </button>
<!--
                <div class="global-search">
                    <form action="#">
                        <button type="submit" class="btn-search btn">
                            <span class="sr-only">검색하기</span>
                        </button>
                    </form>
                </div>
-->
            </div>
        </header>
        <!-- 페이지 Class -->
        <main id="content">
            <div class="jumbotron">
                <ul>
                    <li>
                        <a href="#">
                            <img src="/assets/images/main/jumbo_img01.jpg" class="img-responsive" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/assets/images/main/jumbo_img01.jpg" class="img-responsive" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/assets/images/main/jumbo_img01.jpg" class="img-responsive" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/assets/images/main/jumbo_img01.jpg" class="img-responsive" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="container-fluid">
                aaa
            </div>
        </main>
        <nav id="event">
            <div class="container-fluid">
                <div class="event-list">
                    <ul class="row">
                        <li class="col-xs-4">
                            <a href="#">
                                <img src="/assets/images/main/event_img01.jpg" class="img-responsive" alt="">
                            </a>
                        </li>
                        <li class="col-xs-4">
                            <a href="#">
                                <img src="/assets/images/main/event_img02.jpg" class="img-responsive" alt="">
                            </a>
                        </li>
                        <li class="col-xs-4">
                            <a href="#">
                                <img src="/assets/images/main/event_img03.jpg" class="img-responsive" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="company-info">
            <div class="container">
                
            </div>
        </div>
        <footer id="footer">
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/jquery.bxslider/jquery.bxslider.min.js"></script>
        <script>
            (function($) {
                $('.jumbotron > ul').bxSlider({
                    auto: true,
                    controls: false
                });
            })(jQuery);
        </script>
    </body>
</html>