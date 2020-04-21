<?php
    session_start();
?>
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
        <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Style the header */
.header {
  padding: 10px;
  text-align: left;
  background: #737CA1;
  color: white;
}
/* Increase the font size of the h1 element */
.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align:center;
  padding: 15px 20px;
  text-decoration: none;
}

.navbar b {
  float: left;
  display: block;
  color: white;
  background: black;
  text-align: center;
  padding: 15px 25px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Change color on hover */
.navbar b:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
/* .row {  
 /*  display: flex;
 /*  flex-wrap: wrap;
}
/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
/*.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}
/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}


</style>
        <title>Association Maintenance</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">ROCS.sa JobSearch</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/applicantWelcome.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/profileManagement.php">My Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/jobSearch.php">Job Search</a>
            </li>
            </ul>
        </div>
        <div>
            <span class="navbar-text" style="padding:5px">
                <?php echo $_SESSION["ID_Number"]; ?>
            </span>
        </div>
        <div align="right">
            <form class="form-inline" action="/index.html">
                <button class="btn btn-sm btn-outline-secondary" type="submit">Log Out</button>
            </form>
        </div>
        </nav>
        
        <div style="padding-left:10px">
            <h1>Welcome!</h1>
            <h3>to ROCS.sa JobSearch's Applicant Home Page</h3>
        </div>    
        <p>A website created by Benjamin Alterman, Tyler Gallegos, Pravina Pidikiti, Emilia Garcia-Saravia, Chase Laprime.</p>
</div>


<div class="row">
  <div class="side">
    <a href="/homepage/homepage.html">Explore Jobs</a>
    <h5>Jobs Recommended for you:</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Based on your interests and profile</p>
    <a href ="/homepage/homepage.html">Jobs You Favorited</a>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div>
     <li class="active"><a href="#">See more jobs</a></li>
  </div>
<div class="row">
  <div class="side">
    <h2>Explore Companies</h2>
    <h5>Companies Recommended for you:</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Based on your interests and profile</p>
    <li><a href="#">See more companies</a></li>
  </div>

  <div class="row">
  <div class="side">
    <h2>Explore Careers</h2>
    <h5>Careers Recommended for you:</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Based on your interests and profile</p>
    <li><a href="#">See more careers</a></li>
  </div>


  
</div>

    </body>
</html>