<?php if (!empty($title)): ?>
<section class="u-align-center u-clearfix u-section-1" id="sec-402a">
    <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-container-style u-expanded-width u-post-details u-post-details-1">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h222 class="u-blog-control u-text u-text-9"><?=$title;?></h222>
                <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-5" src="/<?=$imgpath;?>">
                <div class="u-align-justify u-blog-control u-post-content u-text u-text-10 fr-view"><p><?=$addition;?> </p></div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>