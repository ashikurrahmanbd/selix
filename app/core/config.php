<?php

if($_SERVER['SERVER_NAME'] == 'localhost'){
    
    define('ROOT', 'http://localhost/selix/public');

}else{
    define('ROOT', 'https://yourdomaian.com');
}

