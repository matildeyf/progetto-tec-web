<?php


if ($_POST["cor"] == "aerobico") {

    echo "<table>";
    echo "<tr>";
    echo "<th>Allenamento a circuito</th>";
    echo "<th>Interval Training</th>";
    echo "<th>Spinning</th>";
    echo "<th>Suspension Workout</th>";
    echo "<th>Step</th>";
    echo "<th>Cardio-Tone</th>";
    echo "<th>G.A.G.</th>";
    echo "</tr>";
    echo "</table>";
}
else {
    echo "<table>";
    echo "<tr>";
    echo "<th>Pilates</th>";
    echo "<th>Stretching</th>";
    echo "<th>Yoga</th>";
    echo "<th>Yoga Dinamico</th>";
    echo "</tr>";
    echo "</table>";
}
?>