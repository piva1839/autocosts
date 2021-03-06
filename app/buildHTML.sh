#!/bin/bash

export PATH=$PATH:/usr/local/android-sdk
export PATH=$PATH:/usr/local/android-sdk/tools
export PATH=$PATH:/usr/local/android-sdk/tools/bin
export PATH=$PATH:/usr/local/android-sdk/platform-tools
export PATH=$PATH:/usr/local/android-sdk/build-tools
export JAVA_HOME=/usr/lib/jvm/jdk1.8.0_131/
export ANDROID_HOME=/usr/local/android-sdk/

cd "${0%/*}"

cd ../src/

cp -f css/flags.css css/main.css css/central.css css/header.css css/form.css css/results.css ../app/autocosts/www/css/
cp -f js/core/coreFunctions.js js/conversionFunctions.js js/dbFunctions.js ../app/autocosts/www/js/

cp -f images/flags24.png ../app/autocosts/www/css/images/
cp -f js/get_data.js ../app/autocosts/www/js/
cp -f js/formFunctions.js ../app/autocosts/www/js/
cp -f favicon.ico ../app/autocosts/www/

cd ../app/

cp -f APPjs/* autocosts/www/js/
cp -f APPcss/* autocosts/www/css/


if [ -z "$1" ] 
then
    php -f index.php HTML
else
    php -f index.php "$1"
fi

chmod -R 777 autocosts/www/
