<?php

// Include the SDK using the Composer autoloader
require 'aws-autoloader.php';

use Aws\S3\S3Client;
use Aws\Common\Aws;

$aws = Aws::factory('config.php');

// Get the client from the service locator by namespace
$s3Client = $aws->get('s3');
var_dump($s3Client);