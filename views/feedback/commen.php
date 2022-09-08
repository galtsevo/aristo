<?php if (!empty($items)): ?>
    <?php foreach ($items as $item): ?>
        <div class="u-sheet comment">
            <p class="u-custom-font u-font-roboto u-text u-text-1"><span><?=$item['name'];?></span></p>
            <p class="u-custom-font u-font-roboto u-text u-text-1"><span><?=$item['message'];?></span></p>
            <p class="u-custom-font u-font-roboto u-text u-text-1"><span><?=date("d.m.Y H:i:s", $item['timecreate']);?></span></p>
            <a class="add_comment_button" href="/feedback/commenadd"><img title="Оставить комментарий" src="/public/img/review.png" alt="buttons" /></a>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<?php if (empty($items)): ?>
<div class="u-sheet comment">
    <p class="u-custom-font u-font-roboto u-text u-text-1"><span><?='Отзывов пока нет. Будьте первым.'?></span></p>
    <a class="add_comment_button" href="/feedback/commenadd"><img title="Оставить комментарий" src="/public/img/review.png" alt="buttons" /></a>
</div>
<?php endif; ?>

<style type="text/css">

    .add_comment_button {
        display: block;
        width: 1px;
        height: 5px;
        position: fixed;
        right: 100px;
        top: 80%;
        z-index: 99999;
    }
    @media screen and (max-width: 480px) {
        .add_palitra {
            top: 100px !important;
        }
    }
    .comment {
        /*width: 55%;*/
        border: 1px solid #66b936;
        background-color: #eee;
        border-radius: 3px; /* скругление углов блока */
        padding: 16px; /* внутренние поля */
        margin: 10px auto; /* внешние отступы */
    }

    .comment img {
        float: left; /* обтекание слева */
        margin-right: 20px; /* пространство между аватаркой и абзацем */
        /*border-radius: 50%; !* скругляет аватарку *!*/
        width: 90px;
    }

    .comment span {
        font-size: 13px;
        margin-right: 15px;
    }

    @media (max-width: 450px) {
        .comment {
            text-align: center;
        }
        .comment img {
            margin: auto;
            float: none;
            display: block;
        }
    }
</style>