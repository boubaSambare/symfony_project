<?php
/**
 * Created by PhpStorm.
 * User: sambare
 * Date: 17/05/18
 * Time: 13.16
 */

namespace App\Service;


use Psr\Log\LoggerInterface;

class Greeting
{
    private $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function greet(string  $name)
    {
        $this->logger->info("greeting $name");
        return "hello $name";
    }

}