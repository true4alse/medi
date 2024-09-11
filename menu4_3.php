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
                        <form action="/submit" method="post">
                            <div class="form_flex">
                                <label for="name">이름</label>
                                <input type="text" id="name" name="name" placeholder="이름을 입력해주세요." required>
                            </div>
                            <div class="form_flex">
                                <label for="contact">연락처</label>
                                <input type="tel" id="contact" name="contact" placeholder="(예) 010-0000-0000" required>
                            </div>
                            <div class="form_flex">
                                <label for="email">이메일</label>
                                <input type="email" id="email" name="email" placeholder="이메일 형식으로 작성해주세요." required>
                            </div>
                            <div class="form_flex">
                                <label for="region">창업희망지역</label>
                                <input type="text" id="region" name="region" placeholder="창업희망지역을 입력해주세요." required>
                            </div>
                            
                            <label for="inquiry">문의내용</label>
                            <textarea id="inquiry" name="inquiry" placeholder="문의내용을 입력해주세요." required></textarea>
                            
                            <button type="submit">문의하기</button>
                        </form>
                    </div>
                    <div class="shop_wrap blue">
                        <h5>비의료진 창업 문의</h5>
                        <p>필라테스 강사(비의료진) 메디탑 필라테스 창업 문의입니다.</p>
                        <form action="/submit" method="post">
                            <div class="form_flex">
                                <label for="name">이름</label>
                                <input type="text" id="name" name="name" placeholder="이름을 입력해주세요." required>
                            </div>
                            <div class="form_flex">
                                <label for="contact">연락처</label>
                                <input type="tel" id="contact" name="contact" placeholder="(예) 010-0000-0000" required>
                            </div>
                            <div class="form_flex">
                                <label for="email">이메일</label>
                                <input type="email" id="email" name="email" placeholder="이메일 형식으로 작성해주세요." required>
                            </div>
                            <div class="form_flex">
                                <label for="region">창업희망지역</label>
                                <input type="text" id="region" name="region" placeholder="창업희망지역을 입력해주세요." required>
                            </div>
                            
                            <label for="inquiry">문의내용</label>
                            <textarea id="inquiry" name="inquiry" placeholder="문의내용을 입력해주세요." required></textarea>
                            
                            <button type="submit">문의하기</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </main>

<?php include_once(G5_PATH.'/tail.php'); ?>