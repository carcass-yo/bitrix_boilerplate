FROM spaceonfire/nginx-php-fpm:1.0.0-beta.4

ENV SOF_PRESET=bitrix \
	PAGER=more

ARG APPLICATION_ENV

COPY private ./private
COPY composer.json composer.lock ./
RUN composer-update
COPY ./ ./
