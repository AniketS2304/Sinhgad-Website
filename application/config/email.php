<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Use environment variables for sensitive information
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.gmail.com'; // Or another email provider
$config['smtp_user'] = getenv('SMTP_USER'); // Fetch from environment variable
$config['smtp_pass'] = getenv('SMTP_PASS'); // Fetch from environment variable
$config['smtp_port'] = 587;
$config['smtp_crypto'] = 'tls'; // 'ssl' or 'tls'
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['wordwrap'] = TRUE;
