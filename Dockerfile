FROM ghcr.io/hongfs/env:php82-cli

WORKDIR /hongfs

COPY . .

RUN composer install -vvv

CMD ["php", "start.php", "start"]
