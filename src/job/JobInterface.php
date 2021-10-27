<?php


namespace SidorkinAlex\PhpCoroutine\job;


interface JobInterface
{
    public function __construct(array $functionParams, callable $function, string $queueName="");

}