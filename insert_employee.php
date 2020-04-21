<?php
    require_once 'connect.php';
    
    $emp_name = $_REQUEST['emp_name'];
    $emp_last_name = $_REQUEST['emp_last_name'];
    $emp_resume = $_REQUEST['emp_resume'];
    $company = $_REQUEST['comp_id'];
    
    $sql = "INSERT INTO `Employee` (`employee_id`, `emp_name`, `emp_last_name`, `emp_resume`, `comp_id`) VALUES ";
    $sql .= "(NULL, '" . $emp_name . "', ";
    $sql .= "'" . $emp_last_name . "', ";
    $sql .= "'" . $emp_resume . "', ";
    $sql .= "'" . $company . "')";
    
    //print $sql
    if(mysqli_query($link, $sql)){
        print("Stored");
        print($sql);
    }
    else{
        print("Failed");
        print($sql);
    }
    
    echo "<script>location.href='employeeManagement.php'</script>";
?>