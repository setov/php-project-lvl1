install:
	composer install

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
	composer exec --verbose phpstan

lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12 src bin

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

validate:
	composer validate
