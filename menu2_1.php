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
                        <div class="sub_banner_tit">시설 소개</div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="tab_menu content_inner">
                <ul>
                    <li class="active"><a href="menu2_1.php">기구 소개</a></li>
                    <li><a href="menu2_2.php">둘러보기</a></li>
                </ul>
            </div>
            <div class="content_inner inner_top ">
                <h4>메디탑 필라테스의 기구 소개</h4>
                <ul class="machine_tab">
                    <li class="on">필라테스 기구</li>
                    <li>웨이트 기구</li>
                </ul>
            </div>
            <div class="machine_back">
                <div class="content_inner inner_bottom" >
                    <ul class="machine_wrap">
                        <li class="on">
                            <div class="flex_wrap">
                                <div class="img_wrap">
                                    <img src="img/m21_p1.png" alt="리포머">
                                </div>
                                <div class="txt_wrap">
                                    <h5>리포머 <i>Reformer</i></h5>
                                    <p>
                                        필라테스 기구 중 가장 대표적인 기구로, 지지대에 연결된 스프링을 밀고 당기는 동작을 통해, 신체의 전 부위를 단련할 수 있습니다.
                                    </p>
                                    <div class="back_txt" data-aos="fade-up">Reformer</div>
                                </div>
                            </div>
                            <div class="flex_wrap">
                                <div class="img_wrap">
                                    <img src="img/m21_p2.png" alt="바렐">
                                </div>
                                <div class="txt_wrap">
                                    <h5>바렐 <i>Barrel</i></h5>
                                    <p>
                                        필라테스 바렐 기구는 근육 강화 운동과 이완 운동을 함께 할 수 있는 유용한 기구입니다.
                                    </p>
                                    <div class="back_txt" data-aos="fade-up">Barrel</div>
                                </div>
                            </div>
                            <div class="flex_wrap">
                                <div class="img_wrap">
                                    <img src="img/m21_p3.png" alt="체어 ">
                                </div>
                                <div class="txt_wrap">
                                    <h5>체어 <i>Chair</i></h5>
                                    <p>
                                        필라테스 체어 기구는 균형 감각 및 하체 근력을 강화 시키는 데에 최적의 기구입니다.
                                    </p>
                                    <div class="back_txt" data-aos="fade-up">Chair</div>
                                </div>
                            </div>
                            <div class="flex_wrap">
                                <div class="img_wrap">
                                    <img src="img/m21_p4.png" alt="캐딜락">
                                </div>
                                <div class="txt_wrap">
                                    <h5>캐딜락 <i>Cadillac</i></h5>
                                    <p>
                                        필라테스 캐딜락 기구는 척추의 유연성을 발달시키고, 스프링과 바를 이용하여 어깨와 등 그리고 다른 근육들을 토닝하여 코어 머슬을 강화시킬 수 있습니다.
                                    </p>
                                    <div class="back_txt"  data-aos="fade-up">Cadillac</div>
                                </div>
                            </div>
                            <div class="flex_wrap">
                                <div class="img_wrap">
                                    <img src="img/m21_p5.png" alt="코얼라인 ">
                                </div>
                                <div class="txt_wrap">
                                    <h5>코얼라인 <i>CoreAlign</i></h5>
                                    <p>
                                        스프링을 사용하는 정통 필라테스 기구와는 다르게 저항튜브를 사용하는 기구로, 코어의 힘을 기르고 몸의 균형 교정에 탁월한 효과가 있습니다. 
                                    </p>
                                    <div class="back_txt" data-aos="fade-up">CoreAlign</div>
                                </div>
                            </div>
                            <p> ※ 각 지점마다 보유 기구의 종류가 다를 수 있습니다.</p>
                        </li>
                        <li>
                            <div class="flex_wrap">
                                <div class="img_wrap w">
                                    <img src="img/m21_w1.png" alt="레그 익스텐션 ">
                                </div>
                                <div class="txt_wrap">
                                    <h5>레그 익스텐션  <i>Leg Extension</i></h5>
                                    <p>
                                        대퇴부 앞쪽 사두고근 근육을 강화하는데 가장 효과적인 운동기구입니다.<br> 또한 무릎 통증을 예방하는 효과가 있습니다.
                                    </p>
                                    <div class="back_txt" data-aos="fade-up">Leg Extension</div>
                                </div>
                            </div>
                            <div class="flex_wrap">
                                <div class="img_wrap w">
                                    <img src="img/m21_w2.png" alt="레그 컬 ">
                                </div>
                                <div class="txt_wrap">
                                    <h5>레그 컬 <i>Leg Curl</i></h5>
                                    <p>
                                        햄스트링 근육을 고립시켜 운동할 수 있는 기구로, 허벅지 뒤쪽 근육을 단련하고 엉덩이 밑쪽의 탄력을 증진시키는데 도움이 됩니다.
                                    </p>
                                    <div class="back_txt" data-aos="fade-up">Leg Curl</div>
                                </div>
                            </div>
                            <div class="flex_wrap">
                                <div class="img_wrap w" >
                                    <img src="img/m21_w3.png" alt="스미스 머신">
                                </div>
                                <div class="txt_wrap">
                                    <h5>스미스 머신 <i>Smith Machine</i></h5>
                                    <p>
                                        스쿼트, 벤치프레스, 숄더프레스, 데드리프트, 바벨로우 등 다양한 운동을 수행할 수 있는 기구입니다. 바벨이 고정되어 있어 초보자에게도 적합합니다.
                                    </p>
                                    <div class="back_txt" data-aos="fade-up">Smith Machine</div>
                                </div>
                            </div>
                            <div class="flex_wrap">
                                <div class="img_wrap w">
                                    <img src="img/m21_w1.png" alt="이너 싸이, 아웃싸이">
                                </div>
                                <div class="txt_wrap">
                                    <h5>이너 싸이, 아웃 싸이 <i>Hip Adduction</i></h5>
                                    <p>
                                        이너 싸이는 허벅지 안쪽, 아웃 싸이는 허벅지 외측과 엉덩이 운동이 가능한 머신입니다. 내전근 강화로 보행 자세 교정 및 애플힙을 만드는데 효과가 있습니다.
                                    </p>
                                    <div class="back_txt" data-aos="fade-up">Hip Adduction</div>
                                </div>
                            </div>
                            <p> ※ 각 지점마다 보유 기구의 종류가 다를 수 있습니다.</p>
                        </li>
                    </ul>
    
                </div>
            </div>



        </main>
        <script src="/js/tab.js"></script>
    <?php include_once(G5_PATH.'/tail.php'); ?>