<!DOCTYPE html>
<html>
    <head>
        <titel>REGISTRATION FORM</titel>
</head>
<body>
    <form>
        <table>
            <tr>
                <td> First Name: </td>
                <td> <input type="text" name="First Name"></td>
                 </tr>
                  <tr>
                      <td> Last Name: </td>
                      <td> <input type="text" name="Last Name"></td>
                       </tr>
                       <tr>
                       <td> Age:</td> 
                      <td> <input type="Number"></td><br>

                       </tr>

                      <tr>
                      <td> Designation:</td>
                      <td>
                       <input type="radio" name="Designation">Junior programmer
                       <input type="radio" name="Designation">Senior programmer
                       <input type="radio" name="Designation">project lead

                       <br>

                       <tr>
                      <td> Preferred language:</td>
                      <td>
                       <input type="checkbox">JAVA
                       <input type="checkbox">PHP
                       <input type="checkbox">C++
                        </td>

                       <tr>
                           <td> Email: </td>
                           <td> <input type="mail" name=" "></td>
                       </tr> 
                       <tr>
                           <td> Password: </td>
                           <td><input type="password" name=" "></td>
                        </tr>
                         
                         <td>
                        <input type="submit" value="Submit">
                        <input type ="reset" value="Reset">
                         </td>



</body>
</form>
</table>
</html>
       

<?php
include "../Control/results.php";
?>