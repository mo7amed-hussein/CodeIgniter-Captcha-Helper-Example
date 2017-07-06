
var imagediv=document.getElementById("captchaImg");

var refreshBtn=document.getElementById("refresh");

refreshBtn.addEventListener('click',refreshCapcha,true);


function refreshCapcha(e)
{
   
    ajaxRequest();
    e.preventDefault();
    
}

function ajaxRequest(id)
{
    var ajax2=new XMLHttpRequest();
    ajax2.onreadystatechange=function (){
        if(ajax2.readyState==4)
        {
            imagediv.innerHTML=ajax2.responseText;
           // sub.innerHTML=ajax2.responseText;
            //console.log("done");
        }
    };
    var str="http://localhost/captcha/index.php/CaptchaController/refreshCaptcha";
    ajax2.open("POST",str,true);
    ajax2.send(null);
}