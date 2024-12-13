# Utiliser une image officielle de PHP avec Apache
FROM php:8.1-apache


# Installer les extensions PHP nécessaires pour envoyer des emails
RUN apt-get update && \
    apt-get install -y sendmail && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Copier les fichiers source dans le conteneur
COPY . /var/www/html

# Exposer le port 80 pour Apache
EXPOSE 80

# Lancer Apache au démarrage du conteneur
CMD ["apache2-foreground"]