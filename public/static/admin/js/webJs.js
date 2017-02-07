/**
 * Created by Administrator on 2016-04-29.
 */

//初始化页面
$(document).ready(function(){
    //调用菜单功能
    navList();
    tabTrLight('#fafafa');
    //=============菜单收缩功能函数============
    function navList()
    {
        //找到菜单中的最外层ul列表
       var  $obj = $("#left-menu ul");
        //找到最外层ul列表内所有的h4标签，并添加click点击事件
        $obj.find("h4").click(function () {
           var $div = $(this).siblings(".list-item");
            if(!$(this).hasClass("select"))
            {
                $(this).parent().parent().find('h4').removeClass('select').siblings('.list-item').slideUp(600);
                $(this).addClass("select");
                $div.slideDown(600);
            }
            else
            {
                $div.slideUp(600);
                $(this).removeClass("select");
            }
        });
    }

    //===========表格隔行高量显示函数============================
    function tabTrLight(color)
    {
        $('tr:odd').css('background-color',color);
    }






});

