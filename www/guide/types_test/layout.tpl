<div class="__list_wrap">
    <style>
        .container-flex{display:flex;gap:10px;}
        .container-flex .flex-items{text-align:left;}
        .container-flex .one{background:yellow;}
        .container-flex .two{background:pink;flex-grow:1;}
        .container-flex .three{background:orange;display:flex;align-items:center;}
        .container-flex .four{background:#00a8ff;}

        .container-flex2{display:flex;gap:10px;}
        .container-flex2 .flex-items{text-align:left;}
        .container-flex2 .one{background:yellow;}
        .container-flex2 .two{background:pink;margin-left:auto;}
        .container-flex2 .three{background:orange;display:flex;align-items:center;}


        .layout-flex .one{background:yellow;white-space:nowrap;align-self:center;}
        .layout-flex .two{background:pink;}
        .layout-flex .three{background:gold;white-space:nowrap;display:flex;align-items:center;}


    </style>

    <div class="__list __block">
        <div class="__figure">
            <div class="__element ">
                <div class="gro">
                    <div class="row">
                        <div class="layout-flex">
                            <div class="items">1</div>
                            <div class="items">2</div>
                            <div class="items flexible-column">
                                <div class="">
                                    A. 동해물과
                                </div>
                                <div class="">
                                    B. 백두산이
                                </div>
                                <div class="">
                                    C. 마르고
                                </div>
                            </div>
                            <div class="items">white-space: nowrap;<br>3 마르고 마르고마르고 마르고</div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="__class">no class</div>
        </div>
    </div>

    <div class="__list __block">
        <div class="__figure">
            <div class="__element ">
                <div class="layout-flex">
                    <div class="items">1</div>
                    <div class="items">2</div>
                    <div class="items flexible-column">
                        <div class="">
                            A. 동해물과
                        </div>
                        <div class="">
                            B. 백두산이
                        </div>
                        <div class="">
                            C. 마르고
                        </div>
                    </div>
                    <div class="items">white-space: nowrap;<br>3 마르고 마르고마르고 마르고</div>
                </div>
            </div>
            <div class="__class">no class</div>
        </div>
    </div>

    <div class="__list __block">
        <div class="__figure">
            <div class="__element ">
                <div class="layout-flex">
                    <div class="items one">
                        flex-grow: 1;
                    </div>
                    <div class="items two">
                        <div class="">
                            2 백두산이
                        </div>
                        <div class="">
                            2 백두산이
                        </div>
                        <div class="">
                            2 백두산이
                        </div>
                    </div>
                    <div class="items three">white-space: nowrap;<br>3 마르고 마르고마르고 마르고</div>
                </div>
            </div>
            <div class="__class">no class</div>
        </div>
    </div>

    <div class="__list __block">
        <div class="__figure">
            <div class="__element ">
                <div class="container-flex">
                    <div class="flex-items one">1 동해물과</div>
                    <div class="flex-items two">
                        <div class="">
                            2 백두산이
                        </div>
                        <div class="">
                            2 백두산이
                        </div>
                        <div class="">
                            2 백두산이
                        </div>
                    </div>
                    <div class="flex-items three">3 마르고 마르고마르고 마르고</div>
                </div>
            </div>
            <div class="__class">no class</div>
        </div>
    </div>

    <div class="__list __block">
        <div class="__figure">
            <div class="__element ">
                <div class="container-flex2">
                    <div class="flex-items one">

                    </div>
                    <div class="flex-items one">1 동해물과1 동해물과1 동해물과1 동해물과1 동해물과1 동해물과1 동해물과1 동해물과11 동해물과1 동해물과1 동해물과1 동해물과1 동해물과1 동해물과1 동해물과1 동해물과1</div>
<!--                    <div class="flex-items two">-->
<!--                        <div class="">-->
<!--                            2 백두산이-->
<!--                        </div>-->
<!--                        <div class="">-->
<!--                            2 백두산이-->
<!--                        </div>-->
<!--                        <div class="">-->
<!--                            2 백두산이-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="flex-items two">3 마르고 마르고마르고 마르고</div>
                </div>
            </div>
            <div class="__class">no class</div>
        </div>
    </div>


    <div class="__list">
        <div class="__figure">
            <div class="__element">
                <span class="forms">
                    <a href="javascript:void(0);" class="btn">a태그.btn</a>
                </span>
                <span class="forms">
                    <button type="button">button</button>
                </span>
                <span class="forms">
                    <input type="button" value="input버튼">
                </span>
                <span class="forms">
                    <input type="submit" value="submit버튼">
                </span>
            </div>
            <div class="__class">no class</div>
        </div>
    </div>
    <div class="__list">
        <div class="__figure">
            <div class="__element">
                <span class="forms">
                    <button type="button">버튼</button>
                </span>
            </div>
            <div class="__class">button</div>
        </div>
    </div>
    <div class="__list">
        <div class="__figure">
            <div class="__element">
                <span class="forms">
                    <button type="button">버튼 호버</button>
                </span>
            </div>
            <div class="__class">button:hover</div>
        </div>
    </div>
    <div class="__list">
        <div class="__figure">
            <div class="__element">
                <span class="forms">
                    <span class="forms">
                        <button type="button" disabled="disabled">버튼 비활성화</button>
                    </span>
                </span>
            </div>
            <div class="__class">button:disabled</div>
        </div>
    </div>
</div>
