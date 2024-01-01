<!doctype html>
<html lang="ko">
<head>
    <?php $path = $_SERVER['DOCUMENT_ROOT'];?>
    <?php include("$path/include/meta_head.php"); ?>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WTGM2WFN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="wrap">
    <!-- header -->
    <?php include("$path/include/header.php"); ?>
    <!-- header End -->
    <!-- container -->
    <section id="container">
        <!-- h1 -->
        <div class="header-01">
            <h1>회원가입/수정</h1>
        </div>
        <!-- h1 End -->
        <!-- content -->
        <div class="content sm content-member-join">
            <div class="g form-t">
                <div class="r member-join__img-profile">
                    <div class="c">
                        <div class="form-g">

                            <div class="form-r flex-center-center">
                                <div class="img-profile lg">
                                    <div class="img-profile-outer">
                                        <img class="img-profile__img" src="/assets/tempImg/profile/hbs.jpg" alt="프로필 이미지">
                                    </div>
                                    <div class="img-profile__ico">
                                        <img class="img-profile__ico-camera" src="/assets/img/ico/ico-camera.png" alt="프로필 이미지 수정하기">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="r member-join__email">
                    <div class="c">
                        <div class="form-g">

                            <div class="form-r">
                                <div class="form-c">
                                    <div class="h3">
                                        <a href="#;" class="h3__link MODAL-BTN" data-target="#modalGuide"><h3>이메일 <!--img class="ico-question" src="/assets/img/ico/ico-question.png" alt="?"--></h3></a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-r forms-full">
                                <div class="form-c forms-full">
                                    <span class="forms forms-full">
                                        <input type="text" class="primary md" value="" placeholder="이메일">
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="r member-join__password">
                    <div class="c">
                        <div class="form-g">

                            <div class="form-r">
                                <div class="form-c">
                                    <div class="h3">
                                        <a href="#;" class="h3__link MODAL-BTN" data-target="#modalGuide"><h3>비밀번호 <!--img class="ico-question" src="/assets/img/ico/ico-question.png" alt="?"--></h3></a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-r forms-full">
                                <div class="form-c forms-full">
                                    <span class="forms forms-full">
                                        <input type="password" class="primary md" value="" placeholder="비밀번호">
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="r member-join__password-check">
                    <div class="c">
                        <div class="form-g">

                            <div class="form-r">
                                <div class="form-c">
                                    <div class="h3">
                                        <a href="#;" class="h3__link MODAL-BTN" data-target="#modalGuide"><h3>비밀번호 확인 <!--img class="ico-question" src="/assets/img/ico/ico-question.png" alt="?"--></h3></a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-r forms-full">
                                <div class="form-c forms-full">
                                    <span class="forms forms-full">
                                        <input type="password" class="primary md" value="" placeholder="비밀번호">
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="r member-join__id">
                    <div class="c">
                        <div class="form-g">

                            <div class="form-r">
                                <div class="form-c">
                                    <div class="h3">
                                        <a href="#;" class="h3__link MODAL-BTN" data-target="#modalGuide"><h3>아이디 <!--img class="ico-question" src="/assets/img/ico/ico-question.png" alt="?"--></h3></a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-r forms-full">
                                <div class="form-c forms-full">
                                    <span class="forms forms-full">
                                        <input type="text" class="primary md" value="" placeholder="아이디">
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="r member-join__nickname">
                    <div class="c">
                        <div class="form-g">

                            <div class="form-r">
                                <div class="form-c">
                                    <div class="h3">
                                        <a href="#;" class="h3__link MODAL-BTN" data-target="#modalGuide"><h3>닉네임 <!--img class="ico-question" src="/assets/img/ico/ico-question.png" alt="?"--></h3></a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-r forms-full">
                                <div class="form-c forms-full">
                                    <span class="forms forms-full">
                                        <input type="text" class="primary md" value="" placeholder="닉네임">
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="r member-join__introduce">
                    <div class="c">
                        <div class="form-g">

                            <div class="form-r">
                                <div class="form-c">
                                    <div class="h3">
                                        <a href="#;" class="h3__link MODAL-BTN" data-target="#modalGuide"><h3>소개 <!--img class="ico-question" src="/assets/img/ico/ico-question.png" alt="?"--></h3></a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-r forms-full">
                                <div class="form-c forms-full">
                                    <span class="forms forms-full">
                                        <textarea class="primary line-04" value="" placeholder="소개"></textarea>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="r member-join__btn-group">
                    <div class="btn-group">
                        <!--                                        <button type="button" id="SAVE" class="btn btn-white btn-lg" >미리보기</button>-->
                        <a type="button" id="SAVE" class="btn btn-primary btn-lg" href="/pages/list.php">가입하기</a>
                        <button type="button" class="btn btn-cancel btn-lg" onclick="confirm('정말 취소하시겠습니까?')">취소</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- content End -->

    </section>
    <!-- container End -->
    <!-- footer -->
    <?php include("$path/include/footer.php"); ?>
    <!-- footer End -->

    <!-- 모달 -->
    <?php include("$path/include/modal_common.php"); ?>
    <!-- 모달 End -->

</div>
</body>



