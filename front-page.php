<?php get_header(); ?>
    <div class="kv-wrap">
        <div class="kv">
            <div class="kv-slide">
                <div>
                    <p><img src="<?php echo get_template_directory_uri(); ?>/img/kv/kv_photo1.png" alt=""></p>
                </div>
            </div>
            <div class="kv-logo">
                <div>
                    <p><img src="<?php echo get_template_directory_uri(); ?>/img/kv/kv_photo2.png" alt=""></p>
                </div>
            </div>
            <div class="kv-box1">
                <div>
                    <p><img src="<?php echo get_template_directory_uri(); ?>/img/kv/kv_photo3.png" alt=""></p>
                </div>
            </div>
            <div class="kv-box2">
                <div>
                    <p><img src="<?php echo get_template_directory_uri(); ?>/img/kv/kv_photo4.png" alt=""></p>
                </div>
            </div>
            <div class="kv-box3">
                <div>
                    <p><img src="<?php echo get_template_directory_uri(); ?>/img/kv/kv_photo5.png" alt=""></p>
                </div>
            </div>
        </div>
    </div>
    <div class="main cm-inner">
        <section class="cm-postblock">
            <h2 class="cm-postblock-head"><span>CONTENT</span></h2>
            <div class="cm-postblock-inner masonry cf">



                <?php
                    query_posts('showposts=6');
                    if (have_posts()) :
                    while (have_posts()) :
                    the_post();
                ?>


                    <?php
                    // アイキャッチ画像のIDを取得
                        $thumbnail_id = get_post_thumbnail_id();

                    // mediumサイズの画像内容を取得（引数にmediumをセット）
                        $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'large' );

                    // 取得した画像URLにてイメージタグを出力
                    // 更にdata-aliasというHTML5のカスタムデータ属性を追加
                    //echo '<div class="gallery"><img src="'.$eye_img[0].'" data-alias="img01"></div>';

                        $cat = get_the_category();
                        $cat = $cat[0];
                        $cat_name = $cat->cat_name;
                    ?>

                        <article class="postlist masonry-brick">
                            <a href="<?php the_permalink() ?>">
                                <div class="postlist__info">
                                    <span class="postlist__info--mask"></span>
                                    <p class="postlist__thum"><img src="<?php echo $eye_img[0]?>" alt=""/></p>
                                    <div class="postSocial cf">
                                        <p class="postSocial__list">
                                            <span class="postSocial__list-facebook"></span>
                                            <span class="postSocial__list-number">100</span>
                                        </p>
                                        <p class="postSocial__list">
                                            <span class="postSocial__list-twitter"></span>
                                            <span class="postSocial__list-number">999</span>
                                        </p>
                                        <p class="postSocial__list">
                                            <span class="postSocial__list-hatena"></span>
                                            <span class="postSocial__list-number">255</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="postlist__body">
                                    <h3 class="postlist__head"><?php the_title(); ?></h3>
                                    <div class="postlist__desc">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="postlist__class cf">
                                        <div class="postlist__class-date"><?php echo get_the_date('Y.m.d'); ?></div>
                                        <div class="postlist__class-cat"><?php echo $cat_name; ?></div>
                                    </div>
                                </div>
                            </a>
                        </article>


               <?php
                    endwhile;
                    endif;
                ?>


            </div>
            <div class="postlist-more">
                <div class="postlist-more-btn">
                    <a href="#">記事一覧ページへ</a>
                </div>
            </div>
        </section>
    </div>
<?php get_footer(); ?>