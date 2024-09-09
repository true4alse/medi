$(function(){
    // 스크롤 이벤트 리스너를 추가합니다.
    $(window).scroll(function() {
        // 현재 스크롤 값 가져오기
        var scrollValue = $(this).scrollTop();

        // 스크롤 값이 1 이상이면 동작하는 부분
        if (scrollValue > 1) {
            // 여기에 실행하고자 하는 코드를 추가합니다.
            $("header").addClass("scroll");
        } else {
            // 스크롤 값이 1 이하이면 클래스를 제거합니다.
            $("header").removeClass("scroll");
        }
    });
    
    $('header').mouseenter(function(){
        $('header').addClass('scroll');
    });
    $('header').mouseleave(function(){
        $('header').removeClass('scroll');
    });

    $('.header_menu').mouseenter(function(){
        $('.gnbinfo').addClass('active');
    });
    $('.header_menu').mouseleave(function(){
        $('.gnbinfo').removeClass('active');
    });
    $('.header_menu .gnb>li').hover(
        function() {
            // 마우스를 올렸을 때
            $(this).addClass('hover').removeClass('not-hover');
            $(this).siblings().addClass('not-hover');
        },
        function() {
            // 마우스를 내렸을 때
            $(this).removeClass('hover');
            $(this).siblings().removeClass('not-hover');
        }
    );
    // 모바일 메뉴 열기
    $(".open_menu").click(function(event){
        event.stopPropagation();
        $(".hidden_bg").addClass("on");
    });

    // 모바일 메뉴 닫기
    $(".close_menu").click(function(event){
        event.stopPropagation();
        $(".hidden_bg").removeClass("on");
    });

    // 모바일 메뉴 토글
    $(".hidden_gnb>li").click(function(event) {
        event.stopPropagation();
        // 클릭된 메뉴의 하위 메뉴 토글
        $(this).find('.top_0').slideToggle();

        // 다른 메뉴의 하위 메뉴 닫기
        $(".hidden_gnb>li").not(this).find('.top_0').slideUp();
        
        // 현재 메뉴 활성화 표시
        $(".hidden_gnb>li>a").removeClass("on");
        $(this).children('a').addClass("on");
    });

    // quick
    $('.top_btn').click( function() {
        var htmloffset = $('html').offset();
        $('html, body').animate( { scrollTop : htmloffset.top }, 400 );
    });
    $('.q_click').click( function(){
        $('.q_toggle').toggleClass('hidden');
    })
});