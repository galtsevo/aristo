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
<?php //debug($items);?>
<?php if (!empty($items)): ?>
    <section class="skrollable u-align-center u-clearfix u-section-2-item" id="carousel_258a">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-blog u-expanded-width u-layout-grid u-pagination-center u-blog-1">
                <div class="u-repeater u-repeater-1">
                    <?php foreach ($items as $item): ?>
                        <div class="u-blog-post u-container-style u-repeater-item">
                            <div class="u-container-layout u-similar-container u-container-layout-2">
                                <h2 class="u-align-center-sm u-align-center-xs u-blog-control u-text u-text-default u-text-3">
                                    <a class="u-post-header-link" href="/catalog/item/<?=$item['itemid'];?>"><?=$item['title'];?></a>
                                </h2>
                                <a class="u-post-header-link" href="/catalog/item/<?=$item['itemid'];?>">
                                    <img alt="" class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-blog-control u-expanded-width u-image u-image-default u-image-3" src="/<?=$item['path'];?>" data-image-width="1920" data-image-height="1440">
                                </a>
                                <a href="/catalog/item/<?=$item['itemid'];?>" class="u-blog-control u-border-none u-btn u-button-style u-grey-50 u-btn-3">Подробнее</a>
                                <a href="/catalog/item/<?=$item['itemid'];?>" class="u-blog-control u-border-none u-btn u-button-style u-custom-color-1 u-btn-4">Рассчитать стоимость</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="u-list-control"></div>
            </div><!--/blog-->
        </div>
    </section>
<?php endif; ?>

<?php if (!empty($addition)): ?>
    <?=$addition;?>
<?php endif; ?>