<?php $this->load->view($theme . 'views/core/open'); ?>
<?php $this->load->view($theme . 'views/elements/header'); ?>
<?php
$facebook = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->facebook))));
?>
<?php
$instagram = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->instagram))));
?>
<?php
$twitter = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->twitter))));
?>






<section id="hero" class="hero">
	<?php if ((isset($slider)) and ($slider == TRUE)) : ?>
		<div id="orb-dynamic-content" class="transition-fade">
			<div class="orb-page-frame orb-home-4">
				<div class="orb-content">
					<div class="orb-grid">
						<div class="orb-g-25 orb-sm-100">
							<div class="orb-position-fix">
								<div class="orb-photo-frame orb-obj-1">
									<img src="<?= site_url($slider[0]->path . $slider[0]->file_name); ?>" alt="photo">
								</div>
							</div>
						</div>
						<div class="orb-g-50 orb-sm-100">
							<div class="orb-main-title">
								<div class="orb-suptitle">
								</div>
								<h1><?php echo $slider[0]->title; ?></h1>
								<div class="orb-button-frame">
									<div class="orb-btn-label"><?php echo $slider[0]->description; ?></div>
									<a href="<?php echo $slider[0]->button_link; ?>" class="orb-sm-button" data-no-swup>
										<div class="orb-arrow"><img src="/public/theme/assets/img/ui/arrow-1.svg" alt="arrow"></div>
									</a>
								</div>
							</div>
						</div>
						<div class="orb-g-25 orb-sm-100">
							<div class="orb-object-frame">
								<div class="orb-photo-frame orb-obj-2">
									<img src="<?= site_url($slider[1]->path . $slider[1]->file_name); ?>" alt="photo">
								</div>
								<div class="orb-photo-frame orb-obj-3">
									<img src="<?= site_url($slider[2]->path . $slider[2]->file_name); ?>" alt="photo">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</section>



<section id="about" class="about">
	<?php if ((isset($about)) and ($about == TRUE)) : ?>
		<div id="orb-dynamic-content" class="transition-fade">

			<div class="orb-page-frame orb-about-3">
				<div class="orb-content">

					<div class="orb-grid orb-sm-reverse">
						<div class="orb-g-33 orb-sm-100">
							<div class="orb-left">
								<h2><?php echo $about[1]->summary; ?></h2>
								<a href="<?= $site_data->instagram; ?>" target="_blank" data-no-swup class="orb-instagram">
									<img src="/public/theme/assets/img/ui/instagram-2.svg" alt="Instagram">
									<span>Instagram</span>
								</a>
							</div>
						</div>
						<div class="orb-g-33 orb-sm-100">
							<div class="rb-object-frame">
								<div class="orb-photo-frame orb-obj-1">
									<img src="<?= site_url($about[1]->path . $about[1]->file_name); ?>" alt="photo">
								</div>
								<div class="orb-deco"></div>
							</div>
						</div>
						<div class="orb-g-33 orb-sm-100">
							<div class="orb-right">
								<h1><?php echo $about[1]->title; ?></h1>
								<div class="orb-position-fix">
									<div class="orb-deco"></div>
									<div class="orb-photo-frame orb-obj-2">
										<img src="<?= site_url($about[0]->path . $about[0]->file_name); ?>" alt="photo">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
</section>

<section id="treatments" class="treatments">
	<?php if ((isset($jinekoloji_c)) and ($jinekoloji_c == TRUE)) : ?>
		<div id="orb-dynamic-content" class="transition-fade">
			<div class="orb-page-frame orb-portfolio-1">
				<div class="swiper-container orb-slider-3s">
					<div class="swiper-wrapper">
					<?php $run = 0; foreach ($jinekoloji_c as $w) : ?>
						<div class="swiper-slide">
							<div class="orb-content">
								<div class="orb-deco"></div>
								<div class="orb-grid">
									<div class="orb-g-100 orb-sm-100">
										<div class="orb-object-frame">
											<div class="orb-photo-frame orb-obj-1">
												<a data-no-swup="" href="<?= site_url($link_a[$lang_in_use . '/' . $w->id_page . '/' . $w->id_article]); ?>">
												<img src="<?= site_url($w->path . $w->file_name); ?>" alt="photo">
												</a>
												<a data-fancybox="gallery" data-no-swup href="<?= site_url($w->path . $w->file_name); ?>" class="orb-zoom"><img src="/public/theme/assets/img/ui/zoom.svg" alt="zoom"></a>
											</div>
											<div class="orb-slide-caption">
												<h2><?= $w->title; ?></h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php $run++; endforeach; ?>			
					</div>
					<div class="orb-nav-frame">
						<div class="orb-nav">
							<div class="orb-nav-label">Diğer Tedavi</div>
							<div class="orb-prev"><img src="/public/theme/assets/img/ui/arrow-1.svg" alt="arrow"></div>
							<div class="orb-next"><img src="/public/theme/assets/img/ui/arrow-1.svg" alt="arrow"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
