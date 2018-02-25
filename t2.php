<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head><title>SF 1 Testing Connection</title>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<style type="text/css">
.pageTitle {
	font-size: 129%;
	color: #009999;
	letter-spacing: 2px;
	text-align: center;
	vertical-align: middle;
}
</style>
</head>
<body>


<?php
/*  $tbl_name = 'salesforce_users_1';  $sort_field = "";   $host="Localhost";   $user="root";  $password="yulkhan";  $dbname="mysql"; */
/* DSN=Salesforce;UID=JOHN@MYCOMPANY.COM;PWD=XYZZY  DSN=Salesforce;UID=JOHN@MYCOMPANY.COM;PWD=XYZZY   Accounts */
/*       password Yulkhan5f5ozC53hxJTSxVHCakcz5z0w   user: marina_shamailova@ibi.com  */
// $conn=odbc_connect($mdb, $uid,$pwd);  
// $sql="SELECT T1.NAME, T1.SYSTEMMODSTAMP FROM UserLicense;
//  $sql = "SELECT Id, Name FROM Account WHERE Name = 'acc4'";
//  $rs=odbc_exec($conn,$sql); 
 ?>
<p>
<?php date_default_timezone_set('EST');
 // echo "<br>Today's date: ";    echo date('l jS \of F Y h:i:s A'); 
 ?> 
 </p>
  <?php 
 
  //DSN=Salesforce;UID=JOHN@MYCOMPANY.COM;PWD=XYZZY    
 $mdb="DSN=Salesforce;UID=marina_shamailova@ibi.com;PWD=Yulkhan5f5ozC53hxJTSxVHCakcz5z0w";
 //  $mdb="DSN=Salesforce64";  
 // $uid="UID=marina_shamailova@ibi.com";   $pwd="PWD=Yulkhan5f5ozC53hxJTSxVHCakcz5z0w"; 
  
/*   $conn=odbc_connect($mdb);  
    if (!$conn)
  {exit("Connection Failed for: " . $mdb );}   */
   
   $conn=odbc_connect("Salesforce", "marina_shamailova@ibi.com", "Yulkhan5f5ozC53hxJTSxVHCakcz5z0w")
  or 
  	die( "<br><br><b>connection Error:</b> " . odbc_errno() . " // " . odbc_error() . "<br><br>" ); 

  	
  	$sql="SELECT Id, Name FROM Accounts WHERE Name = 'acc4'";
  $rs=odbc_exec($conn,$sql); 
  if (!$rs)
  {exit("Error in SQL");}
echo "<table><tr>";
echo "<th>Companyname</th>";
echo "<th>Contactname</th></tr>";
while (odbc_fetch_row($rs))
  {
  $accname=odbc_result($rs,"Id");
  $accname=odbc_result($rs,"Name");
  echo "<tr><td>$accname</td>";
  echo "<td>$accname</td></tr>";
  }
odbc_close($conn);
echo "</table>";
  ?>

</body>
</html>
