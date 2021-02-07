#!/bin/bash

"$GITHUB_WORKSPACE"/vendor/bin/phpunit --colors=always --process-isolation --verbose --configuration phpunit.xml --coverage-clover ./coverage.xml