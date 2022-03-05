<?php

    $loggedIn = true;
    $arr = [1, 2, 3, 4, 5];

    # Standard if/else statement

    // if ($loggedIn) {
    //     echo "You are logged in";
    // } else {
    //     echo "You are not logged in";
    // }

    # Ternary operator

    // echo $loggedIn ? "You are logged in" : "You are NOT logged in";

    # The ternary operator can also be used to set a variable

    $isRegistered = ($loggedIn == true) ? true : false;

    echo $isRegistered;

    # You can also nest these statements

?>

<!-- embedding PHP in HTML -->

<div>
    <?php if ($loggedIn) { ?>
        <h1>Welcome User</h1> 
    <?php } else { ?>
        <h1>Welcome Guest</h1>
    <?php } ?>
</div>

<!-- better-looking embedding in HTML -->

<div>
    <?php if ($loggedIn) : ?>
        <h1>Welcome User</h1> 
    <?php else: ?>
        <h1>Welcome Guest</h1> 
    <?php endif; ?>
</div>

<div>
    <?php foreach($arr as $val): ?>
        <?php echo $val; ?>
    <?php endforeach; ?>
</div>

<div>
    <?php for($i = 0; $i < 10; $i++): ?>
        <li><?php echo $i; ?></li>
    <?php endfor; ?>
</div>