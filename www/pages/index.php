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

    <!-- container -->
    <section id="container">
        <br></br> 
        <br></br>
        <div style="text-align:center;border-radius:20px;overflow:hidden;">
            <a href="http://requestman.cafe24.com/golden/" class="golden-saying-wrapper-a">
                <img src="/assets/img/golden_saying_front.jpg" style="text-align:center;border-radius:20px;overflow:hidden;">
            </a>
        </div>

        <br></br>
        <div style="text-align:center;">
            <a href="/pages/3d-card.php">3D 상장<br><img src="/assets/tempImg/iu.png" style="box-shadow:6px 8px 32px rgb(0 0 0 / 20%);border-radius:20px;overflow:hidden;"></a>
        </div>

        <!--
                    <br>
                    <br>
                    <div style="text-align:center;">
                        <a href="./test-dist/dist/index2.php">수빈님 3D 상장<br><img src="/tempImg/iu.png"></a>
                    </div>
        -->


        <div class="container main-wrap">
            <div class="main-visual">
                <!--<video class="main-video" autoplay="autoplay" loop="loop" playsinline="playsinline"><source src="https://im.pstatic.net/selective/video/SW_m_191025_d.mp4"></video>-->
            </div>

        </div>
        <!-- container End -->
    </section>

    <!— footer —>
    <?php include("$path/include/footer.php"); ?>
    <!— footer End —>

    <!-- 모달 -->
    <?php include("$path/include/modal_common.php"); ?>
    <!-- 모달 End -->

</div>
</body>
