<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <form method="POST">
        <table border="1" cellpadding="5">
            <tr>
                <th>Number:</th>
                <td><input type="number" name="num" value="<?php if(isset($_POST['num'])) echo $_POST['num']; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

    <br>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["num"] !== "") {
        $num = $_POST["num"];
        echo "<table border='1' cellpadding='5'>";
        $i = 1;
        while ($i <= 10) {
            echo "<tr><td>$num × $i</td><td>".($num * $i)."</td></tr>";
            $i++;
        }
        echo "</table>";
    }
?>
</body>
</html>
