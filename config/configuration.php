<?php

// Accès base de données
const DEV = FALSE;

require_once('./config/env.php');

// Langue du site
const LANG ='FR-fr';



//dossiers racines du site
define('PATH_CONTROLLERS','./controllers/c_');
define('PATH_ENTITY','./entities/');
define('PATH_ASSETS','./assets/');
define('PATH_LIB','./lib/');
define('PATH_MODELS','./models/');
define('PATH_VIEWS','./views/v_');
define('PATH_TEXTES','./languages/');

define('PATH_CSS', PATH_ASSETS.'css/');
define('PATH_IMG', PATH_ASSETS.'images/');
define('PATH_JS', PATH_ASSETS.'js/');
define('PATH_FONT', PATH_ASSETS.'fonts/');
