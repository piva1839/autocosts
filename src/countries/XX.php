<?php

// COUNTRY: TEST
// LANGUAGE: ENGLISH

//the language is according with the two-letter language code ISO 639-1
//http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes

//***********************************************
//                                             **
//      Translation for AUTOCOSTS.INFO         **
//      the automobile costs calculator        **
//                                             **
//***********************************************

// IMPORTANT: Preserve always the same standards, BE CHOERENT between the text variables and the standard options
//Fuel efficiency for car engine standard
$fuel_efficiency_std_option = 3;
//1 - l/100km - litres per 100 kilometres
//2 - km/l - kilometres per litre
//3 - mpg(imp) - miles per imperial gallon
//4 - mpg(US) - miles per US gallon
//Standard distance
$distance_std_option = 2;
//1 - kilometres
//2 - miles
//Standard volume for the price of fuels, ex: Currency($,£,€,etc.)/(Litre, Imp gallon, US gallon) 
$fuel_price_volume_std = 1;
//1 - litres
//2 - imperial gallons
//3 - US gallons
//standards TEXT VERSION
//IMPORTANT: BE COHERENT with the above standards
$CURR_CODE = 'GBP';
$CURR_NAME = 'Pound';
$CURR_NAME_PLURAL = 'Pounds';
$CURR_NAME_BIG_PLURAL = 'POUNDS';
$CURR_SYMBOL = '&pound;';
$STD_DIST = 'mi'; //short text version you'd like to apply
$STD_DIST_FULL = 'miles';
$STD_FUEL_CALC = 'mpg(imp)'; //text version you'd like to apply
$STD_VOLUME_SHORT = 'ltr'; //short text version you'd like to apply for fuel price per volume unit (litres, imperial gallons or US gallons, be coherent)
//simple words
$WORD_PER = 'per';     //ex: 4 km _per_ day
$WORDS_PER_EACH = 'per each';   //ex: 4 miles _ per each_ two months
$WORD_TIMES = 'times'; //ex: 4 times per week
$DURING = 'during';   //spent in tolls 3€ per day _during_ 22 days per month
$WORD_PEOPLE = 'people';   //plural, 3 _people_ 
$YES = 'yes';
$NO = 'no';
$BUTTON_RUN = 'Run'; //run calculator button 
$BUTTON_RERUN = 'Rerun'; //run calculator button 
//WEB PAGE
$WEB_PAGE_TITLE = 'Automobile costs calculator';
$MAIN_TITLE = 'AUTOMOBILE COSTS CALCULATOR';
$INITIAL_TEXT = 
"This calculator will allow you to find <b>the true cost</b> of owning a car in the <b>United Kingdom</b>. It will normally give you a good estimate of what you really need to spend to afford owning a car.
As your motor bills come in at different points over the year, it's often difficult to really appreciate your total spend on your car. Be realistic on the input values. For unexpected bills, such as accident repairs or fines, think how much you have spent on those items during the last few years. By default these calculations are monthly based. Use the the dot symbol for decimal notation, for example 8.7 miles between home and workplace.";
$DISCLAIMER = "This calculator is <b>completely anonymous</b>, as it doesn't request nor permanently store, any name, email, cookies, IP address nor any other personal information.";

$HELP_PROJECT = 'This is a free service with no advertisements!' ;
$AC_MOBILE = 'AUTOCOSTS<br>for mobile devices';
$AC_SUB_HEADER = 'AUTOMOBILE COSTS CALCULATOR';

//user statistics
$VISITORS = 'Visitors';
$ONLINE = 'online';
$THIS_MONTH = 'this month';
$IN_TOTAL = 'in total'; //in the sense of "the website had 10000 visitors *in total*"
$USERS = 'Users';
$FOR_COUNTRY = 'for the test'; //in the sense of "10 users filled in *for Portugal". Replace Portugal accordingly.
$IN_TOTAL = 'in total'; //in the sense of "10000 users filled in *in total* the form "
$CONTACT = 'Contact';

