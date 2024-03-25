<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>File a FIR Now</title>
    <style>
            body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: black; 
        }

        header {
            background-color: #333;
            color: red;
            text-align: center;
            padding: 1rem;
            transform: rotate(180deg);
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .box {
            width: 450px;
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            background-size: contain;
            color: #333;
        }

        #personalInfoHeading {
            color: #007BFF; 
        }
        #IncidentDetailsHeading{
            color: #007BFF;
        }
        #WitnessInformation{
            color: #007BFF;
        }

        .subheading {
            color: #28A745; 
            margin-top: 0;
        }
        input, textarea {
            width: calc(100% - 20px); 
            padding: 10px;
            margin-bottom: 10px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<header>
        <button onclick="showRecordedFIR()" style="transform: rotate(180deg);">Show recorded FIR's</button>
    </header>
    <script>
    function showRecordedFIR() {
        window.location.href = "fir_show.php";
    }

    function nextSection() {
        
    }
</script>
<header>
    <h1 style="transform: rotate(180deg);">FILE A FIR NOW</h1>
</header>
<div class="body">
    <form action="fir_see.php" method="post"> 
<div class="container">
    <div class="box" style="background-image: url('detailback.jpg');">
        <h2 id="personalInfoHeading">Personal Information:</h2>
        <h3 class="subheading">Full Name:</h3>
            <label for="fullname"></label>
            <input type="text" id="fullname" name="fullname" required>
            <h3 class="subheading">Contact Number:</h3>
            <label for="contactnumber"></label>
            <input type="text" id="contactnumber" name="contactnumber" required>
        <h3 class="subheading">Present Address:</h3>
            <label for="presentaddress"></label>
            <textarea type="text" id="presentaddress" name="presentaddress" required></textarea>
            <h3 class="subheading">Email Address:</h3>
            <label for="EmailAddress"></label>
            <input type="text" id="EmailAddress" name="EmailAddress" required>
    </div>
        <div class="box" style="background-image: url(detailwall-2.webp);">
            <h2 id="IncidentDetailsHeading">Incident Details:</h2>
            <h3 class="subheading">Date and Time of the Incident:</h3>
            <label for="DateIncident"></label>
            <input type="datetime-local" id="DateIncident" name="DateIncident" required>
            <h3 class="subheading">Location (address, city, and any additional location details):</h3>
            <label for="Location"></label>
            <input type="Location" id="Location" name="Location" required>
        <h3 class="subheading">Type of Incident:</h3>
        <select id="incidentType" name="incidentType">
            <option value="choose">Choose</option>
            <option value="theft">Theft</option>
            <option value="assault">Assault</option>
            <option value="fraud">Fraud</option>
            <option value="others">Others</option>
        </select>
        <div id="othersFields" style="display: none;">
            <h3 class="subheading">Specific Other Incident:</h3>
            <label for="othersDescription"></label>
            <input type="text" id="othersDescription" name="othersDescription"></div>
            <h3 class="subheading">Detailed Description of the Incident:</h3>
            <label for="DetailedDescription"></label>
            <input type="text" id="DetailedDescription" name="DetailedDescription" required>
            <h3 class="subheading">Names and Descriptions of Individuals Involved (if known):</h3>
            <label for="DescriptionsofIndividuals"></label>
            <input type="text" id="DescriptionsofIndividuals" name="DescriptionsofIndividuals" required>
        </div>
    <div class="box" style="background-image: url(detailwall-3.jpg);">
        <h2 id="WitnessInformation">Witness Information::</h2>
        <h3 class="subheading">Names of Any Witnesses:</h3>
        <label for="Witnesses"></label>
        <input type="text" id="Witnesses" name="Witnesses" required>
        <h3 class="subheading">Contact Information of Any Witnesses:<h3>
            <label for="ContactInformation"></label>
            <input type="text" id="ContactInformation" name="ContactInformation" required>
            <h3 class="subheading">Statements from Witnesses (if available):<h3>
                    <label for="Statements"></label>
                    <input type="text" id="Statements" name="Statements" required>
        </div>
        <div class="box" style="background-image: url('detailwall-4.webp');">
            <h2 id="EvidenceUpload">DETAILED FORM</h2>
            <h3 class="subheading">Date and Time of Registration:</h3>
                <label for="datetime"></label>
            <input type="datetime-local" id="datetime" name="datetime">
            <h3 class="subheading">Sections of the Law:</h3>
                <label for="section"></label>
                <input type="text" id="section" name="section">
        </div>
            <div class="box" style="background-image: url(fir3.jpg);">
                <h2 id="IncidentDetailsHeading">Additional Details:</h2>
                <h3 class="subheading">Any Other Relevant Details That Can Help in the Investigation:</h3>
                <label for="OtherRelevant"></label>
                <input type="text" id="OtherRelevant" name="OtherRelevant" required>
                </div>
    <button onclick="nextSection()">SUBMIT</button>
</div>
</form>
</body>
</html>