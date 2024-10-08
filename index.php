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

            <!-- <div class="header_container"></div> -->
            <!-- 메인배너 -->
            <!-- 메인배너 -->
            <div class="main_station swiper">
                <video muted autoplay loop playsinline class="pc">
                    <source src="video/main.mp4" type="video/mp4">
                </video>
                <!-- <video muted autoplay loop playsinline  class="mo">
                    <source src="video/mo.mp4" type="video/mp4">
                </video> -->
                <!-- <div class="cover">
                    <div class="content_inner  ">
                        <div class="tit">
                            차별화의 시작 <span class="blue_line">“ 메디탑 필라테스 ”</span>
                        </div>
                        <p>당신의 삶에 균형을 찾아드립니다.</p>
                    </div>
                </div> -->
                <div class="scroll_down">
                    <p>scroll</p>
                    <div class="arrow"></div>
                </div>
                
            </div>
            
            <!-- 레슨프로그램-->
            <section class="sec1 page">
                <div class="content_inner inner_top inner_bottom" >
                    <h2>
                        메디탑 필라테스 레슨 프로그램
                        <span>
                            메디탑 필라테스의<br><i>레슨 프로그램</i>을 소개합니다.
                        </span>
                    </h2>
                    <ul class="s1_wrap">
                        <li  data-aos="fade-up">
                            <a href="menu3_5.php">
                                <h3>근골격계 질환</h3>
                                <div class="liwrap">
                                    <div class="more">
                                        <img src="img/more.png" alt="더보기">
                                    </div>
                                    <div class="picto_wrap">
                                        <img src="img/s1_5.png" alt="근골격계 질환">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li  data-aos="fade-up">
                            <a href="menu3_7.php">
                                <h3>수술 후 재활 프로그램</h3>
                                <div class="liwrap">
                                    <div class="more">
                                        <img src="img/more.png" alt="더보기">
                                    </div>
                                    <div class="picto_wrap">
                                        <img src="img/s1_6.png" alt="수술 후 재활 프로그램">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="menu3_6.php">
                                <h3>산전/산후관리</h3>
                                <div class="liwrap">
                                    <div class="more">
                                        <img src="img/more.png" alt="더보기">
                                    </div>
                                    <div class="picto_wrap">
                                        <img src="img/s1_3.png" alt="산전/산후관리">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="menu3_3.php">
                                <h3>맨즈 필라테스</h3>
                                <div class="liwrap">
                                    <div class="more">
                                        <img src="img/more.png" alt="더보기">
                                    </div>
                                    <div class="picto_wrap">
                                        <img src="img/s1_4.png" alt="맨즈 필라테스">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="menu3_2.php">
                                <h3>실버 필라테스</h3>
                                <div class="liwrap">
                                    <div class="more">
                                        <img src="img/more.png" alt="더보기">
                                    </div>
                                    <div class="picto_wrap">
                                        <img src="img/s1_8.png" alt="실버 필라테스">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="menu3_4.php">
                                <h3>키즈 필라테스</h3>
                                <div class="liwrap">
                                    <div class="more">
                                        <img src="img/more.png" alt="더보기">
                                    </div>
                                    <div class="picto_wrap">
                                        <img src="img/s1_7.png" alt="키즈 필라테스">
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- 지점소개 -->
            <section class="sec2">
                <div class="content_inner  inner_bottom">
                    <div class="s2_box">
                        <a href="menu4_1.php">
                            <h2>
                                메디탑 필라테스 지점 소개
                                <span>
                                    메디탑 필라테스의<br><i>전국 지점</i>을 소개합니다.
                                </span>
                            </h2>
                            <div class="more"  data-aos="zoom-in">
                                <img src="img/more_w.png" alt="더보기"> 더 알아보기
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <!-- 도수 · 재활치료 클리닉 -->
            <section class="sec3">
                <div class="content_inner inner_top inner_bottom">
                    <h2>
                        Before & After
                        <span>
                            메디탑 필라테스 회원님들의<br><i>체형 교정 전/후</i>을 사진입니다.
                        </span>
                    </h2>
                    <div class="s3_wrap">
                        <div class="left_deco">
                            <div class="logo_bg">
                                <img src="img/s3_bg.png" alt="메디탑 필라테스 로고">
                            </div>
                            <a href="bbs/board.php?bo_table=review" class="more" data-aos="zoom-in">
                                <img src="img/more_w.png" alt="더보기"> 더 알아보기
                            </a>
                        </div>
                        <ul>
                            <li>
                                <img src="img/bna_1.png" alt="후기">
                            </li>
                            <li>
                                <img src="img/bna_2.png" alt="후기">
                            </li>
                            <li>
                                <img src="img/bna_3.png" alt="후기">
                            </li>
                            <li>
                                <img src="img/bna_4.png" alt="후기">
                            </li>
                            <li>
                                <img src="img/bna_5.png" alt="후기">
                            </li>
                            <li>
                                <img src="img/bna_1.png" alt="후기">
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            
            <!-- 영상 -->
            <section class="sec4">
                <div class="content_inner  inner_top inner_bottom">
                    <h2>
                        메디탑 필라테스를<br>소개합니다!
                    </h2>
                    <div class="s4_wrap">
                        <div class="station">
                            <div class="vedio_wrap on">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/WIFKBRcP4tE?si=h8wnp1wlJMpmR15p" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                </iframe>
                            </div>
                            <div class="vedio_wrap ">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/u2mzf1Onwe4?si=ek4H87rG8-b8ez17" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="vedio_wrap ready">
                                준비중
                            </div>
                        </div>
                        <ul class="pagenation">
                            <li class="on">대화점</li>
                            <li>흑석점</li>
                            <li>평택점</li>
                        </ul>
                    </div>
                </div>
            </section>
            
        </main>

    



<?php include_once(G5_PATH.'/tail.php'); 