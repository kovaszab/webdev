ARG PHP_VERSION=""
FROM php:${PHP_VERSION}-apache

RUN apt-get update && \
    # locales
    apt-get install -y locales locales-all

#COPY ./apache/demo.apache.conf /usr/local/apache2/conf/demo.apache.conf
#RUN echo "Include /usr/local/apache2/conf/demo.apache.conf" \
#    >> /usr/local/apache2/conf/httpd.conf
    
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/
RUN install-php-extensions mysqli pdo pdo_mysql pdo_pgsql