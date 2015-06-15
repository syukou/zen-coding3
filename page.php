<?php
/*
Template Name: カテゴリー一覧
*/
?>

<?php get_header(); ?>


	<div class="main">
		<div class="main-inner">
			<div class="cm-inner cf">

				<?php get_sidebar(); ?>

				<div class="main-contents">
					<article class="post">
						<div class="post-inner cf">
							<div class="post-left" id="main">
								<div class="masonry cf">



									<?php

									$paged = get_query_var('paged');
									query_posts("posts_per_page=9&paged=$paged");

									if (have_posts()) :
										while (have_posts()) :
											the_post();
											?>


											<?php
											// アイキャッチ画像のIDを取得
											$thumbnail_id = get_post_thumbnail_id();

											// mediumサイズの画像内容を取得（引数にmediumをセット）
											$eye_img = wp_get_attachment_image_src( $thumbnail_id , 'medium' );

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
										<a href="#">次の6件をみる</a>
									</div>
									<ul class="postlist-more-list">
										<li><a href="#"><span>＜</span></a></li>
										<li><a href="#"><span>1</span></a></li>
										<li><a href="#"><span>2</span></a></li>
										<li><a href="#"><span>3</span></a></li>
										<li><a href="#"><span>4</span></a></li>
										<li><a href="#"><span>5</span></a></li>
										<li><a href="#"><span>6</span></a></li>
										<li><a href="#"><span>99</span></a></li>
										<li><a href="#"><span>＞</span></a></li>
									</ul>
								</div>
							</div>

						</div>
					</article>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>