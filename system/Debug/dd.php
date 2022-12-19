<?php

function dd($array = [])
{
    echo "<pre style='background-color: #000;color:#00ff00;padding:10px;font-size:20px;'>";
    print_r($array);
    echo "</pre>";
    die();
}