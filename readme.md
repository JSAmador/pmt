In order to install the project.


Simply download the project from gitHub


If you are already running Apache server with PHP

Extract the folder on your htdocs

I use composer as dependency manager.

navigate to the folder (in this case pmt)

execute composer install on it.

if you do not have composer:

Download it:

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"


Then you can install it locally or globally

You can install composer to a specific directory by using the --install-dir option and providing a target directory. Example:
php composer-setup.php --install-dir=bin

OR

php composer-setup.php --install-dir=bin --filename=composer

then run php bin/composer



For more information check composer documentation:

https://getcomposer.org/doc/


the route will be http://localhost/pmt/public

