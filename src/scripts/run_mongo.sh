#!/bin/sh 
(
cd $(dirname "$0")/.. 
mkdir -p .db/data .db/log
touch .db/log/mongo.log 

(cd .db; mongod --bind_ip 127.0.0.1 --port 27017 --fork --dbpath data --logpath log/mongo.log --logappend)

)
