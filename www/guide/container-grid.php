<section class="__guide__section">

    <?php include('./aside/aside-grid.php')?>

    <div class="__wrapper">


        <div class="__box">
            <div class="__h1">
                자주 쓰는 예제
            </div>
            <div class="__h2">
                (1) - 3단 구조
            </div>

            <div class="__preview">
                <div class="__view" title="usefull">
                    <div class="__list_wrapper">
                        <?php include("types-grid/usefull.tpl"); ?>
                    </div>
                </div>
            </div>


            <div class="__h2">
                (1) - 다중 구조
            </div>
            <div class="__preview">
                <div class="__view" title="usefull-02">
                    <div class="__list_wrapper">
                        <?php include("types-grid/usefull-02.tpl"); ?>
                    </div>
                </div>
            </div>

            <div class="__h2">
                (1) - 내부 크기가 넘치면 하단으로 내리기
            </div>

            <div class="__preview">
                <div class="__view" title="usefull-03">
                    <div class="__list_wrapper">
                        <?php include("types-grid/usefull-03.tpl"); ?>
                    </div>
                </div>
            </div>

        </div>

        <div class="__box">
            <div class="__h1">
                반응형 사이즈 <span class="__sub">최대 넓이 지정 및 중앙 정렬</span>
            </div>
            <div class="__h2">
                (0) - 필수<span class="__sub">MOB : 0~768 | TAB : 768~1024 | PC : 1024 ~</span>
            </div>
            <div class="__preview">
                <div class="__view" title="container">
                    <div class="__list_wrapper">
                        <?php include("types-grid/responsive-size.tpl"); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="__box">
            <div class="__h1">
                Container <span class="__sub">최대 넓이 지정 및 중앙 정렬</span>
            </div>
            <div class="__h2">
                (0) - 필수
            </div>
            <div class="__preview">
                <div class="__view" title="container">
                    <div class="__list_wrapper">
                        <?php include("types-grid/container.tpl"); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="__box">
            <div class="__h1">
                그리드
            </div>
            <div class="__h2">
                (0) - 기본 <span class="__sub">col 태그 추가 시 자동으로 비율 책정</span>
            </div>
            <div class="__preview">
                <div class="__view" title="grid">
                    <div class="__list_wrapper">
                        <?php include("types-grid/grid.tpl"); ?>
                    </div>
                </div>
            </div>

            <div class="__h2">
                (1) - 넓이 고정 및 채우기
            </div>
            <div class="__preview">
                <div class="__view" title="grid-flexible-fixed">
                    <div class="__list_wrapper">
                        <?php include("types-grid/col-width.tpl"); ?>
                    </div>
                </div>
            </div>

            <div class="__h2">
                (1) - 넓이 지정
            </div>
            <div class="__preview">
                <div class="__view" title="grid-width">
                    <div class="__list_wrapper">
                        <?php include("types-grid/grid-width.tpl"); ?>
                    </div>
                </div>
            </div>
            <div class="__h2">
                (2) - Nesting  <span class="__sub">.gro .row .col 순으로 꼭 누락없이 (col 안에 .gro 삭제하면 안 됨.)</span>
            </div>
            <div class="__preview">
                <div class="__view" title="grid-nesting">
                    <div class="__list_wrapper">
                        <?php include("types-grid/grid-nesting.tpl"); ?>
                    </div>
                </div>
            </div>
		</div>
        
        <div class="__box">
            <div class="__h1">
                row
            </div>
            <div class="__h2">
                (1) - row 전체간격
            </div>
            <div class="__preview">
                <div class="__view" title="margin">
                    <div class="__list_wrapper">
                        <?php include("types-grid/row-margin.tpl"); ?>
                    </div>
                </div>
            </div>
            <div class="__h2">
                (1) - row 상하간격
            </div>
            <div class="__preview">
                <div class="__view" title="margin-ver">
                    <div class="__list_wrapper">
                        <?php include("types-grid/row-margin-ver.tpl"); ?>
                    </div>
                </div>
            </div>
            <div class="__h2">
                (1) - row 좌우간격
            </div>
            <div class="__preview">
                <div class="__view" title="row-margin-custom">
                    <div class="__list_wrapper">
                        <?php include("types-grid/row-margin-hor.tpl"); ?>
                    </div>
                </div>
            </div>
            <div class="__h2">
                (1) - row 개별간격
            </div>
            <div class="__preview">
                <div class="__view" title="row-margin-custom">
                    <div class="__list_wrapper">
                        <?php include("types-grid/row-margin-custom.tpl"); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="__box">
            <div class="__h1">
                col
            </div>
            <div class="__h2">
                (1) - col 정렬
            </div>
            <div class="__preview">
                <div class="__view" title="col-align">
                    <div class="__list_wrapper">
                        <?php include("types-grid/col-align.tpl"); ?>
                    </div>
                </div>
            </div>
            <div class="__h2">
                (1) - col 전체간격
            </div>
            <div class="__preview">
                <div class="__view" title="col-margin">
                    <div class="__list_wrapper">
                        <?php include("types-grid/col-margin.tpl"); ?>
                    </div>
                </div>
            </div>
            <div class="__h2">
                (1) - col 좌우간격
            </div>
            <div class="__preview">
                <div class="__view" title="col-margin-hor">
                    <div class="__list_wrapper">
                        <?php include("types-grid/col-margin-hor.tpl"); ?>
                    </div>
                </div>
            </div>
            <div class="__h2">
                (1) - col 상하간격
            </div>
            <div class="__preview">
                <div class="__view" title="col-margin-ver">
                    <div class="__list_wrapper">
                        <?php include("types-grid/col-margin-ver.tpl"); ?>
                    </div>
                </div>
            </div>
            <div class="__h2">
                (1) - col 개별간격
            </div>
            <div class="__preview">
                <div class="__view" title="col-margin-custom">
                    <div class="__list_wrapper">
                        <?php include("types-grid/col-margin-custom.tpl"); ?>
                    </div>
                </div>
            </div>

            <div class="__h2">
                (1) - col 자동넓이 설정 (사용❌)
            </div>
            <div class="__preview">
                <div class="__view" title="col-margin-custom">
                    <div class="__list_wrapper">
                        <?php /* include("types-grid/grid-flexible-fixed.tpl"); */ ?>
                    </div>
                </div>
            </div>
		</div>

















    </div>
</section>
