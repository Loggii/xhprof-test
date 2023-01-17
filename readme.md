sudo apt update
sudo apt-get install php-pear
sudo apt install php-dev
sudo pecl install xhprof
sudo apt-get install graphviz

add
"extension=xhprof.so"
to /etc/php/8.2/cli/php.ini

start the UI:
php -S localhost:8080 -t src/profiling/xhprof_html