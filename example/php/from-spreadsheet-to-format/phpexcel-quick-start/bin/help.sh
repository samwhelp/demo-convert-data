#!/usr/bin/env bash

THE_BASE_DIR_PATH=$(cd -P -- "$(dirname -- "$0")" && pwd -P)

usage()
{
	echo ""
	echo "Usage: make [command]"
	echo
	cat <<EOF
Ex:

$ make test-listWorksheetInfo
$ make test-listWorksheetNames

$ make test-load

$ make test-dump-row-1-v1
$ make test-dump-row-1-v2

$ make test-dump-all
$ make test-dump-all-to-file

EOF
}

usage
