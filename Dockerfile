FROM ubuntu:22.04

ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=Asia/Taipei

# 安裝基本套件 + vim
RUN apt-get update && apt-get install -y \
    software-properties-common ca-certificates curl wget gnupg lsb-release git unzip vim \
    && rm -rf /var/lib/apt/lists/*

# 安裝 Apache2
RUN apt-get update && apt-get install -y apache2 \
    && a2enmod rewrite ssl \
    && rm -rf /var/lib/apt/lists/*

# **使用 Ubuntu 官方 PHP 8.2 套件源**
RUN LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php -y \
    && apt-get update \
    && apt-get install -y \
        php8.2 php8.2-cli php8.2-fpm php8.2-mysql php8.2-zip \
        php8.2-xml php8.2-mbstring php8.2-curl php8.2-gd \
        php8.2-bcmath php8.2-intl libapache2-mod-php8.2 \
        php8.2-opcache \
    && rm -rf /var/lib/apt/lists/*

# 安裝 Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# 設定 Apache DocumentRoot 為 Laravel public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf \
    && echo "ServerName localhost" >> /etc/apache2/apache2.conf \
    && a2enmod php8.2

# 權限設定
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

WORKDIR /var/www/html
EXPOSE 80

CMD ["apache2ctl", "-D", "FOREGROUND"]
