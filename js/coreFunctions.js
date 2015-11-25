function calculateMonthlyDepreciation(initialCost, finalCost, months) {
       return (initialCost - finalCost) / months;
}

function calculateInsuranceMonthlyValue(insuranceType, insuranceInputValue) {
    var insuranceValue;
    switch(insuranceType)
    {
        case "mensal":
            insuranceValue = Number(insuranceInputValue);
            break;
        case "trimestral":
            insuranceValue = insuranceInputValue / 3;
            break;
        case "semestral":
            insuranceValue = insuranceInputValue / 6;
            break;
        case "anual":
            insuranceValue = insuranceInputValue / 12;
            break;       
    }
    return insuranceValue;
}

function calculateInterestsMonthlyValue(cred_auto_bool, credit_amount, credit_period, credit_value_p_month, credit_residual_value, age_months) {
    
    var output = {
        total_interests: 0,
        period: 0,
        monthly_costs: 0
    };

    if(cred_auto_bool == "true") { //if there was credit
        
        var credit_period_float = parseFloat(credit_period);
        output.period = credit_period_float;
        
        var total_interests = ((credit_period_float * parseFloat(credit_value_p_month)) + parseFloat(credit_residual_value)) - parseFloat(credit_amount);
        output.total_interests = total_interests;
        
        if(total_interests < 0){
            total_interests = 0;
        }
            
        if(age_months >= credit_period_float){
            output.monthly_costs = total_interests / age_months;
        }
        else{
            output.monthly_costs = parseFloat(total_interests / credit_period_float);
        }
    }
    else{
        output.total_interests = 0;
        output.period = 0;
        output.monthly_costs = 0;
    }
    return output;
}

function calculateMonthlyInspection(nmr_times_inspec, inspec_price, age_months) {
    
    if(nmr_times_inspec > 0){
        return (nmr_times_inspec * inspec_price) / age_months;
    }
    else{
        return 0;
    }
}

function calculateMonthlyTaxes(yearly_car_tax) {

    return  parseFloat(yearly_car_tax)/12;
}

function calculateMonthlyFuel(type_calc_fuel,        //calculation based on money or distance (bool)
                              fuel_eff,              //fuel efficiency in standard format
                              fuel_price,            //fuel price in standard format
                              take_car_to_job,       //considering user takes car from home to job (bool)
                              fuel_period_distance,  //time period for travelled distance
                              distance,              //travelled distance
                              distance_home2job,     //distance from home to job in standard measurement
                              distance_weekend,      //distance travelled during weekends
                              days_p_week,           //days per week the car is driven from home to job
                              fuel_period_money,     //in case money is selected, input time period
                              fuel_money,            //in case money is selected, fuel money value
                              country) {             //country object
    
    var output = {
        monthly_cost: 0,        //monthly fuel costs in standard currency
        distance_per_month: 0   //distance per month in standard unit
    };
    
    switch(type_calc_fuel){
        case "km": //fuel costs calculation based on distance
            
            var distance_per_month;
            var fuel_eff_l100km = convert_to_fuel_eff_l100km(fuel_eff, country.fuel_efficiency_std);
            var fuel_price_CURRpLitre = convert_to_fuel_price_CURRpLitre(fuel_price, country.fuel_price_volume_std);
            
            if (take_car_to_job == "false"){
                switch(fuel_period_distance){
                    case "1":
                        distance_per_month = parseInt(distance);             
                        break;
                    case "2":
                        distance_per_month = parseInt(distance) / 2;               
                        break;
                    case "3":
                        distance_per_month = parseInt(distance) / 3;               
                        break;
                    case "4":
                        distance_per_month = parseInt(distance) / 6;               
                        break;
                    case "5":
                        distance_per_month = parseInt(distance) / 12;              
                        break;
                }
                output.distance_per_month = distance_per_month;
                //converts distance unit to kilometres                      
                var distance_per_month_km = convert_std_dist_to_km(distance_per_month, country.distance_std);
                output.monthly_cost = fuel_eff_l100km * distance_per_month_km * fuel_price_CURRpLitre / 100;
            }
            else{   //make calculation considering the user takes his car to work on a daily basis
            
                //if miles were chosen must convert input to kilometres
                var distance_home2job_km = convert_std_dist_to_km(distance_home2job, country.distance_std);
                var distance_weekend_km = convert_std_dist_to_km(distance_weekend, country.distance_std);
                var total_km = ((2 * distance_home2job_km * parseInt(days_p_week, 10)) + distance_weekend_km) * (30.4375 / 7);
                output.monthly_cost = fuel_eff_l100km * total_km * fuel_price_CURRpLitre / 100;
                //after computation is made, convert backwards to standard distance
                output.distance_per_month = convert_km_to_std_dist(total_km, country.distance_std); 
            }
            break;  
        case "euros": //fuel costs calculation based on money
            var monthly_cost;
            switch(fuel_period_money){
                case "1":
                    monthly_cost = parseFloat(fuel_money);
                    break;
                case "2":
                    monthly_cost = parseFloat(fuel_money) / 2;          
                    break;
                case "3":
                    monthly_cost = parseFloat(fuel_money) / 3;          
                    break;
                case "4":
                    monthly_cost = parseFloat(fuel_money) / 6;          
                    break;
                case "5":
                    monthly_cost = parseFloat(fuel_money) / 12;         
                    break;
            }
            output.monthly_cost = monthly_cost;
            output.distance_per_month = undefined;
            break;
    } 
    return output;
}

