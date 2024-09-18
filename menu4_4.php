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
                        <div class="sub_banner_tit">커뮤니티</div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="tab_menu content_inner">
                <ul class="m4_tab">
                    <li><a href="menu4_1.php">지점 소개</a></li>
                    <li><a href="menu4_2.php">수강후기</a></li>
                    <li><a href="menu4_3.php">창업 문의</a></li>
                    <li class="active"><a href="menu4_4.php">지도자반 교육 문의</a></li>
                    <li><a href="menu4_5.php">워크샵</a></li>
                </ul>
            </div>
            <div class="content_inner inner_top inner_bottom">
                <h4>지도자 자격증반 커리큘럼</h4>
                <h5 class="m4_h5">지도자반 교육 시작 전, 개인 레슨 5회 참여 (메디탑 필라테스 & PT 전 지점 수업 참여 가능)</h5>
                <ul class="m44_wrap">
                    <li>
                        <div class="part"  data-aos="fade-up" data-aos-delay="00">
                            <i>Part.1</i>
                            해부학
                        </div>
                        <div class="">
                            - 물리치료사는 선택<br>
                            - 전공자 비용 할인
                        </div>
                    </li>
                    <li>
                        <div class="part"  data-aos="fade-up" data-aos-delay="100">
                            <i>Part.2</i>
                            필라테스 과정
                        </div>
                        <div>
                            - 기구별 모의 Test<br>
                            - 모의 그룹 티칭<br>
                            &nbsp;&nbsp;(9주 - 90시간)
                        </div>
                    </li>
                    <li>
                        <div class="part"  data-aos="fade-up" data-aos-delay="200">
                            <i>Part.3</i>
                            웨이트 트레이닝
                        </div>
                        <div>(3주 - 30시간)</div>
                    </li>
                    <li>
                        <div class="part"  data-aos="fade-up" data-aos-delay="300">
                            <i>Part.4</i>
                            Test
                        </div>
                        <div>(이론 / 실기)</div>
                    </li>
                </ul>
                
            </div>
            <div class="content_inner  m44_2">
                <h4>자격증 발급 조건</h4>
                <ul class="m31_3wrap">
                    <li class="check_item" data-aos="fade-up">수업 참석 시간 80% 이상</li>
                    <li class="check_item" data-aos="fade-up"><div class="m4f">중간 test 점수 70점 이상 <p>(교육기간 재시험 가능)</p></div></li>
                    <li class="check_item" data-aos="fade-up">최종 test 점수 70점 이상</li>
                </ul>
            </div>
            <div class="content_inner inner_top inner_bottom">
                <h4>지도자 자격증반 상담 문의</h4>
                <div class="shop">
                    <div class="shop_wrap blue">
                        <h5>지도자 자격증반 상담 문의</h5>
                        <p>메디탑 필라테스 & PT의 지도자 자격증반 상담 문의입니다.</p>
                        <form name="fwrite" id="fwrite" action="<?php echo G5_URL ?>/bbs/write_update.php?bo_table=director" onsubmit="return check_hj('name','contact','inquiry');" method="post" enctype="multipart/form-data" autocomplete="off">
                        
                        <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
                        <input type="hidden" name="w" value="<?php echo $w ?>">
                        <input type="hidden" name="bo_table" value="director">
                        <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
                        <input type="hidden" name="sca" value="<?php echo $sca ?>">
                        <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
                        <input type="hidden" name="stx" value="<?php echo $stx ?>">
                        <input type="hidden" name="spt" value="<?php echo $spt ?>">
                        <input type="hidden" name="sst" value="<?php echo $sst ?>">
                        <input type="hidden" name="sod" value="<?php echo $sod ?>">
                        <input type="hidden" name="page" value="<?php echo $page ?>">

                            <div class="form_flex">
                                <label for="name">이름</label>
                                <input type="text" id="name" name="wr_name" placeholder="이름을 입력해주세요." required>
                            </div>
                            <div class="form_flex">
                                <label for="contact">연락처</label>
                                <input type="tel" id="contact" name="wr_subject" placeholder="(예) 010-0000-0000" required>
                            </div>
                            <label for="inquiry">문의내용</label>
                            <textarea id="inquiry" name="wr_content" placeholder="문의내용을 입력해주세요." required></textarea>
                            
                            <button type="submit">문의하기</button>
                        </form>
                    </div>
                    <script>
                        function check_hj(name,telnumber,email,region,inquiry){
                            var chbox1 = document.getElementById(name);
                            var chbox2 = document.getElementById(contact);
                            var chbox5 = document.getElementById(inquiry);
                            if($(chbox1).val() ==""){
                                alert("이름을 입력해주세요.");
                                return false;
                            }else if($(chbox2).val() ==""){
                                alert("연락처를 남겨주세요.")
                                return false;
                            }else if($(chbox5).val()==""){
                                alert("문의내용을 남겨주세요.")
                                return false
                            }else{
                                alert("지도자반 교육 문의가 접수되었습니다.");
                                return true;
                                window.location.href="/"
                            }
                        }
            </script>
                </div>
            </div>
        </main>
<?php include_once(G5_PATH.'/tail.php'); ?>