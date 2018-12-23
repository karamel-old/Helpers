<?php


function camel_case($string)
{
    $delimiters = [' ', '-', ':'];
    $string = str_replace($delimiters, $delimiters[0], $string);

    $explode = explode(' ', $string);
    $str = [];
    foreach ($explode as $item) {
        $str[] = ucfirst($item);
    }
    unset($str[0]);
    $res = implode($str);
    return $explode[0] . $res;
}

function class_basename()
{

}

function e($str)
{

    return htmlspecialchars($str);
}

function ends_with($string, $word)
{
    return strpos($string, $word) == (mb_strlen($string) - mb_strlen($word));
}

function kebab_case()
{

}

function preg_replace_array()
{

}

function snake_case()
{

}

function starts_with($string, $word)
{
    $explode = explode(' ', $string);
    if ($explode[0] === $word)
        return true;
    else
        return false;

}

//echo starts_with('hi amir , ' , 'dscds');
function str_after($string, $word)
{
    $explode_string = explode(' ', $string);
    $explode_word = str_replace(' ', null, $word);
    foreach ($explode_string as $item) {

    }

    // str_after('amir arsalan kalantar ahmadi banico' , 'kalantar ahmadi' );
//    if (count($explode_word) > 1)

}

function str_before()
{

}

function str_contains()
{

}

function str_finish()
{

}

function str_is()
{

}

function str_limit($str)
{

}

function str_plural()
{

}

function str_random()
{

}

function str_replace_array()
{

}

function str_replace_first()
{

}

function str_replace_last()
{

}

function str_singular()
{

}

function str_slug()
{

}

function str_start()
{

}

function studly_case()
{

}

function title_case()
{

}

function uuid()
{

}