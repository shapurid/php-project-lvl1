install:
	composer install

lint:
	composer run-script phpcs -- --standard=PSR12 src bin

validate:
	composer validate

autoload-update:
	composer dump-autoload

brain-games:
	./bin/brain-games

brain-calc:
	./bin/brain-calc

brain-even:
	./bin/brain-even

brain-gcd:
	./bin/brain-gcd

brain-progression:
	./bin/brain-progression

brain-prime:
	./bin/brain-prime