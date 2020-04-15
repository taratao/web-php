<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
</head>
<body>
<div class='container'>
    <div class='menu'><?php include 'menu.php'?></div>
    <div class='form'>
        <form  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="GET">
           <table>
               <tr>
                   <td>Tên tài khoản</td>
                   <td><input type='input' name='uname' value=''></td>
               </tr>
               <tr>
                   <td>Mật khẩu</td>
                   <td><input type='input' name='passwd' value=''></td>
               </tr>
               <tr>
                   <td></td>
                   <td><input type='submit' value='Submit'></td>
               </tr>
           </table>
        </form>
    </div>
</body>
</html>


<?php
if(isset($_GET['submit'])){
    $uname=$_GET['uname'];
    $passwd=$_GET['passwd'];

    echo $passwd . ' ' . $uname;
}
?>