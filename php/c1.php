<?php

/*
Challenge 1: Implement AnswerInterface and get it to echo "8"
*/

class Question
{
    public function __construct(AnswerInterface $answer)
    {
        echo "What is 4 + 4?\n";
        $response = $answer->get()->the()->answer();

        if ($answer instanceof AnswerInterface) {
            echo $response . PHP_EOL;
        }
    }
}

interface AnswerInterface
{
    public function get();
    public function the();
    public function answer();
}

// start editing here



// end editing here

$answer = new Answer;
$question = new Question($answer);
