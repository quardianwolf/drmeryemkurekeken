<?php $this->load->view($theme.'views/core/open'); ?>
<?php $this->load->view($theme.'views/elements/header'); ?>
<?php $this->load->view($theme.'views/elements/banner'); ?>


<?php
$facebook = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->facebook))));
?>
<?php
$instagram = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->instagram))));
?>
<?php
$twitter = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->twitter))));
?>

<?php if ((isset($about)) and ($about == TRUE)) : ?>

<div class="orb-wrapper">
		<div id="orb-dynamic-content" class="transition-fade">
			<div class="orb-page-frame orb-about-1">
				<div class="orb-content">
					<div class="orb-grid orb-sm-reverse">
						<div class="orb-g-40 orb-sm-100">
							<div class="rb-object-frame">
								<div class="orb-photo-frame orb-obj-1">
									<img src="<?= site_url($about[1]->path . $about[1]->file_name); ?>" alt="photo">
								</div>
							</div>
						</div>
						<div class="orb-g-60 orb-sm-100">
							<div class="orb-about-frame">
								<div class="orb-grid">
									<div class="orb-g-60 orb-sm-100">
										<div class="orb-about-text">
											<h1><?php echo $about[1]->title; ?></h1>
											<p><?php echo $about[1]->content ?></p>
										</div>
									</div>
									<div class="orb-g-40 orb-sm-100">
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
					<div class="orb-bottom-panel">
						<div class="orb-instagram">
							<span>Instagram</span>
							<div class="orb-line"></div>
							<a href="<?= $site_data->instagram; ?>" target="_blank" data-no-swup><img src="/public/theme/assets/img/ui/insta.svg" alt="Instagram"></a>
						</div>
						<a href="mailto:<?=$site_data->email;?>" class="orb-mail" data-no-swup><?=$site_data->email;?></a>
					</div>
				</div>

			</div>

		</div>
	</div>
	<?php endif; ?>


<?php $this->load->view($theme.'views/elements/footer'); ?>
<?php $this->load->view($theme.'views/core/scripts'); ?>
<?php $this->load->view($theme.'views/core/close'); ?>
