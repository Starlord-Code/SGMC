

FROM php:7.4-cli
WORKDIR /usr/src/myapp
COPY . /usr/src/myapp

CMD [ "php", "./index.php" ]


