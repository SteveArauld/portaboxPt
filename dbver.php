<?php
echo 'driver  : ' . DB::connection()->getDriverName() . PHP_EOL;
echo 'version : ' . DB::select('select version() as v')[0]->v . PHP_EOL;
echo 'articles.slug : ' . DB::select("show columns from articles like 'slug'")[0]->Type . PHP_EOL;
echo 'categories.slug : ' . DB::select("show columns from categories like 'slug'")[0]->Type . PHP_EOL;
