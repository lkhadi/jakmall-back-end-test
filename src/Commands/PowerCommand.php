<?php

namespace Jakmall\Recruitment\Calculator\Commands;

use Illuminate\Console\Command;
use Jakmall\Recruitment\Calculator\Commands\TraitCommand;

class PowerCommand extends Command
{
    use TraitCommand;

    public function __construct()
    {
        $commandVerb = 'power';
        $commandPassiveVerb = 'powered';

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
        $operator = '^';
        $this->process($operator);
    }

    /**
     * @param array $numbers
     *
     * @return float|int
     */
    protected function calculateAllPow(array $numbers)
    {
        if (count($numbers) !== 2) {
            return 0;
        }
        $firstNumber = $numbers[0];
        $secondNumber = $numbers[1];
        return $this->calculate($firstNumber, $secondNumber);
    }
    
    /**
     * @param int|float $number1
     * @param int|float $number2
     *
     * @return int|float
     */
    protected function calculate($number1, $number2)
    {
        return pow($number1, $number2);
    }
}
