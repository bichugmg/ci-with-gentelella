<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'ssl://smtp.googlemail.com', 
    'smtp_port' => 465,
    'smtp_user' => 'hr.teaminterval@gmail.com',
    'smtp_pass' => 'HR@Interval',
    // 'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '5', //in seconds
    'charset' => 'iso-8859-1',
    'wordwrap' => TRUE
);
?>