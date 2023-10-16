<!doctype html>
<html lang="ko">
<head>
    <?php $path = $_SERVER['DOCUMENT_ROOT'];?>
    <?php include("$path/include/meta_head.php"); ?>
</head>
<body>
<div id="wrap">
    <!-- header -->
    <?php include("$path/include/header.php"); ?>
    <!-- header End -->
<style>
    .header-01 h1,
    .post__list__outer{box-shadow: 6px 1px 10px rgb(0 0 0 / 10%);}

    .post__list{margin-top:20px;}
    .post__list .r{flex-wrap:wrap;justify-content:space-between;gap:30px 0}
    .post__list .c{max-width:300px;}
    .post__list__outer{display:inline-block;width:100%;margin:0 14px;border:1px solid #ddd;}
    .sz-img{display:block;width:100%;}
    section#container, header .header, footer .footer{max-width: 1000px;margin:0 auto;}
</style>
    <!-- container -->
    <section id="container">
        <!-- h1 -->
        <div class="header-01">
            <h1>제목</h1>
        </div>
        <!-- h1 End -->
        <!-- content -->
        <div class="content">
            <div class="g post__list">
                <ul class="r">
                    <li class="c">
                        <div class="post__list__outer">
                            <div class="post_list__inner">
                                <div class="sz"><img src="https://requestman.cafe24.com/assets/img/temp_sz.png" class="sz-img" alt=""></div>
                            </div>
                            <div class="post_list__inner">
                                <style>
                                    .photo li{float:left;width:20%;}
                                    .photo li img{display:block;width:100%;}
                                </style>
                                <div class="photo">
                                    <ul>
                                        <li><img src="/assets/tempImg/thumb/o.gif" alt=""></li>
                                        <li><img src="/assets/tempImg/thumb/h.gif" alt=""></li>
                                        <li><img src="/assets/tempImg/thumb/g.gif" alt=""></li>
                                        <li><img src="/assets/tempImg/thumb/x.gif" alt=""></li>
                                        <li><img src="/assets/tempImg/thumb/z.gif" alt=""></li>
                                    </ul>

                                </div>

                            </div>
                            <div class="post_list__inner">
                                <div class="sz"><img src="https://requestman.cafe24.com/assets/img/temp_sz.png" class="sz-img" alt=""></div>
                            </div>
                        </div>
                    </li>
                </ul>

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
