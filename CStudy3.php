<?php
$rows = isset($_GET['rows']) ? (int)$_GET['rows'] : 0;
$columns = isset($_GET['cols']) ? (int)$_GET['cols'] : 0;
?>
<!DOCTYPE html>
<html>
<head>

    <title>Case Study 3</title>

    <style>

        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }

        form {
            margin-bottom: 20px;
        }

        .form-group {
            margin: 10px 0;
        }

        label {
            margin-right: 8px;
            font-weight: bold;
        }

        input {
            padding: 5px;
            width: 120px;
            text-align: center;
        }

        button {
            display: block;
            margin: 15px auto 0 auto;
            padding: 5px 12px;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            width: 50px;
            height: 50px;
            text-align: center;
        }

        .odd {
            background: yellow;
            font-weight: bold;
        }

    </style>

</head>

<body>

    <h2>CASE STUDY 3</h2>

    <form method="get">

        <div class="form-group">

            <label>Row:</label>
            <input type="number" name="rows" value="<?php echo $rows>0 ? $rows : '' ?>">

        </div>

        <div class="form-group">

            <label>Column:</label>
            <input type="number" name="cols" value="<?php echo $columns>0 ? $columns : '' ?>">

        </div>

        <button type="submit">Generate</button>

    </form>

    <?php

    if ($rows > 0 && $columns > 0) {

        echo "<table>";
        echo "<tr><th>X</th>";

        for ($currentColumn=1; $currentColumn<=$columns; $currentColumn++) {
            echo "<th>$currentColumn</th>";
        }

        echo "</tr>";

        for ($currentRow=1; $currentRow<=$rows; $currentRow++) {

            echo "<tr>";
            echo "<th>$currentRow</th>";

            for ($currentColumn=1; $currentColumn<=$columns; $currentColumn++) {
                $val = $currentRow * $currentColumn;

                if ($val % 2 != 0) {
                    
                    echo "<td class='odd'>$val</td>";
                    
                } else {
                    
                    echo "<td>$val</td>";
                    
                }

            }

            echo "</tr>";
        }
        
        echo "</table>";
    }
    ?>
</body>
</html>
