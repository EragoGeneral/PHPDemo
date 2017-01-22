<?php

function say_hello()
{
    $name = "Jack";
    echo "Hello,".$name;
    echo "<br />";
    echo "<br />";
}

function say_hello_to($somebody)
{
    echo "Hello,".$somebody;
    echo "<br />";
    echo "<br />";
}

say_hello();
say_hello_to("Steve");
say_hello_to("Harry");
say_hello_to("Ema");
?>