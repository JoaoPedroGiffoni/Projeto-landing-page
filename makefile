.DEFAULT_GOAL := help

##@ Docs

help: ## Print the makefile help
	@awk 'BEGIN {FS = ":.*##"; printf "\nUsage:\n  make \033[36m<target>\033[0m\n"} /^[a-zA-Z_-]+:.*?##/ { printf "  \033[36m%-15s\033[0m %s\n", $$1, $$2 } /^##@/ { printf "\n\033[1m%s\033[0m\n", substr($$0, 5) } ' $(MAKEFILE_LIST)

##@ Initialize work

init: ## Start a new development environment
	$(MAKE) dev
	@sleep 10
	$(MAKE) restore

##@ Docker actions

dev: ## Start containers detached
	docker-compose up -d

##@ Bash controls

bash: ## Start nginx bash
	@docker-compose exec atratis-nginx bash

nginx: ## Start nginx bash
	@docker-compose exec -u application atratis-nginx bash

mysql: ## Start mysql bash
	@docker-compose exec atratis-mysql bash

##@ Database tools

backup: ## Export database
	@docker-compose exec atratis-mysql bash -c "mysqldump -u root -p database > /var/www/app/database/dumps/backup.sql"
	@docker-compose exec atratis-mysql bash -c "chown 1000:1000 /var/www/app/database/dumps/backup.sql"

restore: ## Import database
	@docker-compose exec atratis-mysql bash -c "mysql -u root -p database < /var/www/app/database/dumps/backup.sql"
