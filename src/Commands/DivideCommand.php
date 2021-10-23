<?php

namespace Jakmall\Recruitment\Calculator\Commands;

use Illuminate\Console\Command;
use Jakmall\Recruitment\Calculator\Commands\TraitCommand;

class DivideCommand extends Command
{
    use TraitCommand;

    public function __construct()
    {
        $commandVerb = 'divide';
        $commandPassiveVerb = 'divided';

        $this->signature = sprintf(
            '%s {numbers* : The numbers to be %s}',
            $commandVerb,
            $commandPassiveVerb
        );
        $this->description = sprintf('%s all given Numbers', ucfirst($commandVerb));

        parent::__construct();
    }

    public function handle(): void
    {
        $operator = '/';
        $this->process($operator);
    }
    
    /**
     * @param int|float $number1
     * @param int|float $number2
     *
     * @return int|float
     */
    protected function calculate($number1, $number2)
    {
        return $number1 / $number2;
    }
}
