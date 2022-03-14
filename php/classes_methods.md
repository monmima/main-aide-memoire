# Classes and methods

Usually you use "public" and "private" instead of "var" in a class.

    <?php
        class Student {
            
            public $name;
            public $major;
            public $gpa;

            function __construct($name, $major, $gpa) {
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }

            function hasHonors() {
                // Whenever you return true or false values, PHP is not going to be able to print out "true" or "false" so you have to print these out as strings.
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