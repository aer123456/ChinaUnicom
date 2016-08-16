/**
 * Created by huguantao on 16/8/14.
 */
$(function() {
    //登录注册切换
    $("#login").on("click", function(){
        $(".register").hide();
        $(".login").show();
        $("#register").removeClass("active");
        $("#login").addClass("active");
    });
    $("#register").on("click", function(){
        $(".login").hide();
        $(".register").show();
        $("#login").removeClass("active");
        $("#register").addClass("active");
    });


    //验证码校验
    $("#sendPhone").on("click", function() {
        var verifyCode = $("#verify").text();
        var inputVerifyCode = $("#input").val();
        var newVerify = createVerify();
        if(verifyCode == inputVerifyCode){
            //在这里写发送手机短信的代码
            var p_new = Math.floor(Math.random() * 9999);
            var phone = document.getElementById('phone').value;
            document.getElementById('code').value =  p_new;
            if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
      else
        {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      xmlhttp.onreadystatechange=function()
        {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
            if(xmlhttp.responseText=='ok'){
              document.getElementById('sendPhone').value = '请等待...';
              document.getElementById('sendsms').innerHTML = '<input  type="button" value="已发送..."/>';
              
            }
            else{
              
              
            }
          }
        }
      xmlhttp.open("POST","ajax_sendsms.php",true);
      xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      xmlhttp.send("code="+p_new+"&phone="+phone);

            console.info("发送手机短信");
        } else {
            alert('验证码不正确~~~ 请重试');
            //插入新的验证码
            $("#verify").text(newVerify);
        }
    });
    function createVerify() {
        var newV = Math.floor(Math.random() * 9999);
        return newV;
    }

    //注册时的手机号、密码校验
    $("#submitReg").on("click", function () {
        var phone = $(".phoneReg").val();
        var password = $(".passReg").val();
        if(isMobile(phone)) {
            if(isPassword(password)) {
                var phone = document.getElementById('phone').value;
                var pass = document.getElementById('pass').value;
            if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
      else
        {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      xmlhttp.onreadystatechange=function()
        {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
            if(xmlhttp.responseText=='ok'){
              document.cookie="phone="+phone;
              document.cookie="phone="+phone;
              alert("注册成功");
              location.href='pocket.php';
            }
            else{
              alert("密码错误，请重新输入");
              location.href='login.php';
              }
          }
        }
      xmlhttp.open("POST","ajax_reg.php",true);
      xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      xmlhttp.send("phone="+phone+"&pass="+pass);

            } else {
                alert("请输入6位数字的密码哦~");
            }
        } else {
            alert("请输入正确的手机号哦");
        }
    });

    //登录时的电话密码校验
    $("#submigLogin").on("click",  function() {
        var phone = $(".phoneLogin").val();
        var password = $(".passLogin").val();
        if(isMobile(phone)) {
            if(isPassword(password)) {
                var phone = document.getElementById('loginphone').value;
                var pass = document.getElementById('loginpass').value;
            if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
      else
        {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      xmlhttp.onreadystatechange=function()
        {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
            if(xmlhttp.responseText=='ok'){
              document.cookie="phone="+phone;
              alert("登录成功");
              location.href='pocket.php';
            }
            else{
              alert("密码错误，请重新输入");
              location.href='login.php';
              }
          }
        }
      xmlhttp.open("POST","ajax_login.php",true);
      xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      xmlhttp.send("phone="+phone+"&pass="+pass);
            } else {
                alert("请输入6位数字的密码哦~");
            }
        } else {
            alert("请输入正确的手机号哦~");
        }
    });

    //电话号码的正则匹配
    function isMobile(s)
    {
        var patrn =  /^1[0-9][0-9]\d{4,8}$/;
        if (!patrn.exec(s)) {return false}
        return true
    }

    function isPassword(s) {
        var patrn = /\d{6}/;
        if (!patrn.exec(s)) {return false;}
        return true
    }


});