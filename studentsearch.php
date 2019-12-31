<html lang="en">    
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Fee Insertion</title>

    <style>
    body{
          background-color: whitesmoke;
    }
    input{
        width: 40%;
        height: 5%;
        border: 1px;
        border-radius:5px;
        padding: 8px 15px 8px 15px;
        margin: 10px 0px 15px 0px;
        box-shadow: 1px 1px 2px 1px grey;
    }
</style>




  </head>


  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">School Mangement System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="cms.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav> 



<br><br><br>
<h3>Search any Student's Record:</h3>
<div>
<form action="" method="POST">

<input type="number" name="rollnum" id="rollnum" placeholder="Enter roll number"> <br>
<input type="number" name="class" id="class" placeholder="Enter Class"> <br>
<input type="submit" name="submit" value="searchdata">

</form>
</div>

<?php
require_once "config.php";
if(isset($_POST['submit']))
{
    $rollnum=$_POST['rollnum'];
    $query="SELECT * FROM studentregister where rollnum='$rollnum', class='$class'";
    $query_run=mysqli_query($connection,$query);
    
    while($row= mysqli_fetch_array($query_run)){
      $searchsubject=  $row['subjects'];
      $removecharacter = str_replace(',', ' ', $searchsubject);
      $arr = explode(' ',trim($removecharacter));
      $countsub=($row['numberofsubjects']);
      
    
      ?>
      <form action="POST">
      ID:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="id" value="<?php echo $row['id'] ?>"/> <br>
      Student Name:&nbsp&nbsp&nbsp&nbsp <input type="text" name="studentname" value="<?php echo $row['studentname']?>"/> <br>
      Father Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="fathername" value="<?php echo $row['fathername']?>"/> <br>
      Class:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="class" value="<?php echo $row['class']?>"/> <br>
      Field:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="field" value="<?php  echo $row['field']?>"/> <br>
      Rollnumber:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="rollnum" value="<?php  echo $row['rollnum']?>"/> <br>
      No# of subjects:&nbsp&nbsp<input type="text" name="numberofsubjects" value="<?php echo $row['numberofsubjects']?>"/> <br>
      Subjects:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="subjects" value="<?php echo $row['subjects']?>"/> <br>
        <fieldset>
          <legend>Submission Date:</legend>
          <p>
             <label>DAY</label>
             <select id = "myList">
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
               <option value = "4">4</option>
               <option value = "5">5</option>
               <option value = "6">6</option>
               <option value = "7">7</option>
               <option value = "8">8</option><option value = "9">9</option>
               <option value = "10">10</option><option value = "11">11</option><option value = "12">12</option>
               <option value = "13">13</option><option value = "14">14</option><option value = "15">15</option>
               <option value = "16">16</option><option value = "17">17</option><option value = "18">18</option>
               <option value = "19">19</option><option value = "20">20</option><option value = "21">21</option>
               <option value = "22">22</option><option value = "23">23</option><option value = "24">24</option>
               <option value = "25">25</option><option value = "26">26</option><option value = "27">27</option>
               <option value = "28">28</option><option value = "29">29</option><option value = "30">30</option>
               <option value = "31">31</option>
             </select>
             <label>Month</label>
          <select name="month" id="month">
          <option value = "Jan">Jan</option>
          <option value = "Feb">Feb</option><option value = "March">March</option><option value = "April">April</option>
          <option value = "May">May</option><option value = "June">June</option><option value = "July">July</option>
          <option value = "August">August</option><option value = "September">Sep</option><option value = "October">Oct</option>
          <option value = "November">Nov</option><option value = "December">Dec</option>

          </select>
          <label >Year</label>
          <select name="year" id="year"> 
          <option value="2019">2019</option><option value="2020">2020</option>
          <option value="2021">2021</option><option value="2022">2022</option>
          <option value="2023">2023</option><option value="2024">2024</option>
          <option value="2025">2025</option><option value="2026">2026</option>
          <option value="2027">2027</option><option value="2028">2028</option>
          <option value="2029">2029</option><option value="2030">2030</option>
          
          </select>
          <label for="">Payment Status</label>
          <select name="payementstatus">
          <option value="paid">Paid</option><option value="Unpaid">Unpaid</option>
          </select>
          </p>
          
       </fieldset> 
       Amount: <input type="text" name="amount" value="<?php echo $row['numberofsubjects']?>"/>

      <hr>

      </form>      
      
      
      
      <?php
    }
}
 
?>


</body>
</html>