FROM ghcr.io/linuxserver/baseimage-alpine-nginx:3.24

ARG BUILD_DATE
ARG VERSION
LABEL build_version="Linuxserver.io version:- ${VERSION} Build-date:- ${BUILD_DATE}"
LABEL maintainer="sylvainmetayer"

# PHP 8.5 comes with the base image. `apk upgrade` pulls the PHP security
# fixes released after the base image was built.
RUN echo "**** install runtime packages ****" && \
	apk upgrade --no-cache && \
	apk add --no-cache \
	php85-pdo_mysql \
	&& echo "**** install app ****"

# copy local files
COPY src/ /usr/share/webapps/betisier
COPY root/ /

# ports and volumes
EXPOSE 80 443
VOLUME /config
