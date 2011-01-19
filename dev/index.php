<?php

require_once('libs/util.php');
require_once('libs/twitter.php');

if(Twitter::connected()) {
  echo TwitterUrl::statusesShow('27430873141870592');
}

include('html/index.html.php');
