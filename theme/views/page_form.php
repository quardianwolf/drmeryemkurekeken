<?php $this->load->view($theme.'views/core/open'); ?>
<?php $this->load->view($theme.'views/elements/header'); ?>

<?php $article = $this->publish->get_articles($lang_in_use,$page_data->id_page,null,'0','logical_date','asc','ibs'); ?>
<?php if((isset($article)) AND ($article == TRUE)): ?>
  <?php $article = $article[0]; ?>

  <main id="main">
    <!-- PAGE LINE-->
    <div class="page-line">
      <div class="container">
        <div class="page-line__inner">
          <div class="page-col"></div>
          <div class="page-col"></div>
          <div class="page-col"></div>
        </div>
      </div>
    </div>
    <!-- END PAGE LINE-->
    <!-- PAGE HEADING-->
    <section class="section p-t-100 p-b-65">
      <div class="container">
        <div class="page-heading m-t-50 m-b-25">
          <h4 class="title-sub title-sub--c8 m-b-15"><?=$article->title;?></h4>
          <h2 class="title-2"><?=$article->subtitle;?></h2>
        </div>
      </div>
    </section>
    <!-- END PAGE HEADING-->
    <!-- CONTACT-->
    <section class="section p-b-80">
      <div class="container">
        <div class="row no-gutters align-content-center">
          <div class="col-lg-6">
            <img src="<?=site_url($article->path.$article->file_name);?>" alt="" class="img-responsive">
          </div><!-- .col-lg-6 -->
          <div class="col-lg-6">
            <?=form_open('send_mail',array('name'=>'iletisim-formu','class'=>'form-contact','id'=>'contactform', 'style' => 'width: 95%; float: right;'));?>
              <div class="row">
                <div class="col-md-6">
                  <input class="au-input" type="text" name="name" placeholder="İsminiz" required="required">
                </div>
                <div class="col-md-6">
                  <input class="au-input" type="email" name="email" placeholder="E-Posta Adresiniz" required="required" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                </div><!-- .col-md-6 -->
                <div class="col-md-6">
                  <input class="au-input" type="text" name="phone" placeholder="Telefon Numaranız" required="required">
                </div><!-- .col-md-6 -->
                <div class="col-md-6">
                  <input class="au-input" type="text" name="email_subject" placeholder="Konu" required="required">
                </div><!-- .col-md-12 -->
                </div>
                <div class="col-md-12 p-0">
                  <textarea class="au-textarea" name="message" placeholder="Mesajınız" required="required"></textarea>
                  <div class="text-right">
                    <button class="au-btn au-btn--solid" type="submit">Teklif Al</button>
                  </div>
                </div>
              </div>
            <?=form_close();?>
          </div>
        </div>
      </div>
    </section>
    <!-- END CONTACT-->
  </main>

<?php endif; //if((isset($article)) AND ($article == TRUE)):  ?>

<?php $this->load->view($theme.'views/elements/footer'); ?>
<?php $this->load->view($theme.'views/core/scripts'); ?>
<?php $this->load->view($theme.'views/core/close'); ?>
