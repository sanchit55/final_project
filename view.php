<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<html>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    font-family: cursive;
    text-align: left;
    padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4c75af;
    color: white;
}
input[type=text]{
width: 260px;
height: 30px;
background: rgba(255, 255, 255,0.6);
border: 1px solid rgba(63, 127, 191,0.6);
border-radius: 2px;
color: #3F7FBF;
font-family: 'Exo', sans-serif;
font-size: 16px;
font-weight: 400;
padding: 4px;
margin-top: 10px;
}

input[type=submit] {
    width: 120px;
    height: 30px;
    background-color: #4c75af;
    color: white;
    padding: 0px 15px;
    margin: -15px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #729edc;
    }
.welcome{
background:#4c75af;
}
h1 {
font-family: cursive;
color: #fff;
text-align: center;
}
h3 {
font-family: cursive;
text-align: center;
}
p {
margin-right: 5px;
font-family: cursive;
color: #fff;
text-align: right;
}


</style>
  <body style="background: #d3d3d3">
  <div class="welcome">
 <h1> To do list system</h1>
 <strong> <p> Welcome, <?php $fname = $_SESSION['first_name']; echo $fname;?> <?php $lname = $_SESSION['last_name']; echo $lname;?></p></strong>
  </div>
   <h3><strong>Task To Complete</strong></h3>
    <table>
       <tr>
      <th style="text-align: center;">First Name</th>
      <th style="text-align: center;">Last Name</th>
      <th style="text-align: center;">Contact No</th>
      <th style="text-align: center;">Email Id</th>
      <th style="text-align: center;">Username</th>
      <th style="text-align: center;">Gender</th>
      <th style="text-align: center;">Birth</th>
      <th style="text-align: center;">Password</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      </tr>
        <?php foreach($result as $res):?>
      <tr>
        <td style="text-align: center;"> <?php $fname = $_SESSION['first_name']; echo $fname; </td>
  <td style="text-align: center;"> <?php $lname = $_SESSION['last_name']; echo $lname; ?> </td>
        <td style="text-align: center;"> <?php $fname = $_SESSION['first_name']; echo $fname;?>  </td>
  <td style="text-align: center;"> <?php $fname = $_SESSION['first_name']; echo $fname;?> </td>
</tr>  

<?php endforeach;?>

  </body>
</html>
<?php
include('../view/footer.php');
?>