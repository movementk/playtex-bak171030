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
            <article class="join-form">
                <div class="article-header">
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2">
                            <ul class="step-list">
                                <li>
                                    <div>
                                        <p class="figure">
                                            <img src="/design/playtex/assets/images/member/step_img01.png" alt="STEP 01">
                                        </p>
                                        <p class="details">STEP 01</p>
                                    </div>
                                </li>
                                <li class="active">
                                    <div>
                                        <p class="figure">
                                            <img src="/design/playtex/assets/images/member/step_active_img02.png" alt="STEP 02">
                                        </p>
                                        <p class="details">STEP 02</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p class="figure">
                                            <img src="/design/playtex/assets/images/member/step_img03.png" alt="STEP 03">
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
                                        <th><label for="u-pw">비밀번호</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="password" id="u-pw" class="form-control">
                                            </div>
                                            <p class="note">
                                                영문 대소문자/숫자/특수문자를 혼용하여 2종류 10~16자 또는 3종류 8~16자
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="confirm-pw">비밀번호 확인</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="password" id="confirm-pw" class="form-control">
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
                                                <a href="#" class="btn btn-default" role="button">인증하기</a>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="sms">SMS인증번호</label></th>
                                        <td class="certificate">
                                            <div class="form-group">
                                                <input type="text" id="sms" class="form-control">
                                            </div>
                                            <p class="btn-certificate">
                                                <a href="#" class="btn btn-default" role="button">확인</a>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="essential">
                            <label><input type="checkbox"> 14세 이상입니다.(필수)</label>
                            <p>회원가입에 필요한 최소한의 정보만 입력 받음으로써 고객님의 개인정보 수집을 최소화하고 편리한 회원가입을 제공합니다.</p>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-lg btn-gray" role="button">취소하기</a>
                                <button type="submit" class="btn btn-lg btn-black">회원가입하기</button>
                            </p>
                        </div>
                    </form>
                </div>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>