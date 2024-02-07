<?

// what to do with the data

if (isset($_POST['submit'])) {

    // Retrieve data from the form and store it in variables
    
    $fname = $_POST['fname'];     // First name
    $lname = $_POST['lname'];     // Last name
    $city = $_POST['city'];       // City
    $groupid = $_POST['groupid']; // Group ID

    // connect to the database server

    include 'db.php';

    // write SQL statement to insert data into the 'studentsinfo' table
    
    $sql = "INSERT INTO studentsinfo (first_name, last_name, city, groupid)
            VALUES ('$fname', '$lname', '$city', '$groupid')";

    // Execute the SQL query using the database connection

    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        echo "Your data was recorded";
    } else {
        // If there was an error in the query, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    
    $conn->close();
}
?>















?>