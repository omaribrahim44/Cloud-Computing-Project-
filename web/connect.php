<?php
$message = ""; // Variable to store success or error message

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'mio') or die("Connection failed: " . mysqli_connect_error());
    if (isset($_POST['Name']) && isset($_POST['Age']) && isset($_POST['Id']) && isset($_POST['CGPA']) && isset($_POST['Relationship'])) {
        $Name = $_POST['Name'];
        $Age = $_POST['Age'];
        $Id = $_POST['Id'];
        $CGPA = $_POST['CGPA'];
        $Relationship = $_POST['Relationship'];

        // Remove single quotes around variables
        $sql = "INSERT INTO `student` (`Name`, `Age`, `Id`, `CGPA`, `Relationship`) VALUES ('$Name', '$Age', '$Id', '$CGPA', '$Relationship')";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            $message = '<div style="color: #155724; background-color: #d4edda; border: 1px solid #c3e6cb; border-radius: 5px; padding: 10px;"><strong>Success!</strong> Data has been added successfully.</div>';
        } else {
            $message = '<div style="color: #721c24; background-color: #f8d7da; border: 1px solid #f5c6cb; border-radius: 5px; padding: 10px;"><strong>Error!</strong> ' . mysqli_error($conn) . '</div>';
        }
    }
}

$conn = mysqli_connect('localhost', 'root', '', 'mio') or die("Connection failed: " . mysqli_connect_error());

// Fetching data from the database
$sql = "SELECT * FROM `student`";
$query = mysqli_query($conn, $sql);

// Check if there are any records found
if (mysqli_num_rows($query) > 0) {
    $rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
} else {
    $rows = [];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Accounts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            color: #4CAF50;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #eaeaea;
        }

        .message {
            text-align: center;
            margin-bottom: 20px;
        }

        .message div {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .success {
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
        }

        .error {
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <h1>Registered Accounts</h1>
    <div class="message">
        <?php echo $message; ?>
    </div>
    <?php if (!empty($rows)) : ?>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>ID</th>
                    <th>CGPA</th>
                    <th>Relationship</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td><?= $row['Name'] ?></td>
                        <td><?= $row['Age'] ?></td>
                        <td><?= $row['Id'] ?></td>
                        <td><?= $row['CGPA'] ?></td>
                        <td><?= $row['Relationship'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>No registered accounts found.</p>
    <?php endif; ?>
</body>
</html>