function calculateMonthlyMaintenance(yearly_value) {

    return  parseFloat(yearly_value)/12;
}

function calculateMonthlyRepairsAndImprovements(yearly_value) {

    return  parseFloat(yearly_value)/12;
}

function calculateMonthlyParking(monthly_value) {

    return  parseFloat(monthly_value);
}  


function calculateMonthlyTolls(type_calc_tolls, tolls_select, tolls_value_per_period, tolls_value_per_day, days_of_tolls_per_month) {

    if(type_calc_tolls == "false"){ //calculation not done by day
        switch(tolls_select){ //period
            case "1":
                return parseFloat(tolls_value_per_period);           
            case "2":
                return parseFloat(tolls_value_per_period) / 2;            
            case "3":
                return parseFloat(tolls_value_per_period) / 3;            
            case "4":
                return parseFloat(tolls_value_per_period) / 6;            
            case "5":
                return parseFloat(tolls_value_per_period) / 12;            
        }
    }
    else
        return tolls_value_per_day * days_of_tolls_per_month;
} 


function calculateMonthlyFines(fines_period, fines_value) {
    
    switch(fines_period) {
        case "1":
            return parseFloat(fines_value);        
        case "2":
            return parseFloat(fines_value) / 2;
        case "3":
            return parseFloat(fines_value) / 3;
        case "4":
            return parseFloat(fines_value) / 6;
        case "5":
            return parseFloat(fines_value) / 12;
    }  
    return -1;
}

function calculateMonthlyWashing(washing_period, washing_value) {
    
    switch(washing_period) {
        case "1":
            return parseFloat(washing_value);        
        case "2":
            return parseFloat(washing_value) / 2;
        case "3":
            return parseFloat(washing_value) / 3;
        case "4":
            return parseFloat(washing_value) / 6;
        case "5":
            return parseFloat(washing_value) / 12;
    }  
    return -1;
}


//*****************************************************
//*****************************************************

