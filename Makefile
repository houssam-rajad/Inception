include srcs/.env

COMPOSE_FILE	= ./srcs/docker-compose.yml
VOLUMES			= $(shell docker volume ls -q)

up: $(DATA_DIR)
	docker-compose -f $(COMPOSE_FILE) up --build -d

down:
	docker-compose -f $(COMPOSE_FILE) down

nginx wordpress mariadb:
	docker-compose -f $(COMPOSE_FILE) exec $@ /bin/sh

clean: down
	rm -rf $(DATA_DIR)
ifneq ($(VOLUMES),)
	docker volume rm $(VOLUMES)
endif

$(DATA_DIR):
	mkdir -p $(DATA_DIR)/db-data $(DATA_DIR)/wp-data

re: down up
