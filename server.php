<?php

$data = ['php', 'html', 'css', 'javascript', 'python', 'laravel'];

$result = $_GET['text'];
$output = '';

foreach ($data as $datum)
{
    if ($datum == $result)
    {
        $output = "Found";
        break;
    }
    else
    {
        $output = "Not Found";
    }
}

echo $output;
