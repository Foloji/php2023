<?php

require_once 'config.php';
require_once 'lib/output.php';

include_once 'view/header.html';
include_once 'view/menu.html';

if (!empty($_GET['view'])) {
    getContent($_GET['view']);
}

include_once 'view/footer.html';