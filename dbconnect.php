<?php
/**
 * Created by PhpStorm.
 * User: dell user
 * Date: 21/7/2016
 * Time: 14:52
 */
define('DB_SERVER','ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME','b7cd268e2df9a8');
define('DB_PASSWORD','8ae90ff4');
define('DB_DATABASE','formulad');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);