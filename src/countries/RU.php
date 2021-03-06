<?php

// COUNTRY: RUSSIA
// LANGUAGE: RUSSIAN

$COUNTRY_NAME = 'России';

//the language is according with the two-letter language code ISO 639-1
//http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes

//***********************************************
//											   **
//      Translation for AUTOCOSTS.INFO         **
//      the automobile costs calculator		   **
//	  										   **
//***********************************************

// IMPORTANT: Preserve always the same standards, BE CHOERENT between the text variables and the standard options

//Fuel efficiency for car engine standard
$fuel_efficiency_std_option = 1;
//1 - л/100km - литров на 100 км
//2 - km/л - километр на литр
//3 - mpg(imp) - миль на галлон (имп)
//4 - mpg(US) - миль на галлон (США)

//Standard distance
$distance_std_option = 1;
//1 - километр
//2 - миль

//Standard volume for the price of fuels, ex: Currency($,LEI,EUR,etc.)/(Litre, Imp gallon, US gallon) 
$fuel_price_volume_std = 1;
//1 - литровый
//2 - галлон (имп)
//3 - галлон (США)

//standards TEXT VERSION
//IMPORTANT: BE COHERENT with the above standards
$CURR_CODE = 'RUB';
$CURR_NAME = 'руб.';
$CURR_NAME_PLURAL = 'руб.';
$CURR_NAME_BIG_PLURAL = 'рyб.';
$CURR_SYMBOL = '&#x20bd;';
$STD_DIST = 'км'; //short text version you'd like to apply
$STD_DIST_FULL = 'километр';
$STD_FUEL_CALC = 'л/100 км'; //text version you'd like to apply
$STD_VOLUME_SHORT = 'л'; //short text version you'd like to apply for fuel price per volume unit (litres, imperial gallons or US gallons, be coherent)

//simple words
$WORD_PER = '/';     //ex: 4 km _per_ day
$WORDS_PER_EACH = 'в каждом';   //ex: 4 miles _ per each_ two months
$WORD_TIMES = 'раз'; //ex: 4 times per week
$DURING = 'во время';   //spent in tolls 3x per day _during_ 22 days per month
$WORD_PEOPLE = 'человек(а)';   //plural, 3 _people_ 
$YES = 'да';
$NO = 'нет';

$BUTTON_RUN = 'Рассчитать'; //run calculator button 
$BUTTON_RERUN = 'Пересчитать'; //run calculator button 

//WEB PAGE
$WEB_PAGE_TITLE = 'Калькулятор расходов на автомобиль';
$MAIN_TITLE = 'КАЛЬКУЛЯТОР РАСХОДОВ НА АВТОМОБИЛЬ';
$INITIAL_TEXT = 
"С помощью этого симулятора Вы можете узнать <b>реальную стоимость </b> содержания автомобиля в <b>России</b>. Он даст Вам достаточно точную оценку затрат. 
Зачастую бывает сложно оценить общий уровень расходов на машину, поскольку они возникают в различное время и в течение всего года. Вводите реалистичные данные. Что касается внеплановых затрат, таких как ремонт после аварии или штрафы, вспомните, сколько Вы на них потратили в течение прошлых нескольких лет. По умолчанию расчет ведется на основе затрат в месяц. Используйте точку в качестве десятичного разделителя, например: 8.7 км между домом и работой.<br>";

$HELP_PROJECT = 'Помогите этому проекту' ;
$AC_MOBILE = 'AUTOCOSTS<br>для мобильных устройств';
$AC_SUB_HEADER = 'КAЛЬKУЛЯТОР РАСХОДОВ НА АВТОМОБИЛЬ';

//time words
$DAYLY = 'в день';
$WEEKLY = 'в неделю';
$MONTHLY = 'в месяц';
$TRIMESTERLY = 'в квартал';
$SEMESTERLY = 'в полгода';
$YEARLY = 'в год';

