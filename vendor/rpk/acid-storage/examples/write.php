<?php

/**
 * Exceptions container
 *
 * @category   Exceptions
 * @author     Repkit <repkit@gmail.com>
 * @copyright  2015 Repkit
 * @license    MIT <http://opensource.org/licenses/MIT>
 * @since      2015-08-17
 */

error_reporting(-1);
ini_set('display_errors',1);

require '../vendor/autoload.php';

// init storage
$storage = new RpkAcidStorage\Storage('test');

// get storage info
$info = $storage->info();
dump($info);

//write some data
$data = array('id' => 1, 'name' => 'Coco Rico', 'age' => 21, 'sex' => 'male');
$res = $storage->write(json_encode($data),0);
dump($res);

// write some other data
$data = array('id' => 1, 'name' => 'Coco Rico', 'age' => 121, 'sex' => 'female');
$res = $storage->write(json_encode($data));
dump($res);

//get storage info again
$info = $storage->info();
dump($info);

function dump($data){
 	echo '<pre>';
 	print_r($data);
 	echo '</pre>';
 }
