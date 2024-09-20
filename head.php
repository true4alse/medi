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
                <img src="/img/close_menu.png" alt="메뉴닫기">
            </a>
            <ul class="hidden_lnb">
                <?php if ($is_member) {  ?>
                <!-- <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">Modify</a></li> -->
                <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
                <?php if ($is_admin) {  ?>
                <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
                <?php }  ?>
                <?php } else {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
                <?php }  ?>
            </ul>
            <ul class="hidden_gnb">
                <li>
                    <a href="javascript:void(0)">메디탑 필라테스 소개</a>
                    <ul class="left_0 top_0">
                        <li><a href="./menu1_1.php">메디탑 필라테스</a></li>
                        <li><a href="./menu1_2.php">협력 병원</a></li>
                        <li><a href="./menu1_3.php">운영 철학</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">시설 소개</a>
                    <ul class="left_0 top_0">
                        <li><a href="/menu2_1.php">기구 소개</a></li>
                        <li><a href="/menu2_2.php">둘러보기</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">프로그램</a>
                    <ul class="left_0 top_0">
                        <!-- <li><a href="/menu3_1.php">소규모 그룹 필라테스</a></li> -->
                        <li><a href="/menu3_2.php">실버 필라테스</a></li>
                        <li><a href="/menu3_3.php">맨즈 필라테스</a></li>
                        <li><a href="/menu3_4.php">키즈 필라테스</a></li>
                        <li><a href="/menu3_6.php">산전 &middot; 산후 관리</a></li>
                        <li><a href="/menu3_5.php">근골격계 질환</a></li>
                        <li><a href="/menu3_7.php">수술 후 재활 프로그램</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">커뮤니티</a>
                    <ul class="left_0 top_0">
                        <li><a href="/menu4_1.php">지점 소개</a></li>
                        <li><a href="javascript:alert('준비중입니다.')">수강 후기</a></li>
                        <li><a href="/menu4_3.php">창업 문의</a></li>
                        <li><a href="/menu4_4.php">지도자반 교육 문의</a></li>
                        <li><a href="/bbs/board.php?bo_table=notice">워크샵</a></li>
                    </ul>
                </li>
                <?php if ($is_admin) {  ?>
                <li>
                    <a href="javascript:void(0)">관리자페이지</a>
                    <ul class="left_0 top_0">
                        <li><a href="/adm/">관리자페이지</a></li>
                        <li><a href="/bbs/board.php?bo_table=branch">지점 등록</a></li>
                        <li><a href="/bbs/board.php?bo_table=fast_consulting">빠른상담 확인</a></li>
                        <li><a href="/bbs/board.php?bo_table=medical_start">의료진 창업 문의 확인</a></li>
                        <li><a href="/bbs/board.php?bo_table=non_medical_start">비의료진 창업 문의 확인</a></li>
                        <li><a href="/bbs/board.php?bo_table=director">지도자반 교육 문의 확인</a></li>
                    </ul>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>

<header>
    <ul class="lnb">
        <?php if ($is_member) {  ?>
        <!-- <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">Modify</a></li> -->
        <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
        <?php if ($is_admin) {  ?>
        <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
        <?php }  ?>
        <?php } else {  ?>
        <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
        <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
        <?php }  ?>
    </ul>
    <div class="header_inner">
        <div class="h_logo">
            <a href="/index.php">
                <img src="/img/h_logo.png" alt="메디탑 필라테스 로고">
            </a>
        </div>
        <div class="header_menu">
            <ul class="gnb">
                <li>
                    <a href="/menu1_1.php">메디탑 필라테스 소개</a>
                    <ul class="left_0 top_0">
                        <li><a href="/menu1_1.php">메디탑 필라테스</a></li>
                        <li><a href="/menu1_2.php">협력 병원</a></li>
                        <li><a href="/menu1_3.php">운영 철학</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/menu2_1.php">시설 소개</a>
                    <ul class="left_0 top_0">
                        <li><a href="/menu2_1.php">기구 소개</a></li>
                        <li><a href="/menu2_2.php">둘러보기</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/menu3_1.php">프로그램</a>
                    <ul class="left_0 top_0">
                        <!-- <li><a href="/menu3_1.php">소규모 그룹 필라테스</a></li> -->
                        <li><a href="/menu3_2.php">실버 필라테스</a></li>
                        <li><a href="/menu3_3.php">맨즈 필라테스</a></li>
                        <li><a href="/menu3_4.php">키즈 필라테스</a></li>
                        <li><a href="/menu3_6.php">산전 &middot; 산후 관리</a></li>
                        <li><a href="/menu3_5.php">근골격계 질환</a></li>
                        <li><a href="/menu3_7.php">수술 후 재활 프로그램</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/menu4_1.php">커뮤니티</a>
                    <ul class="left_0 top_0">
                        <li><a href="/menu4_1.php">지점 소개</a></li>
                        <li><a href="javascript:alert('준비중입니다.')">수강 후기</a></li>
                        <li><a href="/menu4_3.php">창업 문의</a></li>
                        <li><a href="/menu4_4.php">지도자반 교육 문의</a></li>
                        <li><a href="/bbs/board.php?bo_table=notice">워크샵</a></li>
                    </ul>
                </li>
                <?php if ($is_admin) {  ?>
                <li>
                    <a href="/adm/">관리자페이지</a>
                    <ul class="left_0 top_0">
                        <li><a href="/bbs/board.php?bo_table=branch">지점 등록</a></li>
                        <li><a href="/bbs/board.php?bo_table=fast_consulting">빠른상담 확인</a></li>
                        <li><a href="/bbs/board.php?bo_table=medical_start">의료진 창업 문의 확인</a></li>
                        <li><a href="/bbs/board.php?bo_table=non_medical_start">비의료진 창업 문의 확인</a></li>
                        <li><a href="/bbs/board.php?bo_table=director">지도자반 교육 문의 확인</a></li>
                    </ul>
                </li>
                <?php }?>
            </ul>
            <div class="open_menu" id="open_menu">
                <img src="/img/open_menu.png" alt="전체메뉴열기">
            </div>
        </div>
    </div>
</header>
<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    