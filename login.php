<?
    include 'connectToDB.php';
    $query = "SELECT password FROM admin2 WHERE email = \"".$_POST['email']."\";";
    $result = mysql_query($query);
    if(mysql_num_rows($result)==0){
        header('Location:admin.php');
    }else{
        $row=mysql_fetch_array($result);
        if($row[0]==$_POST['psw']){
            $temp = md5($_SERVER['REMOTE_ADDR']);
            session_start();
            $_SESSION['tinloginemail'] = $_POST['email'];
            $_SESSION['tinlogintoken'] = $temp;
            setCookie('tinloginemail', $_POST['email'], time()+3600*24*7);
            setCookie('tinlogintoken', $temp, time()+3600*24*7);
            $query = "UPDATE admin2 SET token = \"".$temp."\" WHERE email = \"".$_POST['email']."\";";
            mysql_query($query);        
            header('Location:index.php');
        }else{
            header('Location:admin.php');
        }
        
    }
?>