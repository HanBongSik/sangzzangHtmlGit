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
            <h1>포디움</h1>
        </div>
        <!-- h1 End -->
        <!-- content -->
        <div class="content">

            <div class="tab tab-style-01">
                <div class="tab__list fixed">
                    <ul>
                        <li class="active"><a href="#tabPeople" data-target="#tabPeople"><div class="tab-name">유저</div></a></li>
                        <li><a href="#tabSz" data-target="#tabSz"><div class="tab-name">상장</div></a></li>
                    </ul>
                </div>

                <!-- panels -->
                <div class="panels panels-podium">
                    <!-- 유저 포디움 -->
                    <div id="tabPeople" class="panel active" tabindex="0">
                        <div class="panel__outer">
                            <?php include("$path/include/podium_user.php"); ?>
                        </div>
                    </div>
                    <!-- 유저 포디움 End -->
                    <!-- 상장 -->
                    <div id="tabSz" class="panel" tabindex="0">
                        <div class="panel__outer">
                            <?php include("$path/include/podium_sz.php"); ?>
                        </div>
                    </div>
                    <!-- 상장 End -->
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

    <script>
        function confetti(){
            var maxNum = ($(window).width())*0.2
            var confettiSettings = {
                target: document.querySelector('.confetti'),
                max:maxNum,

            };
            var confetti = new ConfettiGenerator(confettiSettings);
            confetti.render();
        }

        function confetti2(){
            var maxNum = ($(window).width())*0.2
            var confettiSettings = {
                target: document.querySelector('#confetti2'),
                max:maxNum,

            };
            var confetti = new ConfettiGenerator(confettiSettings);
            confetti.render();
        }
        $(window).load(function(){
            confetti();
            confetti2();
        });
        $(window).resize(function(){
            if($(window).width()!=lastWidth){
                confetti();
                confetti2();
            }

        });

    </script>
</div>
</body>
