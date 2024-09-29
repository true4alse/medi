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
                        <div class="sub_banner_tit">프로그램</div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="tab_menu content_inner">
                <ul class="">
                    <!-- <li><a href="menu3_1.php">소규모 그룹 필라테스</a></li> -->
                    <li><a href="menu3_2.php">실버 필라테스</a></li>
                    <li><a href="menu3_3.php">맨즈 필라테스</a></li>
                    <li><a href="menu3_4.php">키즈 필라테스</a></li>
                    <li><a href="menu3_6.php">산전 &middot; 산후 관리</a></li>
                    <li class="active"><a href="menu3_5.php">근골격계 질환</a></li>
                    <li><a href="menu3_7.php">수술 후 재활 프로그램</a></li>
                </ul>
            </div>
            <div class="content_inner inner_top inner_bottom">
                <h4>근골격계 질환</h4>
                <div class="flex_wrap">
                    <div class="img_wrap">
                        <img src="img/m35_1.png" alt="근골격계 질환">
                    </div>
                    <div class="txt_wrap">
                        <h5>근골격계 질환 재활 프로그램</h5>
                        <p>
                            메디탑 필라테스에선 물리치료사 출신의 필라테스 강사진들의 우수한 기술력과 차별화된 관리로 근력 강화 및 척추 안정화를 목표로 수업을 진행합니다. <br>
                            코어근육을 강화하고 신체 밸런스를 회복시키는 필라테스 운동을 활용해 각종 근골격계 질환으로 약해진 근육이나 관절, 인대 등의 연부 조직을 건강하게 회복시키고, 신체기능을 개선해 만성적이고 반복적인 통증의 원인을 제거할 수 있습니다.
                        </p>
                    </div>
                </div>
                <h5>치료 질환</h5>
                <ul class="m35_wrap">
                    <li data-aos="fade-up" data-aos-delay="00">
                        <img src="img/m35_2.png" alt="오십견">
                        <p>오십견</p>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="100">
                        <img src="img/m35_3.png" alt="발목인대 손상 및 불안정증">
                        <p>발목 인대 손상 및 불안정증</p>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="200">
                        <img src="img/m35_4.png" alt="어깨충돌증후군">
                        <p>어깨충돌증후군</p>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="300">
                        <img src="img/m35_5.png" alt="견관절탈구">
                        <p>견관절 탈구</p>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="400">
                        <img src="img/m35_6.png" alt="어깨 관절염">
                        <p>어깨 관절염</p>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="500">
                        <img src="img/m35_7.png" alt="일자목 증후군">
                        <p>일자목 증후군</p>
                    </li>
                </ul>
            </div>


        </main>

<?php include_once(G5_PATH.'/tail.php'); ?>