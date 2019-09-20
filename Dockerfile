FROM nginx:latest
FROM php:latest

USER 0

COPY site /var/www/ip-reply
COPY config/nginx-ip-reply.conf /etc/nginx/conf.d/


USER 1001
