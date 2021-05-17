<?php
include_once "Queue.php";
$queue = new Queue(10);
$queue->push(1);
$queue->push(2);
$queue->push(3);
$queue->push(4);
$queue->push(5);
$queue->push(6);
$queue->push(7);
$queue->push(8);

var_dump($queue->isEmpty());
echo '<br>';
$queue->showStack();
echo '<hr>';
$queue->pop();
$queue->showStack();
echo '<br>';
echo $queue->top();
