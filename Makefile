

h:
	echo cica

up:
	docker compose down && docker rm -f apache-php && docker compose up -d
