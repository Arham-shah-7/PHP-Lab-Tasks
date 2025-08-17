<?php
function add($a, $b) {
    return ($a + $b);
}

$n1 = "";
$n2 = "";
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $result = add($n1, $n2);
}
?>

<html>
<body>
<form method="POST">
    <table border="1">
        <tr>
            <td>Number 1:</td>
            <td><input type="number" name="n1" value="<?php echo $n1; ?>"></td>
        </tr>
        <tr>
            <td>Number 2:</td>
            <td><input type="number" name="n2" value="<?php echo $n2; ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Submit"></td>
        </tr>
        <tr>
            <td>Result:</td>
            <td><?php echo $result; ?></td>
        </tr>
    </table>
</form>
</body>
</html>
