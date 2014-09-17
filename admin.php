<?include 'status.php'?>
<html>
    <head>
    	<title>Tin x Programmer</title> 
			<link href="css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="css/admin.css" />
			<script src="javascript/jquery-1.11.0.js"></script>
			<script src="javascript/jquery-ui-1.10.3.custom.js"></script>
            <script src="javascript/admin.js"></script>
	</head>
    <body>
        <header>
            <? include 'header.php'?>
        </header>
            <?
            if(isSet($_SESSION['tinloginemail']) && isSet($_SESSION['tinlogintoken'])){
            ?>
                <div id="manage">
                    <div id="logout">
                        <button onclick="location.href='logout.php'">Log out</button>
                    </div>
                    <div id="change">
                        Email: <input type="text" id="email" size="40"><br>
                        Old password: <input type="password" id="oldpsw" size="20"><br>
                        New password: <input type="password" id="newpsw" size="20"><br>
                        Re-enter new password <input type="password" id="renewpsw" size="20"><br>
                        <input type="button" id="submit" value="change password">
                    </div>
                </div>
            <?        
            }else{
            ?>
                    <form id="login" method="post" action="login.php">
                        Email: <input type="text" name="email" size="50">
                        Password: <input type="password" name="psw" size="20">
                        <input type="submit" value="submit">
                    </form>
            <?
            }
            ?>
    </body>
</html>