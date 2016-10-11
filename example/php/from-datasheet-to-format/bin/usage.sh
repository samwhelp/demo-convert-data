#!/usr/bin/env bash

THE_BASE_DIR_PATH=$(cd -P -- "$(dirname -- "$0")" && pwd -P)

usage()
{
	echo ""
	echo "Usage: make [command]"
	echo
	cat <<EOF
Ex:
$ make ods-to-html-table
$ make ods-to-po
$ make ods-to-xml

$ make xls-to-html-table
$ make xls-to-po
$ make xls-to-xml
EOF
}

usage
