#!/bin/bash

phar_url="https://github.com/fabpot/local-php-security-checker/releases/download/v1.0.0/local-php-security-checker_1.0.0_linux_386"
github_action_path=$(dirname "$0")

curl --silent -H "User-agent: cURL (https://github.com/bristol-su)" -L "$phar_url" > "${github_action_path}/security-checker.phar"

chmod u+x "${github_action_path}/security-checker.phar"
"${github_action_path}/security-checker.phar"