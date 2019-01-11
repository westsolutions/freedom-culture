<?php

require_once __DIR__ . "/app/init.php";

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
  echo "Handle other requests.";
}

// GET REQUESTS TEST
$req = get_page();

include_once __DIR__ . "/pages/$req.php";