//time words
$DAYLY = 'daily';
$WEEKLY = 'weekly';
$MONTHLY = 'monthly';
$TRIMESTERLY = 'quarterly';
$SEMESTERLY = 'half-yearly';
$YEARLY = 'yearly';
$MIN = 'min';
$MINUTES = 'minutes';
$HOUR = 'hour';
$HOURS = 'hours';
$HOUR_ABBR = 'h';
$DAY = 'day';
$DAYS = 'days';
$WEEK = 'week';
$WEEKS = 'weeks';
$MONTH = 'month';
$MONTHS = 'months';
$TWO_MONTHS = 'two months';
$DIST_EACH_TWO_MONTHS = 'miles for every two months';
$TRIMESTER = 'trimester';
$SEMESTER = 'semester';
$YEAR = 'year';
$DAYS_PER_WEEK_SHORT= 'days/week';
//distance
$DISTANCE = "Distance";

//statistics
$AVERAGE_COSTS_PER_TYPE = 'Average monthly cost per type';
$STATISTIC_TITLE = 'Automobile costs for';
$DEPRECIATION_ST = 'Depreciation';
$INSURANCE_ST = 'Insurance';
$REP_ST = 'Repairs';
$WASHING_ST = 'Washing';
$VIRTUAL_SPEED_TITLE = 'Consumer speed';
$KINETIC_SPEED_TITLE = 'Kinetic speed';

