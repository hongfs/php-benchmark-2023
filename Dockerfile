FROM ghcr.io/hongfs/env:php82-fpm

WORKDIR /hongfs

COPY . .

CMD ["php", "start.php", "start"]
