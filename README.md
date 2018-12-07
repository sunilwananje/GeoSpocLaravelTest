# GeoSpocLaravelTest

1. Take git clone https://github.com/sunilwananje/GeoSpocLaravelTest.git
2. Create virtual host for project. Like http://dev.geospoctest
3. Open project in command line and run "composer update" command.
4. Create .env file and add database credentials
5. Run php artisan key:generate command to generate app key.
6. Add APP_URL=http://dev.geospoctest as per your virtual host in .env file
7. Run php artisan migrate command to import all required table to database.
