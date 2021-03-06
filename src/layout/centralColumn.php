<!--#####################################  CALCULATOR #####################################-->
<div id="div2">
    <form class="roundCorner" id="main_form" enctype="application/x-www-form-urlencoded"
          action="javascript:void(0);" name="costs_form">
        <div id="input_div">
            <?php include_once './layout/formPartOne.php'; ?>
            <?php include_once './layout/formPartTwo.php'; ?>
            <?php include_once './layout/formPartThree.php'; ?>
        </div>
    </form>
</div>

<!-- ************* PRINTING divs ***********************
******************************************************-->

<!-- ************* Main Table  Section ****************** -->
<div class="result_section" id="main_table_section">
    <div class="result_div" id="main_table"></div>
</div>
<!-- ************* Monthly Costs section **************** -->
<div class="result_section" id="monthly_costs_section">
    <div class="hr">
        <hr><hr>
    </div>
    <div class="result_section_title" id="monthly_costs_title">
        <b><?php echo mb_convert_case($AVERAGE_COSTS_PER_TYPE, MB_CASE_UPPER, "UTF-8"); ?>
        <?php echo ' '.'('.$CURR_NAME_BIG_PLURAL.')'; ?></b>
    </div>
    <br>
    <!-- first top (pie) chart -->
    <div id="pie_chart_div" class="chart_div"></div><br>
    <!-- second (bars) chart -->
    <div id="bar_chart_div" class="chart_div"></div>
    <!-- results tables -->
    <div class="result_div" id="monthly_costs"></div>
</div>
<!-- ************* Financial Effort section************** -->
<div class="result_section" id="fin_effort_section">
    <div class="hr">
        <hr><hr>
    </div>
    <div class="result_section_title" id="fin_effort_title">
        <b><?php echo mb_convert_case($FINANCIAL_EFFORT, MB_CASE_UPPER, "UTF-8"); ?></b>
    </div>
    <!-- third chart -->
    <div id="fin_effort_chart_div" class="chart_div"></div>
    <!-- results table -->
    <div class="result_div" id="fin_effort"></div>
</div>
<!-- ********* Alternative Costs to Car Costs section **************** -->
<div class="result_section" id="alternative_to_carcosts_section">
    <div class="hr">
        <hr><hr>
    </div>
    <div class="result_section_title" id="alternative_to_carcosts_title">
        <b><?php echo mb_convert_case($PUBL_TRA_EQUIV, MB_CASE_UPPER, "UTF-8"); ?></b>
    </div>
    <!-- fourth chart -->
    <div id="alternative_carcosts_chart_div" class="chart_div"></div>
    <!-- results table -->
    <div class="result_div" id="alternative_to_carcosts"></div>
</div>
<!-- ************* Buttons ****************** -->
<div class="result_section" id="exten_costs_section">
    <div class="result_div" id="extern_costs"></div>
</div>
<!-- ************* Buttons ****************** -->
<div class="result_section" id="buttons_section">
    <div class="hr">
        <hr><hr>
    </div>
    <div class="result_div" id="result_buttons_div">
        <input type="submit" class="button" value="<?php echo $BUTTON_RERUN; ?>" onclick="reload();"/>&nbsp;
        <input type="submit" id="print_button" class="button" value="<?php echo $WORD_PRINT; ?>"
            onclick="PrintElem( '<?php echo $WEB_PAGE_TITLE; ?>');" />&nbsp;
        <input id="generate_PDF" type="submit" class="button" value="<?php echo $WORD_DOWNLOAD_PDF; ?>" onclick='generatePDF("<?php echo $MAIN_TITLE ?>")' />
        <div id="shareIcons"></div>
    </div>
</div>
<!-- ************* ********* ************* -->
<br>
