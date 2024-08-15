<?php

use dmadev\Router;

// page about contact [a-z]+ (page)
$strRegExpAdmin = '^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$';
$strRegExp = '^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/?$';

Router::add('^admin/?',['controller'=>'Main','action'=>'index','admin_prefix'=>'admin']);
Router::add('^admin/'.$strRegExpAdmin,['admin_prefix'=>'admin']);

Router::add('^$',['controller'=>'Main','action'=>'index']);

Router::add($strRegExp);