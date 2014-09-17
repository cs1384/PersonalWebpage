$(document).ready(function(){   

    $("#submit").click(function() { 
        if($('#newpsw').val()!=$('#renewpsw').val()){
            alert("re-enter password not matched!");
        }else{
            $.ajax({
                //the destination, a program file 
                url:"changePassword.php",
                //method of transmitting data
                type:"POST",
            	//specify the return type
                dataType:"json",
                //the parameters
            	data:{email: $('#email').val(), oldpsw: $('#oldpsw').val(), newpsw: $('#newpsw').val()},
            	//the function on success
                success:function(result){
                    switch(result.re){
                    case 1:    
                        alert("password changed, please login agaain.");
                        window.location.replace('logout.php');
                        break;
                    case 2:
                        alert("email doesn't exist.");
                        alert(result.query);
                        break;
                    case 3:
                        alert("database error.");
                        break;
                    case 4:
                        alert("old password wrong.");
                        break;
                    default:
                        break;
                    }
        		},
                error:function(){
                    alert("ajax failed.");
                }
        	});
        }
        
    });
     
});