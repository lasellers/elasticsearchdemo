# ElasticSearch Demo

Simple PHP + Composer demo of local elasticsearch interactions.


## docker run

docker run -p 9200:9200 -p 9300:9300 -e "discovery.type=single-node" docker.elastic.co/elasticsearch/elasticsearch:7.10.0

sudo docker-compose up


## curl

curl -X PUT "localhost:9200/customer/_doc/1?pretty" -H 'Content-Type: application/json' -d'
{
  "name": "John Doe"
}
'
curl -X PUT "localhost:9200/customer/_doc/2?pretty" -H 'Content-Type: application/json' -d'
{
  "name": "Jane Doe"
}
'

curl -X GET "localhost:9200/customer/_doc/1?pretty"
curl -X GET "localhost:9200/customer/_doc/2?pretty"


curl -H 'Content-Type: application/json' -XGET 'localhost:9200/customer/_doc/_search' -d '{
"query" : {
"match" : {
"name" : "John"
}
}
}'

## vm

Set temp:
sysctl -w vm.max_map_count=262144

Set permanent:
edit /etc/sysctl.conf and set vm.max_map_count to 262144.

Verify status:
 sysctl vm.max_map_count
