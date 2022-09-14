<?php if (!empty($intro_text)): ?>
    <section class="u-clearfix u-grey-80 u-hidden-sm u-hidden-xs u-section-item" id="sec-21cb">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-spacing-vertical u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <p class="u-text u-text-1"> <?php echo $intro_text; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (!empty($items)): ?>
    <section class="skrollable u-align-center u-clearfix u-section-2-item" id="carousel_258a">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-blog u-expanded-width u-layout-grid u-pagination-center u-blog-1">
                <div class="u-repeater u-repeater-1">
                    <?php foreach ($items as $item): ?>
                        <div class="parent_block">
                            <div class="block1"><?=$item['title'];?></div>
                            <div class="block2"><?=$item['iaddition'];?></div>
                            <?php if ($item['itemid'] == 5 || $item['itemid'] == 13 || $item['itemid'] == 14 || $item['itemid'] == 15): ?>
                                <div class="block3">
                                    <a href="/catalog/item/<?=$item['itemid'];?>" class="u-blog-control u-border-none u-btn u-button-style u-grey-50" style="position: absolute">Подробнее</a>
                                    <!--                                <a href="/catalog/item/--><?//=$item['itemid'];?><!--" class="u-blog-control u-border-none u-btn u-button-style u-custom-color-1 " style="margin-left: 150px;">Рассчитать стоимость</a>-->
                                </div>
                            <?php endif; ?>
                        </div>
                        <div >
                            <a href="/catalog/item/<?=$item['itemid'];?>">
                                <img alt="" class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-blog-control u-expanded-width u-image u-image-default u-image-3" src="/<?=$item['path'];?>" data-image-width="1920" data-image-height="1440">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </section>
<?php endif; ?>



<style type="text/css">
    .parent_block {
        position:relative;
        padding-bottom:50px;
        padding-top: 20px;
    }
    .block1 {
        /*text-decoration: underline solid black;*/
        font-weight: bold;
        /*font-color: green ;*/
        color: #4f902a;
    }
    .block2 {
        text-align:justify;
        padding-left: 10px;
        padding-top: 20px;
    }

    .block3 {
        /*position:absolute;*/
        bottom:0px;
        padding-left: 10px;
    }
</style>