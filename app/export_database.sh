#!/bin/bash

mysqldump -v \
        -hdashboardsabha.mysql.dbaas.com.br \
        -udashboardsabha \
        -pdT\$MvyZ9Gih6JB \
        --no-create-db \
        --skip-triggers \
        --ignore-table=dashboardsabha.migrations \
        --column-statistics=0 \
        --default-character-set=utf8 \
        dashboardsabha > data.sql
