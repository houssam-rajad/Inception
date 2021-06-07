FROM alpine:3.11

RUN apk update && \
	apk add --no-cache mariadb

RUN mkdir -p /run/mysqld && \
	chown -R mysql:mysql /run/mysqld /var/lib/mysql

RUN mysql_install_db --user=mysql --datadir=/var/lib/mysql

COPY ./tools/docker-entrypoint.sh .
COPY ./conf/my.cnf /etc/

EXPOSE 3306

ENTRYPOINT ["./docker-entrypoint.sh"]
CMD ["/usr/bin/mysqld", "--user=mysql", "--skip-name-resolve", "--init-file=/tmp/init"]
