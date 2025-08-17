<html>
<body>
<?php
    $s = "";
    $len = "";
    $upper = "";
    $rev = "";
    $wordCount = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $s = $_POST["s"];
        if ($s !== "") {
            $len = strlen($s);
            $upper = strtoupper($s);
            $rev = strrev($s);
            $wordCount = str_word_count($s);
        }
    }
?>
    <form method="POST">
        <table border="1" cellpadding="5">
            <tr>
                <th>String:</th>
                <td><input type="text" name="s" value="<?php echo $s; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
            <tr>
                <td>Length:</td>
                <td><?php echo $len; ?></td>
            </tr>
            <tr>
                <td>Uppercase:</td>
                <td><?php echo $upper; ?></td>
            </tr>
            <tr>
                <td>Reverse:</td>
                <td><?php echo $rev; ?></td>
            </tr>
            <tr>
                <td>Word Count:</td>
                <td><?php echo $wordCount; ?></td>
            </tr>
        </table>
    </form>
</body>
</html>
