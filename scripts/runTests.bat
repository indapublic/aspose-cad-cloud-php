docker run -v %cd%:/PHP -v %cd%/Settings/servercreds.json:/servercreds.json -v %cd%/TestData:/TestData -w="/PHP" --rm php:latest vendor/bin/phpunit -c phpunit.xml