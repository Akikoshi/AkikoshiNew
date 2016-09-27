#!/usr/bin/env bash

clear;

BEF="$PWD""/Build/Tools/phpmd.phar src xml "
BEF="$BEF""codesize,unusedcode,naming > build/phpmd/phpmd.xml"
eval "$BEF"

BEF="$PWD""/Build/Tools/phpcs.phar --report=xml "
BEF="$BEF""--report-file=build/phpcs/phpcs.xml src"
eval "$BEF"

BEF="$PWD""/Build/Tools/phploc.phar --log-xml=build/phploc/phploc.xml src"

BEF="$PWD""/Build/Tools/phpdox.phar"
eval "$BEF"