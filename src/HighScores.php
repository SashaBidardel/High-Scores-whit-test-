<?php

namespace App;



class HighScores
{
       
    public array $scores;
    public int $latest;
    public int $personalBest; 
    public  array $personalTopThree;
    
    public function __construct(array $scores)
       {
         $this->scores=$scores;  
         $this->latest=end($scores);
         $this->personalBest=max($scores);
         rsort($scores);
         $this->personalTopThree=array_slice($scores, 0, 3);

       
    }
}


?>