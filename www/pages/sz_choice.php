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
            <h1>상장 디자인 선택하기</h1>
        </div>
        <!-- h1 End -->
        <!-- content -->
        <!-- content -->
        <div class="content content-sz-choice">
            <div class="g">
                <div class="r">
                    <style>
                        .sz-bg-design-choice{width:100%;flex:1;padding:10px;}
                        .sz-bg-design-choice > ul{display:flex;flex-wrap:wrap;margin:0 -10px;width:calc(100% + 20px);}
                        .sz-bg-design-choice__li{overflow:hidden;margin:15px 10px;width:calc((100% / 4) - 20px);}
                        .sz-bg-design-choice__li:hover{transition:all 0.2s;transform:translate(0, -5px);}
                        .sz-bg-design-choice__li__link{display:block;width:100%;overflow:hidden;}
                        .sz-bg-design-choice__li__link__img{width:100%;display:block;}

                        @media (max-width: 1000px) {
                            .sz-bg-design-choice__li{width:calc((100% / 3) - 20px);}
                        }
                        @media (max-width: 500px) {
                            .sz-bg-design-choice__li{width:calc((100% / 2) - 20px);}
                        }

                    </style>
                    <div class="c sz-bg-design-choice">
                        <ul>
                            <li class="sz-bg-design-choice__li"> <!-- col-6 col-md-4 col-lg-3 -->
                                <a href="./sz_writing.php" class="sz-bg-design-choice__li__link">
                                    <img class="sz-bg-design-choice__li__link__img" src="/assets/img/design/sz_000001.png" alt="">
                                </a>
                            </li>
                            <li class="sz-bg-design-choice__li">
                                <a href="./sz_writing.php" class="sz-bg-design-choice__li__link">
                                    <img class="sz-bg-design-choice__li__link__img" src="/assets/img/design/sz_000002.png" alt="">
                                </a>
                            </li>
                            <li class="sz-bg-design-choice__li">
                                <a href="./sz_writing.php" class="sz-bg-design-choice__li__link">
                                    <img class="sz-bg-design-choice__li__link__img" src="/assets/img/design/sz_000003.png" alt="">
                                </a>
                            </li>
                            <li class="sz-bg-design-choice__li">
                                <a href="./sz_writing.php" class="sz-bg-design-choice__li__link">
                                    <img class="sz-bg-design-choice__li__link__img" src="/assets/img/design/sz_000004.png" alt="">
                                </a>
                            </li>
                            <li class="sz-bg-design-choice__li">
                                <a href="./sz_writing.php" class="sz-bg-design-choice__li__link">
                                    <img class="sz-bg-design-choice__li__link__img" src="/assets/img/design/sz_000005.png" alt="">
                                </a>
                            </li>
                            <li class="sz-bg-design-choice__li">
                                <a href="./sz_writing.php" class="sz-bg-design-choice__li__link">
                                    <img class="sz-bg-design-choice__li__link__img" src="/assets/img/design/sz_000006.png" alt="">
                                </a>
                            </li>
                        </ul>

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



