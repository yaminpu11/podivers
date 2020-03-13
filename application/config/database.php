<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$active_group = 'default';
$active_record = TRUE;

$ServerName = $_SERVER['SERVER_NAME'];

switch ($ServerName) {
    case 'localhost':

        $db['default']['hostname'] = 'localhost';
        $db['default']['username'] = 'root';
        // $db['default']['password'] = ($_SERVER['SERVER_PORT']=='8080') ? '' : 'Uap)(*&^%';
        $db['default']['password'] = ($_SERVER['SERVER_PORT']=='8080') ? '' : '';


//        $db['default']['hostname'] = '10.1.30.18';
//        $db['default']['username'] = 'db_itpu';
//        $db['default']['password'] = 'Uap)(*&^%';


        $db['default']['database'] = 'db_academic';
        $db['default']['dbdriver'] = 'mysqli';// support with MYSQl,POSTGRE SQL, ORACLE,SQL SERVER
        $db['default']['dbprefix'] = '';
        $db['default']['pconnect'] = TRUE;
        $db['default']['db_debug'] = TRUE;
        $db['default']['cache_on'] = FALSE;
        $db['default']['cachedir'] = '';
        $db['default']['char_set'] = 'utf8';
        $db['default']['dbcollat'] = 'utf8_general_ci';
        $db['default']['swap_pre'] = '';
        $db['default']['autoinit'] = TRUE;
        $db['default']['stricton'] = FALSE;

        $db['server'] = array(
            'dsn'   => '',
            'hostname' => '10.1.30.88',
            'username' => 'it',
            'password' => 'itypap888',
            'database' => 'siak4',
            'dbdriver' => 'mysqli',
            'dbprefix' => '',
            'pconnect' => FALSE,
            'db_debug' => (ENVIRONMENT !== 'production'),
            'cache_on' => FALSE,
            'cachedir' => '',
            'char_set' => 'utf8',
            'dbcollat' => 'utf8_general_ci',
            'swap_pre' => '',
            'encrypt' => FALSE,
            'compress' => FALSE,
            'stricton' => FALSE,
            'failover' => array(),
            'save_queries' => TRUE
        );

        $db['server22'] = array(
            'dsn'   => '',
            'hostname' => 'localhost',
            'username' => 'root',
            'password' => '',
            'database' => 'library',
            'dbdriver' => 'mysqli',
            'dbprefix' => '',
            'pconnect' => FALSE,
            'db_debug' => (ENVIRONMENT !== 'production'),
            'cache_on' => FALSE,
            'cachedir' => '',
            'char_set' => 'utf8',
            'dbcollat' => 'utf8_general_ci',
            'swap_pre' => '',
            'encrypt' => FALSE,
            'compress' => FALSE,
            'stricton' => FALSE,
            'failover' => array(),
            'save_queries' => TRUE
        );

        $db['statistik']['hostname'] = 'localhost';
        $db['statistik']['username'] = 'root';
        $db['statistik']['password'] = '';
        $db['statistik']['database'] = 'db_statistik';
        $db['statistik']['dbdriver'] = 'mysqli';// support with MYSQl,POSTGRE SQL, ORACLE,SQL SERVER
        $db['statistik']['dbprefix'] = '';
        $db['statistik']['pconnect'] = TRUE;
        $db['statistik']['db_debug'] = TRUE;
        $db['statistik']['cache_on'] = FALSE;
        $db['statistik']['cachedir'] = '';
        $db['statistik']['char_set'] = 'utf8';
        $db['statistik']['dbcollat'] = 'utf8_general_ci';
        $db['statistik']['swap_pre'] = '';
        $db['statistik']['autoinit'] = TRUE;
        $db['statistik']['stricton'] = FALSE;
        break;

    default:
        $db['default']['hostname'] = '10.1.30.18';
        $db['default']['username'] = 'db_itpu';
        $db['default']['password'] = 'Uap)(*&^%';
        $db['default']['database'] = 'db_academic';
        $db['default']['dbdriver'] = 'mysqli';// support with MYSQl,POSTGRE SQL, ORACLE,SQL SERVER
        $db['default']['dbprefix'] = '';
        $db['default']['pconnect'] = TRUE;
        $db['default']['db_debug'] = FALSE;
        $db['default']['cache_on'] = FALSE;
        $db['default']['cachedir'] = '';
        $db['default']['char_set'] = 'utf8';
        $db['default']['dbcollat'] = 'utf8_general_ci';
        $db['default']['swap_pre'] = '';
        $db['default']['autoinit'] = TRUE;
        $db['default']['stricton'] = FALSE;

        $db['statistik']['hostname'] = '10.1.30.18';
        $db['statistik']['username'] = 'db_itpu';
        $db['statistik']['password'] = 'Uap)(*&^%';
        $db['statistik']['database'] = 'db_statistik';
        $db['statistik']['dbdriver'] = 'mysqli';// support with MYSQl,POSTGRE SQL, ORACLE,SQL SERVER
        $db['statistik']['dbprefix'] = '';
        $db['statistik']['pconnect'] = TRUE;
        $db['statistik']['db_debug'] = FALSE;
        $db['statistik']['cache_on'] = FALSE;
        $db['statistik']['cachedir'] = '';
        $db['statistik']['char_set'] = 'utf8';
        $db['statistik']['dbcollat'] = 'utf8_general_ci';
        $db['statistik']['swap_pre'] = '';
        $db['statistik']['autoinit'] = TRUE;
        $db['statistik']['stricton'] = FALSE;

        $db['server22'] = array(
            'dsn'   => '',
            'hostname' => '10.1.30.63',
            'username' => 'root',
            'password' => '4dm1n5!S',
            'database' => 'library',
            'dbdriver' => 'mysqli',
            'dbprefix' => '',
            'pconnect' => FALSE,
            'db_debug' => (ENVIRONMENT !== 'production'),
            'cache_on' => FALSE,
            'cachedir' => '',
            'char_set' => 'utf8',
            'dbcollat' => 'utf8_general_ci',
            'swap_pre' => '',
            'encrypt' => FALSE,
            'compress' => FALSE,
            'stricton' => FALSE,
            'failover' => array(),
            'save_queries' => TRUE
        );
        break;
        break;
}

/* End of file database.php */
/* Location: ./application/config/database.php */