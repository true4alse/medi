$(function(){

    // 척추·관절 클리닉
    $(".machine_tab>li").click(function(){
        $(".machine_tab>li").removeClass("on")
        $(this).addClass("on")
        let idx = $(this).index()

        $(".machine_wrap>li").removeClass("on")
        $(".machine_wrap>li").eq(idx).addClass("on")
    })

    // doctor
    $(".doc_dt").click(function(){
        $(this).toggleClass("active")
    })

})