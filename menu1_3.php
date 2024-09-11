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
                    <div class="sub_banner_tit">메디탑 필라테스 소개</div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="tab_menu content_inner">
            <ul>
                <li><a href="menu1_1.php">메디탑 필라테스</a></li>
                <li><a href="menu1_2.php">협력병원</a></li>
                <li class="active"><a href="menu1_3.php">운영철학</a></li>
            </ul>
        </div>
        <div class="content_inner inner_top inner_bottom">
            <h4>메디탑 필라테스의 운영철학</h4>
            <div class="m13_wrap">
                <video src=""></video>
            </div>
        </div>
        


    </main>

    <?php include_once(G5_PATH.'/tail.php'); ?>