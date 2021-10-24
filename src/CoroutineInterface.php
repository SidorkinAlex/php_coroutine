<?php


namespace SidorkinAlex\PhpCoroutine;


use SidorkinAlex\PhpCoroutine\Job\JobInterface;

interface CoroutineInterface
{
    public function add(JobInterface $job): void;
}