<!DOCTYPE html>
<html>
    <body>
        <?php
            $name = "Tyrone John R. Tarona";
            $vowels = ['a', 'e', 'i', 'o', 'u'];
            $count = 0;

            echo $name;

            for($i = 0; $i < strlen($name); $i++){

                if(in_array(strtolower($name[$i]), $vowels)){

                    $count++;

                }
            }

            echo "<br>The number of vowels is: ", $count;
        ?>
    </body>
</html>