<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

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
            <div class="tab_menu content_inner">
                <ul class="m4_tab">
                    <li><a href="/bbs/board.php?bo_table=branch">지점 등록</a></li>
                    <li class="active"><a href="/bbs/board.php?bo_table=fast_consulting">빠른상담 확인</a></li>
                    <li><a href="/bbs/board.php?bo_table=medical_start">의료진 창업 문의 확인</a></li>
                    <li><a href="/bbs/board.php?bo_table=non_medical_start">비의료진 창업 문의 확인</a></li>
                    <li><a href="/bbs/board.php?bo_table=director">지도자반 교육 문의 확인</a></li>
                </ul>
            </div>

<!-- 게시판 목록 시작 { -->
<div id="bo_list" style="width:<?php echo $width; ?>">
    <h2><?php echo $board['bo_subject'] ?></h2>

    <!-- 게시판 카테고리 시작 { -->
    <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
        <ul id="bo_cate_ul"> 
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>
    <!-- } 게시판 카테고리 끝 -->
    
    <!-- 각 지점 탭메뉴 -->
    <?php 
                        
        $bo_table = 'branch'; // 예시 게시판 아이디

        // 쿼리 작성 
        $sql = "SELECT wr_subject FROM g5_write_{$bo_table} ORDER BY wr_id DESC";
        $result = sql_query($sql);

        // 게시글 출력
        if($stx=='') $acc = 'on';
        else $acc = '';
        $lists = "<li class='{$acc}'><a href='/bbs/board.php?bo_table=fast_consulting'>전체</a></li>";
        
        while ($row = sql_fetch_array($result)) {
            // $actived = ''
            if($row['wr_subject']==$stx) $actived = 'on';
            else $actived = '';
            $lists .= "<li class='{$actived}'><a href='/bbs/board.php?bo_table=fast_consulting&sca=&sop=and&sfl=wr_content&stx={$row['wr_subject']}'>{$row['wr_subject']}</a></li>";
        }

    ?>
    <!-- /bbs/board.php?bo_table=fast_consulting&sca=&sop=and&sfl=wr_content&stx=대화점 -->
    <ul class="branch_list">
        <!-- <li class="on"><a href="/bbs/board.php?bo_table=fast_consulting">전체</a></li> -->
        <?php echo $lists; ?>
    </ul>

    <form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">
    <input type="hidden" name="wr_10" value="대기중">

    <!-- 게시판 페이지 정보 및 버튼 시작 { -->
    <div id="bo_btn_top">
        <div id="bo_list_total">
            <span>Total <?php echo number_format($total_count) ?>건</span>
            <?php echo $page ?> 페이지
        </div>

        <ul class="btn_bo_user">
        	<?php if ($is_admin == 'super' || $is_auth) {  ?>
        	<li>
            <button type="button" class="btn_more_opt is_list_btn btn_b01 btn" title="게시판 리스트 옵션"><i class="fa fa-ellipsis-v" aria-hidden="true"></i><span class="sound_only">게시판 리스트 옵션</span></button>
                <?php if ($is_checkbox) { ?>    
                <ul class="more_opt is_list_btn">  
                    <li><button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value">선택삭제</button></li>
                    <li><button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value">선택복사</button></li>
                    <li><button type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value">선택이동</button></li>
                </ul>
		        <?php } ?>
        	</li>
        	<?php }  ?>
        </ul>
    </div>
    <!-- } 게시판 페이지 정보 및 버튼 끝 -->
        	
    <div class="tbl_head01 tbl_wrap">
            
            
            
            
            
        <?php
        for ($i=0; $i<count($list); $i++) {
        	if ($i%2==0) $lt_class = "even";
        	else $lt_class = "";
		?>

        <?php if ($is_checkbox) { ?>
            <div class="td_chk chk_box">
				<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="selec_chk">
            	<label for="chk_wr_id_<?php echo $i ?>">
            		<span></span>
            		<b class="sound_only"><?php echo $list[$i]['subject'] ?></b>
            	</label>
            </div>
        <?php } ?>


        <div class="bo_cnt">
                    <div class="reser_grid">
                        <div><span><?php echo $list[$i]['wr_name'] ?></span></div>
                        <div><span><?php echo $list[$i]['wr_1'] ?></span></div>
                        <div><span><?php echo $list[$i]['wr_2'] ?></span></div>
                        <div><span><?php echo $list[$i]['wr_subject'] ?></span></div>
                        <div><span><?php echo $list[$i]['wr_content'] ?></span></div>
                        <div><span><?php echo $list[$i]['wr_datetime'] ?></span></div>
                        <div>
                            <select name="wr_10" id="td_state" onchange="location.href=this.value">
                            <option value="<?php echo G5_BBS_URL; ?>/fast_consulting_update.php?rid=<?php echo $list[$i]['wr_id']; ?>&rcon=<?php echo "대기중"; ?>" <?php if($list[$i]['wr_10']=='대기중') echo 'selected'; ?>>대기중</option>
                                    <option value="<?php echo G5_BBS_URL; ?>/fast_consulting_update.php?rid=<?php echo $list[$i]['wr_id']; ?>&rcon=<?php echo "예약보류"; ?>" <?php if($list[$i]['wr_10']=='예약보류') echo 'selected'; ?>>예약보류</option>
                                    <option value="<?php echo G5_BBS_URL; ?>/fast_consulting_update.php?rid=<?php echo $list[$i]['wr_id']; ?>&rcon=<?php echo "예약완료"; ?>" <?php if($list[$i]['wr_10']=='예약완료') echo 'selected'; ?>>예약완료</option>
                                    <option value="<?php echo G5_BBS_URL; ?>/fast_consulting_update.php?rid=<?php echo $list[$i]['wr_id']; ?>&rcon=<?php echo "부재중"; ?>" <?php if($list[$i]['wr_10']=='부재중') echo 'selected'; ?>>부재중</option>
                                    <option value="<?php echo G5_BBS_URL; ?>/fast_consulting_update.php?rid=<?php echo $list[$i]['wr_id']; ?>&rcon=<?php echo "확인완료"; ?>" <?php if($list[$i]['wr_10']=='확인완료') echo 'selected'; ?>>확인완료</option>
                            </select>
                        </div></div>
                    </div>
                    



                
        <?php } ?>
        <?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table">게시물이 없습니다.</td></tr>'; } ?>
        </div>
        </div>
        </div>
    </div>
    
	<!-- 페이지 -->
	<?php echo $write_pages; ?>
	<!-- 페이지 -->
	
   
    </form>

    
    <!-- 게시판 검색 시작 { -->
    <div class="bo_sch_wrap">
        <fieldset class="bo_sch">
            <h3>검색</h3>
            <form name="fsearch" method="get">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sca" value="<?php echo $sca ?>">
            <input type="hidden" name="sop" value="and">
            <label for="sfl" class="sound_only">검색대상</label>
            <select name="sfl" id="sfl">
                <?php echo get_board_sfl_select_options($sfl); ?>
            </select>
            <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
            <div class="sch_bar">
                <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder=" 검색어를 입력해주세요">
                <button type="submit" value="검색" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
            </div>
            <button type="button" class="bo_sch_cls" title="닫기"><i class="fa fa-times" aria-hidden="true"></i><span class="sound_only">닫기</span></button>
            </form>
        </fieldset>
        <div class="bo_sch_bg"></div>
    </div>
    <script>
    jQuery(function($){
        // 게시판 검색
        $(".btn_bo_sch").on("click", function() {
            $(".bo_sch_wrap").toggle();
        })
        $('.bo_sch_bg, .bo_sch_cls').click(function(){
            $('.bo_sch_wrap').hide();
        });
    });
    </script>
    <!-- } 게시판 검색 끝 --> 
</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}

// 게시판 리스트 관리자 옵션
jQuery(function($){
    $(".btn_more_opt.is_list_btn").on("click", function(e) {
        e.stopPropagation();
        $(".more_opt.is_list_btn").toggle();
    });
    $(document).on("click", function (e) {
        if(!$(e.target).closest('.is_list_btn').length) {
            $(".more_opt.is_list_btn").hide();
        }
    });
});
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
