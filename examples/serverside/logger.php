<?php

$errorMsg = isset($_POST['errorMsg']) ? $_POST['errorMsg'] : '';
$fileUrl = isset($_POST['fileUrl']) ? $_POST['fileUrl'] : '';
$lineNumber = isset($_POST['lineNumber']) ? $_POST['lineNumber'] : '';
$columnNumber = isset($_POST['columnNumber']) ? $_POST['columnNumber'] : '';

$message = "JSLogger Error: {$errorMsg} in {$fileUrl} line {$lineNumber} column {$columnNumber}";
$message_type = 0;

// log it into PHP error log
error_log(string $message, $message_type);
