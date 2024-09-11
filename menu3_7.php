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
                    <li><a href="menu3_4.php">키즈 필라테스</a></li>
                    <li><a href="menu3_6.php">산전 &middot; 산후 관리</a></li>
                    <li><a href="menu3_5.php">근골격계 질환</a></li>
                    <li class="active"><a href="menu3_7.php">수술 후 재활 프로그램</a></li>
                </ul>
            </div>
            <div class="content_inner inner_top inner_bottom">
                <h4>수술 후 재활 프로그램</h4>
                <div class="flex_wrap">
                    <div class="img_wrap">
                        <img src="img/m37_1.png" alt="수술 후 재활 프로그램">
                    </div>
                    <div class="txt_wrap">
                        <h5>메디탑의 수술 후 재활 프로그램</h5>
                        <p>
                            필라테스는 수술 후 재활을 위해 설계된 운동으로, 자신의 근력을 활용하여 신체의 긴장을 완화하고 심부근육을 강화하여 신체 밸런스 회복과 유연성 발달에 도움을 줍니다. 이 운동은 특히 수술 후 근골격계 통증 및 기능 회복에 효과적이며, 재발 방지에도 기여할 수 있습니다.
                        </p>

                    </div>
                </div>
                <h5>재활 프로그램 효과</h5>
                <ul class="m37_wrap ">
                    <li data-aos="fade-up" data-aos-delay="00">
                        <img src="img/m37_2.png" alt="근육 강화">
                        <div>
                            <div class="m11_tit">근육강화</div>
                            <p>반복된 운동과 연속 동작을 통해 <br>근육을 강화 할 수 있습니다.</p>
                        </div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="100">
                        <img src="img/m37_3.png" alt="자세교정 및 유연성 향상">
                        <div>
                            <div class="m11_tit">자세교정 및 유연성 향상</div>
                            <p>심부근육 강화로 척추 및 <br>골반의 안정을 도와줍니다.</p>
                        </div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="200">
                        <img src="img/m37_4.png" alt="긴장 해소와 스트레스 감소">
                        <div>
                            <div class="m11_tit">긴장 해소와 스트레스 감소</div>
                            <p>올바른 움직임에 집중하며 <br>신경계가 안정되는 효과가 나타납니다.</p>
                        </div>
                    </li>
                </ul>
                <h5>재활 프로그램 대상</h5>
                <ul class="m37_ul">
                    <li  data-aos="fade-up">
                        <div  class="m11_tit check_item">근골격계 질환 회복 과정 중 재활운동이 필요한 분</div>
                        <p>
                            필라테스를 통해 속 근육부터 단계적으로 강화한다면 회복 및 재발 예방에 도움이 됩니다.
                        </p>
                    </li>
                    <li  data-aos="fade-up">
                        <div  class="m11_tit check_item">성장기 어린이나 척추측만증이 있는 학생</div>
                        <p>필라테스를 통해 척추의 재정렬은 물론 신체 밸런스를 회복시켜줍니다.</p>
                    </li>
                    <li  data-aos="fade-up">
                        <div  class="m11_tit check_item">임신을 준비중이거나 산전/산후 여성</div>
                        <p>임신과 출산으로 틀어지는 신체 정렬을 올바르게 지켜 다양한 통증을 예방 할 수 있습니다.</p>
                    </li>
                    <li  data-aos="fade-up">
                        <div class="m11_tit check_item">한쪽 방향으로만 하는 운동을 즐기는 사람</div>
                        <p>테니스, 골프, 탁구 등과 같은 편측 운동은 좌,우 근력 차이를 유발하여 부상으로 연결되기 쉽습니다. 이 때 재활 필라테스를 통해 근육의 불균형을 맞춰줍니다.</p>
                    </li>
                    <li  data-aos="fade-up">
                        <div class="m11_tit check_item">노년층</div>
                        <p>비교적 근육양이 줄어드는 노년층이 관절에 무리를 주지 않으면서 근육을 강화할 수 있습니다.</p>
                    </li>
                </ul>
            </div>


        </main>

<?php include_once(G5_PATH.'/tail.php'); ?>