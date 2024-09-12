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
                    <li class="active"><a href="menu4_3.php">창업 문의</a></li>
                    <li><a href="menu4_4.php">지도자반 교육 문의</a></li>
                    <li><a href="menu4_5.php">워크샵</a></li>
                </ul>
            </div>
            <div class="content_inner inner_top inner_bottom">
                <h4>창업 문의</h4>
                <div class="shop">
                    <div class="shop_wrap">
                        <h5>의료진 창업 문의</h5>
                        <p>의료진의 메디탑 필라테스 창업 문의입니다.</p>
                        <form name="fwrite" id="fwrite" action="<?php echo G5_URL ?>/bbs/write_update.php?bo_table=medical_start" onsubmit="return check_hj('name1','contact1','email1','region1','inquiry1');" method="post" enctype="multipart/form-data" autocomplete="off">
                        
                        <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
                        <input type="hidden" name="w" value="<?php echo $w ?>">
                        <input type="hidden" name="bo_table" value="medical_start">
                        <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
                        <input type="hidden" name="sca" value="<?php echo $sca ?>">
                        <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
                        <input type="hidden" name="stx" value="<?php echo $stx ?>">
                        <input type="hidden" name="spt" value="<?php echo $spt ?>">
                        <input type="hidden" name="sst" value="<?php echo $sst ?>">
                        <input type="hidden" name="sod" value="<?php echo $sod ?>">
                        <input type="hidden" name="page" value="<?php echo $page ?>">


                            <div class="form_flex">
                                <label for="name1">이름</label>
                                <input type="text" id="name1" name="wr_name" placeholder="이름을 입력해주세요." required>
                            </div>
                            <div class="form_flex">
                                <label for="contact1">연락처</label>
                                <input type="tel" id="contact1" name="wr_subject" placeholder="(예) 010-0000-0000" required>
                            </div>
                            <div class="form_flex">
                                <label for="email1">이메일</label>
                                <input type="email" id="email1" name="wr_1" placeholder="이메일 형식으로 작성해주세요." required>
                            </div>
                            <div class="form_flex">
                                <label for="region1">창업희망지역</label>
                                <input type="text" id="region1" name="wr_2" placeholder="창업희망지역을 입력해주세요." required>
                            </div>
                            
                            <label for="inquiry1">문의내용</label>
                            <textarea id="inquiry1" name="wr_content" placeholder="문의내용을 입력해주세요." required></textarea>
                            
                            <button type="submit">문의하기</button>

                            
                        </form>
                    </div>
                    <div class="shop_wrap blue">
                        <h5>비의료진 창업 문의</h5>
                        <p>필라테스 강사(비의료진) 메디탑 필라테스 창업 문의입니다.</p>
                        <form name="fwrite" id="fwrite" action="<?php echo G5_URL ?>/bbs/write_update.php?bo_table=non_medical_start" onsubmit="return check_hj('name2','contact2','email2','region2','inquiry2');" method="post" enctype="multipart/form-data" autocomplete="off">
                        
                        <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
                        <input type="hidden" name="w" value="<?php echo $w ?>">
                        <input type="hidden" name="bo_table" value="non_medical_start">
                        <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
                        <input type="hidden" name="sca" value="<?php echo $sca ?>">
                        <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
                        <input type="hidden" name="stx" value="<?php echo $stx ?>">
                        <input type="hidden" name="spt" value="<?php echo $spt ?>">
                        <input type="hidden" name="sst" value="<?php echo $sst ?>">
                        <input type="hidden" name="sod" value="<?php echo $sod ?>">
                        <input type="hidden" name="page" value="<?php echo $page ?>">


                            <div class="form_flex">
                                <label for="name2">이름</label>
                                <input type="text" id="name2" name="wr_name" placeholder="이름을 입력해주세요." required>
                            </div>
                            <div class="form_flex">
                                <label for="contact2">연락처</label>
                                <input type="tel" id="contact2" name="wr_subject" placeholder="(예) 010-0000-0000" required>
                            </div>
                            <div class="form_flex">
                                <label for="email2">이메일</label>
                                <input type="email" id="email2" name="wr_1" placeholder="이메일 형식으로 작성해주세요." required>
                            </div>
                            <div class="form_flex">
                                <label for="region2">창업희망지역</label>
                                <input type="text" id="region2" name="wr_2" placeholder="창업희망지역을 입력해주세요." required>
                            </div>
                            
                            <label for="inquiry2">문의내용</label>
                            <textarea id="inquiry2" name="wr_content" placeholder="문의내용을 입력해주세요." required></textarea>
                            
                            <button type="submit">문의하기</button>
                        </form>
                    </div>
                </div>
            </div>
            <script>
                function check_hj(name,telnumber,email,region,inquiry){
                    var chbox1 = document.getElementById(name);
                    var chbox2 = document.getElementById(telnumber);
                    var chbox3 = document.getElementById(email);
                    var chbox4 = document.getElementById(region);
                    var chbox5 = document.getElementById(inquiry);
                    if($(chbox1).val() ==""){
                        alert("이름을 입력해주세요.");
                        return false;
                    }else if($(chbox2).val() ==""){
                        alert("연락처를 남겨주세요.")
                        return false;
                    }else if($(chbox3).val() ==""){
                        alert("이메일을 남겨주세요.");
                        return false;
                    }else if($(chbox4).val() ==""){
                        alert("희망지역을 남겨주세요.")
                        return false;
                    }else if($(chbox5).val()==""){
                        alert("문의내용을 남겨주세요.")
                        return false
                    }else{
                        alert("창업문의가 접수되었습니다.");
                        return true;
                        window.location.href="/"
                    }
                }
            </script>
        </main>

<?php include_once(G5_PATH.'/tail.php'); ?>