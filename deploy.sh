
rm -rf public_html
mkdir public_html
/bin/rsync --delete -r -exclude=.git,.cpanel.yml,.externalScripts ~/repositories/adam-hayward/* public_html

echo Deployed Source
echo Creating SymLinks
cd public_html

echo Running Composer
composer install
npm install