<!DOCTYPE html>
<html>
    <body>
        <form method = "POST">
            <input name="num" type="number">
            <button type="submit">Submit</button>
        </form>
        <?php

            $num = -1;

            if(!empty($_POST['num'])){

                $num = intval($_POST['num']);

            }

            $array = [];

            echo "<br>";

            function geometric($num){

                for($i = 0; $i < $num; $i++){

                    $array[$i] = pow(2, $i);
                    echo $array[$i], " ";

                }

            }

            geometric($num);

        ?>
    </body>
</html>