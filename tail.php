<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

   

</div>

<div id="quick-placeholder">
            <aside class="quick">
            <div class="content_inner">
                <div class="quick_button">빠른 상담 신청</div>
                <form name="fwrite" id="fwrite" action="" onsubmit="" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="txt_wrap">
                        <div class="q_logo">
                            <img src="/img/h_logo.png" alt="메디탑 필라테스 로고">
                        </div>
                        <div class="b_privacy">
                            <input type="checkbox" id="c1" class="agreeChk labelchk" required>
                            <label for="c1" class="infoAgree">
                                <!-- 개인정보취급방침 -->개인정보취급방침
                                <a href="/site1.php" >[더보기]</a>
                            </label>
                        </div>
                    </div>
                    <div class="form_wrap">
                        
                        <label for="cate1" class="hide_label">지점선택</label>
                        <select  name="wr_content" id="reser_contents"  class="f_cate">
                            <option value="내용입력안함" hidden="">지점 선택</option>
                            <option value="대화점">대화점</option>
                            <option value="흑석점">흑석점</option>
                            <option value="평택역">고덕(평택)점</option>
                        </select>
                        <label for="name" class="hide_label">이름</label>
                        <input type="text" id="user_named" name="wr_name" value="" placeholder="이름" class="f_name" maxlength="10">

                        <label for="hphoneall" class="hide_label">연락처</label>
                        <input type="text" id="user_hp" name="wr_subject" placeholder="연락처 (- 없이 입력)" class="f_tel" maxlength="11">

                        <label for="hphoneall" class="hide_label">상담항목</label>
                        <input type="text" id="user_hp" name="wr_subject" placeholder="상담항목" class="f_tel" maxlength="11">

                        <input type="submit" value="문의하기" class="f_submit apply subHead" accesskey="s">
                    </div>
                </form>
            </div>
        </aside>
    </div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<footer>

<div class="footer_bot">
    <div class="footer_inner bot">
        <div>
            <ul class="f_top">
                <li><a href="/site1.php">개인정보처리방침</a></li>
                <li>&middot;</li>
                <li><a href="/site2.php">이용약관</a></li>
                <!-- <li>&middot;</li>
                <li><a href="./site3.php">비급여 진료비 안내</a></li> -->
            </ul>
            <ul class="f_bot">
                <li>메디탑 필라테스 대화본점</li>
                <!-- <li><span>대표</span> 현낙민</li>
                <li><span>사업자번호</span> 000000000</li> -->
                <li><span>주소</span> 경기 고양시 일산서구 중앙로 1564 그린월드 204호 대화본점</li>
                <!-- <li><span>전화</span> 0507-1441-9297</li> -->
                <!-- <li><span>FAX</span> 031-8039-7561</li> -->
                <!-- <li><span>메일</span> 0000000000000000</li> -->
            </ul>
            <P>Copyright 2024 Meditop Pilates & PT. All Rights Reserved.</P>
        </div>
        <div class="f_logo">
            <img src="/img/f_logo.png" alt="메디탑 필라테스 로고">
        </div>
    </div>
</div>
    <!-- <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script> -->
</footer>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
        // 모바일에서 hover를 터치 효과로 바꾸기
        document.addEventListener("touchstart", function() {}, true);
        // aos 초기화
           
        AOS.init({ 
            duration: 1000
        });

        $(function(){

               // 예시: 메뉴 토글 등의 기능 초기화
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
                    //$('header').addClass('scroll');
                });
                $('header').mouseleave(function(){
                    //$('header').removeClass('scroll');
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
           

        
       
                
                $('.quick_button').click( function(){
                    $('#quick-placeholder').toggleClass('updown');
                })
           
            
        // 비주얼 배너 슬라이더
        $('.main-slider').slick({
            fade: true,
            speed: 1000,
            lazyLoad: 'progressive',
            touchRatio: 1,
            autoplay: true,
            autoplaySpeed: 3000, // 변경된 부분
            focusOnSelect: true,
            pauseOnHover: false,
            vertical: false,
            draggable: true,
            dots: true, // 추가된 부분
            infinite: true,
            touchThreshold: 100,
            appendArrows: $('.arrow-con > .arrows'),
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        arrows: false,
                    },
                }
            ]
        });

		
        $('.main-slider').on('touchcancel touchmove', function(){
            $('.main-slider').slick('slickPlay');
        });

        // 둘러보기
        $('.gallery-single').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.gallery-nav',
            autoplay: true,
            autoplaySpeed: 1000,
            draggable: true,
        });

        $('.gallery-nav').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.gallery-single',
            dots: false,
            arrows: false,
            centerMode: false,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                    }

                }
            ],
            
        });

        })
             
        
        
    </script>

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");