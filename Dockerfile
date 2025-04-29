FROM php:7.4-apache
COPY index.php /var/www/html
COPY styles.css /var/www/css
COPY submit_contact.php /var/www/html
COPY thank-you.html /var/www/html
COPY includes/header.php /var/www/html/includes
COPY includes/footer.php /var/www/html/includes
COPY /assets /var/www/html
