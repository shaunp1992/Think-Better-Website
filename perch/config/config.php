<?php
    define('PERCH_LICENSE_KEY', 'P21510-TKF947-ZTX898-VTF360-EDP007');

    define("PERCH_DB_USERNAME", 'thinkwp');
    define("PERCH_DB_PASSWORD", '1LDkN1d0');
    define("PERCH_DB_SERVER", "sql55");
    define("PERCH_DB_DATABASE", "thinkwp_db");
    define("PERCH_DB_PREFIX", "perch3_");
    
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'shaunpearce1992@gmail.com');
    define('PERCH_EMAIL_FROM_NAME', 'Shaun Pearce');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
