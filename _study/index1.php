<?php 
    function greet($name, $color) {
        echo "<p>Hi, mu name is $name and my favorite color is $color.</p>";
    }

    greet('John', 'blue');
    greet('Jane', 'green');
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>
<p><?php bloginfo('siteurl'); ?></p>

<!-- 
    $name / $color are parameters
    John, blue..are arguments 

    passing the arguments to the function-greet
    the function greet has the parameters-name and color that received the arguments.
 -->

