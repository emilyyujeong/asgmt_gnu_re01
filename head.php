<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<?php
if(defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>

<div class="Wrap">




<header id="header">
                <div class="inner">

                    <h1>
                    <a href="/"><img src="<?= G5_THEME_URL ?>/img/logo.png" alt=""></a>
                </h1>
                    <nav class="gnb">
                        <ul>
                        <!-- 아래꺼 
                            <?
                            for ($i=0; $i<count($as_nav); $i++) {
                                echo '<li><a href="">'.$as_nav[$i].'</a>';
                                include G5_THEME_PATH.'/doc/nav0'.($i+1).'.php';
                                echo '</li>';
                            }
                        ?> -->
                            <li><? include G5_THEME_PATH.'/doc/nav01.php';?></li>
                            <li><? include G5_THEME_PATH.'/doc/nav02.php';?></li>
                            <li><? include G5_THEME_PATH.'/doc/nav03.php';?></li>
                            <li><? include G5_THEME_PATH.'/doc/nav05.php';?></li>
                           
                        </ul>
                    </nav>

                    <div class="search">
                    <form action="">
                        <input type="text" placeholder="검색어를 입력해주세요">
                        <button><i class="xi-search"></i></button>
                    </form>
                </div>
                <div class="search_toggle">
                    <button class="btn_o">
                        <i class="xi-search"></i>
                    </button>
                </div>
                <div class="m_open">
                    <button class="m_btn">
                        <span>mobile open button</span>
                    </button>
                </div>



                </div>
            </div>
        </header>

        
<?php
if(!defined('_INDEX_')) { // index가 아닐때 .................
    include G5_THEME_PATH.'/detail.head.php'; // 서브페이지 헤드
}
?>
