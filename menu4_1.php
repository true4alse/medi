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
        
        <?php
        // 그누보드 환경 설정 불러오기
        include_once('/common.php');

        // 게시판 아이디 설정 (가져오려는 게시판 아이디 입력)
        $bo_table = 'branch'; // 예시 게시판 아이디

        // 쿼리 작성 (최신 글 10개를 가져오는 예시)
        $sql = "SELECT * FROM g5_write_{$bo_table} ORDER BY wr_id DESC LIMIT 10";
        $result = sql_query($sql);

        // 게시글 출력
        while ($row = sql_fetch_array($result)) {
            echo "<h2>" . $row['wr_subject'] . "</h2>"; // 글 제목
            echo "<p>" . $row['wr_content'] . "</p>"; // 글 내용
            echo "<hr>";
        }
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


            <div class="store m41">
                <div class="content_inner">
                    <div class="store_wrap">
                        <div class="kakao_wrap">
                            <!-- * 카카오맵 - 지도퍼가기 -->
                            <!-- 1. 지도 노드 -->
                            <div id="daumRoughmapContainer1722225009423" class="root_daum_roughmap root_daum_roughmap_landing" style="width: 100%;height: 100%;"></div>

                            <!--
                                2. 설치 스크립트
                                * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                            -->
                            <script class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                            <!-- 3. 실행 스크립트 -->
                            <script >
                                new daum.roughmap.Lander({
                                    "timestamp" : "1722225009423",
                                    "key" : "2k7g3"
                                    // "mapWidth" : "900",
                                    // "mapHeight" : "700"
                                }).render();
                            </script>
                        </div>
                        <div class="store_txt">
                            <h5>대화점</h5>
                            <div>
                                <div class="location_tit">주소</div>
                                <address><p>경기 고양시 일산서구 중앙로 1564 그린월드 204호</p></address>
                                <div class="location_tit">전화번호</div>
                                <p class="location_number">0507-1441-9297</p>
                            </div>
                            <ul>
                                <li  data-aos="zoom-in">
                                    <a href="https://naver.me/5RRn0uY4">
                                        <img src="img/m41_1.png" alt="오시는 길">오시는 길
                                    </a>
                                </li>
                                <li  data-aos="zoom-in">
                                    <a href="tel:0507-1441-9297">
                                        <img src="img/m41_2.png" alt="전화 문의">전화 문의
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="store blue">
                <div class="content_inner">
                    <div class="store_wrap">
                        <div class="kakao_wrap">
                            <!-- * 카카오맵 - 지도퍼가기 -->
                            <!-- 1. 지도 노드 -->
                            <div id="daumRoughmapContainer1722229644521" class="root_daum_roughmap root_daum_roughmap_landing" style="width: 100%;height: 100%;"></div>

                            <!--
                                2. 설치 스크립트
                                * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                            -->
                            <script class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                            <!-- 3. 실행 스크립트 -->
                            <script >
                                new daum.roughmap.Lander({
                                    "timestamp" : "1722229644521",
                                    "key" : "2k7ht"
                                    // "mapWidth" : "900",
                                    // "mapHeight" : "900"
                                }).render();
                            </script>
                        </div>
                        <div class="store_txt">
                            <h5>흑석점</h5>
                            <div>
                                <div class="location_tit">주소</div>
                                <address><p>서울 동작구 현충로 80 2층</p></address>
                                <div class="location_tit">전화번호</div>
                                <p class="location_number">0507-1310-2649</p>
                            </div>
                            <ul>
                                <li  data-aos="zoom-in">
                                    <a href="https://naver.me/G7ZX5x0G">
                                        <img src="img/m41_1.png" alt="오시는 길">오시는 길
                                    </a>
                                </li>
                                <li  data-aos="zoom-in">
                                    <a href="tel:0507-1310-2649">
                                        <img src="img/m41_2.png" alt="전화 문의">전화 문의
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </main>

<?php include_once(G5_PATH.'/tail.php'); ?>