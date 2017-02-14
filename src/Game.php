<?php

    class Game
    {
        public $count;
        public $results_arr;
        // public $tempo:

        function __construct($new_input_number)
        {
            $this->count = $new_input_number;
            $this->results_arr = array();
        }

        // function countTo($input_number)
        // {
        //     for ($i=1; $i<=$input_number; $i++) {
        //         if ($i % 15 == 0 ) {
        //             array_push($this->results_arr, "Ping-Pong!");
        //         }
        //         else if ($i % 5 == 0) {
        //             array_push($this->results_arr, "Pong!");
        //         }
        //         else if ($i % 3 == 0) {
        //             array_push($this->results_arr, "Ping!");
        //         }
        //         else {
        //             array_push($this->results_arr, $i);
        //         }
        //     }
        //     return $this->results_arr;
        // }
        function countTo($input_number)
        {
            $array_p=array();
            for ($i=1; $i<=$input_number; $i++) {
                if ($i % 15 == 0 ) {
                    array_push($array_p, "Ping-Pong!");
                }
                else if ($i % 5 == 0) {
                    array_push($array_p, "Pong!");
                }
                else if ($i % 3 == 0) {
                    array_push($array_p, "Ping!");
                }
                else {
                    array_push($array_p, $i);
                }
            }
            return $array_p;
        }

        function rhythmicDisplay($input_arr)
        {
            foreach ($input_arr as $step) {
                sleep(1);
                return $step;
            }
        }
        function rhythmicDisplaySingle($step)
        {
            sleep(1);
            return $step;
        }
        function whileTest()
        {
            $seconds = 3;
            while ($seconds > 0) {
                echo $seconds . " ";
                sleep(1);
                $seconds = $seconds -1;
            }
        }
        function save()
        {
            array_push($_SESSION['game_object'], $this);
        }
        static function getAll()
        {
            return $_SESSION['game_object'];
        }
        static function deleteAll()
        {
            $_SESSION['game_object'];
        }

    }



 ?>
