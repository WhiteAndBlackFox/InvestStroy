FROM php:8.3-cli-alpine as test

RUN apk add --no-cache icu icu-dev
RUN docker-php-ext-install -j$(nproc) intl

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /app
WORKDIR /app

EXPOSE 8337

ENTRYPOINT ["php", "-S", "0.0.0.0:8337", "-t", "public"]
