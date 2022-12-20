<?php

namespace App\Classes;

class Quiz
{
    private $questions = [
        [
            "nr" => 1,
            "answersValue" => [
                2, 1, 1
            ]
        ],
        [
            "nr" => 2,
            "answersValue" => [
                1,1,2
            ]
        ],
        [
            "nr" => 3,
            "answersValue" => [
               1,2,1
            ]
        ],
        [
            "nr" => 4,
            "answersValue" => [
                1,2,1
            ]
        ],
        [
            "nr" => 5,
            "answersValue" => [
                1,1,2
            ]
        ],
        [
            "nr" => 6,
            "answersValue" => [
                2, 1, 1
            ]
        ],
        [
            "nr" => 7,
            "answersValue" => [
                2, 1, 1
            ]
        ],
        [
            "nr" => 8,
            "answersValue" => [
               1,1,2
            ]
        ],
        [
            "nr" => 9,
            "answersValue" => [
                1,1,2
            ]
        ],
        [
            "nr" => 10,
            "answersValue" => [
               1,2,1
            ]
        ],
    ];

    public function getQuestions()
    {
        return $this->questions;
    }
}

?>
