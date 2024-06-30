<?php

// Require tất cả các file có trong commons

require_once './commons/env.php';
require_once './commons/connect.php';
require_once './commons/helper.php';
require_once './commons/model.php';

// Require file trong controllers vaf models

require_file(PATH_VIEW);
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

// Navigation:

//...

require_once './commons/disconnect.php';
