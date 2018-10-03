<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 11</title>
        <meta charset="UTF-8">
        <style>
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
            th, td {
                padding: 5px;
                text-align: left;
            }
        </style>

    </head>
    <body>
        <h1>Ejercicio 11</h1>

<?php   
    echo "<table>";
        echo "<tr>";
            echo "<td>";
                echo "Salary of Mr.A is";
            echo "</td>";
            echo "<td>";
                echo "1000$";
            echo "</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>";
                echo "Salary of Mr.B is";
            echo "</td>";
            echo "<td>";
                echo "1200$";
            echo "</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>";
                echo "Salary of Mr.C is";
            echo "</td>";
            echo "<td>";
                echo "1400$";
            echo "</td>";
        echo "</tr>";
        echo "</table>";
?>
    </body>
</html>