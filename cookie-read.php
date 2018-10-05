<?php
if (isset($_COOKIE['accessed']))
    echo $_COOKIE['accessed'];
    else echo 'proměnná není nastavena';
