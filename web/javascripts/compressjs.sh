#!/bin/bash

#rm -rf dev.me.min.js
#cat ../../vendor/components/jquery/jquery.min.js ../../vendor/components/jquery/jquery-migrate.min.js ../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js ../../vendor/eonasdan/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js ../../web/javascripts/json_rpc_client/jquery.jsonrpcclient.min.js *.js > dev.me.js
#java -jar /usr/bin/yuicompressor-2.4.8.jar --preserve-semi --type js -o dev.me.min.js dev.me.js
#rm -rf dev.me.js

DIRECTORY_TO_OBSERVE="./*.js"     

function block_for_change {
  inotifywait -r \
    -e modify,move,create,delete \
    $DIRECTORY_TO_OBSERVE
}

function build {
    echo "Rimozione dev.me.min.js in corso..."
    rm -rf dev.me.min.js

    echo "Merge and minify js files..."
    cat ../../vendor/components/jquery/jquery.min.js ../../vendor/components/jquery/jquery-migrate.min.js ../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js ../../vendor/moment/moment/moment.js ../../vendor/eonasdan/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js ../../web/javascripts/json_rpc_client/jquery.jsonrpcclient.min.js *.js > dev.me.js
    java -jar /usr/bin/yuicompressor-2.4.8.jar --preserve-semi --type js -o dev.me.min.js dev.me.js

    echo "Remove temp file..."
    rm -rf dev.me.js

    echo "DONE!"
}

build

while block_for_change; do
  build
done