<?php

require_once('libs/util.php');
require_once('libs/twitter.php');

if(Twitter::connected()) {
  print_r(Twitter::connection()->get(TwitterUrl::verifyCredentials()));
}

include('html/index.html.php');
