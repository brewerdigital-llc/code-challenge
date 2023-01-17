<?php

/*
Challenge 1: Implement ResponseInterface and get it to return "8"
*/

class Question
{
    public function __construct(ResponseInterface $response)
    {
        echo "What is 4 + 4?\n";
        $response = $response->get()->the()->response();

        if ($response instanceof ResponseInterface) {
            echo $response . PHP_EOL;
        }
    }
}

interface ResponseInterface
{
    public function get();
    public function the();
    public function response();
}

// start editing here



// end editing here

$response = new Answer;
$question = new Question($response);
