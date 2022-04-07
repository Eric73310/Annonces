<?php

class Article
{
    private $_id;
    private $_title;
    private $_content;
    private $_date;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        
    }
}