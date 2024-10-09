<div class="card__item">
    <div class="card__img">
        <img src="<?= get_the_post_thumbnail_url('', 'thumbnail') ?>');" alt="">
        <p class="title"><?= get_the_title() ?></p>
    </div>
    <div class="card__text">
        <div class="anons"><?= the_excerpt() ?></div>
        <a href="<?php the_permalink(); ?>">Подробнее</a>
    </div>
</div>