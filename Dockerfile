FROM ghcr.io/linuxserver/baseimage-alpine-nginx:3.13

ARG BUILD_DATE
ARG VERSION
LABEL build_version="Linuxserver.io version:- ${VERSION} Build-date:- ${BUILD_DATE}"
LABEL maintainer="sylvainmetayer"

RUN echo "**** install runtime packages ****" && \
	apk add --no-cache \
	curl \
	php7-ctype \
	php7-curl \
	php7-dom \
	php7-gmp \
	php7-iconv \
	php7-intl \
	php7-mysqli \
	php7-mysqlnd \
	php7-pdo_mysql \
	php7-zip \
	sqlite \
	&& echo "**** install app ****"

# copy local files
COPY src/ /usr/share/webapps/betisier
COPY root/ /

# ports and volumes
EXPOSE 80 443
VOLUME /config
