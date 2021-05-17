<?php

class Queue

{
    public array $stack;
    public int $limit;

    public function __construct($limit = 10)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($data)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $data);
        } else {
            throw new RunTimeException('Stack is full!');
        }
    }

    public function pop()
    {
        array_pop($this->stack);
    }

    public function top()
    {
        return end($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function showStack()
    {
        echo implode('-', $this->stack);
    }

}