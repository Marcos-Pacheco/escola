#!/bin/bash

echo "============ CONFIGURANDO PROJETO, AGUARDE ... ============"
echo ""

docker exec -it app bash -c 'composer install'
docker exec -it node bash -c 'npm install'
docker exec -it node bash -c 'npm run build'
docker exec -it postgres bash -c 'psql -U postgres -c "CREATE DATABASE escola;" || true'
cp ./app/.env.example ./app/.env
docker exec -it app bash -c 'php artisan key:generate'
docker exec -it app bash -c 'php artisan migrate'
docker exec -it app bash -c 'php artisan db:seed'

echo ""
echo "================= CONFIGURAÇÃO FINALIZADA ================="