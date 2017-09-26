<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>

<!-- 대메뉴 Class -->
<body class="member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- 서브페이지 배경 -->
    <div class="page-header">
        <h2>Join</h2>
    </div>
    <!-- 페이지 Class -->
    <main id="content" class="join">
        <div class="container">
            <article class="agreement">
                <div class="article-header">
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2">
                            <ul class="step-list">
                                <li class="active">
                                    <div>
                                        <p class="figure">
                                            <img src="/assets/images/member/step_active_img01.png" alt="STEP 01">
                                        </p>
                                        <p class="details">STEP 01</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p class="figure">
                                            <img src="/assets/images/member/step_img02.png" alt="STEP 02">
                                        </p>
                                        <p class="details">STEP 02</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p class="figure">
                                            <img src="/assets/images/member/step_img03.png" alt="STEP 03">
                                        </p>
                                        <p class="details">STEP 03</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="article-content">
                    <form action="#">
                        <div class="consent">
                            <div class="consent-head">
                                <label><input type="checkbox"> 전체 동의하기</label>
                            </div>
                            <div class="consent-content">
                                <div class="form-group">
                                    <label><input type="checkbox"> 이용약관 동의</label>
                                    <p class="consent-btn">
                                        <a href="#" class="btn btn-default" role="button">내용보기</a>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label><input type="checkbox"> 개인정보 수집 및 이용 안내 동의</label>
                                    <p class="consent-btn">
                                        <a href="#" class="btn btn-default" role="button">내용보기</a>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label class="marketing"><input type="checkbox"> 마케팅 수신동의 </label>
                                    (
                                    <label class="mail"><input type="checkbox"> 이메일</label>
                                    <label class="sms"><input type="checkbox"> SMS</label>
                                    )
                                </div>
                                <hr>
                                <p class="summary">
                                    쇼핑몰에서 제공하는 신상품 소식/ 할인쿠폰을 무상으로 보내드립니다.<br>
                                    단, 상품 구매 정보는 수신동의 여부 관계없이 발송됩니다.<br>
                                    제공 동의를 하지 않으셔도 서비스 이용에는 문제가 없습니다.
                                </p>
                            </div>
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-lg btn-black">동의하고 가입하기</button>
                            </p>
                        </div>
                    </form>
                    <div class="terms">
                        <h3>이용약관</h3>
                        <div>
                            인터넷 쇼핑몰 『플레이텍스몰』회원 약관<br><br>
                            제1조(목적)<br>
                            이 약관은 엠코르셋(주) 회사(전자상거래 사업자)가 운영하는 플레이텍스몰(이하 “몰”이라 한다)에서 제공하는 인터넷 관련 서비스(이하 “서비스”라 한다)를 이용함에 있어 사이버 몰과 이용자의 권리·의무 및 책임사항을 규정함을 목적으로 합니다.<br><br>
                            ※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니다.」
                        </div>
                    </div>
                    <div class="privacy">
                        <h3>개인정보 수집·이용</h3>
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>구분</th>
                                        <th>목적</th>
                                        <th>항목</th>
                                        <th>보유기간</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>필수정보</td>
                                        <td>회원제 서비스 이용 / 본인확인</td>
                                        <td>이름, 아이디, 비밀번호, 이메일, 휴대폰, 생일</td>
                                        <td>회원탈퇴 후 5일까지</td>
                                    </tr>
                                    <tr>
                                        <td>선택정보</td>
                                        <td>마케팅 활용(이벤트, 맞춤형 광고)</td>
                                        <td>휴대폰, 이메일, 쿠키정보</td>
                                        <td>회원탈퇴 후 5일까지</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>
                                귀하께서는 쇼핑몰에서 위와 같이 수집하는 개인정보에 대해, 동의하지 않거나 개인정보를 기재하지 않음으로써 거부할 수 있습니다.<br>
                                다만, 이때 회원에게 제공되는 서비스가 제한될 수 있습니다. 
                            </p>
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