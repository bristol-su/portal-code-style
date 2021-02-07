#!/bin/bash

"$GITHUB_WORKSPACE"/vendor/bin/php-cs-fixer fix --config "$GITHUB_WORKSPACE"/.php-cs --dry-run