$MIN = 'мин.';
$MINUTES = 'минут';
$HOUR = 'час';
$HOURS = 'часов';
$HOUR_ABBR = 'ч';
$DAY = 'день';
$DAYS = 'дней';
$WEEK = 'неделя';
$WEEKS = 'недель';
$MONTH = 'месяц';
$MONTHS = 'месяцев';
$TWO_MONTHS = 'два месяца';
$DIST_EACH_TWO_MONTHS = 'км каждые два месяца';
$TRIMESTER = 'квартал';
$SEMESTER = 'полугодие';
$YEAR = 'год';

$DAYS_PER_WEEK_SHORT= 'дней/недели';

//distance
$DISTANCE = "Расстояние";

//statistics
$AVERAGE_COSTS_PER_TYPE = 'Среднемесячная стоимость типа';
$STATISTIC_TITLE = 'Автомобильные затраты для';
$DEPRECIATION_ST = 'Амортизация';
$INSURANCE_ST = 'Страхование';
$REP_ST = 'Ремонт';
$WASHING_ST = 'Мойка';
$VIRTUAL_SPEED_TITLE = 'Виртуальная скорость';
$KINETIC_SPEED_TITLE = 'Кинетическая скорость';

//calculator words
$COSTS= "Расходы";
$FIXED_COSTS = 'Постоянные расходы';
$FIXED_COSTS_HEADER_1= 'ПOCTOЯННЫE PACXOДЫ'; //capital letters
$FIXED_COSTS_HEADER_2= "Расходы, которые не зависят от пробега и которые необходимы для поддержания машины в исправном состоянии."; 

$RUNNING_COSTS = 'Эксплуатационные расходы';
$RUNNING_COSTS_HEADER_1 = 'ЭKCПЛУATAЦИОННЫE PACXOДЫ'; //capital letters
$RUNNING_COSTS_HEADER_2 = 'Расходы, которые зависят от пробега';

$PRIVATE_COSTS = 'Частные расходы';
$MONTHLY_AMOUNT = 'Сумма в месяц';
$RUN_CP_DIST = 'Эксплуатационные расходы на 1 км'; //running costs per unit distance
$TOTAL_CP_DIST = 'Итого расходы на 1 км'; //total costs per unit distance
$PUBL_TRA_EQUIV= "Эквивалентные расходы на транспорт при отсутствии у Вас собственной машины";
$WORD_TOTAL_CAP = 'ИТОГО'; //capital word for total

$WORD_PRINT = 'Печать';
$WORD_DOWNLOAD_PDF = 'Скачать отчет в формате PDF';

//depreciation
$DEPRECIATION = 'Уменьшение стоимости автомобиля';
$AQ_DATE = 'Дата приобретения автомобиля';
$COM_VALUE = 'Рыночная стоимость машины в момент покупки <br><i>Если машина новая, укажите цену, которую Вы за нее заплатили; <br>если машина подержанная, укажите рыночную стоимость машины на момент приобретения </i>';
$COM_VALUE_TODAY = 'Рыночная стоимость машины на сегодняшний день <br><i>Если Вы сейчас продадите машину, сколько Вам за нее дадут?</i>';
$PERIOD_OWN = 'Период владения';
$FINAL_VALUE = 'Конечная стоимость';
$AQ_VALUE = 'Стоимость приобретения';

//insurance
$INSURANCE = 'Страхование автомобиля и страховое покрытие на случай повреждений на дороге';
$INSURANCE_CHART = 'Страхование автомобиля';
$INSURANCE_SHORT = 'Страхование и страховое покрытие на случай повреждений на дороге';

