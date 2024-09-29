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
                    <li class="active"><a href="menu3_3.php">맨즈 필라테스</a></li>
                    <li><a href="menu3_4.php">키즈 필라테스</a></li>
                    <li><a href="menu3_6.php">산전 &middot; 산후 관리</a></li>
                    <li><a href="menu3_5.php">근골격계 질환</a></li>
                    <li><a href="menu3_7.php">수술 후 재활 프로그램</a></li>
                </ul>
            </div>
            <div class="content_inner inner_top inner_bottom">
                <h4>맨즈 필라테스</h4>
                <div class="flex_wrap">
                    <div class="img_wrap">
                        <img src="img/m33_1.png" alt="맨즈 필라테스">
                    </div>
                    <div class="txt_wrap">
                        <h5>메디탑 맨즈 필라테스</h5>
                        <p>
                            필라테스는 초기 제1차 세계대전에서 군인들을 재활하기 위한 목적으로 개발되었습니다.<br>
                            그 정도로 남성 신체의 균형을 잡는 데 제격인 운동입니다. 메디탑 맨즈 필라테스는 필라테스와 피티를 결합하여 몸에 필요한 근육과 체력, 균형까지 잡을 수 있도록 수업을 진행합니다.

                        </p>
                    </div>
                </div>
                <div class="flex_wrap">
                    <div class="txt_wrap">
                        <h5>추천 대상</h5>
                        <ul class="m31_3wrap">
                            <li class="check_item" data-aos="fade-up"><p>제대로 된 속근육을 기르고 싶다면</p></li>
                            <li class="check_item" data-aos="fade-up"><p>헬스 중 고관절 찝힘 증상이 있다면</p></li>
                            <li class="check_item" data-aos="fade-up"><p>어깨통증이 있어서 무게를 못 든다면</p></li>
                        </ul>
                    </div>
                    <div class="txt_wrap">
                        <h5>남성에게 필라테스가 좋은 이유?</h5>
                        <ul class="m31_3wrap">
                            <li class="check_item" data-aos="fade-up"><p>기초 체력을 증진</p></li>
                            <li class="check_item" data-aos="fade-up"><p>탁월한 다이어트 효과</p></li>
                            <li class="check_item" data-aos="fade-up"><p>만성 질환과 재활 훈련에 도움</p></li>
                            <li class="check_item" data-aos="fade-up"><p>코어 강화 및 유연성 강화</p></li>
                        </ul>
                    </div>
                </div>
            </div>


        </main>

<?php include_once(G5_PATH.'/tail.php'); ?>