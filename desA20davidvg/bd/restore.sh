
cat `dirname "$0"`/a20davidvg.sql | docker-compose exec -T mysql bd "/usr/bin/mysql -u root -pexample a20davidvg"