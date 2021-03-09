<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM student WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $name = $row["name"];
                $address = $row["address"];
                $fees = $row["fees"];
                $course = $row["course"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../d3.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <style>
    table tr td:last-child a{
      margin-right: 15px;
    }
  </style>
  <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
  </script>
</head>
<body>
    <header role="banner">
  <h1>Optimum Tech</h1>
  <ul class="utilities">
    <li class="users"><a href="#">Admin</a></li>
    <li class="logout warn"><a href="">Log Out</a></li>
  </ul>
</header>

<nav role="navigation">
  <ul class="main">
    <li><a href="../index.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
    <li><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Manage Student</a></li>
    <li><a href="../employee/index.php"><i class="fa fa-briefcase" aria-hidden="true"></i> Manage Employees</a></li>
    <li><a href="index.php"><i class="fa fa-suitcase" aria-hidden="true"></i> Manage Interns</a></li>
    <li><a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i> Manage Expenses</a></li>
    <li><button class="dropdown-btn"><i class="fa fa-file" aria-hidden="true"></i> Report
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <a href="../report/student/index.php">Student</a>
        <a href="../report/employee/index.php">Employee</a>
        <a href="../report/intern/index.php">Intern</a>
        <a href="#">Expense</a>
      </div>
    </li>
      <!-- <li><button class="dropdown-btn"><i class="fa fa-user" aria-hidden="true"></i> Accounts
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <a href="account/staff/index.php">Staff</a>
        <a href="#">Others</a>
      </div>
    </li> -->
  </ul>
</nav>

<main role="main">
  <section class="panel important">
    <h2>Welcome to Your Dashboard </h2>1
    <ul>
      <li>This is the Admin Panel</li>
      <li>Hi! This is admin</li>
      <li>Welcome to Optimum Tech</li>
    </ul>
  </section>

  <section class="panel">
    <div class="page-header">
                        <h1>View Record</h1>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <p class="form-control-static"><?php echo $row["name"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <p class="form-control-static"><?php echo $row["address"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Fees</label>
                        <p class="form-control-static"><?php echo $row["fees"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Course</label>
                        <p class="form-control-static"><?php echo $row["course"]; ?></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
    </section>
</main>
<footer role="contentinfo">Admin Panel by Hassan Tahawar</footer>


<script>
  //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;

  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }
  </script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>