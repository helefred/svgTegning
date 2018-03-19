<?php
    $current = file_get_contents("svg.svg");

    if (isset($_REQUEST['t'])){ 
        $t = $_REQUEST['t'];
        $current=$t."<br>".$current;
        file_put_contents("svg.svg", $current);
    }

?>

<!DOCTYPE html>
<html> 

<head>
    <meta charset = "utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
</head> 
<body>
    Galleri: <a style="float:right" href="index.html"><-Tilbage</a><br>
    <?php echo $current; ?>
</body>
</html>