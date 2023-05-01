<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- import bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- make tables better -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
    <style>
        table.dataTable thead th {
            border-bottom: 1px solid black;
        }

        table.dataTable.no-footer {
            border-bottom: 1px solid black;
        }

        table.dataTable thead th {
            border-bottom: 1px solid black;
        }

        table.dataTable.no-footer {
            border-bottom: 1px solid black;
        }

        table.dataTable thead th {
            border-bottom: 1px solid black;
        }

        table.dataTable.no-footer {
            border-bottom: 1px solid black;
        }

        table.dataTable thead th {
            border-bottom: 1px solid black;
        }

        table.dataTable.no-footer {
            border-bottom: 1px solid black;
        }

        table.dataTable thead th {
            border-bottom: 1px solid black;
        }

        table.dataTable.no-footer {
            border-bottom: 1px solid black;
        }

        table.dataTable thead th {
            border-bottom: 1px solid black;
        }

        table.dataTable.no-footer {
            border-bottom: 1px solid black;
        }

        table.dataTable thead th {
            border-bottom: 1px solid black;
        }

        table.dataTable.no-footer {
            border-bottom: 1px solid black;
        }

        table.dataTable thead th {
            border-bottom: 1px solid black;
        }

        table.dataTable.no-footer {
            border-bottom: 1px solid black;
        }
    </style>
</head>

<body>


    <?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "management");
    $query = "select * from students";
    $query_run = mysqli_query($connection, $query);

    // show table of students
    echo "<table class='table table-bordered'>";
    echo "<tr>";
    echo "<th>";
    echo "Roll No";
    echo "</th>";
    echo "<th>";
    echo "Name";
    echo "</th>";
    echo "<th>";
    echo "Father's Name";
    echo "</th>";
    echo "<th>";
    echo "Class";
    echo "</th>";
    echo "<th>";
    echo "Mobile";
    echo "</th>";
    echo "<th>";
    echo "Email";
    echo "</th>";
    echo "<th>";
    echo "Remark";
    echo "</th>";
    echo "<th>";
    echo "Edit";
    echo "</th>";
    echo "<th>";
    echo "Delete";
    echo "</th>";
    echo "</tr>";

    // iterate over each row in query result
    while ($row = mysqli_fetch_assoc($query_run)) {
        echo "<tr>";
        echo "<td>";
        echo $row['roll_no'];
        echo "</td>";
        echo "<td>";
        echo $row['name'];
        echo "</td>";
        echo "<td>";
        echo $row['father_name'];
        echo "</td>";
        echo "<td>";
        echo $row['class'];
        echo "</td>";
        echo "<td>";
        echo $row['mobile'];
        echo "</td>";
        echo "<td>";
        echo $row['email'];
        echo "</td>";
        
        echo "<td>";
        echo $row['remark'];
        echo "</td>";
        echo "<td>"; ?> <a href="mandvi_edit_student.php?rn=<?php echo $row['roll_no']; ?>">Edit</a>
        <?php echo "</td>";
        echo "<td>"; ?> <a href="mandvi_delete_student.php?rn=<?php echo $row['roll_no']; ?>">Delete</a>
        <?php echo "</td>";
        echo "</tr>";
    }

    ?>
</body>

</html>