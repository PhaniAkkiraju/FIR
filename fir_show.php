<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fir";

// Establishing a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Fetching data from the database
$sql = "SELECT * FROM fir_entries";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View FIR Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .no-data {
            color: #777;
        }

    </style>
</head>
<body>

<h2>FIR Details</h2>

<?php
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Full Name</th><th>Contact Number</th><th>Present Address</th><th>Email Address</th><th>Date and Time of Incident</th><th>Location</th><th>Incident Type</th><th>Other Description</th><th>Detailed Description</th><th>Descriptions of Individuals</th><th>Witnesses</th><th>Contact Information of Witnesses</th><th>Statements</th><th>Date and Time of Registration</th><th>Sections of the Law</th><th>Other Relevant Details</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["fullname"] . "</td>";
        echo "<td>" . $row["contactnumber"] . "</td>";
        echo "<td>" . $row["presentaddress"] . "</td>";
        echo "<td>" . $row["EmailAddress"] . "</td>";
        echo "<td>" . $row["DateIncident"] . "</td>";
        echo "<td>" . $row["Location"] . "</td>";
        echo "<td>" . $row["incidentType"] . "</td>";
        echo "<td>" . $row["othersDescription"] . "</td>";
        echo "<td>" . $row["DetailedDescription"] . "</td>";
        echo "<td>" . $row["DescriptionsofIndividuals"] . "</td>";
        echo "<td>" . $row["Witnesses"] . "</td>";
        echo "<td>" . $row["ContactInformation"] . "</td>";
        echo "<td>" . $row["Statements"] . "</td>";
        echo "<td>" . $row["datetime"] . "</td>";
        echo "<td>" . $row["section"] . "</td>";
        echo "<td>" . $row["OtherRelevant"] . "</td>";
        echo "</tr>";
    }

} else {
    echo "No FIR details found.";
}

// Close the database connection
$conn->close();
?>

</body>
</html>