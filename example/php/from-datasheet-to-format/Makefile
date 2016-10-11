
THE_MAKEFILE_FILE_PATH := $(abspath $(lastword $(MAKEFILE_LIST)))
THE_BASE_DIR_PATH := $(abspath $(dir $(THE_MAKEFILE_FILE_PATH)))
THE_BIN_DIR_PATH := $(THE_BASE_DIR_PATH)/bin

.PHONY: usage ods-to-csv ods-to-html-table ods-to-html-table-css ods-to-html-table-css-bootstrap ods-to-json ods-to-po ods-to-sql-mysql ods-to-xml ods-to-xml-xslt xls-to-po xls-to-html-table xls-to-xml

usage:
	$(THE_BIN_DIR_PATH)/usage.sh

ods-to-csv:
	$(THE_BIN_DIR_PATH)/ods-to-csv.php

ods-to-html-table:
	$(THE_BIN_DIR_PATH)/ods-to-html-table.php

ods-to-html-table-css:
	$(THE_BIN_DIR_PATH)/ods-to-html-table-css.php

ods-to-html-table-css-bootstrap:
	$(THE_BIN_DIR_PATH)/ods-to-html-table-css-bootstrap.php

ods-to-json:
	$(THE_BIN_DIR_PATH)/ods-to-json.php

ods-to-po:
	$(THE_BIN_DIR_PATH)/ods-to-po.php

ods-to-sql-mysql:
	$(THE_BIN_DIR_PATH)/ods-to-sql-mysql.php

ods-to-xml:
	$(THE_BIN_DIR_PATH)/ods-to-xml.php

ods-to-xml-xslt:
	$(THE_BIN_DIR_PATH)/ods-to-xml-xslt.php


xls-to-po:
	$(THE_BIN_DIR_PATH)/xls-to-po.php

xls-to-html-table:
	$(THE_BIN_DIR_PATH)/xls-to-html-table.php

xls-to-xml:
	$(THE_BIN_DIR_PATH)/xls-to-xml.php
