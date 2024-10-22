<?php
$servername = "localhost";
$username = "ssaha5";
$password = "ssaha5";
$dbname = "ssaha5";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emp_name = $_POST['emp_name'];
    $job_title = $_POST['job_title'];
    $hire_date = $_POST['hire_date'];
    $salary = $_POST['salary'];
    $dept_id = $_POST['dept_id'];

    // Insert data into Employee table
    $sql = "INSERT INTO Employee (emp_name, job_title, hire_date, salary, dept_id)
            VALUES ('$emp_name', '$job_title', '$hire_date', '$salary', '$dept_id')";

    if ($conn->query($sql) === TRUE) {
        echo "New employee added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Retrieve and display employee and department info
$sql = "SELECT emp_name, job_title, hire_date, salary, name 
        FROM Employee 
        JOIN Department ON Employee.dept_id = Department.dept_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["emp_name"]. " - Job Title: " . $row["job_title"]. 
        " - Hire Date: " . $row["hire_date"]. " - Salary: " . $row["salary"].
        " - Department: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
