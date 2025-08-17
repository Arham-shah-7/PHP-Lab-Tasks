<html>
    <head>
        <title>Form</title>
    </head>
    <body>
<?php
    $age = "";  
    $res = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = $_POST["age"];
        if ($age >= 18) {
            $res = "Yes";
        } else {
            $res = "No";
        }
    }
?>
        <form method="POST">
            <table border="1">
                <tr>
                    <th>Age:</th>
                    <td><input type="number" name="age" value="<?php echo $age; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Submit"></td>
                </tr>
                <tr>
                    <td>Eligible :</td>
                    <td><?php echo $res; ?></td>
                </tr>
            </table>
        </form>
    </body>
</html>
