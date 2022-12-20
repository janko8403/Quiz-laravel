<?php

namespace App\Classes;

class ValuesQuiz
{
    private $values = [
        [
            'name' => 'respect',
            'bg' => '#CFECF8',
        ],
        [
            'name' => 'spirit',
            'bg' => '#D8E7F3',
        ],
        [
            'name' => 'growth',
            'bg' => '#E3D5E9',
        ],
        [
            'name' => 'simply',
            'bg' => '#D293B6',
        ],
        [
            'name' => 'love',
            'bg' => '#C7518B',
        ],
        
    ];

    public function getValues()
    {
        return $this->values;
    }
}

?>
