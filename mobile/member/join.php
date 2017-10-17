<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
</head>
<body class="member">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/nav.php"); ?>
	<main id="content" class="join">
		<div class="page-header">
		    <h2 class="title">Join</h2>
		</div>
		<article class="join-form">
		    <div class="container">
                <div class="article-header">
                    <ul class="step-list">
                        <li>
                            <p class="figure">
                                <img src="/design/playtex/mobile/assets/images/member/step_img01.png" alt="STEP 01">
                            </p>
                            <p class="details">STEP 01</p>
                        </li>
                        <li class="active">
                            <p class="figure">
                                <img src="/design/playtex/mobile/assets/images/member/step_active_img02.png" alt="STEP 02">
                            </p>
                            <p class="details">STEP 02</p>
                        </li>
                        <li>
                            <p class="figure">
                                <img src="/design/playtex/mobile/assets/images/member/step_img03.png" alt="STEP 03">
                            </p>
                            <p class="details">STEP 03</p>
                        </li>
                    </ul>
                </div>
		        <div class="article-content">
                    <form action="#">
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th><label for="u-name">이름</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-name" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-id">아이디</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-id" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="v-align"><label for="u-pw">비밀번호</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="password" id="u-pw" class="form-control">
                                            </div>
                                            <p class="note">
                                                영문 대소문자/숫자/특수문자를 혼용 하여 2종류 10~16자 또는 3종류 8~16자
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="pw-find">비밀번호<br>확인</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="password" id="pw-find" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-mail">이메일</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="email" id="u-mail" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>생년월일</th>
                                        <td class="birthday">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>년도</option>
                                                </select>
                                                <select class="form-control">
                                                    <option>월</option>
                                                </select>
                                                <select class="form-control">
                                                    <option>일</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-phone">휴대폰번호</label></th>
                                        <td class="certificate">
                                            <div class="form-group">
                                                <input type="text" id="u-phone" class="form-control">
                                            </div>
                                            <p class="btn-certificate">
                                                <a href="#" class="btn btn-xs" role="button">인증하기</a>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="authentication">SMS인증<br>번호</label></th>
                                        <td class="certificate">
                                            <div class="form-group">
                                                <input type="text" id="authentication" class="form-control">
                                            </div>
                                            <p class="btn-certificate">
                                                <a href="#" class="btn btn-xs" role="button">확인</a>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="check-box">
                                <label><input type="checkbox"> 14세 이상입니다.(필수)</label>
                                <p>
                                    회원가입에 필요한 최소한의 정보만 입력 받음으로써 고객님의 개인정보 수집을 최소화하고 편리한 회원가입을 제공합니다.
                                </p>
                            </div>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-sm btn-gray" role="button">취소</a>
                                <button type="submit" class="btn btn-sm btn-black">회원가입하기</button>
                            </p>
                        </div>
		            </form>
		        </div>
		    </div>
		</article>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>