//credit
$CREDIT = 'Финансирование покупки машины';
$CREDIT_PERIOD = 'Период';
$CREDIT_INTERESTS = 'Проценты за кредит';
$CREDIT_INTERESTS_MONTH = 'Ежемесячная сумма на оплату процентов';
$CREDIT_TOTAL_INTERESTS = 'Общая сумма процентов';
$CREDIT_QUESTION = 'Воспользовались ли Вы услугами финансирования при приобретении автомобиля?';
$CREDIT_LOAN = 'Сумма финансирования:<br><i>Какую сумму Вы взяли в кредит?</i>';
$CREDIT_LOAN2 = 'Сумма финансирования';
$CREDIT_PERIOD = 'Период кредита/количество взносов по уплате кредита';
$CREDIT_AVERAGE_VALUE = 'Средний размер каждого взноса';
$CREDIT_RESIDUAL_VALUE = 'Остаточная стоимость:<br><i> Сколько Вам предстоит еще выплатить или сколько Вы уже выплатили на конец кредитного периода?</i>';
$CREDIT_RESIDUAL_VALUE1 = 'Остаточная стоимость';
$CREDIT_INSTALMENT = 'Средняя стоимость в месяц';

//inspection
$INSPECTION = 'Технический осмотр автомобиля (государственный техосмотр)';
$INSPECTION_SHORT = 'Техосмотр';
$INSPECTION_NBMR_TIMES = 'Сколько раз Вы отвозили свою машину на техосмотр?';
$INSPECTION_PRICE = 'Средняя стоимость каждого техосмотра';
$EACH_ONE_DURING = 'каждый в течение'; //5 times costing 15x *each one during* 20 months (inspection)
$TIMES_COSTING = 'раз при стоимости';     //5 *times costing* 15x each one during 20 months (inspection)

//road taxes
$ROAD_TAXES = 'Акцизная пошлина (налог) на автомобиль';
$ROAD_TAXES_SHORT = 'Налог';
$ROAD_TAXES_VALUE = 'Налог на Ваш автомобиль:<br><i>обязательный государственный сбор:<br><i> обязательный государственный сбор</i>';

//fuel
$FUEL = 'Tопливo';
$FUEL_DESC = 'бензин, соляркa (дизель), газ, электричество';
$FUEL_CALC = 'Расчеты на основе';
$FUEL_JOB_CALC = 'С учетом того, что Вы ездите на работу на машине?';
$FUEL_JOB_CALC1 = 'дня (дней) в неделю, когда Вы ездите на работу на машине';
$FUEL_DAYS = 'дня (дней) в неделю, когда Вы ездите на работу на машине';
$FUEL_DIST_HOME_JOB = 'расстояние в километрах между домом и работой, которое Вы проезжаете на машине (только в один конец)'; //CURR_DIST= км etc.
$FUEL_DIST_HOME_JOB1 = 'км между домом и работой'; //you do 7 km between home and job
$FUEL_DIST_NO_JOB = "среднее расстояние в километрах, которое Вы проезжаете в те дни, когда не ездите на работу на машине: <br><i>например, в выходные дни</i>";
$FUEL_DIST_NO_JOB1 = "среднее расстояние в километрах в те дни, когда Вы не ездите на работу на машине"; // you do 5 km per week....
$FUEL_DIST = 'расстояние, которое Вы проезжаете';
$FUEL_CAR_EFF = 'Топливная экономичность Вашего автомобиля';
$FUEL_PRICE = 'Средняя цена, которую Вы платите за топливо';
$FUEL_PRICE1 = 'Средняя цена топлива';
$YOU_DRIVE_TOTTALY_AVG = 'В общей сложности Вы проезжаете в среднем'; //__You drive totally on average of__ 5 km per day
$YOU_DRIVE = 'Вы проезжаете'; //__You drive__ 5 km per day

//MAINTENANCE
$MAINTENANCE = 'Техническое обслуживание';
$MAINTENANCE_DESC = 'Средняя стоимость технического обслуживания и страхового покрытия на случай повреждений на дороге:<br><i>замена моторного масла, фильтров, ламп, шин, тормозов, регулировка кондиционера, регулировка рулевого управления и т.д.</i>';

