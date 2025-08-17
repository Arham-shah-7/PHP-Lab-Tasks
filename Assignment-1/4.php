<?php
    $a="PHP";
    $b="PYTHON";
    $c="JAVA";
    $d="C++";
    $e="C";
?>
<html>
<head></head>
<body>
    <table border="1" cellpadding="5">
        <tr>
            <th>Combination</th>
            <th>Result</th>
        </tr>
        <tr><td>A+B</td><td><?php echo $a." ".$b; ?></td></tr>
        <tr><td>A+C</td><td><?php echo $a." ".$c; ?></td></tr>
        <tr><td>A+D</td><td><?php echo $a." ".$d; ?></td></tr>
        <tr><td>A+E</td><td><?php echo $a." ".$e; ?></td></tr>

        <tr><td>B+A</td><td><?php echo $b." ".$a; ?></td></tr>
        <tr><td>B+C</td><td><?php echo $b." ".$c; ?></td></tr>
        <tr><td>B+D</td><td><?php echo $b." ".$d; ?></td></tr>
        <tr><td>B+E</td><td><?php echo $b." ".$e; ?></td></tr>

        <tr><td>C+A</td><td><?php echo $c." ".$a; ?></td></tr>
        <tr><td>C+B</td><td><?php echo $c." ".$b; ?></td></tr>
        <tr><td>C+D</td><td><?php echo $c." ".$d; ?></td></tr>
        <tr><td>C+E</td><td><?php echo $c." ".$e; ?></td></tr>

        <tr><td>D+A</td><td><?php echo $d." ".$a; ?></td></tr>
        <tr><td>D+B</td><td><?php echo $d." ".$b; ?></td></tr>
        <tr><td>D+C</td><td><?php echo $d." ".$c; ?></td></tr>
        <tr><td>D+E</td><td><?php echo $d." ".$e; ?></td></tr>

        <tr><td>E+A</td><td><?php echo $e." ".$a; ?></td></tr>
        <tr><td>E+B</td><td><?php echo $e." ".$b; ?></td></tr>
        <tr><td>E+C</td><td><?php echo $e." ".$c; ?></td></tr>
        <tr><td>E+D</td><td><?php echo $e." ".$d; ?></td></tr>
    </table>
</body>
</html>
