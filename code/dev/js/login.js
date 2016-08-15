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
            console.info("发送手机短信");
        } else {
            alert('验证码不正确~~~ 请重试');
            //插入新的验证码
            $("#verify").text(newVerify);
        }
    });
    function createVerify() {
        var newV = Math.floor(Math.random() * 999999);
        return newV;
    }

    //注册时的手机号、密码校验
    $("#submitReg").on("click", function () {
        var phone = $(".phoneReg").val();
        var password = $(".passReg").val();
        if(isMobile(phone)) {
            if(isPassword(password)) {

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