<?php

if($_SERVER['SERVER_NAME'] == 'localhost'){

    define('DBNAME', 'selix');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');
    
    define('ROOT', 'http://localhost/selix/public');

}else{

    define('DBNAME', 'selix');
    define('DBUSER', 'root');
    define('DBHOST', '');
    define('DBDRIVER', '');

    define('ROOT', 'https://yourdomaian.com');
}

