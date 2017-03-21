<?php header('Content-type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
include_once('./countries/_list.php');?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
  xmlns:xhtml="http://www.w3.org/1999/xhtml">

<!-- Domain Name Policy (DNP) in: http://github.com/jfoclpf/autocosts/wiki/Domain-name-policy -->

<?php
    //removes XX element from country list
    unset($avail_CT["XX"]);
    
    //creates an array with all domains and all languages
    $domain_list = []; $language_list = [];
    foreach ($avail_CT as $key => $value){
        $domain_list[$key] = 'http://'.strtolower($domain_CT[$key]).'/'.strtoupper($key);
        $language_list[$key] = mb_substr($lang_CT[$key], 0, 2);
    }
    
    foreach ($avail_CT as $key1 => $value1){
        echo "\t<url>\xA";
        echo "\t\t<loc>";
        echo $domain_list[$key1];
        echo "</loc>\xA";
        echo "\t\t<changefreq>weekly</changefreq>\xA";
            
        foreach ($avail_CT as $key2 => $value2){
            if($key2 != $key1){
                echo "\t\t\t" . '<xhtml:link rel="alternate" '. 
                     'hreflang="'. strtolower($language_list[$key2]) . '-' . strtolower($key2=="UK"?"GB":$key2) . '" '.
                     'href="' . $domain_list[$key2] . '" />'.
                     "\xA";
            }
        }
        echo "\t\t\t" . '<xhtml:link rel="alternate" '. 
             'hreflang="'. strtolower($language_list[$key1]) . '-' . strtolower($key1=="UK"?"GB":$key1) . '" '.
             'href="' . $domain_list[$key1] . '" />'.
             "\xA";
      
        echo "\t</url>\xA";
    }
?>
</urlset>
