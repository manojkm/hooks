FROM node:6.7-slim
MAINTAINER Josh Porter <josh@joshporter.co.uk>

RUN apt-get update && apt-get install -y bzip2 && rm -rf /var/lib/apt/lists/*
RUN npm install -g grunt-cli
#RUN npm install node-phpfpm

WORKDIR /var/www/html
#ENV PATH="/var/www/html/bin:${PATH}" 