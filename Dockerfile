# Utiliser une image officielle de PHP avec Apache
FROM php:8.1-apache


# Installer les extensions PHP nécessaires et l'envoi d'emails
RUN apt-get update && \
    apt-get install -y sendmail && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Copier les fichiers source dans le conteneur
COPY . /var/www/html

# Exposer le port 80 pour Apache
ENV PORT=80
EXPOSE 80

# Remplacer le port d'écoute d'Apache par celui défini par Railway
RUN sed -i "s/Listen 80/Listen \$PORT/" /etc/apache2/ports.conf

# Lancer Apache au démarrage du conteneur
CMD ["apache2-foreground"]