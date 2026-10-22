FROM ghcr.io/linuxserver/baseimage-alpine-nginx:3.24@sha256:771a90c26e89a96fb9cdd801a282ae683a8467e26a6aebb17bdc4638c6cd94d8

ARG BUILD_DATE
ARG VERSION
LABEL build_version="Linuxserver.io version:- ${VERSION} Build-date:- ${BUILD_DATE}"
LABEL maintainer="sylvainmetayer"

# PHP 8.5 comes with the base image. Renovate bumps its digest on every
# linuxserver rebuild (renovate.json); `apk upgrade` pulls the PHP security
# fixes released after the base image was built. A new Alpine branch may ship
# another PHP branch: rename the php85-* packages along with the tag.
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
