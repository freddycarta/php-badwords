<?php

    $p = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur malesuada odio a diam pulvinar rutrum. Nunc ac viverra est. Pellentesque tincidunt rhoncus gravida. Donec ac ligula egestas, rhoncus enim quis, posuere nibh. commodi pellentesque arcu vel molestie ultrices. Ut faucibus metus non ante condimentum imperdiet id nec libero. Proin ullamcorper euismod sem. Nullam eget eros nulla. Suspendisse nec convallis sem. Etiam purus tortor, sodales eget est vitae, molestie tincidunt nulla. Maecenas sagittis purus vel semper consequat. Vivamus sit amet turpis nisl. Etiam ornare dui id risus feugiat, id commodi nibh tempus. Ut vestibulum libero non quam finibus sagittis.';
    $l = strlen ($p);

    echo $p;
    echo '<br>';
    echo $l;

    $w = $_GET['word'];
    var_dump($w);

    $newP = str_replace($w, '***', $p);

    echo '<br>';
    echo $newP;

    echo '<br>';
    echo strlen($newP);