//REPAIRS AND IMPROVEMENTS
$REP_IMPROV = 'Ремонт и улучшения';
$REP_IMPROV_DESC = 'Средняя стоимость ремонта и улучшений:<br><i>автозапчасти, модификации, ремонт неисправностей, вмятины/царапины, повреждения в результате столкновений, тюнинг и т.д.</i>';

//PARKING
$PARKING = 'Стоянка';
$PARKING_DESC = 'Средняя стоимость с учетом стоянки:<br><i>паркометры в черте города, аренда стояночного места, подземная или наземная стоянка в общественных зданиях, торговых центрах, аэропортах, на автобусных или железнодорожных станциях или любых других объектах инфраструктуры.</i>';

//TOLLS
$TOLLS = 'Плата за проезд';
$TOLLS_DESC = 'Средняя сумма, потраченная на оплату пошлин за проезд <br><i>мосты, туннели, автомагистрали и зоны платного въезда в центре города</i>';
$TOLLS_DAY_CALC = 'Расчет на основе затрат в день?';
$TOLLS_DAY_CALC1 = 'Сумма, которую Вы ежедневно тратите на оплату пошлин за проезд';
$TOLLS_DAY_CALC_DESC = 'Учтите даже выезды за пределы города или на природу, которые Вы можете совершать время от времени, а также расходы по квитанциям любых электронных сборщиков пошлин за проезд';

//FINES
$FINES = 'Штрафы за нарушение ПДД';
$FINES_DESC = 'Средняя сумма оплаченных штрафов:<br><i>вспомните, какую сумму Вы выплатили за последние несколько лет по штрафам за нарушение ПДД любого рода (стоянка в неположенном месте, нарушение скоростного режима, использование мобильного телефона за рулем и т.д.)</i>';

//WASHING
$WASHING = 'Мойка и чистка';
$WASHING_DESC = 'Средний счет за мойку и чистку:<br><i>на станциях обслуживания и в других местах</i>';

//TOTAL
$TOTAL_FIXED = 'ИТОГО - Постоянные расходы';
$TOTAL_FIXED_DESCR = "Расходы, которые не зависят от пробега и которые необходимо оплачивать, даже если Вы не пользуетесь машиной";
$TOTAL_FIXED_DESCR2 = 'Амортизация, страхование, проценты по финансированию, налоги, техосмотр и 50% за стоянку и техобслуживание';

$TOTAL_VARIABLE = 'ИТОГО - Эксплуатационные расходы';
$TOTAL_VARIABLE_DESCR = 'Расходы, которые зависят от пробега';
$TOTAL_VARIABLE_DESCR2 = 'Топливо, ремонт и усовершенствования, стоянка (исходя из того, что Вы оплачиваете стоянку лишь в том случае, если пользуетесь машиной), оплата пошлин за проезд, штрафы, мойка и 50% расходов на техническое обслуживание';


//EXTRA DATA
$EXTRA_DATA = 'ДОПОЛНИТЕЛЬНЫЕ ДАННЫЕ';
$EXTRA_DATA1 = 'Дoполнительные данные';
$EXTRA_DATA_PUBLIC_TRANSP = 'Общественный транспорт';
$EXTRA_DATA_FAMILY_NBR = 'Сколько в Вашей семье человек старше 4 лет (включая Вас самих)?';
$EXTRA_DATA_PRICE_PASS = "Какова средняя цена одного месячного абонемента на общественный транспорт, необходимого для обычной ежедневной деятельности каждого члена семьи?<br><i>Если Вы не пользуетесь общественным транспортом или это невозможно, введите 0</i>";
$EXTRA_DATA_INCOME = "Доход";
$EXTRA_DATA_INCOME_QUESTION = 'Каков размер Вашего чистого дохода?';
$EXTRA_DATA_WORKING_TIME = 'Рабочее время';
$EXTRA_DATA_WORKING_TIME_QUESTION = 'Есть ли у Вас работа или занятие, приносящее доход?';
$EXTRA_DATA_TIME_SPENT_IN_DRIVING = 'Время, затрачиваемое на вождение';
$EXTRA_DATA_TIME_QUESTION1 = 'Сколько минут занимает у Вас путь от дома до работы на машине (в один конец)?';
$EXTRA_DATA_TIME_QUESTION2 = 'Сколько минут Вы проводите за рулем в те дни, когда Вы не ездите на работу?';
$EXTRA_DATA_TIME_QUESTION3 = 'Сколько минут Вы проводите за рулем?';

