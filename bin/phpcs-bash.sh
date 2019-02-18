#!/bin/bash

# bin/phpcs-bash.sh

git clone https://github.com/FloeDesignTechnologies/phpcs-security-audit.git
cd phpcs-security-audit
composer install

# $ vendor/bin/phpcs --extensions=php,inc,lib,module,info --standard=example_base_ruleset.xml /home/samuel/projets/ecf-symfony
