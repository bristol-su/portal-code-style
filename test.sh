#!/bin/bash

# Security vulnerability check

curl -s -L https://github.com/fabpot/local-php-security-checker/releases/download/v1.0.0/local-php-security-checker_1.0.0_linux_386 > security-checker
sudo chmod u+x ./security-checker
./security-checker
rm ./security-checker

vendor/bin/phpstan analyse --configuration phpstan.neon

