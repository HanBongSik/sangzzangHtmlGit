<div class="__list_wrap">
    <style>
        label.switch{position:relative;display:inline-block;width:60px;height:var(--md-height);}
        label.switch input{opacity:0;width:0;height:0;}
        label.switch .slider {position:absolute;cursor:pointer;top:0;left:0;right:0;bottom:0;background-color:#ccc;-webkit-transition:.2s;transition:.2s;border-radius:34px;}
        label.switch .slider:before {position:absolute;content: "";height:calc(var(--md-height) / 2 + 6px);width:calc(var(--md-height) / 2 + 6px);left:7px;bottom:5px;background-color:white;-webkit-transition:.2s;transition: .2s;border-radius:50%;}
        label.switch input:checked + .slider {background-color:var(--primary);}
        label.switch input:focus + .slider {box-shadow: 0 0 1px #2196F3;}
        label.switch input:checked + .slider:before {-webkit-transform: translateX(calc(var(--md-height) / 2 + 6px));-ms-transform: translateX(calc(var(--md-height) / 2 + 10px));transform: translateX(calc(var(--md-height) / 2 + 8px));}

        label.switch input:disabled + .slider {background-color:var(--input-disabled-bg);}
        label.switch input:disabled + .slider:before {-webkit-transform: translateX(calc(var(--md-height) / 2 + 6px));-ms-transform: translateX(calc(var(--md-height) / 2 + 10px));transform: translateX(calc(var(--md-height) / 2 + 8px));}

        label.switch.secondary input:checked + .slider{background-color:var(--secondary)}
    </style>

    <div class="__list">
        <div class="__figure">
            <div class="__element">
                <span class="forms">
                    <label for="checkbox-sw01" class="switch">
                        <input type="checkbox" name="checkbox-sw01" value="checkbox-sw01" id="checkbox-sw01">
                        <span class="slider"></span>
                    </label>
                </span>
            </div>
            <div class="__class">.switch</div>
        </div>
    </div>

    <div class="__list">
        <div class="__figure">
            <div class="__element">
                <span class="forms">
                    <label for="checkbox-sw02" class="switch">
                        <input type="checkbox" name="checkbox-sw02" value="checkbox-sw02" id="checkbox-sw02" checked="checked">
                        <span class="slider"></span>
                    </label>
                </span>
            </div>
            <div class="__class">.switch:checked</div>
        </div>
    </div>


    <div class="__list">
        <div class="__figure">
            <div class="__element">
                <span class="forms">
                    <label for="checkbox-sw03" class="switch secondary">
                        <input type="checkbox" name="checkbox-sw03" value="checkbox-sw03" id="checkbox-sw03" checked="checked">
                        <span class="slider"></span>
                    </label>
                </span>
            </div>
            <div class="__class">.switch.secondary</div>
        </div>
    </div>

    <div class="__list">
        <div class="__figure">
            <div class="__element">
                <span class="forms">
                    <label for="checkbox-sw05" class="switch">
                        <input type="checkbox" name="checkbox-sw05" value="checkbox-sw05" id="checkbox-sw05" checked="checked" disabled>
                        <span class="slider"></span>
                    </label>
                </span>
            </div>
            <div class="__class">.switch:disabled</div>
        </div>
    </div>
</div>
