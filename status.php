<?  
    //if sessions are not set, create ones
    if(!isSet($_SESSION['tinloginemail']) || !isSet($_SESSION['tinlogintoken'])){
        //if cookie set successfully, then assign cookie value to session
        if(isSet($_COOKIE['tinloginemail']) && isSet($_COOKIE['tinlogintoken'])){
            session_start();
            $_SESSION['tinloginemail'] = $_COOKIE['tinloginemail'];
            $_SESSION['tinlogintoken'] = $_COOKIE['tinlogintoken'];
        }        
    }
?>