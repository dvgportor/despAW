#!/bin/bash
cat `dirname "$0"`/nova.sql | docker-compose exec -T mysql bd "/usr/bin/mysql -u root -pexample a20davidvg"