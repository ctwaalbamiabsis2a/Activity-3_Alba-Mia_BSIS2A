<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 3: Grade Evaluator</title>
</head>
<body>
    <?php
    echo "<h2>Activity #3: Grade Evaluator</h2>";
    echo "<p><b>Student:</b> <mark>Alba, Mia Grace T.</mark></p>";
    echo "<p><b>CYS:</b> BSIS 2A</p>";
    echo "<hr>";

    echo "<p><b>SUBJECTS:</b></p>";
    $Alba_ctwa = 99;
    $Alba_sts = 99;
    $Alba_rlw = 99;
    $Alba_ccim = 99;
    $Alba_pathfit = 100;
    $Alba_ctmad = 99;
    $Alba_isdcn = 99;
    $Alba_isdsa = 99;

    $Alba_average = ($Alba_ctwa + $Alba_sts + $Alba_rlw + $Alba_ccim + $Alba_pathfit + $Alba_ctmad + $Alba_isdcn + $Alba_isdsa) / 8;
    $Alba_average = round($Alba_average, 2);

    echo "<p><b>CC-IM: </b>" . $Alba_ccim . "</p>";
    echo "<p><b>CT-MAD: </b>" . $Alba_ctmad . "</p>";
    echo "<p><b>CT-WA: </b>" . $Alba_ctwa . "</p>";
    echo "<p><b>IS-DCN: </b>" . $Alba_isdcn . "</p>";
    echo "<p><b>IS-DSA: </b>" . $Alba_isdsa . "</p>";
    echo "<p><b>STS: </b>" . $Alba_sts . "</p>";
    echo "<p><b>RLW: </b>" . $Alba_rlw . "</p>";
    echo "<p><b>PATHFIT: </b>" . $Alba_pathfit . "</p>";
    echo "<hr>";

    echo "<p><b>Numeric Average: " . $Alba_average . "</b></p>";

    if ($Alba_average >= 74.5) {
        $Alba_remarks = "Passed";
    } else {
        $Alba_remarks = "Failed";
    }
    echo "<p><b>Remarks: </b>" . $Alba_remarks . "</p>";

    if ($Alba_average >= 90 && $Alba_average <= 100) {
        $Alba_letter = "A";
    } elseif ($Alba_average >= 80 && $Alba_average <= 89) {
        $Alba_letter = "B";
    } elseif ($Alba_average >= 70 && $Alba_average <= 79) {
        $Alba_letter = "C";
    } elseif ($Alba_average >= 60 && $Alba_average <= 69) {
        $Alba_letter = "D";
    } else {
        $Alba_letter = "F";
    }
    echo "<p><b>Letter Grade: </b>" . $Alba_letter . "</p>";
    ?>
</body>
</html>