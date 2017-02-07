/**
 * Created by xuejun on 2016/7/29.
 */
$(document).ready(function(){
    /*验证输入用户名或密码是否为空*/
    $("#submit").click(function(){
        if($("#username").val() =='')
        {
            $("#username").attr("placeholder","用户名不能为空");
            $("#username").css("border","1px solid red");
            return false;
        }
        if($("#password").val()=='')
        {
            $("#password").attr("placeholder","密码不能为空");
            $("#password").css("border","1px solid red");
            return false;
        }

        if($("#verify").val()=='')
        {
            $("#verify").attr("placeholder","验证码不能为空");
            $("#verify").css("border","1px solid red");
            return false;
        }
    });

    /*文本框获取焦点时*/
    $("#username,#password,#verify").focus(function(){
        $(this).css("border-color", "");
        $(this).css("border","");
        if($(this).get(0) == $("#username").get(0))
        {
            $("#username").attr("placeholder","请输入用户名");
        }

        if($(this).get(0) == $("#password").get(0))
        {
            $("#password").attr("placeholder","请输入密码");
        }

        if($(this).get(0) == $("#verify").get(0))
        {
            $("#verify").attr("placeholder","请输入验证码");
        }
    });

    /*文本框失去焦点时
    $("#username,#password").blur(function(){
        $(this).css("border-color", "");
    });*/
});
