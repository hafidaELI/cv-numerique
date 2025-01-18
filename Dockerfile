# Utiliser une image officielle de PHP avec Apache
FROM php:8.1-apache


# Installer les extensions PHP nécessaires MySQL et l'envoi d'emails
RUN apt-get update && \
    apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev sendmail libmysqlclient-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install pdo pdo_mysql gd && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Copier les fichiers source dans le conteneur
COPY . /var/www/html

# Exposer le port 80 pour Apache
EXPOSE 80

# Lancer Apache au démarrage du conteneur
CMD ["apache2-foreground"]