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
                    <li><a href="menu3_2.php">실버 필라테스</a></li>
                    <li><a href="menu3_3.php">맨즈 필라테스</a></li>
                    <li><a href="menu3_4.php">키즈 필라테스</a></li>
                    <li class="active"><a href="menu3_6.php">산전 &middot; 산후 관리</a></li>
                    <li><a href="menu3_5.php">근골격계 질환</a></li>
                    <li><a href="menu3_7.php">수술 후 재활 프로그램</a></li>
                </ul>
            </div>
            <div class="content_inner inner_top inner_bottom">
                <h4>산전 · 산후 관리</h4>
                <div class="flex_wrap">
                    <div class="img_wrap">
                        <img src="img/m36_1.png" alt="산전 · 산후 관리">
                    </div>
                    <div class="txt_wrap">
                        <h5>메디탑 산전 · 산후 필라테스</h5>
                        <p>
                            임신 중 약해지는 근력과 체력을 올려 산모와 태아 모두의 건강을 도와줍니다. <br>
                            산후 골반이 자리 잡을 때 틀어지지 않고 보다 완벽한 몸매로 돌아가게 해 줍니다.
                        </p>
                    </div>
                </div>
                <div class="flex_wrap">
                    <div class="txt_wrap">
                        <h5>산전 · 산후 필라테스의 필요성</h5>
                        <ul class="m31_3wrap">
                            <li class="check_item"data-aos="fade-up"><p>임신 중 골격계의 변화로 인한 통증 완화</p></li>
                            <li class="check_item"data-aos="fade-up"><p>적절한 체중 유지</p></li>
                            <li class="check_item"data-aos="fade-up"><p>편안한 호흡과 태아의 두뇌발달</p></li>
                            <li class="check_item"data-aos="fade-up"><p>골반 기저근 강화로 순산에 도움</p></li>
                        </ul>
                    </div>
                    <div class="txt_wrap">
                        <h5>추천 대상</h5>
                        <ul class="m31_3wrap m36">
                            <li class="check_item" data-aos="fade-up" ><p><i>산전 필라테스</i> : 임신 13 -40주에 해당하는 임산부</p></li>
                            <li class="check_item" data-aos="fade-up" ><p><i>산후 필라테스</i> : 출산후 6 – 8주 경과된 산모</p></li>
                        </ul>
                    </div>
                </div>
            </div>


        </main>

<?php include_once(G5_PATH.'/tail.php'); ?>