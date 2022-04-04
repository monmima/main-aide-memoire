
# Sanitizing an integer

    <?php
        $var = "djkfl343143";
        var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT)); // string(6) "343143" 
    ?>