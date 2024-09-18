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
                    <li class="active"><a href="/menu4_1.php">지점 소개</a></li>
                    <li><a href="/menu4_2.php">수강후기</a></li>
                    <li><a href="/menu4_3.php">창업 문의</a></li>
                    <li><a href="/menu4_4.php">지도자반 교육 문의</a></li>
                    <li><a href="/menu4_5.php">워크샵</a></li>
                </ul>
            </div>
            <div class="content_inner inner_top">
                <h4>지점 소개</h4>
            </div>

            
            <!-- <script class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script> -->




            <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=de19dc62886193655e5b2940a383215a"></script>
            <?php
                // 그누보드 환경 설정 불러오기
                // include_once('/common.php');

                // 게시판 아이디 설정 (가져오려는 게시판 아이디 입력)
                $bo_table = 'branch'; // 예시 게시판 아이디

                // 쿼리 작성 (최신 글 10개를 가져오는 예시)
                $sql = "SELECT * FROM g5_write_{$bo_table} ORDER BY wr_id DESC LIMIT 10";
                $result = sql_query($sql);

                // 게시글 출력
                while ($row = sql_fetch_array($result)) { ?>
                    <!-- echo "<h2>" . $row['wr_subject'] . "</h2>"; // 글 제목
                    echo "<p>" . $row['wr_content'] . "</p>"; // 글 내용
                    echo "<hr>"; -->

                    
                    <div class="store">
                        <div class="content_inner">
                            <div class="store_wrap">
                                <div class="kakao_wrap">
                                    <?php echo $row['wr_content']; ?>
                                </div>
                                <div class="store_txt">
                                    <?php echo "<h5>" . $row['wr_subject'] . "</h5>"; ?>
                                    <div>
                                        <div class="location_tit">주소</div>
                                        <address><?php echo "<p>" . $row['wr_2'] . "</p>"; ?></address>
                                        <div class="location_tit">전화번호</div>
                                        <p class="location_number"><?php echo $row["wr_1"]; ?></p>
                                    </div>
                                    <ul>
                                        <li  data-aos="zoom-in">
                                            <a href="<?php echo $row["wr_3"]; ?>">
                                                <img src="img/m41_1.png" alt="오시는 길">오시는 길
                                            </a>
                                        </li>
                                        <li  data-aos="zoom-in">
                                            <a href="tel:<?php echo $row["wr_1"]; ?>">
                                                <img src="img/m41_2.png" alt="전화 문의">전화 문의
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            
            

        </main>

<?php include_once(G5_PATH.'/tail.php'); ?>