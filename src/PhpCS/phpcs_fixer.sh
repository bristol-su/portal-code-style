#!/bin/bash

"$GITHUB_WORKSPACE"/vendor/bin/php-cs-fixer fix --config "$GITHUB_WORKSPACE"/.php_cs --dry-run