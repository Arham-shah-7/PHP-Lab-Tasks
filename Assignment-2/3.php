<html>
    <head>
        <title>Form</title>
    </head>
    <body>
<?php
    $mark = "";  
    $grade = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mark=$_POST["mark"];
        if($mark<50)
        {
            $grade="Fail";
        }
        elseif($mark>=50 && $mark<74)
        {
            $grade="C";
        }
        elseif($mark>=74 && $mark<89)
        {
            $grade="B";
        }
        elseif($mark>=90)
        {
            $grade="A";
        }
    }
?>
        <form method="POST">
            <table border="1">
                <tr>
                    <th>Marks:</th>
                    <td><input type="number" name="mark" value="<?php echo $mark; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Submit"></td>
                </tr>
                <tr>
                    <td>Result :</td>
                    <td><?php echo $grade; ?></td>
                </tr>
            </table>
        </form>
    </body>
</html>
