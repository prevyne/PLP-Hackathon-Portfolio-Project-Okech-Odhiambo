FROM php:7.4-apache
COPY index.php /var/www/html
COPY styles.css /var/www/css
COPY Submit_contact.php /var/www/html
copy thank-you.html /var/www/html
copy /includes /var/www/
copy /assets /var/www/
