FROM mysql:8.0

ENV TZ=UTC

RUN apt-get update \
    && apt-get install -y locales \
    && locale-gen ja_JP.UTF-8 \
    && echo "export LANG=ja_JP.UTF-8" >> ~/.bashrc

COPY ./docker/mysql/my.cnf /etc/my.cnf