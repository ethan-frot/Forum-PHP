# Reset Docker

```bash
    docker system prune -a -f &&
	docker volume prune -f &&
	docker network prune -f
```

# Up Docker

```bash
    docker-compose up -d
```