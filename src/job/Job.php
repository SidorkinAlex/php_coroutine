<?php

namespace SidorkinAlex\PhpCoroutine\Job;
class Job implements JobInterface
{
    protected string $id;
    protected bool $olyOneWorker = false;
    protected string $queueName = "IO.queue";
    protected int $workerLimit = 100;
    protected $function;
    protected string $serializedFunction;
    protected array $functionParams;

    /**
     * Job constructor.
     * @param array $functionParams
     * @param callable $function
     * @param string $queueName
     */
    public function __construct(array $functionParams, callable $function, string $queueName = "")
    {
        \Opis\Closure\Library::init();
        $this->function = $function;
        $this->serializedFunction = serialize($function);
        $this->functionParams = $functionParams;
    }


}