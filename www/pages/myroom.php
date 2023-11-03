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
        <!-- h1 -->
        <div class="header-01">
            <h1>내 상장</h1>
        </div>
        <!-- h1 End -->
        <!-- content -->
        <div class="content">
            <div class="layout-two-one layout-with-profile">
<!--                <div class="layout-two-one__layout-left">-->
<!--                    left-->
<!--                </div>-->
<!--                <div class="layout-two-one__layout-right">-->
<!--                    right-->
<!--                </div>-->

                <div class="layout-two-one__layout-left">
                    <div class="g user-profile-card">
                        <div class="r">
                            <div class="c">

                                <div class="g user-profile-card__header">
                                    <div class="r">
                                        <div class="c">
                                            <div class="img-profile">
                                                <div class="img-profile-outer big">
                                                    <img class="img-profile__img" src="/assets/tempImg/profile/hbs.jpg" alt="프로필 이미지">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="c">
                                            <div class="skills">
                                                <a href="./assets/img/test-graph2.png" class="skills-link MODAL-BTN" target="_blank" data-target="#modalSkill"><!--<img class="skill-grap" src="./assets/img/test-graph2.png" class="img-graph" alt="스킬 그래프">--></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="r">
                            <div class="c">
                                <div class="user-profile-card__body">
                                    <div class="g lay-user-action-info">
                                        <div class="r">
                                            <div class="c c-inner-width">
                                                <!-- 유저 프로필 덩어리 -->

                                                <div class="g user-profile">
                                                    <div class="r">
                                                        <div class="c">
                                                            <div class="user-action-info-detail">
                                                                <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-id">bongsikbongsik</span></a>
                                                                <!--                                                            <span class="user-follow-state"><a href="#;" class="user-follow-state__link">팔로우</a></span>-->
                                                                <!--                                                            <span class="user-action">님이 상장을 보냈습니다.</span>-->
                                                                <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="r">
                                                        <div class="c">
                                                            <div class="user-action-info-detail">
                                                                <a href="/pages/myroom.php" class="user-action-info-detail__link"><span class="user-name">한봉식</span></a>
                                                                <!--                                                            <span class="user-action-date">23.10.17 10 11</span>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 유저 프로필 덩어리 End -->

                                            </div>
                                            <div class="c c-inner-width">
                                                <span class="forms">
                                                    <button type="button" class="btn-follow-ing">팔로잉</button>
                                                </span>
                                            </div>

                                            <div class="c c-full center-right">
                                                <div class="btn-more-action">
                                                    <div class="img-more">
                                                        <a href="#;" class="img-more__link MODAL-BTN" data-target="#modalMore">
                                                            <div class="img-more__outer">
                                                                <img class="img-more__outer__img" src="/assets/img/ico-more.png" alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                    <div class="user-infos">

                                        <div class="intro">
                                            이시대의 상남자 입니다.
                                        </div>
                                        <div class="sns">
                                            <ul>
                                                <li><span class="sns-name md-visible-inline">인스타 : </span><a href="https://www.instagram.com/s2yun_o/" target="_blank">https://www.instagram.com/coral0128</a> <!--인증됨--></li>
                                                <li><span class="sns-name md-visible-inline">페이스북 : </span><a href="https://www.facebook.com/jisora" target="_blank">https://www.facebook.com/jisora</a></li>
                                                <li><span class="sns-name md-visible-inline">유튜브 : </span><a href="https://www.youtube.com/@yodelay" target="_blank">https://www.youtube.com/channel/UCtfGLmp6xMwvPoYpI-A5Kdg</a></li>
                                            </ul>
                                        </div>
                                        <!--
                                        <div class="personal">
                                            <button type="button" class="button medium">쪽지 보내기</button>
                                        </div>-->
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="layout-two-one__layout-right">


                    <div class="tab">
                        <div class="tab__list fixed">
                            <ul>
                                <li class="active"><a href="#tab-showcase" data-target="#showcase"><div class="tab-name">쇼케이스</div></a></li>
                                <li><a href="#rolling-paper" data-target="#rolling-paper"><div class="tab-name">롤링페이퍼</div></a></li>