function calculate_costs(f1, f2, f3, country){
    //f1, f2 and f3 are input objects (each for each form)
    //country is an input object with country information
    //calculate_costs returns the object "output"
    
    //Monthly Costs object, is a field of object "output"
    var monthly_costs = {           
        depreciation: 0,                   //depreciation monthly cost
        insurance: 0,                      //insurance monthly cost
        credit: 0,                         //interests of credit monthly cost
        inspection: 0,                     //inspection monthly costs
        car_tax: 0,                        //car tax monthly cost           
        fuel: 0,                           //fuel monthly cost      
        maintenance: 0,                    //maintenance monthly costs
        repairs_improv: 0,                 //repairs and improvements monthly cost
        parking: 0,                        //parking monthly cost       
        tolls: 0,                          //tolls monthly cost
        fines: 0,                          //fines monthly cost
        washing: 0                         //washing monthly cost
    };
    //financial effort object
    var fin_effort = {
        //income
        income: 0,                         //income amount the user has inserted     
        aver_income_per_year: 0,           //average income per year
        income_per_type: 0,                //number of income time-periods (number of months/year or weeks/year)
        income_hours_per_week: 0,          //number of hours per week  
        aver_income_per_month:0,           //average income per month
        aver_income_per_hour: 0,           //average income per hour
        time_hours_per_week: 36,           //default hours per week
        time_month_per_year: 11,           //default months per year
        aver_work_time_per_m: 0,           //average working time per month        
        work_hours_per_y: 0,               //total working hours per year
        //driving distance
        drive_per_year:0,                  //total distance driven per year
        drive_to_work_days_per_week: 0,    //number of days per week, the user drives to job 
        dist_home_job: 0,                  //distance between home and job (one-way)
        journey_weekend: 0,                //distance the user drives during weekend
        aver_drive_per_week: 0,            //average distance driven per week
        fuel_period_km: f3.period_km,      //time-period for distance calculation 
        //driving time
        time_home_job: 0,                  //time (in minutes) driven between home and job
        time_weekend: 0,                   //time (in minutes) driven during weekends
        min_drive_per_week: 0,             //time (in minutes) driven per week
        min_drive_per_day: 0,              //time (in minutes) driven per day
        days_drive_per_month: 0,           //number of days driven per month    
        hours_drive_per_month: 0,          //number of hours driven per month
        hours_drive_per_year: 0,           //number of hours driven per year
        //costs
        total_costs_year: 0,               //total costs per year
        hours_per_year_to_afford_car: 0,   //hours per year to afford the car
        month_per_year_to_afford_car: 0,   //months per year to afford the car
        days_car_paid: 0,                  //number of days till the car is paid
        //speed
        kinetic_speed: 0,                  //average kinetic speed
        virtual_speed: 0                   //average virtual speed
    };
    
    //function global variables 
    var distance_per_month;  //distance per month in the standard unit
    
    //depreciation
    var today = new Date();
    var date_auto = new Date(f1.auto_ano, f1.auto_mes - 1);
    var age_months = date_diff(date_auto,today);
    
    if(age_months != 0)
        monthly_costs.depreciation = calculateMonthlyDepreciation(f1.auto_initial_cost, f1.auto_final_cost, age_months);
    
    //insurance
    monthly_costs.insurance = calculateInsuranceMonthlyValue(f1.insurance_type, f1.insurance_value);
    
    //credit
    var credit_object = calculateInterestsMonthlyValue(f1.cred_auto_s_n, f1.credit_amount, f1.credit_period, f1.credit_value_p_month, f1.credit_residual_value, age_months);
    monthly_costs.credit = credit_object.monthly_costs;
    
    //inspection
    monthly_costs.inspection = calculateMonthlyInspection(f1.nmr_times_inspec, f1.inspec_price, age_months);
    
    //taxes
    monthly_costs.car_tax =  calculateMonthlyTaxes(f1.car_tax);
    
    //fuel
    var fuel_object = calculateMonthlyFuel(
                        f2.type_calc_fuel,        //calculation based on money or distance (bool)
                        f2.fuel_efficiency,       //fuel efficiency in standard format
                        f2.fuel_price,            //fuel price in standard format
                        f2.take_car_to_job,       //considering user takes car from home to job (bool)
                        f2.fuel_period_distance,  //time period for travelled distance
                        f2.distance,              //travelled distance
                        f2.distance_home2job,     //distance from home to job in standard measurement
                        f2.distance_weekend,      //distance travelled during weekends
                        f2.days_p_week,           //days per week the car is driven from home to job
                        f2.fuel_period_money,     //in case money is selected, input time period
                        f2.fuel_money,            //in case money is selected, fuel money value
                        country);                 //country object
    
    monthly_costs.fuel = fuel_object.monthly_cost;
    distance_per_month = fuel_object.distance_per_month; //distance per month in the standard unit
    
    //maintenance
    monthly_costs.maintenance = calculateMonthlyMaintenance(f2.maintenance);
    
    //repairs
    monthly_costs.repairs_improv = calculateMonthlyRepairsAndImprovements(f2.repairs);
    
    //parking
    monthly_costs.parking = calculateMonthlyParking(f2.parking);
    
    //tolls
    monthly_costs.tolls = calculateMonthlyTolls(f2.type_calc_tolls, f2.tolls_select, f2.tolls, f2.price_tolls_p_day, f2.tolls_days_p_month);
       
    //fines
    monthly_costs.fines = calculateMonthlyFines(f2.fines_select, f2.fines);
    
    //washing
    monthly_costs.washing = calculateMonthlyWashing(f2.washing_select, f2.washing);

    //total standing costs
    var total_standing_costs_month = monthly_costs.insurance + monthly_costs.depreciation + monthly_costs.credit +
            monthly_costs.inspection + 0.5 * monthly_costs.maintenance + monthly_costs.car_tax;
    
    //total running costs
    var total_running_costs_month = monthly_costs.fuel + 0.5 * monthly_costs.maintenance + monthly_costs.repairs_improv + monthly_costs.parking +
            monthly_costs.tolls + monthly_costs.fines + monthly_costs.washing;
    
    //totals    
    var total_costs_month = monthly_costs.insurance + monthly_costs.fuel + monthly_costs.depreciation +
                    monthly_costs.credit + monthly_costs.inspection + monthly_costs.maintenance +
                    monthly_costs.repairs_improv + monthly_costs.car_tax + monthly_costs.parking +
                    monthly_costs.tolls + monthly_costs.fines + monthly_costs.washing;

    var total_costs_year = total_costs_month * 12;
    fin_effort.total_costs_year = total_costs_year;
    
    //*************** EXTRA DATA - PUBLIC TRANSPORTS ************
    
    var public_transports = {
        racio_car_tp: 0.9,     //ratio (total price of public transports)/(total price of car) under which it shows the alternatives of public transports
        racio_outros_tp: 0.6,  //inferior ao qual mostra outras alternativas de TP, para lá do passe mensal (rede expresso, longo curso, etc.)          
        taxi_price_per_km: country.taxi_price, //average price of taxi per unit distance        
        display_tp: function(){
            if(f3.pmpmpc * f3.n_pess_familia < this.racio_car_tp * total_costs_month && f3.pmpmpc != 0) 
                return true;
            return false;
        },
        preco_total_tp: 0,
        display_outros_tp: false,
        total_altern: 0,
        racio_custocar_caustotp: 0,
        custo_taxi: 0,
        n_km_taxi: 0,
        outros_tp: 0
    };
    var percent_taxi= 0.2;//in case above condition is met, the budget percentage alocated to taxi, as alternative to car
    if(public_transports.display_tp()) {
        public_transports.preco_total_tp = f3.pmpmpc * f3.n_pess_familia;   //preço total de passes
        public_transports.total_altern = public_transports.preco_total_tp;
        public_transports.racio_custocar_caustotp= public_transports.preco_total_tp / total_costs_month;
        if(public_transports.racio_custocar_caustotp > public_transports.racio_outros_tp){    //caso se mostre outros TP além do passe mensal
            public_transports.display_outros_tp = false;
            public_transports.custo_taxi = total_costs_month - public_transports.preco_total_tp;
            public_transports.n_km_taxi = public_transports.custo_taxi / public_transports.taxi_price_per_km;  //número de km possíveis de fazer de táxi
            public_transports.total_altern += public_transports.custo_taxi;
        }
        else{
            public_transports.display_outros_tp = true;
            public_transports.custo_taxi = total_costs_month * (1 - public_transports.racio_custocar_caustotp) / 2;
            public_transports.n_km_taxi = public_transports.custo_taxi / public_transports.taxi_price_per_km;
            public_transports.outros_tp = total_costs_month * (1 - public_transports.racio_custocar_caustotp) / 2;    //valor alocado a outros TP, excetuando passe mensal

            public_transports.total_altern += public_transports.custo_taxi + public_transports.outros_tp;
        }
    }
    
    //*** financial effort ***
    //income
    switch(f3.income_type){
        case 'year':
            fin_effort.income = f3.income_per_year;
            fin_effort.aver_income_per_year = fin_effort.income;        
            break;
        case 'month':
            fin_effort.income = f3.income_per_month;
            fin_effort.income_per_type = f3.income_months_per_year;
            fin_effort.aver_income_per_year = fin_effort.income * fin_effort.income_per_type;       
            break;
        case 'week':
            fin_effort.income = f3.income_per_week;
            fin_effort.income_per_type = f3.income_weeks_per_year;
            fin_effort.aver_income_per_year = fin_effort.income * fin_effort.income_per_type;   
            break;
        case 'hour':
            fin_effort.income = f3.income_per_hour;
            fin_effort.income_hours_per_week = f3.income_hours_per_week;
            fin_effort.income_per_type = f3.income_hour_weeks_per_year;
            fin_effort.aver_income_per_year = fin_effort.income * fin_effort.income_hours_per_week * fin_effort.income_per_type;
            break;
    }
    fin_effort.aver_income_per_month = fin_effort.aver_income_per_year / 12;
    
    //working time
    if(f3.income_type != 'hour'){
        if(f3.is_working_time == 'true'){
            fin_effort.time_hours_per_week = f3.time_hours_per_week;
            fin_effort.time_month_per_year = f3.time_month_per_year;
        }

        fin_effort.aver_work_time_per_m = 365.25 / 7 * fin_effort.time_hours_per_week * fin_effort.time_month_per_year / 12 / 12;
        fin_effort.work_hours_per_y = 365.25 / 7 * fin_effort.time_hours_per_week * fin_effort.time_month_per_year / 12;
    }
    
    //driving distance
    if(f2.type_calc_fuel == 'euros'){ //if fuel calculation with distance was NOT chosen in form 2, gets from form 3
        if(f3.drive_to_work == 'true'){
            fin_effort.drive_to_work_days_per_week = f3.drive_to_work_days_per_week;
            fin_effort.dist_home_job =  parseInt(f3.dist_home_job);
            fin_effort.journey_weekend = parseInt(f3.journey_weekend);
            fin_effort.aver_drive_per_week = 2 * fin_effort.drive_to_work_days_per_week * fin_effort.dist_home_job + fin_effort.journey_weekend;
        
            distance_per_month = 365.25 / 7 * fin_effort.aver_drive_per_week / 12;
            fin_effort.drive_per_year = 365.25 / 7 * fin_effort.aver_drive_per_week;    
        
        }
        else{
            switch(fin_effort.fuel_period_km)
            {
                case "1":
                    distance_per_month = parseInt(f3.dist_per_time_period);             
                    break;
                case "2":
                    distance_per_month = f3.dist_per_time_period / 2;
                    break;
                case "3":
                    distance_per_month = f3.dist_per_time_period / 3;               
                    break;
                case "4":
                    distance_per_month = f3.dist_per_time_period / 6;               
                    break;
                case "5":
                    distance_per_month = f3.dist_per_time_period / 12;          
                    break;
            }
            fin_effort.drive_per_year = distance_per_month * 12;            
        }
    }
    else{ //f2.type_calc_fuel == 'km' 
        if(f2.take_car_to_job == 'true'){ 
            fin_effort.drive_to_work_days_per_week = f2.days_p_week;
            fin_effort.dist_home_job = parseInt(f2.distance_home2job);
            fin_effort.journey_weekend = parseInt(f2.distance_weekend);
            fin_effort.aver_drive_per_week = 2 * fin_effort.drive_to_work_days_per_week * fin_effort.dist_home_job + fin_effort.journey_weekend;
        }   
        fin_effort.drive_per_year = distance_per_month * 12;
    }
    
    if(f3.drive_to_work == 'true' || f2.take_car_to_job == 'true'){
        fin_effort.time_home_job = parseInt(f3.time_home_job);
        fin_effort.time_weekend = parseInt(f3.time_weekend);
        fin_effort.min_drive_per_week = 2 * fin_effort.time_home_job * fin_effort.drive_to_work_days_per_week + fin_effort.time_weekend;
        fin_effort.hours_drive_per_month = 365.25 / 7 / 12 * fin_effort.min_drive_per_week / 60;    
    }
    else{
        fin_effort.min_drive_per_day = parseInt(f3.min_drive_per_day);
        fin_effort.days_drive_per_month = parseInt(f3.days_drive_per_month);
        fin_effort.hours_drive_per_month = fin_effort.min_drive_per_day * fin_effort.days_drive_per_month / 60;
    }
    fin_effort.hours_drive_per_year = fin_effort.hours_drive_per_month * 12;    
        
    //running costs per unit dist.
    var running_costs_p_unit_distance = total_running_costs_month / distance_per_month;
    
    //total costs per unit dist.
    var total_costs_p_unit_distance = total_costs_month / distance_per_month;
    
    
    //****find Net Income per Hour
    var typeIncome = f3.income_type;
    //alert("typeIncome:"+typeIncome);
    var isJob = f3.is_working_time;
    //alert("isJob:"+isJob);
    var a = 11; //default months per year of work
    var b = 36; //default hours per week of normal working week
    var T, x, y, n;
    //if has a job, find a=months per year of work, b=hours per week of work
    if(isJob=='true'){ 
        a = parseInt(f3.time_month_per_year);
        b = parseInt(f3.time_hours_per_week);
    }
    T = 365.25/7 * a/12 * b; //T=number of working hours per year
    switch(typeIncome){
        case 'year':
            x = parseInt(f3.income_per_year);
            n = x/T;
            break;
        case 'month':
            x = parseInt(f3.income_per_month);
            y = parseInt(f3.income_months_per_year);
            n = (x*y)/T;
            break;
        case 'week':
            x = parseInt(f3.income_per_week);
            y = parseInt(f3.income_weeks_per_year);
            n = (x*y)/T;
            break;
        case 'hour':
            n = parseInt(f3.income_per_hour);
    }
    fin_effort.aver_income_per_hour = n;
    
    //extra financial effort variables
    fin_effort.hours_per_year_to_afford_car = total_costs_year / fin_effort.aver_income_per_hour;
    fin_effort.month_per_year_to_afford_car = total_costs_year / fin_effort.aver_income_per_year * 12;
    fin_effort.days_car_paid = total_costs_year / fin_effort.aver_income_per_year * 365.25;
    fin_effort.kinetic_speed = fin_effort.drive_per_year / fin_effort.hours_drive_per_year;
    fin_effort.virtual_speed = fin_effort.drive_per_year / (fin_effort.hours_drive_per_year + fin_effort.hours_per_year_to_afford_car);

    //External costs object
    var external_costs = {
        handbook_extern_URL: 'http:\/\/ec.europa.eu\/transport\/themes\/sustainable\/doc\/2008_costs_handbook.pdf',
        polution: 0.005,      //pollutants in €/km
        ghg: 0.007,           //greenhouse gases in €/km
        noise: 0.004,         //noise in €/km
        fatalities: 0.03,     //traffic fatalities in €/km
        congestion: 0.1,      //congestion in €/km
        infrastr: 0.001,      //infrastructures in €/km
        total_exter: function(){        
            return (this.polution + this.ghg + this.noise + this.fatalities + this.congestion + this.infrastr) * distance_per_month;
        },
        total_costs: function(){ return this.total_exter(); }
    };

    //object to be returned by the function
    var output = {
        //object fields
        monthly_costs: monthly_costs,            //object with the calculated monthly costs
        external_costs: external_costs,          //object with the external costs
        public_transports: public_transports,    //object with the car-alternative public transports costs
        fin_effort: fin_effort,                  //object with financial effort variables
        
        //variable fields
        distance_per_month: distance_per_month,          //distance travelled per month (in the standard distance)
        age_months: age_months,                          //car age in months
        //credit
        month_cred: credit_object.period,                //number of monthly credit instalments
        total_interests: credit_object.total_interests,  //total interests paid by the credit
        //fuel
        fuel_period_km: f2.fuel_period_distance,
        fuel_cost_period: f2.fuel_period_money,
        //tolls
        tolls_period: f2.tolls_select,
        //fines
        fines_period: f2.fines_select,
        //washing
        washing_period: f2.washing_select,
        //total costs
        total_standing_costs_month: total_standing_costs_month,
        total_running_costs_month: total_running_costs_month,
        total_costs_month: total_costs_month,
        total_costs_year: total_costs_year,
        running_costs_p_unit_distance: running_costs_p_unit_distance,
        total_costs_p_unit_distance: total_costs_p_unit_distance,
    };
    //alert(JSON.stringify(output, null, 4));
    return output;
}