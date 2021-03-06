/* runs function init() every time the page is loaded */

$(document).ready(function() {
    //alert("1");
    document.addEventListener("deviceready", onDeviceReady, false);
});

function onDeviceReady() {
    console.log("onDeviceReady() started");

    //tries to get the Cuuntry by the stotrage, i.e., previous usage/ country selection
    var country = getCountryOnStorage();
    if(country){
        console.log("onDeviceReady() found CountryOnStorage");
        Country = country;
        init();
    }
    else{
        console.log("onDeviceReady() didn't find CountryOnStorage");
        //tries to obtain user country from device spec.
        navigator.globalization.getLocaleName(
            function (locale) {
                var Cty_temp = (locale.value).split("-")[1]; //in pt-BR gets BR
                if (contains(CountryList, Cty_temp)){
                    Country = Cty_temp;
                }
                else {
                    Country = DefaultCountry;
                }
                init();
            },
            function () {
                Country = DefaultCountry;
                init();
            }
        );
    }
}

//if by any strange reason onDeviceReady doesn't trigger, load init() anyway
setTimeout(function () {
    if (!WAS_INIT){
        var country = getCountryOnStorage();
        window.console && console.log("getCountryOnStorage(): " + country);

        if(country){
            Country = country;
        }
        else{
            Country = DefaultCountry;
        }

        init();
    }
}, 3000);

function init(callback){
    window.console && console.log("init() started");

    WAS_INIT = true;

    SCREEN_WIDTH = $(window).width();

    //associates change of country drop down menu with function onCountrySelect
    document.getElementById("country_select").addEventListener("change", onCountrySelect, false);

    //actively selects in the dropdown menu, the Country
    $("#country_select").val(Country);
    $("#country_select").selectmenu("refresh", true);

    //the expression window[Country] refers to the variable whose name is Country, considering Country is here a string
    //it comes from file js/languages.js
    CountryLangObj = window[Country];

    $("#input_div").load("form/"+Country+".html", function(){
        $.getScript("js/formFunctions.js", function(){
            $.getScript("validateForm/" + Country + ".js", function(){
                $.getScript("print_results/" + Country + ".js", function(){
                    if (typeof callback === 'function'){
                        hasLoadedAllFiles(callback);
                    }
                    else{
                        hasLoadedAllFiles();
                    }
                });
              });
            });
        });

    //add flag
    $("#banner_flag").removeClass().addClass(Country.toLowerCase() + " flag");

    document.title = CountryLangObj.web_page_title;
    $("#main_title").html(CountryLangObj.main_title);

    $("#result_buttons_div").
        html('<input type="button" class="button" id="reload_button" value="'+CountryLangObj.button_rerun+'" />');
    $("#result_buttons_div").on("click", "#reload_button", reload);

    $("#monthly_costs_title").text(CountryLangObj.average_costs_per_type);
    $("#fin_effort_title").text(CountryLangObj.financial_effort);
    $("#alternative_to_carcosts_title").text(CountryLangObj.publ_tra_equiv);

    //defaults for the alert box
    $.fn.jAlert.defaults.size = 'sm';
    $.fn.jAlert.defaults.theme = 'default';
    $.fn.jAlert.defaults.closeOnClick = 'true';
    $.fn.jAlert.defaults.showAnimation = 'false';
    $.fn.jAlert.defaults.hideAnimation = 'false';

    CurrentFormPart=1;
    DISPLAY.result.isShowing = false; //global variable indicating whether the results are being shown
}


function hasLoadedAllFiles(callback){

    //due to setting reasons cordova doesn't allow onclick embedded in the HTML
    $("#run_button").prop('type', 'button');
    saneOnClickHandler("run_button", Run1, "onclick");

    saneOnClickHandler("form_part1_button_next", function(){openForm_part(1, 2)}, "onclick");
    saneOnClickHandler("form_part2_button_back", function(){openForm_part(2, 1)}, "onclick");
    saneOnClickHandler("form_part2_button_next", function(){openForm_part(2, 3)}, "onclick");
    saneOnClickHandler("form_part3_button_back", function(){openForm_part(3, 2)}, "onclick");

    saneOnClickHandler("cred_auto_true", function(){onclick_div_show('#sim_credDiv',true)}, "onclick");
    saneOnClickHandler("cred_auto_false", function(){onclick_div_show('#sim_credDiv',false)}, "onclick");
    saneOnClickHandler("radio_fuel_km", function(){fuelCalculationMethodChange('distance')}, "onclick");
    saneOnClickHandler("radio_fuel_euros", function(){fuelCalculationMethodChange('currency')}, "onclick");
    saneOnClickHandler("car_job_form2_yes", function(){carToJob(true)}, "onclick");
    saneOnClickHandler("car_job_form2_no", function(){carToJob(false)}, "onclick");
    saneOnClickHandler("tolls_daily_true", function(){tolls_daily(true)}, "onclick");
    saneOnClickHandler("tolls_daily_false", function(){tolls_daily(false)}, "onclick");

    saneOnClickHandler("drive_to_work_yes_form3", function(){driveToJob(true)}, "onchange");
    saneOnClickHandler("drive_to_work_no_form3", function(){driveToJob(false)}, "onchange");
    saneOnClickHandler("working_time_yes_form3", function(){working_time_toggle(true)}, "onchange");
    saneOnClickHandler("working_time_no_form3", function(){working_time_toggle(false)}, "onchange");

    saneOnClickHandler("radio_income_year", function(){income_toggle("year")}, "onchange");
    saneOnClickHandler("radio_income_month", function(){income_toggle("month")}, "onchange");
    saneOnClickHandler("radio_income_week", function(){income_toggle("week")}, "onchange");
    saneOnClickHandler("radio_income_hour", function(){income_toggle("hour")}, "onchange");

    //divs that need to be hidden
    DISPLAY.centralFrameWidth = document.getElementById('monthly_costs').offsetWidth;

    DescriptionHTML = $('#description').html();

    //make some initial settings in the options of the form
    $('#numberInspections').val(0);
    $("#InspectionCost_tr").hide();
    setRadioButton("insurancePaymentPeriod", "semestral");
    $("#main_form select").val('1'); //set all the selects to "month"

    tolls_daily(false);

    document.getElementById("radio_fuel_euros").checked = true;
    $('#currency_div_form2').show();
    $('#distance_div_form2').hide();
    document.getElementById("cred_auto_false").checked = true;
    $('#sim_credDiv').hide();

    //sets "Considering you drive to work?",  Distance section in Form Part 3, to No
    driveToJob(false);
    //sets radio button in Form Part 2, section Fuel calculations, on Currency
    fuelCalculationMethodChange('currency');
    carToJob(false);

    //set public transporsts and fin. effort main DIVs to no
    $('#slider1').checked = false;
    $('#public_transp_Div_form3').hide();
    $('#slider1').checked = false;
    $('#fin_effort_Div_form3').hide();
    $("#distance_time_spent_driving_form3").hide();

    //align radio button text
    $("#main_form input:radio").siblings("span").css("vertical-align", "text-bottom");

    $('#run_button_noCapctha').remove();
    $('#run_button').show();

    //read predefined values from local storage
    readFromStorage();

    //alert("init()");
    showLayout();

    //calls the callback() if it's a function
    if (typeof callback === 'function'){
        callback();
    }
}

//due to setting reasons cordova doesn't allow onclick embedded in the HTML
//the attribute must be removed from the DOM and the event added
function saneOnClickHandler(id, functionToExec, onAction){
    document.getElementById(id).removeAttribute(onAction);
    document.getElementById(id).addEventListener("click", functionToExec);
}


