<?php

namespace SidorkinAlex\PhpCoroutine;

use SidorkinAlex\PhpCoroutine\Job\JobInterface;

class Coroutine implements CoroutineInterface
{
    protected const COROUTINE_LIST_NAME="main_coroutine";
    public function __construct()
    {
    }

    public function add(JobInterface $job): void
    {

    }

    public static function exec() {

    }


}