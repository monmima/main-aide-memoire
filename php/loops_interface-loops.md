# Loop to display content in the interface

<?php
    echo "test";

    $people = ["Brad", "Jose", "William"];
?>

<?php if(true): ?>
    
    <div>
        <strong>Show me conditionally</strong>
    </div>

    <?php foreach($people as $key => $value): ?>
        <li class="list-group-item">
            <strong><?php echo $key; ?></strong>
            <?php echo $value; ?>
        </li>
    <?php endforeach; ?>

<?php endif; ?>
