<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>




<main>
            <section id="mainVisual">
                <div class="main_slide">
                    <figure class="itm01"></figure>
                    <figure class="itm02"></figure>
                    <figure class="itm03"></figure>
                    <figure class="itm04"></figure>
                    <figure class="itm05"></figure>
                    <figure class="itm06"></figure>
                </div>
                <div class="inner">
                    <div class="scroll_down_icon">
                        <span class="scroll_down_icon_mouse">
                            <span class="scroll_down_icon_mosue_move"></span>
                        </span>
                        <div class="scroll_down_text">스크롤을 내리세요!</div>
                    </div>
                </div>
            </section>
            <section id="newMenu">
                <div class="inner">
                    <h2>NEW MENU</h2>
                    <P>지금 메가MGC커피에서
                        상큼한 딸기를 만나, 당신의 일상을 달콤하게 시작해보세요.</P>
                    <a class="show_more" href="">메뉴 더보기</a>
                    <div class="pro_slide">
                        <figure>
                            <div class="menu_box01">
                                <img src="<?= G5_THEME_URL ?>/img/menu01.jpg" alt="">
                                <div class="cont_text_title">딸기쿠키프라페</div>
                                <div class="cont_text_info">부드러운 바닐라와 달달한 딸기,바삭한 오레오 쿠키가 <br /> 달콤한 하모니를 선물하는 프라페.</div>
                            </div>
                        </figure>
                        <figure>
                            <div class="menu_box02">
                                <img src="<?= G5_THEME_URL ?>/img/menu02.jpg" alt="">
                                <div class="cont_text_title">딸기주스</div>
                                <div class="cont_text_info">새콤달콤한 딸기주스에 피쉬 콜라겐을 더해<br />건강한 블렌딩 주스</div>
                            </div>
                        </figure>
                        <figure>
                            <div class="menu_box03">
                                <img src="<?= G5_THEME_URL ?>/img/menu03.png" alt="">
                                <div class="cont_text_title">리얼 베리 티플레저</div>
                                <div class="cont_text_info">상큼한 생딸기, 라즈베리가 히비스커스 티베이스와 만나, <br/>청량한 달콤함을 전하는 티플레저</div>
                            </div>
                        </figure>
                        <figure>
                            <div class="menu_box04">
                                <img src="<?= G5_THEME_URL ?>/img/menu05.png" alt="">
                                <div class="cont_text_title">딸기라떼</div>
                                <div class="cont_text_info">산뜻하고 달콤한 딸기가 부드러운 우유와 어우러져<br />더욱 기분 좋게 즐기는 아이스 라떼.</div>
                            </div>
                        </figure>
                        <figure>
                            <div class="menu_box05">
                                <img src="<?= G5_THEME_URL ?>/img/menu06.jpg" alt="">
                                <div class="cont_text_title">그릭요거 딸기놀라</div>
                                <div class="cont_text_info">생딸기와 라즈베리가 들어간 그릭요거트에<br />건강한 그래놀라가 만나 든든하게 즐기는 한 끼 메뉴</div>
                            </div>
                        </figure>
                        <figure>
                            <div class="menu_box06">
                                <img src="<?= G5_THEME_URL ?>/img/menu07.jpg" alt="">
                                <div class="cont_text_title">크리미 생딸기 도넛</div>
                                <div class="cont_text_info">부드러운 우유크림에 생딸기를 넣어<br />더욱 달콤상큼한 생딸기 도넛</div>
                            </div>
                        </figure>

                    </div>
                </div>
                <div class="arrows">
                    <i class="xi-angle-left"></i>
                    <i class="xi-angle-right"></i>
                </div>
            </section>
            <section id="franchise">
                <div class="inner">
                    <h2>FRANCHISE MEGA MGC COFFEE</h2>
                    <p>지금, 메가MGC커피에서
                        창업성공 스토리를 경험해보세요.</p>
                    <p class="desc">합리적인 창업비용과 다양한 경험을 바탕으로,다양한 노하우를 전수하여 창업 성공을 약속드립니다.</p>
                    <div class="franchise_video">
                        <iframe width="1200" height="675" src="https://www.youtube.com/embed/Ppe5NIRco8A"
                            title="메가MGC커피 창업 정보 안내" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>

                </div>
            </section>

            <section id="event">
                <div class="inner">
                    <div class="inner">
                        <h2>MEGA EVENT</h2>
                        <P>전체 매장 및 각 매장에서 다양한 이벤트가 진행중 입니다.</P>
                        <a class="show_more" href="">이벤트 더보기</a>
                        <div class="event_box">
                            <figure>
                                <div class="event_box01">
                                    <img src="<?= G5_THEME_URL ?>/img/event01.jpg" alt="">
                                    <div class="cont_text_title">
                                        2월 메가MGC커피X 하나 원큐페이</div>
                                    <div class="cont_text_info">부드러운 바닐라와 달달한 딸기,바삭한 오레오 쿠키가 달콤한 하모니를 선물하는 프라페.</div>
                                </div>
                            </figure>


                            <figure>
                                <div class="event_box01">
                                    <img src="<?= G5_THEME_URL ?>/img/event02.png" alt="">
                                    <div class="cont_text_title">
                                        메가MGC커피X 페이코 이벤트</div>
                                    <div class="cont_text_info">
                                        *페이코 ID당 월 1만 포인트 (초과 이후에는 0.5% 적립)
                                    </div>
                                </div>
                            </figure>


                            <figure>
                                <div class="event_box01">
                                    <img src="<?= G5_THEME_URL ?>/img/event03.jpg" alt="">
                                    <div class="cont_text_title">2월 메가MGC커피X 하나 원큐페이</div>
                                    <div class="cont_text_info">
                                        딸기시즌 오픈 기념 이벤트를 진행합니다 !
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
        </main>









<?php
include_once(G5_THEME_PATH.'/tail.php');