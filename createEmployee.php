<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<style>
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }
            
            td, th {
              border: 1px solid #000000;
              text-align: left;
              padding: 8px;
            }
            
            tr:nth-child(even) {
              background-color: #dddddd;
            }
        </style>		
        <title>Employee Maintenance</title>
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">ROCS.sa JobSearch</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/employerWelcome.php">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/applicantSearch.php">Applicant Search</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Database Maintenance
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/associationManagement.php">Manage Associations</a>
                <a class="dropdown-item" href="/companyManagement.php">Manage Companies</a>
                <a class="dropdown-item active" href="/employeeManagement.php">Manage Employees<span class="sr-only">(current)</span></a>
                <a class="dropdown-item" href="/jobManagement.php">Manage Jobs</a>
                </div>
            </li>
            </ul>
        </div>
        <div>
            <span class="navbar-text" style="padding:5px">
                <?php echo $_SESSION['ID_Number']; ?>
            </span>
        </div>
        <div align="right">
            <form class="form-inline" action="/index.html">
                <button class="btn btn-sm btn-outline-secondary" type="submit">Log Out</button>
            </form>
        </div>
    </nav>
        
        <h1 style="margin-left:1%">Employee Management</h1>
		<div class="card text-center">
			<div class="card-header">
				<ul class="nav nav-tabs card-header-tabs">
					<li class="nav-item">
					  <a class="nav-link" href="/employeeManagement.php">Manage Company</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link active" href="/createEmployee.php">Create New Company</a>
					</li>
				</ul>
			</div>
			<div class="card-body">
				<div id="container">
                    <form action="/insert_employee.php" method="post">
                        <div class=row style="margin-left:1%">
                            <div class="col-3">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="emp_name">First Name</span>
                                    </div>
                                    <input type="text" class="form-control" id="emp_name" name="emp_name">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="emp_last_name">Last Name</span>
                                    </div>
                                    <input type="text" class="form-control" id="emp_last_name" name="emp_last_name">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="emp_resume">Resume</span>
                                    </div>
                                    <input type="text" class="form-control" id="emp_resume" name="emp_resume">
                                </div>
                            </div>
                            
                            <div class="col-3">
                                <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                        <span class="input-group-text" id="comp_id">Current Company</span>
                                    </div>
                                    <select class="form-control" id="comp_id" name="comp_id">
                                        <?php
                                        require "connect.php";
                                        $result = mysqli_query($link,"SELECT * FROM `Company`");
                                        while($row = mysqli_fetch_array($result)){
                                            echo "<option value='".$row['company_id']."'>".$row['company_name']."</option>";
                                        }
                                        ?>   
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <button type="submit" class="btn btn-primary">Create Employee</button>
                    </form>
                </div>
			</div>
        </div>
        
	</body>
</html>