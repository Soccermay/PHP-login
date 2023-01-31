<?php
function validateLengthRange($minLength, $maxLength){
    return [
        "filter"=>FILTER_CALLBACK,
        "option"=> function($input) use($minLength, $maxLength){
            if(strlen($input) > $minLength 
                        && strlen($input) <= $maxLength){
                    return $input;
                }else {
                    return false;
            }
        }
    ];
}

function validateCheckbox($minLength, $maxLength){
    return [
        "filter"=>FILTER_CALLBACK,
        "options"=> function($input) use($minLength, $maxLength){
            return $input == 'on';
        }
    ];
}