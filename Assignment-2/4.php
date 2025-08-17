<html>
    <head>
        <title>Form</title>
    </head>
    <body>
<?php
    $num = "";  
    $day = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num=$_POST["num"];
        switch($num)
        {
            case 1:
                $day="Monday";
                break;
            case 2:
                $day="Tuesday";
                break;
            case 3:
                $day="Wednesday";
                break;
            case 4:
                $day="Thursday";
                break;
            case 5:
                $day="Friday";
                break;
            case 6:
                $day="Saturday";
                break;
            case 7:
                $day="Sunday";
                break;
        }
    }
?>
        <form method="POST">
            <table border="1">
                <tr>
                    <th>Number:</th>
                    <td><input type="number" name="num" value="<?php echo $num; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Submit"></td>
                </tr>
                <tr>
                    <td>Day :</td>
                    <td><?php echo $day; ?></td>
                </tr>
            </table>
        </form>
    </body>
</html>