//PUBLIC TRANSPORTS
$PUB_TRANS_TEXT = 'Общественный транспорт для ежедневной жизнедеятельности членов Вашей семьи';
$FAM_NBR = 'Количество членов Вашей семьи старше 4 лет';
$PERSON_OR_PEOPLE = 'человек(а)';
$PASS_MONTH_AVG = 'Средняя стоимость месячного абонемента на человека';
$OTHER_PUB_TRANS = 'Другие виды общественного транспорта';
$OTHER_PUB_TRANS_DESC = "Сумма, которая тратится на другие виды общественного транспорта, например, при поездках за пределы Вашего обычного района проживания, такие как поезда или автобусы дальнего следования ";
$TAXI_DESL = "Поездки на такси";
$ON_TAXI_PAYING = "при поездке на такси из расчета"; //ex: 4 km __on taxi paying__ 5x per km

//VIRTUAL SPEED
$FINANCIAL_EFFORT = 'Финансовое усилие';
$NET_INCOME_PER = 'Чистый доход в';
$AVERAGE_NET_INCOME_PER = 'Средний чистый доход в';
$NUMBER_OF_MONTHS = 'Количество месяцев в году получения дохода';
$NUMBER_OF_WEEKS = 'Количество недель в году получения дохода';
$NUMBER_OF_HOURS= 'Количество часов в неделю получения дохода';
$HOURS_PER = 'Часов в';
$MONTHS_PER = 'Месяцев в';
$AVERAGE_WORKING_HOURS_PER = 'Среднее количество рабочих часов в';
$WORKING_HOURS_PER = 'Рабочих часов в';
$DIST_HOME_JOB = 'Ваш путь от дома до работы на машине';
$DAYS_DRIVE_JOB = 'Количество дней в неделю, по которым Вы ездите на работу на машине';
$DIST_JORNEY_WEEKEND = 'Вы проезжаете на машине в те дни, когда не ездите на машине на работу';
$AVERAGE_DIST_PER_WEEK = 'Средний еженедельный пробег';
$YOU_DRIVE_PER = 'Вы проезжаете в';
$MINUTES_HOME_JOB = 'Время в пути в минутах на машине от дома до работы';
$DAYS_DRIVE_TO_JOB = 'Дней в неделю, по которым Вы ездите на работу на машине';
$TIME_DRIVE_WEEKEND = 'Минут за рулем в те дни, когда Вы не ездите на машине на работу';
$MINUTES_DRIVE_PER = 'Минут за рулем в';
$DAYS_DRIVE_PER_MONTH = 'Количество дней в месяц, в которые Вы водите машину';
$HOURS_DRIVE_PER = 'Часов за рулем в';
$VIRTUAL_SPEED = 'виртуальная скорость';
$KINETIC_SPEED = 'кинетическая скорость';
$AVER_YEARLY = 'В среднем в год';
$WORKING_TIME_MESSAGE = 'Для целей расчетов среднее рабочее время считается равным 36 часам в неделю и 11 месяцам в году';
$HOURS_TO_AFFORD_CAR = 'Количество часов в год, которые Вам необходимо отработать, чтобы позволить себе иметь автомобиль';
$MONTHS_TO_AFFORD_CAR = 'Количество месяцев в год, которые Вам необходимо отработать, чтобы позволить себе иметь автомобиль';
$TOTAL_COSTS_PER_YEAR = 'Сумма расходов в год на автомобиль';
$DAYS_CAR_PAID = 'Через сколько дней начиная с 1-го января будет оплачен автомобиль';

