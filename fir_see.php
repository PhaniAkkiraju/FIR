<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Collecting form data
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $contactnumber = isset($_POST['contactnumber']) ? $_POST['contactnumber'] : '';
    $presentaddress = isset($_POST['presentaddress']) ? $_POST['presentaddress'] : '';
    $EmailAddress = isset($_POST['EmailAddress']) ? $_POST['EmailAddress'] : '';
    $DateIncident= isset($_POST['DateIncident']) ? $_POST['DateIncident'] : '';
    $Location = isset($_POST['Location']) ? $_POST['Location'] : '';
    $incidentType = isset($_POST['incidentType']) ? $_POST['incidentType'] : '';
    $othersDescription = isset($_POST['othersDescription']) ? $_POST['othersDescription'] : '';
    $DetailedDescription = isset($_POST['DetailedDescription']) ? $_POST['DetailedDescription'] : '';
    $DescriptionsofIndividuals = isset($_POST['DescriptionsofIndividuals']) ? $_POST['DescriptionsofIndividuals'] : '';
    $Witnesses = isset($_POST['Witnesses']) ? $_POST['Witnesses'] : '';
    $ContactInformation = isset($_POST['ContactInformation']) ? $_POST['ContactInformation'] : '';
    $Statements = isset($_POST['Statements']) ? $_POST['Statements'] : '';
    $datetime = isset($_POST['datetime']) ? $_POST['datetime'] : '';
    $section = isset($_POST['section']) ? $_POST['section'] : '';
    $OtherRelevant = isset($_POST['OtherRelevant']) ? $_POST['OtherRelevant'] : '';

    // Inserting data into the database
    $stmt = $conn->prepare("INSERT INTO fir_entries (fullname, contactnumber, presentaddress, EmailAddress,DateIncident, Location, incidentType, othersDescription, DetailedDescription, DescriptionsofIndividuals, Witnesses, ContactInformation, Statements, datetime, section, OtherRelevant)
               VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssssssss", $fullname, $contactnumber, $presentaddress, $EmailAddress, $DateIncident, $Location, $incidentType, $othersDescription, $DetailedDescription, $DescriptionsofIndividuals, $Witnesses, $ContactInformation, $Statements, $datetime, $section, $OtherRelevant);

    // Execute the statement
    $stmt->execute();

    // Check for errors during execution
    if ($stmt->error) {
        die('Error during execution: ' . $stmt->error);
    } else {
        echo "Registration successful. Thank you!";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>