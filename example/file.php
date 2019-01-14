<?php
require_once __DIR__ . '/../vendor/autoload.php';
$apiKey = '';
$file   = new \nguyenanhung\Tool\DrVirus\File($apiKey);
$result = $file->scan('test.txt');
d($result);
// Perform a re-scan
d($file->rescan($result['resource']));
d($file->getReport($result['resource']));
