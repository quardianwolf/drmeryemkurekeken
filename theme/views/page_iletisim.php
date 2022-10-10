<?php $this->load->view($theme.'views/core/open'); ?>
<?php $this->load->view($theme.'views/elements/header'); ?>
<?php $this->load->view($theme.'views/elements/banner'); ?>

<?php $article = $this->publish->get_articles($lang_in_use,$page_data->id_page,null,'0','logical_date','asc','ibs'); ?>
<?php if((isset($article)) AND ($article == TRUE)): ?>
  <?php $article = $article[0]; ?>

  <?php
    $headerPhone = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->phone))));
  ?>

  <section class="contact-form" id="contact-form">
  <div class="relative bg-white">
  <div class="absolute inset-0">
    <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50"></div>
  </div>
  <div class="relative mx-auto max-w-7xl lg:grid lg:grid-cols-5">
    <div class="bg-gray-50 py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
      <div class="mx-auto max-w-lg">
        <h2 class="text-2xl  tracking-tight text-black sm:text-3xl"><?=translate('hemen_randevu_al',$lang_in_use,'Hemen Randevu Alın.');?></h2>
        <p class="mt-3 text-lg leading-6 text-black"><?=translate('hemen_randevu_al_alt',$lang_in_use,'Tedavi olmak için ya da bilgi almak hemen randevu alın.');?></p>
        <dl class="mt-8 text-base text-black">
          <div>
            <dt class="sr-only">Postal address</dt>
            <dd>
              <p><?=$site_data->address;?></p>
            </dd>
          </div>
          <div class="mt-6">
            <dt class="sr-only">Telefon Numarası</dt>
            <dd class="flex">
              <!-- Heroicon name: outline/phone -->
              <svg class="h-6 w-6 flex-shrink-0 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
              </svg>
              <a href="tel:+90<?=$headerPhone;?>">
                <span class="ml-3"><?=$headerPhone;?></span>
              </a>
            </dd>
          </div>
          <div class="mt-3">
            <dt class="sr-only">Eposta</dt>
            <dd class="flex">
              <!-- Heroicon name: outline/envelope -->
              <svg class="h-6 w-6 flex-shrink-0 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
              </svg>
              <a href="mailto:<?=$site_data->email;?>">
                <span class="ml-3"><?=$site_data->email;?></span>
              </a>
            </dd>
          </div>
        </dl>
      </div>
    </div>
    <div class="bg-white py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
      <div class="mx-auto max-w-lg lg:max-w-none">
        <form action="#" method="POST" class="grid grid-cols-1 gap-y-6">
        <?=form_open('send_mail',array('name'=>'iletisim-formu','class'=>'form-contact','id'=>'contactform'));?>
          <div>
            <label for="full-name" class="sr-only">İsminiz</label>
            <input type="text" name="full-name" id="full-name" autocomplete="name" class="block w-full rounded-md border-gray-300 py-3 px-4 placeholder-black shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="İsminiz">
          </div>
          <div>
            <label for="email" class="sr-only">Eposta</label>
            <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-gray-300 py-3 px-4 placeholder-black shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Eposta Adresiniz">
          </div>
          <div>
            <label for="phone" class="sr-only">Telefon</label>
            <input type="text" name="phone" id="phone" autocomplete="tel" class="block w-full rounded-md border-gray-300 py-3 px-4 placeholder-black shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Telefon Numaranız">
          </div>
          <div>
            <label for="message" class="sr-only">Mesajınız</label>
            <textarea id="message" name="message" rows="4" class="block w-full rounded-md border-gray-300 py-3 px-4 placeholder-black shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Bize ne söylemek istersiniz?"></textarea>
          </div>
          <div>
            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-rose-300 py-3 px-6 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Gönder</button>
          </div>
          <?=form_close();?>
        </form>
      </div>
    </div>
  </div>
</div>
   
  </section>

<?php endif; //if((isset($article)) AND ($article == TRUE)):  ?>

<?php $this->load->view($theme.'views/elements/footer'); ?>
<?php $this->load->view($theme.'views/core/scripts'); ?>
<?php $this->load->view($theme.'views/core/close'); ?>

<!-- 
<div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="sec-title text-center mt-5">
            <h2 class="mb-3"><?=translate('bize_ulasin',$lang_in_use,'Şimdi bize ulaşın');?></h2>
            <p><?=translate('bize_ulasin_alt',$lang_in_use,'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir.');?></p>
            <div class="contact-info">
              <a href="tel:+90<?=$headerPhone;?>"><i class="fa fa-phone"></i><?=$site_data->phone;?></a>
              <span></span>
              <a href="mailto:<?=$site_data->email;?>"><i class="fa fa-envelope"></i><?=$site_data->email;?></a>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <?=form_open('send_mail',array('name'=>'iletisim-formu','class'=>'form-contact','id'=>'contactform'));?>
              <div class="col-md-12 box">
                <input class="au-input" type="text" name="name" placeholder="İsminiz" required="required">
              </div>
              <div class="col-md-12 box">
                <input class="au-input" type="email" name="email" placeholder="E-Posta Adresiniz" required="required" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
              </div>
              <div class="col-md-12 box">
                <input class="au-input" type="text" name="email_subject" placeholder="Konu" required="required">
              </div>
              <div class="col-md-12 box">
                <input class="au-input" type="text" name="phone" placeholder="Telefon Numaranız" required="required">
              </div>
              <div class="col-md-12 box">
                <textarea class="au-textarea" name="message" placeholder="Mesajınız" required="required"></textarea>
              </div>
              <div class="col-md-12 box">
                <button class="iletisim-btn" type="submit">Teklif Al</button>
              </div>
            <?=form_close();?>
          </div>
        </div>
      </div>
    </div> -->