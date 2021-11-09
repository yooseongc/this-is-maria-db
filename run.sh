
# ensure shared volume directory exists
mkdir -p /c/Users/user/study/this-is-maria-db

# create new container
docker run \
    --name this-is-maria-db \
    -e MYSQL_ROOT_PASSWORD=maria \
    -p 127.0.0.1:3306:3306 \
    -v /c/Users/user/data/this-is-maria-db:/var/lib/mysql \
    -d docker.io/library/mariadb:10.3

# set restart policy
docker update --restart unless-stopped this-is-maria-db
