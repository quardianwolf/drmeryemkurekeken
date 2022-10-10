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


 <!-- <?php vdebug($about, false); ?> -->
<section id="about" class="about">
<div class="mad-content no-pd">
        <div class="container-fluid">
          <div class="mad-section">
            <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-10">
                <h5 class="align-center mad-text-color-3">

                </h5>
              </div>
            </div>
          </div>
          <div class="mad-section no-pt">
            <div class="mad-entities mad-team type-4 style-2">
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <img src="<?= site_url($about[0]->path . $about[0]->file_name); ?>" alt="">
                </div>
                <div class="mad-entity-content">
                  <div class="content-element-6">
                    <h2 class="mad-title"><?= $about[0]->title; ?></h2>
                    <div class="mad-pre-title"><?= $about[0]->subtitle; ?></div>
                  </div>
                  <div class="content-element-6">
                    <p>
                    <?= $about[0]->content; ?>
                    </p>
                  </div>
                  <div class="mad-social-icons size-2">
                    <ul>
                      <li>
                        <a href="<?=$facebook;?>"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="<?=$instagram;?>"><i class="fab fa-instagram"></i></a>
                      </li>
                      <li>
                        <a href="<?=$twitter;?>"><i class="fab fa-twitter"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </article>
            </div>
          </div>
         
        </div>
      </div>
</section>


<?php $this->load->view($theme.'views/elements/footer'); ?>
<?php $this->load->view($theme.'views/core/scripts'); ?>
<?php $this->load->view($theme.'views/core/close'); ?>
