# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy your PHP script into the container
COPY . .

# Expose port 80 for Apache
EXPOSE 80

RUN chmod -R 777 /var/www/html

# Start Apache server
CMD ["apache2-foreground"]

