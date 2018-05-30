<?php
/**
 * Created by PhpStorm.
 * User: sambare
 * Date: 18/05/18
 * Time: 10.47
 */

namespace App\Command;


use App\Service\Greeting;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
    private $greeting;

    /**
     * HelloCommand constructor.
     * @param Greeting $greeting
     */
    public function __construct(Greeting $greeting)
    {
        $this->greeting = $greeting;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName("app:say-hello")
            ->setDescription("say hello to the user")
            ->addArgument("name",InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument("name");
        $output->writeln([
            "hello from the app",
            "==================",
            " "
        ]);
        $output->writeln($this->greeting->greet($name));
    }
}