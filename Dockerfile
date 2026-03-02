# 使用 Ubuntu 22.04 基底
FROM ubuntu:22.04

ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=Asia/Taipei

# 安裝基本工具
RUN apt-get update && apt-get install -y \
    software-properties-common ca-certificates curl wget gnupg lsb-release git unzip vim zip \
    && rm -rf /var/lib/apt/lists/*

# 安裝 Apache2 並啟用必要模組
RUN apt-get update && apt-get install -y apache2 \
    && a2enmod rewrite ssl \
    && rm -rf /var/lib/apt/lists/*

# 安裝 PHP 8.2 + 常用延伸套件
RUN LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php -y \
    && apt-get update && apt-get install -y \
        php8.2 php8.2-cli php8.2-common php8.2-mysql php8.2-zip \
        php8.2-xml php8.2-mbstring php8.2-curl php8.2-gd \
        php8.2-bcmath php8.2-intl php8.2-readline php8.2-opcache \
        libapache2-mod-php8.2 \
    && rm -rf /var/lib/apt/lists/*

# 安裝 Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# 設定工作目錄
WORKDIR /var/www/html

# 複製專案檔案
COPY . .

# 修改 Apache DocumentRoot 指向 Laravel public 目錄
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# 啟用 .htaccess 支援 (Laravel 需要)
RUN echo '<Directory /var/www/html/public>\n\
    AllowOverride All\n\
</Directory>' > /etc/apache2/conf-available/laravel-override.conf \
    && a2enconf laravel-override

# 設定 Apache ServerName，避免警告
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# 設定權限
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache || true

# 開放 HTTP port
EXPOSE 80

# 啟動 Apache
CMD ["apache2ctl", "-D", "FOREGROUND"]
