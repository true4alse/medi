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
                    <li class="active"><a href="/menu1_1.php">메디탑 필라테스</a></li>
                    <li><a href="/menu1_2.php">협력병원</a></li>
                    <li><a href="/menu1_3.php">운영철학</a></li>
                </ul>
            </div>
            <div class="content_inner inner_top ">
                <h4>메디탑 필라테스</h4>
                <div class="flex_wrap">
                    <div class="img_wrap">
                        <img src="img/m11.png" alt="수업진행">
                    </div>
                    <div class="txt_wrap">
                        <h5>수업 진행</h5>
                        <ul class="check_wrap">
                            <li class="check_item" data-aos="fade-up">
                                <p>코어얼라인, 웨이트, 캐딜락, 리포머, 바렐, 체어, 소도구 이용</p>
                            </li>
                            <li class="check_item" data-aos="fade-up">
                                <p>레슨 1회에 50분 또는 30분간 진행 (이용권에 맞춰 진행)</p>
                            </li>
                            <li class="check_item" data-aos="fade-up">
                                <p>지점마다 기구가 상이할 수 있으며, 상세 스케줄은 지점에 문의</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content_inner inner_bottom">
                <h5>메디탑 필라테스 효과</h5>
                <ul class="grid2_wrap">
                    <li data-aos="fade-up">
                        <div class="m11_tit check_item">
                            집중 (Concentration)
                        </div>
                        <p>마음과 몸의 움직임에 집중</p>
                    </li>
                    <li data-aos="fade-up">
                        <div class="m11_tit check_item">
                            유연한 움직임 (Contingency) 
                        </div>
                        <p>경직된 근육의 이완</p>
                    </li>
                    <li data-aos="fade-up">
                        <div class="m11_tit check_item">
                            조절 (Control)
                        </div>
                        <p>신체 근육의 조절과 제어</p>
                    </li>
                    <li data-aos="fade-up">
                        <div class="m11_tit check_item">
                            중심 (Centering) 
                        </div>
                        <p>자세 교정 및 중심 잡기</p>
                    </li>
                    <li data-aos="fade-up">
                        <div class="m11_tit check_item">
                            호흡 (Breathing) 
                        </div>
                        <p>혈액에 산소를 공급해 깨끗한 혈류 흐름 확보</p>
                    </li>
                    <li data-aos="fade-up">
                        <div class="m11_tit check_item">
                            정확함 (Precision)
                        </div>
                        <p>몸을 제어하고 정확한 움직임 습득</p>
                    </li>
                </ul>
            </div>


        </main>

<?php include_once(G5_PATH.'/tail.php'); ?>