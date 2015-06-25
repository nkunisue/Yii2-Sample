#!/bin/sh 
(
cd $(dirname "$0")/..
if [ -e .db/env ];then echo load from env file; source .db/env;fi
php -S localhost:8080 -t web_dev/ 
# php -S localhost:8080 -t web/ 
)

