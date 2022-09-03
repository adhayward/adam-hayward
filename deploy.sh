deployTo=~/adam-hayward.co.uk
rm -rf $deployTo/*
/bin/rsync --delete -r -exclude=.git,.cpanel.yml,.externalScripts ~/repositories/adam-hayward/* $deployTo
cp ~/env-config.txt $deployTo/.env
echo Deployed Source
cd $deployTo

echo Installing Dependancies
composer install --optimize-autoloader --no-dev
npm install

php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force