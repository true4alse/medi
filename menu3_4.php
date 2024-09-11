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
                    <li><a href="menu3_1.php">소규모 그룹 필라테스</a></li>
                    <li><a href="menu3_2.php">실버 필라테스</a></li>
                    <li><a href="menu3_3.php">맨즈 필라테스</a></li>
                    <li class="active"><a href="menu3_4.php">키즈 필라테스</a></li>
                    <li><a href="menu3_6.php">산전 &middot; 산후 관리</a></li>
                    <li><a href="menu3_5.php">근골격계 질환</a></li>
                    <li><a href="menu3_7.php">수술 후 재활 프로그램</a></li>
                </ul>
            </div>
            <div class="content_inner inner_top inner_bottom">
                <h4>키즈 필라테스</h4>
                <div class="flex_wrap">
                    <div class="img_wrap">
                        <img src="img/m34_1.png" alt="키즈 필라테스">
                    </div>
                    <div class="txt_wrap">
                        <h5>메디탑 키즈 필라테스</h5>
                        <p>
                            키즈 필라테스는 보통 6세부터 시작하여, 집중력 향상과 성장점 자극을 하는 게 주된 목표입니다. 선생님과의 의사소통을 통한 자세 교정과 정서적인 발달을 꾀합니다. 14세부터는 신체 활동성을 높이고 스스로 바른 자세를 인지하도록 돕습니다.
                        </p>
                    </div>
                </div>
                <div class="flex_wrap">
                    <div class="txt_wrap">
                        <h5>아이들에게 필라테스가 좋은 이유</h5>
                        <ul class="m31_3wrap">
                            <li class="check_item" data-aos="fade-up"><p>키 성장 · 성장판 자극</p></li>
                            <li class="check_item" data-aos="fade-up"><p>자세 교정 · 거북목 교정</p></li>
                            <li class="check_item" data-aos="fade-up"><p>집중력 강화 · 뇌기능 활성화</p></li>
                            <li class="check_item" data-aos="fade-up"><p>체력 향상</p></li>
                        </ul>
                    </div>
                    <div class="txt_wrap">
                        <h5>수업 방식</h5>
                        <ul class="m31_3wrap">
                            <li class="check_item" data-aos="fade-up"><p>매트를 이용한 스트레칭 및 이완</p></li>
                            <li class="check_item" data-aos="fade-up"><p>밴드를 이용한 근육 강화</p></li>
                            <li class="check_item" data-aos="fade-up"><p>소도구를 이용한 자세 교정</p></li>
                            <li class="check_item" data-aos="fade-up"><p>기구를 이용한 전신 근육 강화</p></li>
                        </ul>
                    </div>
                </div>
            </div>


        </main>

<?php include_once(G5_PATH.'/tail.php'); ?>