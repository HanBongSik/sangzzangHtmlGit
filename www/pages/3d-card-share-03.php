<!doctype html>
<html lang="ko">
<head>
    <?php $path = $_SERVER['DOCUMENT_ROOT'];?>
    <?php include("$path/include/meta_head.php"); ?>

    <!-- 3D 카드 -->
    <link rel="stylesheet" href="/assets/css/3d-card.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <!-- hammer -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/hammer.js/1.0.6/hammer.min.js'></script>
    <!-- hammer End -->
    <script src="/assets/js/3d-card.js?v=<?php echo $version ?>"></script>
    <!-- 3D 카드 End -->
    <style>
        .cube{width:330px;height:524px;margin-left:0;margin-top:0;margin-left:-165px;margin-top:-242px;}

        .cube--color-red .face{border:none !important;}
        .cube--color-red .face--one{border:none !important;}

        .face--one{transform:rotateY(0deg) translateZ(0px) translateY(0%) !important;}
        .face--tree{transform:rotateY(180deg) translateZ(0px) !important;background:#fff;display:none;}
        .face--two{display:none;transform:rotateY(180deg) translateZ(1px) !important;}
        .face--four{display:none;transform:rotateY(180deg) rotateX(180deg) translateZ(1px) !important;}
        .face--five{display:none;transform:rotateY(180deg) translateZ(1px) !important;}
        .face--six{display:none;transform:rotateY(180deg) translateZ(1px) !important;}
        .container--rea{position:fixed;left:0;top:0;width:100%;height:100%;display:flex;align-items:center;justify-content:center;background:#eee;}

        .face--one{transform:rotateY(0deg) translateZ(1px) !important;}
        .face--tree{display:block;}
        .face--tree .img{transform:rotateX(0deg) rotateY(-180deg) rotateZ(0deg);}

        .cube--color-red .face, .cube--color-red .face--one, .cube--color-red .face--two, .cube--color-red .face--tree, .cube--color-red .face--four, .cube--color-red .face--five, .cube--color-red .face--six{border:none !important;background:transparent !important;border-radius:20px;overflow:hidden;}

        #imgId{position:absolute;left:-9999999999px;top:-9999999999px;}
        .cube{position:static;box-sizing:border-box;height:calc(100vh - 222px);height:calc(var(--vh) - 200px);margin-left:0;margin-top:-50px;max-height:calc(var(--vh) - 200px)}

    </style>
</head>
<body style="overscroll-behavior-y: none;">
<div id="wrap">
    <!-- header -->
    <?php include("$path/include/header.php"); ?>
    <!-- header End -->
    <section id="container">
        <div class='container--rea'>
            <div class='cube cube--ani cube--color-red' id="my_cube">
                <div class='face--one face--ani'><img src="https://hanbongsik.cafe24.com/tempImg/iu.png" style="width:100%;height:100%;vertical-align:top;" alt=""/></div>

                <div class='face--two face--ani'></div>
                <!--
                <div class='face--tree face--ani'><img src="https://hanbongsik.cafe24.com/tempImg/iu.png" style="width:100%;height:100%;vertical-align:top;" alt=""/></div>-->

                <div class='face--tree face--ani'><img src="/assets/img/temp_sz2.png" style="width:100%;height:100%;vertical-align:top;" alt=""/></div>

                <div class='face--four face--ani'></div>
                <div class='face--five face--ani'></div>
                <div class='face--six face--ani'></div>
            </div>
        </div>

        <div class="topbar" style="text-align:center;">
				<span>
					<button id="refreshPage" class="btn-black" onclick="location.reload();return false;">새로고침</button>
					<button id="reset-3d">원위치로</button>
					<button id="refreshPage" class="btn-secondary">상장 받기</button>
				</span>
            <!--
            <span>
                <button id="explose-3d">Explose</button>
            </span>
            <span>
                <button id="implose-3d">Inplose</button>
            </span>
            <span>
                <label for="size-cube">Size</label>
                <select id="size-cube" value="12"/>
                <option value="6">6em</option>
                <option value="12" selected>12em</option>
                <option value="24">24em</option>
                </select>
            </span>
            <span>
                <label for="theme-cube">Theme</label>
                <select id="theme-cube" value="cube--dee"/>
                <option value="cube--dee">Dée</option>
                <option value="cube--color-red" selected>Rouge</option>
                <option value="cube--color-gray">Gris</option>
                <option value="cube--border">Border</option>
                </select>
            </span>
-->
        </div>

        <!-- partial -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<!--        <script src='https://cdnjs.cloudflare.com/ajax/libs/hammer.js/1.0.6/hammer.min.js'></script>-->
        <script  src="/assets/js/3d-card.js"></script>

    </section>


    <!-- footer -->
    <?php include("$path/include/footer.php"); ?>
    <!-- footer End -->

    <!-- 모달 -->
    <?php include("$path/include/modal_common.php"); ?>
    <!-- 모달 End -->

    <script>
        $(window).load(function(){
            /* 원본 이미지 */
            let img = document.createElement('img');
            img.id = 'imgId';
            img.src = 'https://hanbongsik.cafe24.com/tempImg/iu.png';
            document.body.appendChild(img);
            // img.addEventListener("click", imgSize);
            imgSize();

        });
        $(window).resize(function(){
            imgSize()
        });
        function imgSize() {
            let img = document.getElementById('imgId');
            //or however you get a handle to the IMG
            let originalWidth = img.clientWidth;
            let originalHeight = img.clientHeight;
            let ratio = originalWidth/originalHeight;
            // let ratio = originalHeight/originalWidth;
            // alert("Original width=" + originalWidth + ", " + "Original height=" + originalHeight);
            console.log(ratio);
            let height = $('#my_cube').height();
            $('#my_cube').css('width',height*ratio+'px');
        }
    </script>
</div>
</body>
