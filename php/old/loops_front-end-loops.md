# Loop to display content in the front-end

    <?php
        $arr = [1, 2, 3, 4, 5];
    ?>

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