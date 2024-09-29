<?php
    include_once('./_common.php');

    define('_INDEX_', true);
    if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

    if(defined('G5_THEME_PATH')) {
        require_once(G5_THEME_PATH.'/index.php');
        return;
    }

    if (G5_IS_MOBILE) {
        include_once(G5_MOBILE_PATH.'/index.php');
        return;
    }

    include_once(G5_PATH.'/head.php');
?>        
        <main>
            <div class="sub_banner ">
                <div class="sub_bg"></div>
                <div class="sub_banner_inner">
                    <div class="sub_banner_name">
                        <p data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                            Meditop Pilates & PT.
                        </p>
                        <div class="sub_banner_tit">둘러보기</div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="tab_menu content_inner">
                <ul>
                    <li><a href="menu2_1.php">기구 소개</a></li>
                    <li class="active"><a href="menu2_2.php">둘러보기</a></li>
                </ul>
            </div>
            <div class="content_inner inner_top ">
                <h4>메디탑 필라테스 둘러보기</h4>
            </div>
            <div class="store blue m22">
                <div class="content_inner">
                    <div class="store_tit">대화점</div>
                </div>
                <div class="gallery-slider">
                    <div class="gallery-single">
                        <div><img src="img/tour/daehwa/1.jpg" alt="대화점둘러보기"></div>
                        <div><img src="img/tour/daehwa/2.jpg" alt="대화점둘러보기"></div>
                        <div><img src="img/tour/daehwa/3.png" alt="대화점둘러보기"></div>
                        <div><img src="img/tour/daehwa/4.png" alt="대화점둘러보기"></div>
                        <div><img src="img/tour/daehwa/5.jpg" alt="대화점둘러보기"></div>
                        <div><img src="img/tour/daehwa/6.jpg" alt="대화점둘러보기"></div>
                        <div><img src="img/tour/daehwa/7.jpg" alt="대화점둘러보기"></div>
                        <div><img src="img/tour/daehwa/9.png" alt="대화점둘러보기"></div>
                        <div><img src="img/tour/daehwa/8.png" alt="대화점둘러보기"></div>
                        <div><img src="img/tour/daehwa/10.png" alt="대화점둘러보기"></div>
                        <div><img src="img/tour/daehwa/11.png" alt="대화점둘러보기"></div>
                        <div><img src="img/tour/daehwa/12.png" alt="대화점둘러보기"></div>
                    </div>
                </div>
            </div>
            <div class="store m22">
                <div class="content_inner">
                    <div class="store_tit">흑석점</div>
                </div>
                <div class="gallery-slider gallery-slider2">
                    <div class="gallery-single">
                        <div><img src="img/tour/heukseok/1.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/2.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/3.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/4.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/5.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/6.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/7.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/8.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/9.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/10.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/11.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/12.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/13.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/14.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/15.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/16.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/17.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/18.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/19.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/20.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/21.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/22.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/23.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/24.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/25.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/26.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/27.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/28.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/29.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/30.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/31.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/32.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/33.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/34.jpg" alt="흑석점둘러보기"></div>
                        <div><img src="img/tour/heukseok/35.jpg" alt="흑석점둘러보기"></div>
                    </div>
                </div>
            </div>
            
            <script>

                $(function(){


                    // 둘러보기
                    $('.gallery-single').slick({
                        slidesToShow: 5,
                        // slidesToScroll: 1,
                        // arrows: false,
                        // fade: true,
                        // asNavFor: '.gallery-nav',
                        autoplay: true,
                        // autoplaySpeed: 1000,
                        // draggable: true,
                        responsive: [
                            {
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 3,
                                }

                            }
                        ]
                    });

                    // $('.gallery-single2').slick({
                    //     slidesToShow: 5,
                    //     // slidesToScroll: 1,
                    //     // arrows: false,
                    //     // fade: true,
                    //     // // asNavFor: '.gallery-nav',
                    //     autoplay: true,
                    //     // autoplaySpeed: 1000,
                    //     // draggable: true,
                    // });


                    
                    // $('.gallery-nav').slick({
                    //     slidesToShow: 5,
                    //     slidesToScroll: 1,
                    //     asNavFor: '.gallery-single',
                    //     dots: false,
                    //     arrows: false,
                    //     centerMode: false,
                    //     focusOnSelect: true,
                    //     responsive: [
                    //         {
                    //             breakpoint: 768,
                    //             settings: {
                    //                 slidesToShow: 3,
                    //             }

                    //         }
                    //     ],
                        
                    // });
                })


            </script>

        </main>

<?php include_once(G5_PATH.'/tail.php'); ?>