<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

run_event('pre_head');

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>


<!-- 상단 시작 { -->
<div class="hidden_bg">
    <div class="hidden_menu">
        <div class="hidden_top"> 
            <a class="close_menu">
                <img src="./img/close_menu.png" alt="메뉴닫기">
            </a>
            <ul class="hidden_gnb">
                <li>
                    <a href="javascript:void(0)">메디탑 필라테스 소개</a>
                    <ul class="left_0 top_0">
                        <li><a href="./menu1_1.html">메디탑 필라테스</a></li>
                        <li><a href="./menu1_2.html">협력 병원</a></li>
                        <li><a href="./menu1_3.html">운영 철학</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">시설 소개</a>
                    <ul class="left_0 top_0">
                        <li><a href="./menu2_1.html">기구 소개</a></li>
                        <li><a href="./menu2_2.html">둘러보기</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">프로그램</a>
                    <ul class="left_0 top_0">
                        <li><a href="./menu3_1.html">소규모 그룹 필라테스</a></li>
                        <li><a href="./menu3_2.html">실버 필라테스</a></li>
                        <li><a href="./menu3_3.html">맨즈 필라테스</a></li>
                        <li><a href="./menu3_4.html">키즈 필라테스</a></li>
                        <li><a href="./menu3_6.html">산전 &middot; 산후 관리</a></li>
                        <li><a href="./menu3_5.html">근골격계 질환</a></li>
                        <li><a href="./menu3_7.html">수술 후 재활 프로그램</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">커뮤니티</a>
                    <ul class="left_0 top_0">
                        <li><a href="./menu4_1.html">지점 소개</a></li>
                        <li><a href="javascript:alert('준비중입니다.')">수강 후기</a></li>
                        <li><a href="./menu4_3.html">창업 문의</a></li>
                        <li><a href="./menu4_4.html">지도자반 교육 문의</a></li>
                        <li><a href="javascript:alert('준비중입니다.')">워크샵</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- <ul class="login">
        <?php if ($is_member) {  ?>
        <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">Modify</a></li>
        <li><a href="<?php echo G5_BBS_URL ?>/logout.php">Logout</a></li>
        <?php if ($is_admin) {  ?>
        <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">Admin</a></li>
        <?php }  ?>
        <?php } else {  ?>
        <li><a href="<?php echo G5_BBS_URL ?>/register.php">Join</a></li>
        <li><a href="<?php echo G5_BBS_URL ?>/login.php">Login</a></li>
        <?php }  ?>
    </ul> -->
<header>
    
    <div class="header_inner">
        <div class="h_logo">
            <a href="index.html">
                <img src="./img/h_logo.png" alt="메디탑 필라테스 로고">
            </a>
        </div>
        <div class="header_menu">
            <ul class="gnb">
                <li>
                    <a href="./menu1_1.html">메디탑 필라테스 소개</a>
                    <ul class="left_0 top_0">
                        <li><a href="./menu1_1.html">메디탑 필라테스</a></li>
                        <li><a href="./menu1_2.html">협력 병원</a></li>
                        <li><a href="./menu1_3.html">운영 철학</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./menu2_1.html">시설 소개</a>
                    <ul class="left_0 top_0">
                        <li><a href="./menu2_1.html">기구 소개</a></li>
                        <li><a href="./menu2_2.html">둘러보기</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./menu3_1.html">프로그램</a>
                    <ul class="left_0 top_0">
                        <li><a href="./menu3_1.html">소규모 그룹 필라테스</a></li>
                        <li><a href="./menu3_2.html">실버 필라테스</a></li>
                        <li><a href="./menu3_3.html">맨즈 필라테스</a></li>
                        <li><a href="./menu3_4.html">키즈 필라테스</a></li>
                        <li><a href="./menu3_6.html">산전 &middot; 산후 관리</a></li>
                        <li><a href="./menu3_5.html">근골격계 질환</a></li>
                        <li><a href="./menu3_7.html">수술 후 재활 프로그램</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./menu4_1.html">커뮤니티</a>
                    <ul class="left_0 top_0">
                        <li><a href="./menu4_1.html">지점 소개</a></li>
                        <li><a href="javascript:alert('준비중입니다.')">수강 후기</a></li>
                        <li><a href="./menu4_3.html">창업 문의</a></li>
                        <li><a href="./menu4_4.html">지도자반 교육 문의</a></li>
                        <li><a href="javascript:alert('준비중입니다.')">워크샵</a></li>
                    </ul>
                </li>
            </ul>
            <div class="open_menu" id="open_menu">
                <img src="./img/open_menu.png" alt="전체메뉴열기">
            </div>
        </div>
    </div>
</header>
<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    