docker pull docker.elastic.co/elasticsearch/elasticsearch:7.10.0

docker run -p 9200:9200 -p 9300:9300 -e "discovery.type=single-node" docker.elastic.co/elasticsearch/elasticsearch:7.10.0

sudo docker-compose up

== curl

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

== vm

sysctl -w vm.max_map_count=262144

If you want to set this permanently, you need to edit /etc/sysctl.conf and set vm.max_map_count to 262144.

When the host reboots, you can verify that the setting is still correct by running:
 sysctl vm.max_map_count
