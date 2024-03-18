<?Php
$host_name = "localhost";
$database = "my_db"; // Change your database nae
$username = "userid";          // Your database user id
$password = "password";          // Your password

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "<br>Error!: " . $e->getMessage() . "<br/>";
echo "<br><br><font color=red>
Check MySQL login details inside <b>config.php</b> file</font>";
die();
}
?>
