<?
    //get variables
    $email = $_POST['email'];
    $oldpsw = $_POST['oldpsw'];
    $newpsw = $_POST['newpsw'];

    //connect to the database
    include 'connectToDB.php';
    
    $query = "SELECT password FROM admin2 WHERE email = \"".$_POST['email']."\";";
    $result = mysql_query($query);
    if(mysql_num_rows($result)==0){
        $return = array(
		    're' => 2,
            'query' => $query
        );
	    echo json_encode($return);
    }else{
        $row=mysql_fetch_array($result);
        if($row[0]==$oldpsw){
            $query = "UPDATE admin2 SET password = \"".$newpsw."\" WHERE email = \"".$email."\" LIMIT 1;";
            $result = mysql_query($query);
            if($result){
                $return = array(
    	            're' => 1,
                );
	            echo json_encode($return);
            }else{
                $return = array(
                    're' => 3,
                );
	            echo json_encode($return);
            }
        }else{
            $return = array(
                    're' => 4,
                );
            echo json_encode($return);
        }
    }
?>
