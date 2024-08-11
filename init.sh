#!/bin/bash

echo "============ CONFIGURANDO PROJETO, AGUARDE ... ============"
echo ""

docker exec -it app bash -c 'composer install && composer update'
docker exec -it node bash -c 'npm install && npm update'
docker exec -it node bash -c 'npm run build'
docker exec -it postgres bash -c 'psql -U postgres -c "CREATE DATABASE escola;" || true'
cp ./app/.env.example ./app/.env
docker exec -it app bash -c 'php artisan key:generate'
docker exec -it app bash -c 'php artisan migrate'

echo ""
echo "================= CONFIGURAÇÃO FINALIZADA ================="