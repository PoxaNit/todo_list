<?php

include __DIR__."/routes/Router.php";

 echo Router::handle($_SERVER["REQUEST_METHOD"]);

 exit;