//**************************************************
//GRAPHICS
$PARCEL = 'Участок';
$COSTS = 'Cтоимость';


//****************************************************
//ERROR MESSAGES
$ERROR_INVALID_INSU_VALUE = 'Неверная сумма страховки';
$ERROR_INSU_PERIOD = 'Введите периодичность оплаты страховки';

$ERROR_FUEL_CURR_DIST = 'Необходимо указать, желаете ли Вы провести расчет в рублях или километрах';
$ERROR_FUEL_CAR_EFF = 'Неверный показатель топливной эффективности';
$ERROR_FUEL_PRICE = 'Неверная цена топлива';
$ERROR_CAR_JOB = 'Пожалуйста, укажите, ездите ли Вы на машине на работу';
$ERROR_FUEL_DIST = 'Неверный показатель месячного пробега в километрах';
$ERROR_DAYS_PER_WEEK = 'Неверное количество дней недели';
$ERROR_DIST_HOME_WORK = 'Неверный показатель пробега в километрах между домом и работой';
$ERROR_DIST_NO_JOB = "Неверный показатель пробега в километрах в те дни, когда Вы не ездите на машине на работу";
$ERROR_CURRENCY = 'Неверный показатель суммы в рублях в месяц';

$ERROR_DEPRECIATION_MONTH = 'Неверный месяц приобретения';
$ERROR_DEPRECIATION_YEAR = 'Неверный год приобретения';
$ERROR_DEPRECIATION_VALUE = 'Неверная сумма приобретения';
$ERROR_DEPRECIATION_VALUE_TODAY = 'Неверная стоимость автомобиля на сегодняшний день';
$ERROR_DEPRECIATION_DATE = 'Неверная дата приобретения';
$ERROR_DEPRECIATION_NEW_CAR =  'Амортизация не применяется, поскольку это новый автомобиль';

$ERROR_CREDIT_QUESTION = 'Пожалуйста, укажите, воспользовались ли Вы услугами финансирования для покупки автомобиля';
$ERROR_CREDIT_LOAN_VALUE = 'Неверная сумма финансирования';
$ERROR_CREDIT_PERIOD = 'Неверный показатель периода кредитования и количества очередных взносов';
$ERROR_CREDIT_INSTALMENT = 'Неверная сумма очередного взноса';
$ERROR_CREDIT_RESIDUAL_VALUE = 'Неверная остаточная стоимость';

$INVALID_AMOUNT = 'Неверная сумма';

$INVALID_NBR_PP = 'Неверный показатель количества человек';
$ERROR_INSPECTION_NTIMES = 'Неверный показатель количества техосмотров';
$ERROR_INSPECTION_COSTS = 'Неверный показатель расходов на техосмотр';

$ERROR_PASS_AMOUNT= 'Неверная сумма штрафов в месяц';

$ERROR_INCOME = 'Неверный размер чистого дохода';
$ERROR_WEEKS_PER_YEAR = 'Неверное количество недель в году';
$ERROR_MONTHS_PER_YEAR = 'Неверное количество месяцев в году';
$ERROR_HOURS_PER_WEEK = 'Неверное количество часов в неделю';
$ERROR_MIN_DRIVE_HOME_JOB = 'Неверное количество минут за рулем от дома до работы';
$ERROR_MIN_DRIVE_WEEKEND = 'Неверное количество минут за рулем в те дни, когда Вы не ездите на машине на работу';
$ERROR_MIN_DRIVE = 'Неверное количество минут за рулем';
$ERROR_DAYS_PER_MONTH = 'Неверное количество дней в месяц';

