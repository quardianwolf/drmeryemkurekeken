<?php $this->load->view($theme.'views/core/open'); ?>
<?php $this->load->view($theme.'views/elements/header'); ?>
<?php $this->load->view($theme.'views/elements/banner'); ?>


<?php if ((isset($iletisim)) and ($iletisim == TRUE)) : ?>


<div class="orb-wrapper">
		<div id="orb-dynamic-content" class="transition-fade">
			<div class="orb-page-frame orb-contact-2">
				<div class="orb-content">

					<div class="orb-grid">
						<div class="orb-g-20 orb-sm-100">
							<div class="rb-object-frame">
								<div class="orb-photo-frame orb-obj-1">
									<img src="<?= site_url($iletisim[2]->path . $iletisim[2]->file_name); ?>" alt="photo">
								</div>
							</div>
						</div>
						<div class="orb-g-60 orb-sm-100">
							<div class="orb-form-frame">
								<div class="orb-form-content">
									<form method="POST" id="form" >
									<?=form_open('send_mail',array('name'=>'iletisim-formu','class'=>'form-contact','id'=>'contactform'));?>
										<div class="orb-grid orb-padding-grid">
											<div class="orb-g-50 orb-sm-100">
												<div class="orb-group-input">
													<input type="text" name="name" placeholder="İsim" data-parsley-pattern="^[a-zA-Z\s.]+$" required>													
												</div>
											</div>
											<div class="orb-g-50 orb-sm-100">
												<div class="orb-group-input">
													<input type="email" name="email" placeholder="E-mail" required>
												</div>
											</div>
											<div class="orb-g-100">
												<div class="orb-group-input">
													<textarea name="message" placeholder="Mesajınız" data-parsley-pattern="^[a-zA-Z0-9\s.:,!?]+$" required></textarea>													
												</div>
											</div>
										</div>
										<div class="orb-form-bottom">
											<button class="orb-submit-btn">
												<img src="/public/theme/assets/img/ui/arrow-2.svg" alt="arrow" class="orb-arrow">
											</button>
											<p>Bilgi almak için ya da sorularını sormak için hemen randevu alın.<br>Size yardımcı olmaktan mutluluk duyacagız.</p>
										</div>
										<?=form_close();?>

									</form>
								</div>
							</div>
						</div>
						<div class="orb-g-20 orb-sm-100">
							<div class="orb-position-fix">
								<div>
									<div class="orb-photo-frame orb-obj-2">
										<img src="<?= site_url($iletisim[1]->path . $iletisim[1]->file_name); ?>" alt="photo">
									</div>
									<h1>Randevu<br>Al</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="orb-instagram-frame">
						<div class="orb-line"></div>
						<a href="<?= $site_data->instagram; ?>" target="_blank" data-no-swup><img src="/public/theme/assets/img/ui/instagram-1.svg" alt="instagram"></a>
					</div>
				</div>

			</div>

		</div>
	</div>


	<?php endif; ?>


<?php $this->load->view($theme.'views/elements/footer'); ?>
<?php $this->load->view($theme.'views/core/scripts'); ?>
<?php $this->load->view($theme.'views/core/close'); ?>

<!-- 