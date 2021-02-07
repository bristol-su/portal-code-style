#!/bin/bash

"$GITHUB_WORKSPACE"/vendor/bin/rector process --dry-run --output-format=console --config="$GITHUB_WORKSPACE"/rector.php