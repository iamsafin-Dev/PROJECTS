<?php
 session_start();
 if(!isset($_SESSION['username']))
{
     header("Location:../View/Login.php");
 }

?><!DOCTYPE html>
<html>
 <head>
   <title>Update Profile</title>
 </head>
 <body>

   <style media="screen">
   body
   {
   font-family:Arial;
   }
   input
   {
   font-family:Arial;
   font-size:14px;
   }
   label{
   font-family:Arial;
   font-size:14px;
   color:#999999;
   }
   .tblSaveForm
   {
   border-top:3px SkyBlue solid;
   background-color: #f8f8f8;
   }

   .button
   {
     border: 0;
     border-radius: 0.25rem;
     background: #1E88E5;
     color: white;
     font-family: -system-ui, sans-serif;
     font-size: 1rem;
     line-height: 1.2;
     white-space: nowrap;
     text-decoration: none;
     padding: 0.25rem 0.5rem;
     margin: 0.25rem;
     cursor: pointer;
   }
   </style>

  <?php
	include '../Model/Header.php';
	?>

<br><br>
<?php
include_once '../Model/Connection.php';
$result = mysqli_query($con,"SELECT * FROM hmsdatabase");
?>




<?php
if (mysqli_num_rows($result) > 0)
{
?>

<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="header">  <tr>
    <th>User Id</th>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Permanent Address</th>
    <th>Present Address</th>
    <th>Phone </th>
    <th>Website </th>
    <th>Gender </th>
    <th>Religion </th>
    <th>Date of Birth </th>
    <th>User Name </th>
    <th>Action</th>

  </tr>

<?php
			$i=0;
			while($row = mysqli_fetch_array($result))
      {

			?>
      <tr>
        <td><?php echo $row['id']; ?> </td>
         <td><?php echo $row['FirstName']; ?> </td>
         <td><?php echo $row['MiddleName']; ?> </td>
         <td><?php echo $row['LastName']; ?> </td>
         <td><?php echo $row['Email']; ?> </td>
         <td><?php echo $row['PermanentAddress']; ?> </td>
         <td><?php echo $row['PresentAddress']; ?> </td>
         <td><?php echo $row['Phone']; ?> </td>
         <td><?php echo $row['Website']; ?> </td>
         <td><?php echo $row['Gender']; ?> </td>
         <td><?php echo $row['Religion']; ?> </td>
         <td><?php echo $row['DateOfBirth']; ?> </td>
         <td><?php echo $row['UserName']; ?> </td>
         <td> <a href="../Controller/UpdateProfilePage.php?id=<?php echo $row["id"]; ?>" class="button">UPDATE</a></td>

      </tr>

<?php
			$i++;
			}
?>
<td> <a href="../Controller/WelcomePage.php" class="button">Back to panel</a></td>

</table>

<?php

}
else
{
    echo "No result found";
}

?>
<?php
include '../Model/Footer.php';
?>
 </body>
</html>
