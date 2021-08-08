<?php
namespace Sdkit\Office\Console\Command;

use Magento\Framework\ObjectManagerInterface;
use Symfony\Component\Console\Command\Command;

class Office extends Command
{
    protected $objectManger;

    public function __construct(
        ObjectManagerInterface $objectManager
    )
    {
        $this->objectManger = $objectManager;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('sdkit:office')
            ->setDescription('Sdkit Office Command');
        parent::configure(); // TODO: Change the autogenerated stub
    }
}