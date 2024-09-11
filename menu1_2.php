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
                    <li class="active"><a href="menu1_2.php">협력병원</a></li>
                    <li><a href="menu1_3.php">운영철학</a></li>
                </ul>
            </div>
            <div class="content_inner inner_top inner_bottom">
                <h4>메디탑 필라테스의 약속</h4>
                <div class="hospital_wrap">
                    <div class="img_wrap">
                        <img src="img/m12.jpg" alt="협력병원이미지">
                    </div>
                    <div class="txt_wrap">
                        <div class="hospital_tit blue_line"  data-aos="fade-up">“ 최고의 투자는 자세 건강입니다. “</div>
                        <p>
                            메디탑 필라테스는 <br> 
                            성모메트로정형외과의 공식 부설 재활 운동 센터입니다. 
                        </p>
                        <p>
                            메디탑 필라테스는 본 정형외과에서 근골격계 질환 치료를 받으신 후 잘못된 지식 때문에 다시 부상을 입고 병원에 돌아오시는 분들을 위해, 정확한 메디컬 지식의 전달을 위해 개설되었습니다. 
                        </p>
                        <p>
                            메디탑 필라테스는 전문지식을 가진 물리치료사 출신 필라테스 강사와 트레이너 분들로 구성되어, 여러분의 자세를 바꾸어 나가겠습니다.
                        </p>
                    </div>
                </div>
            </div>
            


        </main>

<?php include_once(G5_PATH.'/tail.php'); ?>