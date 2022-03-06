<?php
        $people = ["Brad" => "brad@email.com", "Jose" => "jose@email.com", "William" => "william@email.com"];

        foreach($people as $person => $email) {
            echo "$person: $email";
            echo "<br>";
        }
    ?>