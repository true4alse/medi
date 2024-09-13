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
                <ul class="li7">
                    <!-- <li><a href="menu3_1.php">소규모 그룹 필라테스</a></li> -->
                    <li class="active"><a href="menu3_2.php">실버 필라테스</a></li>
                    <li><a href="menu3_3.php">맨즈 필라테스</a></li>
                    <li><a href="menu3_4.php">키즈 필라테스</a></li>
                    <li><a href="menu3_6.php">산전 &middot; 산후 관리</a></li>
                    <li><a href="menu3_5.php">근골격계 질환</a></li>
                    <li><a href="menu3_7.php">수술 후 재활 프로그램</a></li>
                </ul>
            </div>
            <div class="content_inner inner_top inner_bottom">
                <h4>실버 필라테스</h4>
                <div class="flex_wrap">
                    <div class="img_wrap">
                        <img src="img/m32_1.png" alt="실버 필라테스">
                    </div>
                    <div class="txt_wrap">
                        <h5>실버 필라테스란?</h5>
                        <p>
                            실버 필라테스는 노인분들에게 무리한 조깅, 점프, 에어로빅, 그리고 테니스 등과 같이 큰 충격을 주는 운동과 다르게, 충분한 유산소 및 근력 운동 효과를 볼 수 있게 합니다.
                        </p>
                    </div>
                </div>
                <div class="flex_wrap">
                    <div class="txt_wrap">
                        <h5>추천 대상</h5>
                        <ul class="m31_3wrap">
                            <li class="check_item" data-aos="fade-up"><p>근력 강화를 원하는 노년층</p></li>
                            <li class="check_item" data-aos="fade-up"><p>척추,관절 수술 이후 재활 운동이 필요한 경우</p></li>
                            <li class="check_item" data-aos="fade-up"><p>고강도 유산소가 아닌 쉽고 즐거운 운동을 찾는 경우</p></li>
                        </ul>
                    </div>
                    <div class="txt_wrap">
                        <h5>장점</h5>
                        <ul class="m31_3wrap">
                            <li class="check_item" data-aos="fade-up"><p>누구나 안전하고 즐겁게 할 수 있음</p></li>
                            <li class="check_item" data-aos="fade-up"><p>일상생활을 올바른 자세로 수행하는데 도움</p></li>
                            <li class="check_item" data-aos="fade-up"><p>몸통의 주요 근육을 안전하게 강화시켜 척추를 보호함</p></li>
                        </ul>
                    </div>
                </div>
            </div>


        </main>

<?php include_once(G5_PATH.'/tail.php'); ?>