//FINAL RESULT
$YOUR_CAR_COSTS_YOU = 'Расходы на Ваш автомобиль:';
$WITH_THIS_LEVEL_OF_COSTS = 'С таким уровнем расходов стоимость содержания Вашего автомобиля в течение'; //ex: __"With this level of costs, you car during the"__ 15 months of possession....
$MONTHS_POSS = 'мес. уже составила';   //ex: With this level of costs, you car during the 15 ___"months of possession has already costed"___ 14000 Euros

$TAXI_PRICE_PER_DIST=1.5; //price paid for taxi in chosen currency per chosen unit distance

//*****************************************
//STANDARD COMMON AVERAGE DEFAULT values that apear on the start page
//these values are to be changed by the user but you shall put values that are reasonable
//keep in mind your chosen standard Currency and your volume and fuel efficiency standards

$STD_ACQ_MONTH = '01'; //month of acquisition 
$STD_ACQ_YEAR = '2000'; //year of acquisition 
$STD_PRICE_PAID = ''; //price paid for the car
$STD_PRICE_TODAY = ''; //the price the car has today

$STD_INSURANCE_SEM = ''; //price paid for insurance by semester

$STD_LOAN = ''; //amount asked for credit
$STD_PERIOD_OF_CREDIT = ''; //period of the credit in months
$STD_MONTHLY_PAY = ''; //monthly payment
$STD_RESIDUAL_VALUE = ''; //residual value must be paid after credit

$STD_NBR_INSPECTION = ''; //number of times car went to inspection
$STD_INSPECTION_PRICE = ''; //normal inspection price

$STD_ROAD_TAX = ''; //price paid for road taxes per year

$STD_FUEL_PAID_PER_MONTH = ''; //money spent per month on fuels
$STD_DAYS_PER_WEEK = ''; //days per week one takes their car to work
$STD_JORNEY_2WORK = ''; //(standard distance, km or miles) made from home to work (just one way) 
$STD_JORNEY_WEEKEND = ''; //(standard distance, km or miles) during the other days, for example weekends
$STD_KM_PER_MONTH = ''; //(standard distance, km or miles) made per month
$STD_CAR_FUEL_EFFICIENCY = ''; //(standard fuel efficiency, km/l l/100km mpg(US) or mpg(imp)) fuel efficiency in the chosen standard
$STD_FUEL_PRICE = ''; //price paid for fuel on chosen currency

$STD_MAINTENANCE_PER_YEAR = ''; //amount paid for maintenance per year

$STD_REPAIRS = ''; //repairs and improvements paid per year on average

$STD_PARKING = ''; //parking paid per month

$STD_TOLLS = ''; //amount paid in tolls per trimestre 
$STD_TOLLS_DAY = ''; //amount paid in tolls per day
$STD_TOLLS_DAYS_PER_MONTH = ''; //number of days per month the car crosses a tolled way

$STD_FINES = ''; //fines paid on average per trimestre

$STD_WASHING = ''; //amount paid in washings per trimestre

$STD_NR_PPL_FAMILY = ''; //number of people in the family
$STD_PASS_PRICE = ''; //price of the monthly pass

$STD_INCOME_YEAR = ''; // net income per year
$STD_INCOME_MONTH = ''; // net income per month
$STD_INCOME_WEEK = ''; // net income per week
$STD_INCOME_HOUR = ''; // net income per hour
$STD_HOURS_WEEK = ''; // hours per week
$STD_MONTHS_YEAR = ''; // months per year
$STD_WEEKS_YEAR = ''; // weeks per year
$STD_HOURS_WEEK = ''; // work hours per week
$STD_TIME_HOME_JOB = ''; // minutes you drive from home to workplace
$STD_TIME_WEEKEND = '';// minutes you drive in the days you don't take the car to workplace
$STD_TIME_IN_DRIVING = ''; // time spent in driving (minutes/day)
$STD_DAYS_MONTH = ''; // days per month
?>