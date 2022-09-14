<section class="u-align-center u-clearfix u-palette-5-dark-2 u-section-1" id="carousel_8667">
    <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
<!--        <div class="u-black u-shape u-shape-rectangle u-shape-1"></div>-->
<!--        <div class="u-custom-color-1 u-shape u-shape-rectangle u-shape-2"></div>-->
        <div class="u-clearfix u-expanded-width-sm u-expanded-width-xs u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-container-style u-image u-image-default u-layout-cell u-right-cell u-size-29 u-image-1" data-image-width="4608" data-image-height="3456">
                    <div class="u-container-layout u-container-layout-2"></div>
                </div>
<!--                <div class="u-layout-row">-->
<!--                    <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-31 u-white u-layout-cell-1">-->
<!--                        <div class="u-container-layout u-container-layout-1">-->
<!--                            <h1 class="u-custom-font u-font-pt-sans u-text u-text-1">Встроенная&nbsp;мебель на заказ-->
<!--                            </h1>-->
<!--                            <h3 class="u-custom-font u-font-roboto u-text u-text-2"> Шкафы и двери купе, кухни, Гардеробная система АРИСТО,&nbsp;&nbsp;корпуская мебель</h3>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="u-container-style u-image u-image-default u-layout-cell u-right-cell u-size-29 u-image-1" data-image-width="4608" data-image-height="3456">-->
<!--                        <div class="u-container-layout u-container-layout-2"></div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</section>
<section class="u-align-center u-clearfix u-section-2" id="carousel_38ad">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-layout-grid u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <?php foreach ($items as $item): ?>
                    <?php if (count($items)!=$item['id']): ?>
                        <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle">
                            <div class="u-container-layout u-similar-container u-container-layout-1">
                                <div class="u-align-center u-container-style u-expanded-width u-group u-video-cover u-white u-group-1">
                                    <div class="u-container-layout u-container-layout-2">
                                        <h3 class="u-custom-font u-font-roboto u-text u-text-1"><?=$item['title'];?></h3>
                                    </div>
                                </div>
                                <img alt="" class="u-border-grey-15 u-expanded-width-xl u-hover-feature u-image u-image-round u-image-1" src="<?=$item['path'];?>" data-image-width="360" data-image-height="259" data-href="catalog/type/<?php echo $item['id']; ?>" data-page-id="354015450">
                                <div class="u-border-1 u-border-custom-color-1 u-container-style u-expanded-width u-group u-shape-rectangle u-group-2" data-href="catalog/type/<?php echo $item['id']; ?>">
                                    <div class="u-container-layout u-container-layout-3">
                                        <p class="u-text u-text-2">
                                            <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-grey-80 u-btn-1" href="catalog/type/<?php echo $item['id']; ?>" data-page-id="354015450"><span class="u-file-icon u-icon u-text-custom-color-1 u-icon-1"><img src="public/img/1829552.png" alt=""></span>&nbsp;Подробнее
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php foreach ($items as $item): ?>
    <?php if (count($items)==$item['id']): ?>
        <section class="u-align-center u-clearfix u-section-2" id="sec-402a">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle">
                    <div class="u-container-layout u-similar-container u-container-layout-1">
                        <div class="u-align-center u-container-style u-expanded-width u-group u-video-cover u-white u-group-1">
                            <div class="u-container-layout u-container-layout-2">
                                <h3 class="u-custom-font u-font-roboto u-text u-text-1"><?=$item['title'];?></h3>
                            </div>
                        </div>
                        <img alt="" class="u-border-grey-15 u-expanded-width-xl u-hover-feature u-image u-image-round u-image-1" src="<?=$item['path'];?>" data-image-width="360" data-image-height="259" data-href="catalog/type/<?php echo $item['id']; ?>" data-page-id="354015450">
<!--                        <div class="u-border-1 u-border-custom-color-1 u-container-style u-expanded-width u-group u-shape-rectangle u-group-2" data-href="catalog/type/--><?php //echo $item['id']; ?><!--">-->
<!--                            <div class="u-container-layout u-container-layout-3">-->
<!--                                <p class="u-text u-text-2">-->
<!--                                    <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-grey-80 u-btn-1" href="catalog/type/--><?php //echo $item['id']; ?><!--" data-page-id="354015450"><span class="u-file-icon u-icon u-text-custom-color-1 u-icon-1"><img src="public/img/1829552.png" alt=""></span>&nbsp;Подробнее-->
<!--                                    </a>-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </section>
    <?php endif;?>
<?php endforeach; ?>

<!--    <section class="u-align-center u-clearfix u-section-3" id="sec-c94d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-layout-grid u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img class="u-border-2 u-border-custom-color-1 u-expanded-width u-image u-image-round u-radius-10 u-image-1" src="public/img/materials.png" alt="" data-image-width="360" data-image-height="71">
                <h3 class="u-custom-item u-text u-text-1">Материалы&nbsp; &nbsp; &nbsp;&nbsp;</h3>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <img class="u-border-2 u-border-custom-color-1 u-expanded-width u-image u-image-round u-radius-10 u-image-2" src="public/img/materials.png" alt="" data-image-width="360" data-image-height="71">
                <h3 class="u-custom-item u-text u-text-2">Цвета</h3>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <img class="u-border-2 u-border-custom-color-1 u-expanded-width u-image u-image-round u-radius-10 u-image-3" src="public/img/furniture.png" alt="" data-image-width="360" data-image-height="70">
                <h3 class="u-custom-item u-text u-text-3">Фурнитура</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->