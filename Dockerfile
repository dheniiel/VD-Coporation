FROM php:8.1.16-apache

RUN docker-php-ext-install pdo pdo_mysql

# Instalação da extensão MySQLi
RUN docker-php-ext-install mysqli

# Habilita o módulo de reescrita do Apache
RUN a2enmod rewrite

# Reinicia o serviço do Apache
RUN service apache2 restart
