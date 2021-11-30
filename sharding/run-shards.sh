
## three spider nodes
docker run -d -p 127.0.0.1:33061:3306 -e MYSQL_ROOT_PASSWORD=maria --name maria_1 mariadb:10.4
docker run -d -p 127.0.0.1:33062:3306 -e MYSQL_ROOT_PASSWORD=maria --name maria_2 mariadb:10.4
docker run -d -p 127.0.0.1:33063:3306 -e MYSQL_ROOT_PASSWORD=maria --name maria_3 mariadb:10.4