FROM php:7.4-apache
COPY index.php /var/www/html
COPY styles.css /var/www/css
COPY submit_contact.php /var/www/html
COPY thank-you.html /var/www/html
COPY /includes /var/www/
COPY /assets /var/www/
