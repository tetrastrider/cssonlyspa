
function ajax()
{ var req = false; try { req = new XMLHttpRequest(); } catch(err1) { try { req = new ActiveXObject("Msxml2.XMLHTTP"); } catch(err2) { try { req = new ActiveXObject("Microsoft.XMLHTTP"); } catch(err3) { req = false; } } } return req; }
var ajax = ajax();
//***************************************************************************************//
function from(orden,limit){
    var azar=parseInt(Math.random()*99999999);
    var vinculo="cuerpo.php?orden="+orden+"&rand="+azar+"&limit="+limit;
    ajax.open("GET",vinculo,true);
    ajax.onreadystatechange=ajax.onreadystatechange=function(){
        if (ajax.readyState==4)
        {
            if (ajax.status==200)
            {
                var http=ajax.responseText;
                document.getElementsByTagName('section').innerHTML= http;
}}}
    ajax.send(null);

}
/*********************************************************************************************/
$(document).ready(function() {
    $("#submit_btn").click(function() { 
        //get input field values
        var user_name       = $('input[name=name]').val(); 
        var user_email      = $('input[name=email]').val();
        var user_phone      = $('input[name=phone]').val();
        var user_message    = $('textarea[name=message]').val();
        
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if(user_name==""){ 
            $('input[name=name]').css('border-color','red'); 
            proceed = false;
        }
        if(user_email==""){ 
            $('input[name=email]').css('border-color','red'); 
            proceed = false;
        }
        if(user_phone=="") {    
            $('input[name=phone]').css('border-color','red'); 
            proceed = false;
        }
        if(user_message=="") {  
            $('textarea[name=message]').css('border-color','red'); 
            proceed = false;
        }

        //everything looks good! proceed...
        if(proceed) 
        {
            //data to be sent to server
            post_data = {'userName':user_name, 'userEmail':user_email, 'userPhone':user_phone, 'userMessage':user_message};
            
            //Ajax post data to server
            $.post('contact_me.php', post_data, function(response){  

                //load json data from server and output message     
                if(response.type == 'error')
                {
                    output = '<div class="error">'+response.text+'</div>';
                }else{
                    output = '<div class="success">'+response.text+'</div>';
                    
                    //reset values in all input fields
                    $('input[name=name]').val(''); 
                    $('input[name=email]').val('');
                    $('input[name=phone]').val('');
                    $('textarea[name=message]').val('');
                }
                
                $("#result").hide().html(output).slideDown();
            }, 'json');
            
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function() { 
        $("#contact_form input, #contact_form textarea").css('border-color',''); 
        $("#result").slideUp();
    });
    $("#borrar").click(function() { 
                $('input[name=name]').val(''); 
                $('input[name=email]').val('');
                $('input[name=phone]').val('');
                $('textarea[name=message]').val('');
    });
});