//calculator words
$COSTS= "Costs";
$FIXED_COSTS = 'Standing costs';
$FIXED_COSTS_HEADER_1= 'STANDING COSTS'; //capital letters
$FIXED_COSTS_HEADER_2= "Those that don't depend on the travelled distance, and one must pay to have the car ready for running"; 
$DAYS_PER = "days per";
$RUNNING_COSTS = 'Running costs';
$RUNNING_COSTS_HEADER_1 = 'RUNNING COSTS'; //capital letters
$RUNNING_COSTS_HEADER_2 = 'Those that depend on the travelled distance';
$PRIVATE_COSTS = 'Private costs';
$MONTHLY_AMOUNT = 'Monthly amount';
$RUN_CP_DIST = 'Running costs per mile'; //running costs per unit distance
$TOTAL_CP_DIST = 'Total costs per mile'; //total costs per unit distance
$PUBL_TRA_EQUIV= "Equivalent transport costs, considering you don't own a car";
$WORD_TOTAL_CAP = 'TOTAL'; //capital word for total
$WORD_PRINT = 'Print';
$WORD_DOWNLOAD_PDF = 'Download PDF report';
//depreciation
$DEPRECIATION = 'Depreciation of the vehicle';
$AQ_DATE = 'Car acquisition date';
$COM_VALUE = 'Commercial value of the car when you bought it<br><i>if new, the price you paid for the car<br>if used, the commercial value the car had when you acquired it</i>';
$COM_VALUE_TODAY = 'Commercial value of the car today<br><i>if you sell it now, how much would you get?</i>';
$PERIOD_OWN = 'Period of possession';
$FINAL_VALUE = 'Value today';
$AQ_VALUE = 'Acquisition value';
//insurance
$INSURANCE = 'Vehicle insurance and Breakdown cover';
$INSURANCE_SHORT = 'Insurance and Breakdown cover';
//credit
$CREDIT = 'Car finance';
$CREDIT_PERIOD = 'Period';
$CREDIT_INTERESTS = 'Loan interests';
$CREDIT_INTERESTS_MONTH = 'Monthly amount on interests';
$CREDIT_TOTAL_INTERESTS = 'Total amount of interests';
$CREDIT_QUESTION = 'Did you use car finance to acquire the vehicle?';
$CREDIT_LOAN = 'Financed amount:<br><i>How much did you borrow?</i>';
$CREDIT_LOAN2 = 'Financed amount';
$CREDIT_PERIOD = 'Credit period / number of credit instalments';
$CREDIT_AVERAGE_VALUE = 'Average amount per each instalment';
$CREDIT_RESIDUAL_VALUE = 'Residual value:<br><i>At the end of the credit period, how much you still need to pay or you have paid?</i>';
$CREDIT_RESIDUAL_VALUE1 = 'Residual value';
$CREDIT_INSTALMENT = 'Monthly average value';
//inspection
$INSPECTION = 'Vehicle inspection (MOT test)';
$INSPECTION_SHORT = 'Inspection';
$INSPECTION_NBMR_TIMES = 'How many times have you taken your car to vehicle inspection?';
$INSPECTION_PRICE =  'Average cost per each vehicle inspection';
$EACH_ONE_DURING = 'each one during'; //5 times costing 15€ *each one during* 20 months (inspection)
$TIMES_COSTING = 'times costing';     //5 *times costing* 15€ each one during 20 months (inspection)
//road taxes
$ROAD_TAXES = 'Vehicle Excise Duty (Car tax)';
$ROAD_TAXES_SHORT = 'Car Tax';
$ROAD_TAXES_VALUE = 'Car tax for your car:<br><i>payment made to the state</i>';
//fuel
$FUEL = 'Fuel';
$FUEL_DESC = 'Petrol, diesel, LPG, electricity';
$FUEL_CALC = 'Calculations based on';
$FUEL_JOB_CALC = 'Considering you drive to work?';
$FUEL_JOB_CALC1 = 'Day(s) per week you drive to work';
$FUEL_DAYS = 'Day(s) per week you drive to work';
$FUEL_DIST_HOME_JOB = 'Miles you drive between home and workplace (just one way)'; //CURR_DIST=km, miles, etc.
$FUEL_DIST_HOME_JOB1 = 'miles between home and workplace'; //you do 7 km between home and job
$FUEL_DIST_NO_JOB = "Miles you drive on average during the days you don't take your car to workplace:<br><i>for example per each weekend</i>";
$FUEL_DIST_NO_JOB1 = "miles on average during the days you don't take your car to workplace"; // you do 5 km per week....
$FUEL_DIST = 'Miles you drive';
$FUEL_CAR_EFF = 'Fuel efficiency of your vehicle';
$FUEL_PRICE = 'Average price you pay for the fuel';
$FUEL_PRICE1 = 'Fuel average price';
$YOU_DRIVE_TOTTALY_AVG = 'You drive totally on average of'; //__You drive totally on average of__ 5 km per day
$YOU_DRIVE = 'You drive'; //__You drive__ 5 km per day
//MAINTENANCE
$MAINTENANCE = 'Maintenance';
$MAINTENANCE_DESC = 'Average cost on maintenance and Breakdown cover:<br><i>engine oil substitution, filters, lights, tires, breaks, air conditioning, steering alignment, etc.</i>';
//REPAIRS AND IMPROVEMENTS
$REP_IMPROV = 'Repairs and improvements';
$REP_IMPROV_DESC = 'Average cost on repairs and improvements:<br><i>car parts, modifications, malfunctioning repairing, dents, collisions, tuning, etc.</i>';
//PARKING
$PARKING = 'Parking';
$PARKING_DESC = 'Average cost with car parking:<br><i>parking meters in the city, renting a parking space, underground or overground parking lots in public buildings, shopping centres, airports, bus or train stations or any other infrastructures.</i>';
//TOLLS
$TOLLS = 'Tolls';
$TOLLS_DESC = 'Average amount spent with tolls<br><i>bridges, tunnels, motorways and congestion charges to gain access to city-centre</i>';
$TOLLS_DAY_CALC = 'Calculation based on day?';
$TOLLS_DAY_CALC1 = 'Daily amount you spend with tolls';
$TOLLS_DAY_CALC_DESC = 'Think even about the rare trips you make to the exterior of your town or to the countryside, or on the receipts of any kind of electronic toll collection';
//FINES
$FINES = 'Traffic tickets';
$FINES_DESC = 'Average amount paid in traffic tickets:<br><i>think in the last few years how much you paid in any kind of traffic tickets (illegal parking, speed limit violation, mobile-phone, etc.)</i>';
//WASHING
$WASHING = 'Washing and cleaning';
$WASHING_DESC = 'Average washing and valet bill:<br><i>in service stations and other places</i>';
//TOTAL
$TOTAL_FIXED = 'TOTAL - Standing costs';
$TOTAL_FIXED_DESCR = "Costs that don't depend on the travelled distance and one must pay even if the car is always stopped";
$TOTAL_FIXED_DESCR2 = 'Depreciation, Insurance, Finance interests, Taxes, Inspection and 50% of parking and maintenance';
$TOTAL_VARIABLE = 'TOTAL - Running costs';
$TOTAL_VARIABLE_DESCR = 'Costs that depend on the number of miles you drive';
$TOTAL_VARIABLE_DESCR2 = 'Fuels, Repairing and improvements, Parking (considering you only pay it when you use the car), tolls, traffic tickets, washing, and 50% of maintenance';
//EXTRA DATA
$EXTRA_DATA = 'ADDITIONAL DATA';
$EXTRA_DATA1 = 'Additional data';
$EXTRA_DATA_PUBLIC_TRANSP = 'Public transports';
$EXTRA_DATA_FAMILY_NBR = 'How many people older than 4 years old you have in your family (including you)';
$EXTRA_DATA_PRICE_PASS = "What is the average price per person of the public transports monthly season ticket, for your normal daily life<br><i>if public transport isn't an option for you, insert 0</i>";
$EXTRA_DATA_INCOME = 'Income';
$EXTRA_DATA_INCOME_QUESTION = 'What is your net income?';
$EXTRA_DATA_WORKING_TIME = 'Working time';
$EXTRA_DATA_WORKING_TIME_QUESTION = 'Do you have a job or a worthy occupation?';
$EXTRA_DATA_TIME_SPENT_IN_DRIVING = 'Time spent in driving';
$EXTRA_DATA_TIME_QUESTION1 = 'How many minutes you drive from home to workplace? (just one way)';
$EXTRA_DATA_TIME_QUESTION2 = 'How many minutes you drive in the days you don\'t take the car to workplace?';
$EXTRA_DATA_TIME_QUESTION3 = 'How many minutes you drive?';
//PUBLIC TRANSPORTS
$PUB_TRANS_TEXT = 'Public transports for your family daily life';
$FAM_NBR = 'Number of members of your family older than 4 years old';
$PERSON_OR_PEOPLE = 'person(s)';
$PASS_MONTH_AVG = 'Average amount of the monthly season ticket per person';
$OTHER_PUB_TRANS = 'Other public transports';
$OTHER_PUB_TRANS_DESC = "Amount that was still left to other public transports, for example out of your residential area, such as long journey trains or buses";
$TAXI_DESL = "Taxi transportation";
$ON_TAXI_PAYING = "by taxi paying"; //ex: 4 km __on taxi paying__ 5€ per km
//VIRTUAL SPEED
$FINANCIAL_EFFORT = 'Financial effort';
$NET_INCOME_PER = 'Net income per';
$AVERAGE_NET_INCOME_PER = 'Average net income per';
$NUMBER_OF_MONTHS = 'Number of months per year of income';
$NUMBER_OF_WEEKS = 'Number of weeks per year of income';
$NUMBER_OF_HOURS= 'Number of hours per week of income';
$HOURS_PER = 'Hours per';
$MONTHS_PER = 'Months per';
$AVERAGE_WORKING_HOURS_PER = 'Average working hours per';
$WORKING_HOURS_PER = 'Working hours per';
$DIST_HOME_JOB = 'You drive from home to work';
$DAYS_DRIVE_JOB = 'Days per week you drive to work';
$DIST_JORNEY_WEEKEND = 'You drive during the days you don\'t take the car to workplace';
$AVERAGE_DIST_PER_WEEK = 'You drive on average per week';
$YOU_DRIVE_PER = 'You drive per';
$MINUTES_HOME_JOB = 'Minutes you drive from home to workplace';
$DAYS_DRIVE_TO_JOB = 'Days per week you drive to work';
$TIME_DRIVE_WEEKEND = 'Minutes you drive in the days you don\'t take the car to workplace';
$MINUTES_DRIVE_PER = 'Minutes you drive per';
$DAYS_DRIVE_PER_MONTH = 'Days you drive per month';
$HOURS_DRIVE_PER = 'Hours you drive per';
$VIRTUAL_SPEED = 'consumer speed';
$KINETIC_SPEED = 'kinetic speed';
$AVER_YEARLY = 'Average yearly';
$WORKING_TIME_MESSAGE = 'It was considered for calculations an average working time of 36 hours per week and 11 months per year';
$HOURS_TO_AFFORD_CAR = 'Hours per year you need to work to afford your car';
$MONTHS_TO_AFFORD_CAR = 'Months per year you need to work to afford your car';
$TOTAL_COSTS_PER_YEAR = 'Total costs per year for automobile';
$DAYS_CAR_PAID = 'For how many days, after the 1st of January, the car is paid';
//**************************************************
//GRAPHICS
$PARCEL = 'Parcel';
$COSTS = 'Costs';
//****************************************************
//ERROR MESSAGES
$ERROR_INVALID_INSU_VALUE = 'Invalid insurance amount';
$ERROR_INSU_PERIOD = 'Insert periodicity of insurance';
$ERROR_FUEL_CURR_DIST = 'You must refer if you want to make calculations based on pounds or on miles';
$ERROR_FUEL_CAR_EFF = 'Invalid fuel efficiency amount';
$ERROR_FUEL_PRICE = 'Invalid fuel price';
$ERROR_CAR_JOB = 'Please indicate if you take your car to workplace';
$ERROR_FUEL_DIST = 'Invalid amount of miles travelled per month';
$ERROR_DAYS_PER_WEEK = 'Invalid number of days per week';
$ERROR_DIST_HOME_WORK = 'Invalid miles between home and workplace';
$ERROR_DIST_NO_JOB = "Invalid number of miles you do during the days you don't take your car to workplace";
$ERROR_CURRENCY = 'Invalid pounds per month';
$ERROR_DEPRECIATION_MONTH = 'Invalid acquisition month';
$ERROR_DEPRECIATION_YEAR = 'Invalid acquisition year';
$ERROR_DEPRECIATION_VALUE = 'Invalid acquisition amount';
$ERROR_DEPRECIATION_VALUE_TODAY = 'Invalid today vehicle value';
$ERROR_DEPRECIATION_DATE = 'Invalid acquisition date';
$ERROR_DEPRECIATION_NEW_CAR =  'The depreciation does not apply because this vehicle is new';
$ERROR_CREDIT_QUESTION = 'Please refer if you used car finance';
$ERROR_CREDIT_LOAN_VALUE = 'Invalid financed amount';
$ERROR_CREDIT_PERIOD = 'Invalid period of credit, number of instalments';
$ERROR_CREDIT_INSTALMENT = 'Invalid instalment amount';
$ERROR_CREDIT_RESIDUAL_VALUE = 'Invalid residual value';
$ERROR_INSPECTION_NTIMES = 'Invalid number of times';
$ERROR_INSPECTION_COSTS = 'Invalid inspection cost';
$INVALID_AMOUNT = 'Invalid amount';
$INVALID_NBR_PP = 'Invalid number of people';
$ERROR_PASS_AMOUNT= 'Invalid monthly ticket amount';
$ERROR_INCOME = 'Invalid net income';
$ERROR_WEEKS_PER_YEAR = 'Invalid number of weeks per year';
$ERROR_MONTHS_PER_YEAR = 'Invalid number of months per year';
$ERROR_HOURS_PER_WEEK = 'Invalid number of hours per week';
$ERROR_MIN_DRIVE_HOME_JOB = 'Invalid number of minutes you drive from home to workplace';
$ERROR_MIN_DRIVE_WEEKEND = 'Invalid number of minutes you drive in the days you don\'t take the car to workplace';
$ERROR_MIN_DRIVE = 'Invalid number of minutes you drive';
$ERROR_DAYS_PER_MONTH = 'Invalid number of days per month';
//FINAL RESULT
$YOUR_CAR_COSTS_YOU = 'Your car costs';
$WITH_THIS_LEVEL_OF_COSTS = 'With this level of costs, your vehicle during the'; //ex: __"With this level of costs, you car during the"__ 15 months of possession....
$MONTHS_POSS = 'months of possession has already costed';   //ex: With this level of costs, you car during the 15 ___"months of possession has already costed"___ 14000 Euros
$TAXI_PRICE_PER_DIST=1.5; //price paid for taxi in chosen currency per chosen unit distance
//*****************************************
//STANDARD COMMON AVERAGE DEFAULT values that apear on the start page
//these values are to be changed by the user but you shall put values that are reasonable
//keep in mind your chosen standard Currency and your volume and fuel efficiency standards
$STD_ACQ_MONTH = '1'; //month of acquisition 
$STD_ACQ_YEAR = '2001'; //year of acquisition 
$STD_PRICE_PAID = '20000'; //price paid for the car
$STD_PRICE_TODAY = '10000'; //the price the car has today
$STD_INSURANCE_SEM = '200'; //price paid for insurance by semester
$STD_LOAN = '15000'; //amount asked for credit
$STD_PERIOD_OF_CREDIT = '48'; //period of the credit in months
$STD_MONTHLY_PAY = '300'; //monthly payment
$STD_RESIDUAL_VALUE = '5000'; //residual value must be paid after credit
$STD_NBR_INSPECTION = '3'; //number of times car went to inspection
$STD_INSPECTION_PRICE = '36'; //normal inspection price
$STD_ROAD_TAX = '50'; //price paid for road taxes per year
$STD_FUEL_PAID_PER_MONTH = '170'; //money spent per month on fuels
$STD_DAYS_PER_WEEK = '5'; //days per week one takes their car to work
$STD_JORNEY_2WORK = '15'; //(standard distance, km or miles) made from home to work (just one way) 
$STD_JORNEY_WEEKEND = '40'; //(standard distance, km or miles) during the other days, for example weekends
$STD_KM_PER_MONTH = '300'; //(standard distance, km or miles) made per month
$STD_CAR_FUEL_EFFICIENCY = '9'; //(standard fuel efficiency, km/l l/100km mpg(US) or mpg(imp)) fuel efficiency in the chosen standard
$STD_FUEL_PRICE = '1.4'; //price paid for fuel on chosen currency
$STD_MAINTENANCE_PER_YEAR = '300'; //amount paid for maintenance per year
$STD_REPAIRS = '150'; //repairs and improvements paid per year on average
$STD_PARKING = '20'; //parking paid per month
$STD_TOLLS = '20'; //amount paid in tolls per trimestre 
$STD_TOLLS_DAY = '1'; //amount paid in tolls per day
$STD_TOLLS_DAYS_PER_MONTH = '22'; //number of days per month the car crosses a tolled way
$STD_FINES = '10'; //fines paid on average per trimestre
$STD_WASHING = '10'; //amount paid in washings per trimestre
$STD_NR_PPL_FAMILY = '4'; //number of people in the family
$STD_PASS_PRICE = '40'; //price of the monthly pass
$STD_INCOME_YEAR = '22000'; // net income per year
$STD_INCOME_MONTH = '2000'; // net income per month
$STD_INCOME_WEEK = '500'; // net income per week
$STD_INCOME_HOUR = '20'; // net income per hour
$STD_MONTHS_YEAR = '11'; // months per year
$STD_HOURS_WEEK = '30'; // hours per week
$STD_WEEKS_YEAR = '48'; // weeks per year
$STD_HOURS_WEEK = '36'; // work hours per week
$STD_TIME_HOME_JOB = '20'; // minutes you drive from home to workplace
$STD_TIME_WEEKEND = '20';// minutes you drive in the days you don't take the car to workplace
$STD_TIME_IN_DRIVING = '60'; // time spent in driving (minutes/day)
$STD_DAYS_MONTH = '22'; // days per month
?>