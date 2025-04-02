session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($statement->rowCount()<1)
{
    die("Error:accountbestaatniet");
}
if(!password_verify($password, $user['password']))
{
    die("Error:wachtwoordnietjuist!");
}
$_SESSION['user_id']=$user['id'];