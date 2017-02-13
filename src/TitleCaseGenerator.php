<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $prepositions = array("and", "then", "than", "or", "for", "while", "with", "at", "by", "down", "from", "in", "into", "like", "near", "off", "on", "of", "onto", "over", "past", "to", "upon", "as", "but", "nor", "once", "if", "so", "that", "till", "when", "yet");
            $input_title_array = explode(" ", $input_title);
            $output_titlecased = array();
            foreach ($input_title_array as $word){
                if (in_array($word, $prepositions)){
                    array_push($output_titlecased, $word);
                } else {
                    array_push($output_titlecased, ucfirst($word));
                }
            }
            return implode(" ", $output_titlecased);
        }
    }
?>
