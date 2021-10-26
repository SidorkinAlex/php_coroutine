<?php

namespace SidorkinAlex\PhpCoroutine\Coroutine;

use SidorkinAlex\PhpCoroutine\Job\JobInterface;

interface CoroutineInterface
{
    public function add(JobInterface $job): void;
}