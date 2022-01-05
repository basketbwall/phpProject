<?php
    include_once 'includes/dbh.inc.php'
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php 
            echo("Hello World" . "<br>");
            
            if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) 
            {     
                echo 'We don\'t have mysqli!!!'; 
            } 
            else 
            {     
                echo 'Phew we have it!' . "<br>"; 
            }
            $sqlSelect = "SELECT * FROM users;";
            $result = mysqli_query($conn, $sqlSelect);
            
            $resultCheck = mysqli_num_rows($result);

            //check if we have num results > 0 returned

            if ($resultCheck > 0) {
                echo 'We got results!' . '<br>';
                while ($row = mysqli_fetch_assoc($result)) { // this is an array
                    echo $row['name'] . '<br>';
                }
            }

        ?>

        
        <script src="" async defer></script>
    </body>
</html>