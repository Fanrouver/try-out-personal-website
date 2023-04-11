<?php
  session_start();
?>

<html>
<head>
  <title>Session Example</title>
  <meta http-equiv="Content-Type"  content="text/html;  charset=iso-8859-1">
</head>
<body>
  <form method="post"  action="validate.php">
    <center> <br> <br>
      <font face="arial" size="4" color="#CF2C99">
        <b>Welcome to akbar webpage</b> <br> <br>
         <b>discover more about his life</b> <br> <br>
        <table width="180" cellspacing="1"  cellpadding="1"  border="0">
          <tr>
            <td> <font  face="arial" size="2" color="#CF2C99">Login</font> </td>
            <td> <font  face="arial" size="2" color="#5FE39D">:</font> </td>
            <td> <input  type="text" name="userlogin"  size="15"> </td>
          </tr>
          <tr>
            <td> <font  face="arial" size="2" 
color="# CF2C99">Password</font> </td>
            <td> <font  face="arial" size="2" color="#CF2C99">:</font> </td>
            <td> <input  type="password"  name="userpassword"  size="15"> </td>
          </tr>
          <tr>
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
            <td align="center"> <input  type="submit"  value="Enter">&nbsp;&nbsp;<inputtype="reset" value="Clear"> </td>
          </tr>
        </table> <br> <br>
        <font color="red">
          <?php if(!empty($_GET['error'])) {
            if($_GET['error']  == "1") {
              echo "Login and Password are empty!";
            } else if($_GET['error'] == "2"){
              echo "Invalid user!";
            } else {
              echo "Session expired!";
            }
          }
          ?>
        </font>
      </font>
    </center>
  </form>
</body>
</html>

<?php
session_destroy();
?>
