<?php
include_once("./php/functions.php");
include_once("./countries/_list.php");
include_once("./countries/_url_selector.php");
?><!DOCTYPE html>

<html lang="<?php echo HTML_tag_lang($language, $GLOBALS['country']); ?>">

<head>

    <script>
    //GLOBAL switches
    //Change the values accordingly
        var UBER_SWITCH = true; //Uber
        var SOCIAL_SWITCH = true; // Social media pulgins
        var CHARTS_SWITCH = true; //Google Charts
        var CAPTCHA_SWITCH = true; //Google Captcha
        var ANALYTICS_SWITCH = true; //Google Analytics
        var DB_SWITCH = true; //Inserts user input data into DataBase
        var PRINT_SWITCH = true; //Print option
        var PDF_SWITCH = true; //Download PDF report option
    </script>

    <meta charset="UTF-8">
    <!--gets the first sentence of variable $INITIAL_TEXT-->
	<meta name="description" content="<?php echo meta_description($INITIAL_TEXT); ?>">
    <meta name="keywords" content="<?php echo get_keywords($WEB_PAGE_TITLE, $FIXED_COSTS, $RUNNING_COSTS); ?>">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="Autocosts Org">

    <meta name="robots" content="<?php echo (!isTest()?'index, follow':'noindex, nofollow')?>" />
    
    <title><?php echo adapt_title($WEB_PAGE_TITLE); ?></title>
    
    <?php include_once('./php/favicon_selector.php'); ?>
    <?php include_once('./php/logo_pict_selector.php'); ?>    
    <!--structured data for search engines -->
    <?php include_once('./google/structured_data.php'); ?>

    <?php include_once('./php/css_embed.php'); ?>
    <!--Embed all CSS files within CSS folder-->
    <?=(new CSS_Embed()) ?>
</head>

<body>
    <div id="main_div">
        <?php include_once './layout/header.php'; ?>
        <div id="container">
            <div id="description">
                <?php echo $INITIAL_TEXT; if(isset($DISCLAIMER)){echo " ".$DISCLAIMER;} ?>
            </div>
            <div id="container_table">
                <!-- div3 = LEFT layout column-->
                <div id="div3_td">
                    <div id="div3">
                        <?php include_once './layout/leftColumn.php'; ?>
                    </div>
                </div>
                <!--#####################################  CALCULATOR #####################################-->

                <!-- div2 = CENTRE layout column-->
                <div id="div2_td">
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
                        <div class="result_section_title" id="monthly_costs_title">
                            <b><?php echo mb_convert_case($AVERAGE_COSTS_PER_TYPE, MB_CASE_UPPER, "UTF-8"); ?>
                            <?php echo ' '.'('.$CURR_NAME_BIG_PLURAL.')'; ?></b>
                        </div>
                        <br>
                        <!-- first top (pie) chart -->
                        <div id="pie_chart_div"></div><br>
                        <div id="img_pie_chart_div" class="disp_none"></div>
                        <!-- second (bars) chart -->
                        <div id="bar_chart_div"></div>
                        <div id="img_bar_chart_div" class="disp_none"></div>
                        <!-- results tables -->
                        <div class="result_div" id="monthly_costs"></div>
                    </div>
                    <!-- ************* Financial Effort section************** -->
                    <div class="result_section" id="fin_effort_section">
                        <div class="result_section_title" id="fin_effort_title">
                            <b><?php echo mb_convert_case($FINANCIAL_EFFORT, MB_CASE_UPPER, "UTF-8"); ?></b>
                        </div>
                        <!-- third chart -->
                        <div id="fin_effort_chart_div"></div>
                        <div id="img_fin_effort_chart_div" class="disp_none"></div>
                        <div class="result_div" id="fin_effort"></div>
                    </div>
                    <!-- ********* Alternative Costs to Car Costs section **************** -->
                    <div class="result_section" id="alternative_to_carcosts_section">
                        <div class="result_section_title" id="alternative_to_carcosts_title">
                            <b><?php echo mb_convert_case($PUBL_TRA_EQUIV, MB_CASE_UPPER, "UTF-8"); ?></b>
                        </div>
                        <div class="result_div" id="alternative_to_carcosts"></div>
                    </div>
                    <!-- ************* Buttons ****************** -->
                    <div class="result_section" id="exten_costs_section">
                        <div class="result_div" id="extern_costs"></div>
                    </div>
                    <!-- ************* Buttons ****************** -->
                    <div class="result_section" id="buttons_section">
                        <div class="result_div" id="result_buttons_div">
                            <input type="submit" class="button" value="<? echo $BUTTON_RERUN; ?>" onclick="reload();"/>&nbsp;
                            <input type="submit" id="print_button" class="button" value="<? echo $WORD_PRINT; ?>"
                                onclick="PrintElem('#main_table_section','#monthly_costs_section','#fin_effort_section','#alternative_to_carcosts_section','#exten_costs_section', '<? echo $WEB_PAGE_TITLE; ?>');" />&nbsp;                            
                            <input id="generate_PDF" type="submit" class="button" value="<? echo $WORD_DOWNLOAD_PDF; ?>" onclick="generatePDF('<?echo $MAIN_TITLE ?>', public_transp_bool, uber_obj.print_bool, fin_effort_bool, extern_costs_bool)" />
                            <div id="shareIcons"></div>
                        </div>                               
                    </div>
                    <!-- ************* ********* ************* -->
                    <br>
                </div>
                <!--#######################################################################################-->
                <!-- div1 = RIGHT layout column-->
                <div id="div1_td">
                    <div id="div1" class="roundCornerSlight">
                        <?php include_once './layout/rightColumn.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <!--jquery.js-->
    <script src="js/jquery/jquery.min.js"></script>
    <!--jquery timer-->
    <script src="js/jquery/js_timer.js"></script>

    <!--Define GLOBAL Javascript variables-->
    <script>
        var Country = '<?php echo $GLOBALS["country"]; ?>';
        //Language code according to ISO_639-1 codes
        var Language = '<?php echo $lang_CT[$GLOBALS['country']]; ?>';
        var Domain_list = <?php echo json_encode($domain_CT); ?>;
        var uber_obj = {};//empty object
        var frame_witdh, public_transp_bool, fin_effort_bool, extern_costs_bool;
        var ResultIsShowing, DescriptionHTML, CalculatedData;
        var isHumanConfirmed = false; //global variable for Google reCaptcha
        var RunButtonStr = '<?php echo $BUTTON_RUN; ?>';       
        //global variables for each service availability
        //Later on in the code, the variables might be set to TRUE if the services are available
        //Therefore do not change these values here
        var IsGoogleCharts = false; //variable that says whether Google Charts JS files are available
        var IsGoogleCaptcha = false; //variable that says whether Google Captcha JS files are available  
        var IsGoogleAnalytics = false; //variable that says whether Google Analytics JS files are available
        //renders according to Global swicthes
        if(!PRINT_SWITCH){$("#print_button").hide();}
        if(!PDF_SWITCH){$("#generate_PDF").hide();}
    </script>

    <script><?php include('js/validateForm.js.php'); ?></script>
    <script src="js/documentFunctions.js"></script>
    <script src="js/formFunctions.js"></script>
    <script src="js/initialize.js"></script>
    <script src="js/jAlert/jAlert.js"></script>
    <?php include_once("google/analytics.php"); ?>
    
</body>

</html>
