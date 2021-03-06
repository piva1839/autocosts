<?php

//function that gets the logo file name for the left side of the site
function get_logo_file_name($is_logo, $currency_logo, $language) {
//$currency_logo comes from a global variable and it's calculated in
//file php/favicon_selector.php

    if(!$is_logo) return null;
    
    switch ($currency_logo){
        case "EUR":
            switch ($GLOBALS['country']){
                case "PT":
                    $logo_file_name = 'autocustos_euro.png';
                    break;
                case "ES":
                    $logo_file_name = 'autocostos_euro.png';
                    break;
                case "IT":
                    $logo_file_name = 'autocosti_euro.png';
                    break;
                case "DE":
                    $logo_file_name = 'autokosten_euro.png';
                    break;
                case "NL":
                    $logo_file_name = 'autokosten_euro.png';
                    break;                    
                case "FR":
                    $logo_file_name = 'autocouts_euro.png';
                    break;
                case "GR":
                    $logo_file_name = 'exodaautokinitou_euro.png';
                    break;                    
                default:
                    $logo_file_name = 'autocosts_euro.png';
            }
            break;
        case "DOL":
            if ($language == 'es'){
                $logo_file_name = 'autocostos_dollar.png'; 
            }
            else{
                $logo_file_name = 'autocosts_dollar.png';                
            }
            break;           
        case "GBP":
            $logo_file_name = 'autocosts_pound.png';
            break;
        case "RUB":
            $logo_file_name = 'autocosts_ruble.png';
            break;
    }
    
    return $logo_file_name;
}


function get_picture_file_name($currency_code) {

    //checks weather there is a folder for the currency code
    $is_there_directory = file_exists($_SERVER['DOCUMENT_ROOT'].'/images/pictures/'.$currency_code.'/');

    if ($is_there_directory){
        $directory_name = $_SERVER['DOCUMENT_ROOT'].'/images/pictures/'.$currency_code.'/';
        $folder_web_url = '/images/pictures/'.$currency_code.'/';
    }
    else{
        $directory_name = $_SERVER['DOCUMENT_ROOT'].'/images/pictures/other/';
        $folder_web_url = '/images/pictures/other/';
    }        
    
    //counter the number of files in respective folder
    $fi = new FilesystemIterator($directory_name, FilesystemIterator::SKIP_DOTS);
    $number_of_files = iterator_count($fi);
    
    //get a random file
    $rand_nbr = mt_rand(1, $number_of_files);  //gets a random integer between 1 and max number of files
    $rand_nbr = sprintf("%02d", $rand_nbr); //add 0 in the beginning if necessary, for example 04
    $rand_file_name = 'img_'.$rand_nbr.'.jpg'; //files shall be in the format "img_##.jpg"
    
    $full_file_path = $folder_web_url.$rand_file_name;
    return $full_file_path;
}
?>
