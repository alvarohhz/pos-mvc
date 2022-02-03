<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Chrome\ChromeDriver;

// Class yang mau di TEST.
require_once "logintest";


class logintest extends TestCase
{
   
   public $capabilities;
   public function __construct()
        {
        $this->capabilities = DesiredCapabilities::chrome();
    // Disable accepting SSL certificates
    // selenium-server-standalone-#.jar (version 3.x)
    // $host = 'http://localhost:4455/wd/hub'
    $this->webDriver = RemoteWebDriver::create($host, $capabilities);
        }}

        
