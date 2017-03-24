<div id="banner_top">
    <div id="left_top_div">&nbsp;</div>
    <!--#####################-->
    <div id="header_main_title">
        <div id="main_title">
            <header>
                <h1>
                    <?php echo $MAIN_TITLE ?>
                </h1>
            </header>
        </div>
    </div>
    <!--## Select country box ##-->
    <div id="country_box">
        <div id="country_box_inline">
            <div id="banner_flag_div">
                <div id="banner_flag" class="<?php echo strtolower($GLOBALS['country']) ?> flag"></div>
            </div>
            <div id="country_select_div">
                <select name="country_select" id="country_select" onchange="valueselect(this.value);">
                    <?php 
                        foreach ($avail_CT as $key => $value) {
                            echo '<option value="'.$key.'"'. 
                                 ($key==$GLOBALS['country']?'selected="selected"':'').'>'.
                                 $value.'</option>';
                        }
                    ?>
                </select>
            </div>
        </div>
    </div>
</div>
