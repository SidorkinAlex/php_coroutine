<?php
namespace SidorkinAlex\PhpCoroutine\Coroutine;

use SidorkinAlex\PhpCoroutine\Job\JobInterface;

class CoroutineManyWorker implements CoroutineInterface
{
    public function __construct()
    {
    }

    public function add(JobInterface $job): void
    {
        // TODO: Implement add() method.
    }
}