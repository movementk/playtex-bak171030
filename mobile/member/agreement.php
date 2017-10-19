<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="member">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="agreement">
		<div class="page-header">
		    <h2 class="title">Join</h2>
		</div>
		<article>
		    <div class="container">
                <div class="article-header">
                    <ul class="step-list">
                        <li class="active">
                            <p class="figure">
                                <img src="/design/playtex/mobile/images/member/step_active_img01.png" alt="STEP 01">
                            </p>
                            <p class="details">STEP 01</p>
                        </li>
                        <li>
                            <p class="figure">
                                <img src="/design/playtex/mobile/images/member/step_img02.png" alt="STEP 02">
                            </p>
                            <p class="details">STEP 02</p>
                        </li>
                        <li>
                            <p class="figure">
                                <img src="/design/playtex/mobile/images/member/step_img03.png" alt="STEP 03">
                            </p>
                            <p class="details">STEP 03</p>
                        </li>
                    </ul>
                </div>
		        <div class="article-content">
                    <form action="#">
                        <div class="all-selection">
                            <div class="selection-head">
                                <label class="section-title"><input type="checkbox"> 전체 동의하기</label>
                            </div>
                            <div class="section-content">
                                <div class="form-group">
                                    <label><input type="checkbox"> 이용약관 동의</label>
                                    <p class="more">
                                        <a href="#" class="btn btn-xs btn-white">내용보기</a>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label><input type="checkbox"> 개인정보 수집 및<br> 이용안내 동의</label>
                                    <p class="more">
                                        <a href="#" class="btn btn-xs btn-white">내용보기</a>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label><input type="checkbox"> 마케팅 수신동의</label>
                                    <ul>
                                        <li><label><input type="checkbox"> 이메일</label></li>
                                        <li><label><input type="checkbox"> SMS</label></li>
                                    </ul>
                                </div>
                                <hr>
                                <p class="summary">
                                    쇼핑몰에서 제공하는 신상품 소식/ 할인쿠폰을 무상으로 보내드립니다. 단, 상품 구매 정보는 수신동의 여부 관계없이 발송됩니다. 제공 동의를 하지 않으셔도 서비스 이용에는 문제가 없습니다.
                                </p>
                            </div>
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-default btn-gray">동의하고 가입하기</button>
                            </p>
                        </div>
                    </form>
		        </div>
		    </div>
		</article>
        <div class="container">
            <article id="terms" class="terms">
                <div class="article-header">
                    <h3>이용약관</h3>
                </div>
                <div class="article-content">
                    인터넷 쇼핑몰 『플레이텍스몰』회원 약관<br><br>
                    제1조(목적)<br>
                    이 약관은 엠코르셋(주) 회사(전자상거래 사업자)가 운영하는 플레이텍스몰(이하 “몰”이라 한다) 에서 제공하는 인터넷 관련 서비스(이하 “서비스”라 한다)를 이용함에 있어 사이버 몰과 이용자의 권리·의무 및 책임사항을 규정함을 목적으로 합니다.<br><br>
                    ※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니다.
                </div>
            </article>
            <article id="private" class="private">
                <div class="article-header">
                    <h3>개인정보 수집·이용</h3>
                </div>
                <div class="article-content">
                    <div class="table-wrap">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>구분</th>
                                    <td>필수정보</td>
                                    <td>선택정보</td>
                                </tr>
                                <tr>
                                    <th>목적</th>
                                    <td>회원제 서비스<br>이용 / 본인확인</td>
                                    <td>회원제 서비스<br>이용 / 본인확인</td>
                                </tr>
                                <tr>
                                    <th>항목</th>
                                    <td>이름, 아이디,<br>비밀번호, 이메일,<br>휴대폰, 생일</td>
                                    <td>휴대폰, 이메일,<br>쿠키정보</td>
                                </tr>
                                <tr>
                                    <th>보유기간</th>
                                    <td>회원탈퇴 후<br>5일까지</td>
                                    <td>회원탈퇴 후<br>5일까지</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>
                        귀하께서는 쇼핑몰에서 위와 같이 수집하는 개인정보에 대해, 동의하지 않거나 개인정보를 기재하지 않음으로써 거부할 수 있습니다. 다만, 이때 회원에게 제공되는 서비스가 제한될 수 있습니다. 
                    </p>
                </div>
            </article>
        </div>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>