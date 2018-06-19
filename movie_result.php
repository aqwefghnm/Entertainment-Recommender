<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Here is your result</title>
    </head>
    <body>
        <?php
            for ($i=0; $i < 6; $i++)
                $class[$i] = 0;
            
            
            $q1_str_arr = str_split($_REQUEST['q1']);
            $q2_str_arr = str_split($_REQUEST['q2']);
            for ($i=0; $i < 6; $i++) { 
                $class[$i] = $class[$i] + $q1_str_arr[$i] + $q2_str_arr[$i];
                echo $class[$i].'<br>';
            }
            
        ?>
    </body>
</html>