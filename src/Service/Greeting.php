<?php
/**
 * Created sambare aboubacar
 * User: sambare
 * Date: 17/05/18
 * Time: 13.16
 */

namespace App\Service;


use Psr\Log\LoggerInterface;

class Greeting
{
    private $logger;
    /**
     * @var string
     */
    private $message;


    /**
     * Greeting constructor.
     * @param LoggerInterface $logger
     * @param string $message
     */
    public function __construct(LoggerInterface $logger, string $message)
    {
        $this->logger = $logger;
        $this->message = $message;
    }

    public function greet(string  $name)
    {
        $this->logger->info("greeting $name");
        return "{$this->message} $name";
    }

}