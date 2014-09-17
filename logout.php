<?
    //unset session
    session_start();
    unset($_SESSION['tinloginemail']);
    unset($_SESSION['tinloginstatus']);
    session_destroy(); //this statment can actually unset all session variables
    //set the life time of cookie to past. 
    setCookie('tinloginemail',"", time()-3600);
    setCookie('tinlogintoken',"", time()-3600);
    //direct back to login page
    header('Location:index.php');
?>