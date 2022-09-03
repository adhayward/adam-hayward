deployTo=~/public_html
rm -rf $deployTo/*
/bin/rsync --delete -r -exclude=.git,.cpanel.yml,.externalScripts ~/repositories/adam-hayward/* $deployTo

echo Deployed Source
cd $deployTo

echo Installing Dependancies
composer install
npm install