</section>

<section id="blog" class="blog">
	<?php if ((isset($basin)) and ($basin == TRUE)) : ?>

		<div id="orb-dynamic-content" class="transition-fade">
			<div class="orb-scroll-frame">
				<div class="orb-banner">
					<h1>BASIN VE İÇERİK</h1>
					<p>Basın Kurumlarında Yaptığımız Programlar ve Sağlığınıza Faydalı olacak bilgiler.</p>
				</div>
				<div class="orb-blog-list">
				<?php $run = 0; foreach ($blog_c as $w) : ?>
					<div class="orb-grid orb-padding-grid">
						<div class="orb-g-33 orb-md-50 orb-sm-100">
							<a href="blog-4.html" class="orb-blog-card">
								<div class="orb-photo-frame orb-active">
									<img src="<?= site_url($w->path . $w->file_name); ?>" alt="photo">
								</div>
								<div class="orb-post-text">
									<h2><?= $w->title; ?></h2>
									<p><?= $w->summary; ?></p>
								</div>
							</a>
						</div>			
					</div>
					<?php $run++;
            	if ( $run == 3  ) break; endforeach; ?>
              <?php $run = 0; foreach ($basin_c as $w) : ?>
					<div class="orb-grid orb-padding-grid">
						<div class="orb-g-33 orb-md-50 orb-sm-100">
							<a href="blog-4.html" class="orb-blog-card">
								<div class="orb-photo-frame orb-active">
								<iframe width="480" height="315" src="<?= $w->subtitle; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                </iframe>
								</div>
								<div class="orb-post-text">
									<h2><?= $w->title; ?></h2>
									<p><?= $w->summary; ?></p>
								</div>
							</a>
						</div>			
					</div>
					<?php $run++; if ( $run == 3 ) break; endforeach; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
</section>

<section id="contact_s" class="contact_s">
	
		<div id="orb-dynamic-content" class="transition-fade">
			<div class="orb-page-frame orb-contact-1">
				<div class="orb-content">
					<div class="orb-grid orb-sm-reverse">
						<div class="orb-g-35 orb-sm-100">
							<div class="rb-object-frame">
								<div class="orb-photo-frame orb-obj-1">
									<img src="/public/theme/assets/img/photo/contact.png" alt="photo">
								</div>
								<h1 class="orb-page-title">Hemen  <br>Randevu Alın.</h1>
								<div class="orb-deco"></div>
							</div>
						</div>
						<div class="orb-g-65 orb-sm-100">
							<div class="orb-form-frame">
								<div class="orb-form-content">
									<h2 class="orb-form-title">Tedavi olmak için ya da bilgi  <br>almak için randevu alın.</h2>
									<form method="POST" id="form" >
									<?=form_open('send_mail',array('name'=>'iletisim-formu','class'=>'form-contact','id'=>'contactform'));?>
										<div class="orb-grid orb-padding-grid">
											<div class="orb-g-50 orb-sm-100">
												<div class="orb-group-input">
													<input id="name" name="name" type="text" placeholder="İsminiz" data-parsley-pattern="^[a-zA-Z\s.]+$" required />
												</div>
											</div>
											<div class="orb-g-50 orb-sm-100">
												<div class="orb-group-input">
													<input id="email" name="email" type="email" placeholder="E-mail" required />
												</div>
											</div>
											<div class="orb-g-100">
												<div class="orb-group-input">
													<textarea id="message" name="message" placeholder="Mesajınız" data-parsley-pattern="^[a-zA-Z0-9\s.:,!?]+$" required></textarea>
												</div>
											</div>
										</div>
										<div class="orb-form-bottom">
	
											<button class="orb-submit-btn">
												<span>Gönder</span>
												<img src="/public/theme/assets/img/ui/arrow-1.svg" alt="arrow" class="orb-arrow">
											</button>
										</div>
										<?=form_close();?>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
</section>


<?php $this->load->view($theme . 'views/core/scripts'); ?>
<?php $this->load->view($theme . 'views/core/close'); ?>

