FROM php:7.1-apache

ENV ACCEPT_EULA=Y

RUN apt-get update && apt-get install -y gnupg

# Microsoft SQL Server Prerequisites
RUN apt-get update \
    && curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - \
    && curl https://packages.microsoft.com/config/debian/9/prod.list \
        > /etc/apt/sources.list.d/mssql-release.list \
    && apt-get install -y --no-install-recommends \
        locales \
        apt-transport-https \
    && echo "en_US.UTF-8 UTF-8" > /etc/locale.gen \
    && locale-gen \
    && apt-get update \
    && apt-get -y --no-install-recommends install \
        unixodbc-dev \
        msodbcsql17

# Install packages
RUN apt-get update && apt-get install -y \
      libicu-dev \
      libpq-dev \
      libmcrypt-dev \
      git \
      zip \
      unzip \
      mysql-client \
      zlib1g-dev \
      freetds-common \
      freetds-bin \
      unixodbc \
    && rm -r /var/lib/apt/lists/* \
    && docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
    && docker-php-ext-install \
      intl \
      mbstring \
      mcrypt \
      pcntl \
      pdo_mysql \
      pdo_pgsql \
      pgsql \
      zip \
      opcache

# Install Xdebug
RUN yes | pecl install xdebug sqlsrv pdo_sqlsrv \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=1" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_port=9000" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_connect_back=0" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_host=10.0.75.1" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && docker-php-ext-enable sqlsrv pdo_sqlsrv xdebug
# Set our application folder as an environment variable
ENV APP_HOME /var/www/html

# Change uid and gid of apache to docker user uid/gid
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

# Change the web_root to laravel /var/www/html/public folder
RUN sed -i -e "s/html/html\/public/g" /etc/apache2/sites-enabled/000-default.conf

# Enable apache module rewrite
RUN a2enmod rewrite

# Copy source files
COPY . $APP_HOME

# Copy composer dependencies
COPY ./vendor $APP_HOME/vendor

# Restart web server
RUN service apache2 restart

EXPOSE 80

