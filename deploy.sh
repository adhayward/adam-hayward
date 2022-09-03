deployTo=~/adam-hayward.co.uk
cd $deployTo
rm -rf !(".env")
/bin/rsync --delete -r -exclude=.git,.cpanel.yml,.externalScripts ~/repositories/adam-hayward/* $deployTo

echo Deployed Source
cd $deployTo

echo Installing Dependancies
composer install --optimize-autoloader --no-dev
npm install

php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force