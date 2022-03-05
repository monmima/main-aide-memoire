<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>


    <?php
        class Student {
            // usually you use "public" and "private" instead of "var"; to learn more about this, see the next tutorial
            var $name;
            var $major;
            var $gpa;

            function __construct($name, $major, $gpa) {
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }

            function hasHonors() {
                // whenever you return true or false values, PHP is not going to be able to print out "true" or "false" so you have to print these out as strings
                if ($this->gpa >= 3.5) {
                    return "true";
                } else {
                    return "false";
                }
            }
        }

        $student1 = new Student("Jim", "Business", 2.8);
        $student2 = new Student("Pam", "Art", 3.6);

        echo $student1->hasHonors() . "<br>";
        echo $student2->hasHonors() . "<br>";


    ?>
    
</body>
</html>