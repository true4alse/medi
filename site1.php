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
                        <div class="sub_banner_tit">사이트 이용 안내</div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="tab_menu content_inner">
                <ul>
                    <li><a href="/site2.php">개인정보처리방침</a></li>
                    <li class="active"><a href="/site1.php">이용약관</a></li>
                </ul>
            </div>
            <div class="content_inner inner_top inner_bottom">
                <h4>이용약관</h4>
                <div class="site">
                    메디탑 필라테스 앤 피티(이하 ‘회사’라 한다)의 홈페이지를 이용해 주셔서 감사합니다.
                    아래의 이용약관은 회사 홈페이지의 이용에 관한 규정을 설명하고 있습니다.
                    홈페이지를 이용함으로써 아래의 약관에 동의한 것으로 간주됩니다.
                    <br>
                    <br>
                    <h6>제1조(목적)</h6>
                    본 약관은 회사의 홈페이지를 통해 제공되는 서비스의 이용과 관련하여 발생하는 권리, 의무 및 책임사항을 규정함을 목적으로 합니다.
                    <br>
                    <br>
                    <h6>제2조(정의)</h6>
                    1. "홈페이지"란 회사이 운영하는 웹 사이트를 의미합니다.<br>
                    2. "이용자"란 본 홈페이지에 접속하여 이 약관에 따라 회사이 제공하는 서비스를 이용하는 개인을 말합니다.<br>
                    <br>
                    <h6>제3조(서비스의 제공 및 변경)</h6>
                    1. 회사는 이용자에게 아래의 서비스를 제공합니다.
                    <br>
                    1)온라인 문의 서비스
                    <br>
                    2)기타 회사이 정하는 서비스
                    <br>
                    <br>
                    <h6>제4조(이용자의 의무)</h6>
                    1. 이용자는 회사의 서비스를 이용함에 있어 다음의 사항을 준수해야 합니다.
                    <br>
                    1) 본인의 개인정보를 정확하게 제공하여야 합니다.
                    <br>
                    2) 회사의 서비스를 이용하여 얻은 정보를 무단으로 복제, 변경, 유포하지 않아야 합니다.
                    <br>
                    <br>
                    2. 이용자는 회사의 서비스를 이용하는 과정에서 다른 이용자 또는 제3자의 권리나 명예를 침해해서는 안 됩니다.
                    <br>
                    <br>
                    <h6>제5조(저작권의 귀속 및 이용 제한)</h6>
                    1. 회사이 홈페이지를 통해 제공하는 모든 콘텐츠(문서, 그래픽, 로고, 아이콘 등)의 저작권은 회사에게 속합니다.
                    <br>
                    2. 이용자는 회사의 사전 동의 없이 홈페이지에서 제공되는 콘텐츠를 복제, 수정, 배포할 수 없습니다.
                    <br>
                    <br>
                    <h6>제6조(면책)</h6>
                    1. 회사는 천재지변, 전쟁, 기간통신사업자의 서비스 중단 등 불가항력적인 사유로 인해 서비스 제공에 장애가 생길 경우 이에 대한 책임을 지지 않습니다.
                    <br>
                    2. 회사는 이용자가 본 홈페이지에 게시한 정보의 정확성, 신뢰성 등에 대해 일체의 책임을 지지 않습니다.
                    <br>
                    <br>
                    <h6>제7조(분쟁의 해결)</h6>
                    - 본 약관에 관하여 분쟁이 발생할 경우, 양 당사자 간의 협의를 통해 원만하게 해결하며, 이에 불가피한 경우 관할 법원에 소를 제기할 수 있습니다.
                    <br>
                    <br>
                    <h6>제8조(약관의 변경)</h6>
                    - 회사는 필요한 경우 이용약관을 변경할 수 있으며, 변경된 약관은 홈페이지에 공지함으로써 효력을 발생합니다.
                    <br>
                    <br>
                    <h6>제9조(개인정보 보호정책)</h6>
                    - 회사는 이용자의 개인정보를 보호하기 위해 노력하며, 관련 법령에 따라 적절한 조치를 취합니다. 개인정보 보호정책은 별도로 공지됩니다.
                    <br>
                    <br>
                    <h6>제10조(유효기간)</h6>
                    - 본 약관은 2024년 7월 17일부터 시행됩니다.
                    <br>
                    <br>
                </div>
            </div>
            
        </main>

        <?php include_once(G5_PATH.'/tail.php'); ?>