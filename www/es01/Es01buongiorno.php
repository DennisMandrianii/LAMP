<html>
<head>
    <title> BUONASERA O BUONGIORNO </title>
</head>
<body>
<?php
    $today = new DateTime("now", new DateTimeZone('Europe/Rome'));
    $ora = $today -> format('H');
    echo "\n Sono le $ora";
    if($ora >= 8 && $ora < 12)
    {
        echo " Buongiorno Paolo ";
    }
    else
    {
        if($ora >= 12 && $ora < 20)
        {
            echo "Buonasera Paolo";
        }
        else
        {
            echo "Buonanotte Paolo";
        }
    }
?>
</body>
