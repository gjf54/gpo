DOCKER_COMPOSE = docker compose
EXEC_PHP = $(DOCKER_COMPOSE) exec php
EXEC_MYSQL = $(DOCKER_COMPOSE) exec mysql

.PHONY: migrate docker-down docker-up docker-down-force composer-install storage-link

docker-up:
	$(DOCKER_COMPOSE) up -d --build
	@$(MAKE) wait-for-database

docker-down:
	docker compose down

docker-down-force:
	docker compose down -v

wait-for-database:
	@chmod +x ./docker/bin/wait-for.sh
	@./docker/bin/wait-for.sh localhost 3316

keys:
	$(EXEC_PHP) php artisan key:generate
	
composer-install:
	$(EXEC_PHP) git config --global --add safe.directory /var/www
	$(EXEC_PHP) composer install

database-drop-data:
	sudo rm -rf docker/database/data
	mkdir docker/database/data

storage-link:
	$(EXEC_PHP) php artisan storage:link

set-env:
	cp .env.example .env

set-overrides:
	cp docker-compose.override.yml.dist docker-compose.override.yml

migrate:
	@for i in $$(seq 1 10); do \
		echo "Migration attempt $$i..."; \
		if $(EXEC_PHP) php artisan migrate:refresh --seed; then \
			echo "Migrations successful!"; \
			exit 0; \
		fi; \
		sleep 3; \
	done; \
	echo "Migrations failed after 5 attempts."; \
	exit 1

init: set-overrides docker-up set-env composer-install keys storage-link migrate

reset: docker-down-force database-drop-data

reset-up: reset init