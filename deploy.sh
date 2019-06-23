#!/bin/bash

cp * $HOME`/public_html/minifier.ml/`

cd ..
chmod 777 -R minifier/
rm minifier/ -R

cd $HOME`/public_html/minifier.ml/`
composer install
echo "done :)"