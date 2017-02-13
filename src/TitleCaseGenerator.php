<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $input_title_array = explode(" ", $input_title);
            $output_titlecased = array();
            foreach ($input_title_array as $word){
                array_push($output_titlecased, ucfirst($word));
            }
            return implode(" ", $output_titlecased);
        }
    }
?>
