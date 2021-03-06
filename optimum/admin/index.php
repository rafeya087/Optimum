<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="d3.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<header role="banner">
	  <h1>Optimum Tech</h1>
	  <ul class="utilities">
	    <li class="users"><a href="#">Admin</a></li>
	    <li class="logout warn"><a href="logout.php">Log Out</a></li>
	  </ul>
	</header>

	<nav role="navigation">
	  <ul class="main">
	    <li><a href="index.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
	    <li><a href="student/index.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Manage Student</a></li>
	    <li><a href="employee/index.php"><i class="fa fa-briefcase" aria-hidden="true"></i> Manage Employees</a></li>
	    <li><a href="intern/index.php"><i class="fa fa-suitcase" aria-hidden="true"></i> Manage Interns</a></li>
	    <li><a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i> Manage Expenses</a></li>
	    <li><a href="account/index.php"><i class="fa fa-user" aria-hidden="true"></i> Manage Accounts</a></li>
	    <li><button class="dropdown-btn"><i class="fa fa-file" aria-hidden="true"></i> Report
	    <i class="fa fa-caret-down"></i>
	  </button>
	  <div class="dropdown-container">
	    <a href="report/student/index.php"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;Student</a>
	    <a href="report/employee/index.php"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;Employee</a>
	    <a href="report/intern/index.php"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;Intern</a>
	    <a href="#"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;Expense</a>
	  </div></li>
	  <!-- <li><button class="dropdown-btn"><i class="fa fa-user" aria-hidden="true"></i> Accounts
	    <i class="fa fa-caret-down"></i>
	  </button>
	  <div class="dropdown-container">
	    <a href="account/staff/index.php">Staff</a>
	    <a href="#">Others</a>
	  </div></li> -->
	  </ul>
	</nav>

	<main role="main">
	  <section class="panel important">
	    <h2>Welcome to Your Dashboard </h2>
	    <ul>
	      <li>This is the Admin Panel</li>
	      <li>Hi! This is admin</li>
	      <li>Welcome to Optimum Tech</li>
	    </ul>
	  </section>
	  <section class="panel">
	    <h2>Posts</h2>
	    <ul>
	      <li><b>2458 </b>Published Posts</li>
	      <li><b>18</b> Drafts.</li>
	      <li>Most popular post: <b>This is a post title</b>.</li>
	    </ul>
	  </section>
  <!-- <section class="panel">
    <h2>Chart</h2>
    <ul>
      <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
      <li>Aliquam tincidunt mauris eu risus.</li>
      <li>Vestibulum auctor dapibus neque.</li>
    </ul>
  </section> -->
  <!-- <section class="panel important">
    <h2>Write a post</h2>
    <form action="#">
      <div class="twothirds">
        <label for="name">Text Input:</label>
        <input type="text" name="name" id="name" placeholder="John Smith" />

        <label for="textarea">Textarea:</label>
        <textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>

      </div>
      <div class="onethird">
        <legend>Radio Button Choice</legend>

        <label for="radio-choice-1">
          <input type="radio" name="radio-choice" id="radio-choice-1" value="choice-1" /> Choice 1
        </label>

        <label for="radio-choice-2">
          <input type="radio" name="radio-choice" id="radio-choice-2" value="choice-2" /> Choice 2
        </label>


        <label for="select-choice">Select Dropdown Choice:</label>
        <select name="select-choice" id="select-choice">
          <option value="Choice 1">Choice 1</option>
          <option value="Choice 2">Choice 2</option>
          <option value="Choice 3">Choice 3</option>
        </select>


        <div>
          <label for="checkbox">
            <input type="checkbox" name="checkbox" id="checkbox" /> Checkbox
          </label>
        </div>

        <div>
          <input type="submit" value="Submit" />
        </div>
      </div>
    </form>
    </section> -->
	 <!--  <section class="panel">
	    <h2>feedback</h2>
	    <div class="feedback">This is neutral feedback Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, praesentium. Libero perspiciatis quis aliquid iste quam dignissimos, accusamus temporibus ullam voluptatum, tempora pariatur, similique molestias blanditiis at sunt earum neque.</div>
	    <div class="feedback error">This is warning feedback
	<ul>
	  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
	  <li>Aliquam tincidunt mauris eu risus.</li>
	  <li>Vestibulum auctor dapibus neque.</li>
	</ul>  </div>
	    <div class="feedback success">This is positive feedback</div>

	  </section> -->
    <section class="panel ">
	    <h2>Table</h2>
	    <table>
	      <tr>
	        <th>Username</th>
	        <th>Posts</th>
	        <th>comments</th>
	        <th>date</th>
	      </tr>
	      <tr>
	        <td>Pete</td>
	        <td>4</td>
	        <td>7</td>
	        <td>Oct 10, 2015</td>

	      </tr>
	      <tr>
	        <td>Mary</td>
	        <td>5769</td>
	        <td>2517</td>
	        <td>Jan 1, 2014</td>
	      </tr>
	    </table>
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