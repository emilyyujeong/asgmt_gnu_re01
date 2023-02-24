
<?
        if($board['bo_table'] == 'nbbs') {
            $cate_num = 5;
            $page_num = 1;
            $cate_title = 'MEGA NEWS';
            $cate_description = '자주하는 질문';
            $page_title = 'FAQ';
        }
?>

<div id="sub">
            <div class="sub_banner bg0<?= $cate_num ?>" style="background-color: #444;">
                <div class="inner">
                    <strong><?= $cate_title ?></strong>
                    <span><?= $cate_description ?></span>
                </div>
            </div>

            <div class="sub_page">
                <div class="inner">
                    <ul>
                        <li>HOME</li>
                        <li><?= $cate_title ?></li>
                        <li><?= $page_title ?></li>
                    </ul>
                </div>
            </div>