<!--                                <li><a href="#energizer" data-target="#energizer"><div class="tab-name">에너자이저</div></a></li>-->
                                <li><a href="#charger" data-target="#charger"><div class="tab-name"><img class="ico-charger" src="/assets/img/ico/ico-charger.png" alt="charger">차저</div></a></li>
                            </ul>
                            <ul class="big">
                                <li><a href="#received" data-target="#received"><div class="tab-name">받은 상장</div><div class="num">12</div></a></li>
                                <li><a href="#written" data-target="#written"><div class="tab-name">작성한 상장</div><div class="num">871</div></a></li>
                                <li><a href="#following" data-target="#following"><div class="tab-name">팔로잉</div><div class="num">387</div></a></li>
                                <li><a href="#follower" data-target="#follower"><div class="tab-name">팔로워</div><div class="num">11</div></a></li>
                            </ul>
                        </div>


                        <!-- panels -->
                        <div class="panels panels-myroom">
                            <!-- 쇼케이스 -->
                            <div id="showcase" class="panel active" tabindex="0">
                                <div class="panel__outer">
                                    <?php include("$path/include/my_room_showcase.php"); ?>
                                </div>
                            </div>
                            <!-- 쇼케이스 End -->

                            <!-- 롤링 페이퍼 -->
                            <div id="rolling-paper" class="panel rolling-paper" tabindex="0">
                                <div class="panel__outer">
                                    <?php include("$path/include/my_room_rollingpaper.php"); ?>
                                </div>
                            </div>
                            <!-- 롤링 페이퍼 End -->

                            <!-- 차저 -->
                            <div id="charger" class="panel rolling-paper" tabindex="0">
                                <div class="panel__outer">
                                    <?php include("$path/include/include_temp/inc_user_list_charger.php"); ?>
                                    <?php /* include("$path/include/my_room_charger.php"); */?>
                                </div>
                            </div>
                            <!-- 차저 End -->


                            <!-- 받은 상장 -->
                            <div id="received" class="panel" tabindex="0">
                                <div class="panel__outer">
                                    <?php include("$path/include/sz_list.php"); ?>
                                    <?php /* include("$path/include/my_room_received.php"); */ ?>
                                </div>
                            </div>
                            <!-- 받은 상장 End -->

                            <!-- 작성한 상장 -->
                            <div id="written" class="panel" tabindex="0">
                                <div class="panel__outer">
                                    <h2 class="blind">작성한 상장</h2>
                                    <?php include("$path/include/sz_list_02.php"); ?>
                                    <?php /* include("$path/include/my_room_written.php"); */ ?>
                                </div>
                            </div>
                            <!-- 작성한 상장 End -->

                            <!-- 팔로잉 -->
                            <div id="following" class="panel" tabindex="0">
                                <div class="panel__outer">
                                    <h2 class="blind">팔로잉</h2><?php include("$path/include/include_temp/inc_user_list_04.php"); ?>
                                    <?php /* include("$path/include/my_room_following.php"); */?>
                                </div>
                            </div>
                            <!-- 팔로잉 End -->
                            <!-- 팔로잉 -->
                            <div id="follower" class="panel" tabindex="0">
                                <div class="panel__outer">
                                    <h2 class="blind">팔로워</h2><?php include("$path/include/include_temp/inc_user_list_03.php"); ?>
                                    <?php /* include("$path/include/my_room_follower.php"); */?>
                                </div>
                            </div>
                            <!-- 팔로잉 End -->
                        </div>
                        <!-- panels End -->
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
    <script type="text/javascript">
        // Initialize the echarts instance based on the prepared dom
        var myChart = echarts.init(document.querySelector('.skills a'), null, {
        });

        // Specify the configuration items and data for the chart
        var option = {

            color: ['#cc1d5c',],
            // title: {
            //   text: 'Customized Radar Chart'
            // },

            // legend: {},

            radar: [
                {
                    shape: '',
                    indicator: [ //요소
                        { text: '유머', max: 100 },
                        { text: '맥북', max: 100 },
                        { text: '독서', max: 100 },
                        { text: '게임', max: 100 },
                        { text: '장난기', max: 100 },
                        { text: '진지', max: 100 }
                    ],
                    center: ['50%', '50%'], //위치
                    radius: 30, //크기;
                    axisName: { //수치
                        color: '#000',
                        backgroundColor: 'transparent',
                        borderRadius: 1,
                        padding: [-0, -0],
                        fontSize:12,
                        fontFamily:'Noto Sans KR',
                    },
                    splitArea: { //수치 안쪽 영역
                        areaStyle: {
                            color: ['#fbd88a']//배경색
                        }
                    },
                    axisTick: {
                        show: false,
                        lineStyle: {
                            color: 'rgba(255, 255, 255, 0.8)'
                        }
                    },

                    axisLabel: { //수치 안쪽 라벨
                        show: false,
                        textStyle: {
                            color: 'white'
                        }
                    },

                    axisLine: { //수치 안쪽 경계 표시
                        lineStyle: {
                            color: 'transparent'
                        }
                    },

                    splitLine: { //수치 안쪽 경계 표시
                        lineStyle: {
                            color: 'transparent'
                        },
                    }
                }
            ],

            series: [
                {
                    type: 'radar',
                    emphasis: {
                        lineStyle: {
                            width: 5
                        }
                    },

                    data: [
                        {
                            label: {
                                show: true,
                                formatter: function (params) {
                                    return params.value;
                                },
                                padding: [-10, -10],
                            },

                            value: [99, 85, 100, 90, 100, 88],
                            name: 'Skill Point',
                            areaStyle: {
                                color: 'rgba(243, 148, 148, 0.8)'//스킬 내 배경 색
                            }
                        }
                    ]
                },

            ]

        };

        // Display the chart using the configuration items and data just specified.
        myChart.setOption(option);
    </script>
</div>
</body>
