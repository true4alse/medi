<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

   

</div>

<div id="quick-placeholder">
            <aside class="quick">
            <div class="content_inner">
                <div class="quick_button">빠른 상담 신청</div>
                <form name="fwrite" id="fwrite" action="" onsubmit="" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="txt_wrap">
                        <div class="q_logo">
                            <img src="./img/h_logo.png" alt="메디탑 필라테스 로고">
                        </div>
                        <div class="b_privacy">
                            <input type="checkbox" id="c1" class="agreeChk labelchk" required>
                            <label for="c1" class="infoAgree">
                                <!-- 개인정보취급방침 -->개인정보취급방침
                                <a href="site1.html" >[더보기]</a>
                            </label>
                        </div>
                    </div>
                    <div class="form_wrap">
                        
                        <label for="cate1" class="hide_label">지점선택</label>
                        <select  name="wr_content" id="reser_contents"  class="f_cate">
                            <option value="내용입력안함" hidden="">지점 선택</option>
                            <option value="대화점">대화점</option>
                            <option value="흑석점">흑석점</option>
                            <option value="평택역">고덕(평택)점</option>
                        </select>
                        <label for="name" class="hide_label">이름</label>
                        <input type="text" id="user_named" name="wr_name" value="" placeholder="이름" class="f_name" maxlength="10">

                        <label for="hphoneall" class="hide_label">연락처</label>
                        <input type="text" id="user_hp" name="wr_subject" placeholder="연락처 (- 없이 입력)" class="f_tel" maxlength="11">

                        <label for="hphoneall" class="hide_label">상담항목</label>
                        <input type="text" id="user_hp" name="wr_subject" placeholder="상담항목" class="f_tel" maxlength="11">

                        <input type="submit" value="문의하기" class="f_submit apply subHead" accesskey="s">
                    </div>
                </form>
            </div>
        </aside>
    </div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<footer>

<div class="footer_bot">
    <div class="footer_inner bot">
        <div>
            <ul class="f_top">
                <li><a href="site1.html">개인정보처리방침</a></li>
                <li>&middot;</li>
                <li><a href="site2.html">이용약관</a></li>
                <!-- <li>&middot;</li>
                <li><a href="./site3.html">비급여 진료비 안내</a></li> -->
            </ul>
            <ul class="f_bot">
                <li>메디탑 필라테스 대화본점</li>
                <!-- <li><span>대표</span> 현낙민</li>
                <li><span>사업자번호</span> 000000000</li> -->
                <li><span>주소</span> 경기 고양시 일산서구 중앙로 1564 그린월드 204호 대화본점</li>
                <!-- <li><span>전화</span> 0507-1441-9297</li> -->
                <!-- <li><span>FAX</span> 031-8039-7561</li> -->
                <!-- <li><span>메일</span> 0000000000000000</li> -->
            </ul>
            <P>Copyright 2024 Meditop Pilates & PT. All Rights Reserved.</P>
        </div>
        <div class="f_logo">
            <img src="img/f_logo.png" alt="메디탑 필라테스 로고">
        </div>
    </div>
</div>
    <!-- <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script> -->
</footer>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");