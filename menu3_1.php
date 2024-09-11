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
                    <li class="active"><a href="menu3_1.php">소규모 그룹 필라테스</a></li>
                    <li><a href="menu3_2.php">실버 필라테스</a></li>
                    <li><a href="menu3_3.php">맨즈 필라테스</a></li>
                    <li><a href="menu3_4.php">키즈 필라테스</a></li>
                    <li><a href="menu3_6.php">산전 &middot; 산후 관리</a></li>
                    <li><a href="menu3_5.php">근골격계 질환</a></li>
                    <li><a href="menu3_7.php">수술 후 재활 프로그램</a></li>
                </ul>
            </div>
            <div class="content_inner inner_top ">
                <h4 >소규모 그룹 필라테스</h4>
                <div class="flex_wrap">
                    <div class="img_wrap">
                        <img src="img/m31_1.png" alt="소규모 그룹 필라테스">
                    </div>
                    <div class="txt_wrap">
                        <h5>소규모 그룹 필라테스</h5>
                        <p>
                            일반적인 필라테스에선 다수의 인원을 한 명의 강사분께서 수업을 진행하는 경우가 많습니다. 인체는 모두 다르고, 증상도 모두 다릅니다. 메디탑 필라테스는 1:1 수업, 2:1 수업과 같은 소규모 수업 원칙을 지켜서 진행하고 있습니다. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="content_inner inner_bottom">
                <h5>메디탑 필라테스 효과</h5>
                <div class="flex_wrap">
                    <div class="img_wrap">
                        <img src="img/m31_2.png" alt="메디탑 필라테스 효과">
                    </div>
                    <div class="txt_wrap">
                        <div class="m31_tit" data-aos="fade-up">1:1 개인 레슨</div>
                        <p>
                            집중적인 관리를 통하여 더욱 효과적인 결과를 얻을 수 있는 프로그램 
                        </p>
                        <div class="m31_tit" data-aos="fade-up">1:2 듀엣 레슨</div>
                        <p>
                            2명의 회원이 함께 진행하여 시너지 효과를 받을 수 있으며 두 명 모두 개인 레슨처럼 집중적인 관리를 받을 수 있는 프로그램
                        </p>
                    </div>
                </div>
                <h5>진행 프로그램</h5>
                <ul class="m31_3wrap">
                    <li class="check_item" data-aos="fade-up"><p>실버 필라테스</p></li>
                    <li class="check_item" data-aos="fade-up"><p>맨즈 필라테스</p></li>
                    <li class="check_item" data-aos="fade-up"><p>키즈 필라테스</p></li>
                    <li class="check_item" data-aos="fade-up"><p>산전, 산후 필라테스</p></li>
                    <li class="check_item" data-aos="fade-up"><p>체형 교정 및 다이어트</p></li>
                    <li class="check_item" data-aos="fade-up"><p>근골격계 질환 치료</p></li>
                </ul>
            </div>


        </main>

<?php include_once(G5_PATH.'/tail.php'); ?>