FROM alpine:3.11

RUN apk update && \
	apk add --no-cache mariadb mariadb-client

RUN mkdir -p /run/mysqld && \
	chown -R mysql:mysql /run/mysqld /var/lib/mysql

RUN mysql_install_db --user=mysql --datadir=/var/lib/mysql --auth-root-authentication-method=normal
RUN adduser hrajad -D



COPY ./conf/my.cnf /etc/
COPY ./tools/docker-entrypoint.sh .

EXPOSE 3306

ENTRYPOINT ["./docker-entrypoint.sh"]
CMD ["/usr/bin/mysqld", "--user=mysql", "--skip-name-resolve" , "--init-file=/tmp/init" , "--debug-gdb"]
