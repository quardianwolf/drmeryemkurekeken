<?php if ($GLOBALS['settings']['compress'] == 'offline') : ?>


  <script src="<?= theme('/js/plugins/jquery.min.js'); ?>"></script>
  <script src="<?= theme('/js/plugins/fancybox.min.js'); ?>"></script>
  <script src="<?= theme('/js/plugins/swup.min.js'); ?>"></script>
  <script src="<?= theme('/js/plugins/swiper.min.js'); ?>"></script>
  <script src="<?= theme('/js/plugins/parsley.min.js'); ?>"></script>
  <script src="<?= theme('js/main.js'); ?>"></script>
  




<?php else : ?>
  <script src="<?= theme('dist/client_all_scripts.min.js'); ?>" type="text/javascript"></script>
<?php endif; ?>

<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(document).ready(function() {
      setTimeout(function() {
        $('#form-popup').removeClass('d-none');
      }, 25000);


      $('.mad-navigation li').each(function() {
        var $this = $(this);
        if ($this.find('ul').length > 0) {
          $this.addClass('menu-item-has-children');
        }
      });
    });

    $('.close-btn').click(function() {
      $('#form-popup').addClass('d-none');
    });

    // (function() {
    //   if ("loading" in HTMLImageElement.prototype) {
    //     var lazyEls = document.querySelectorAll("[loading=lazy]");
    //     lazyEls.forEach(function(lazyEl) {
    //       if (lazyEl.tagName == 'IMG') {
    //         /* lazyEl.setAttribute(
    //            "src",
    //            lazyEl.getAttribute("data-src")
    //          );*/
    //       } else {
    //         lazyEl.style.backgroundImage = "url(" + lazyEl.getAttribute("data-src") + ")";
    //       }
    //     });
    //   } else {
    //     var script = document.createElement("script");
    //     script.async = true;
    //     script.src =
    //       "https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js";
    //     window.lazyLoadOptions = {
    //       elements_selector: "[loading=lazy]"
    //       //eventually more options here
    //     };
    //     document.body.appendChild(script);
    //   }
    // })();

    function addNaitonalCode($elem) {
      if ($elem.find('input[name="contact_form_phone"]').val() != '') {
        var data = $elem.find('input[name="contact_form_phone"]').val();
        data = $.trim(data).replace(/ /g, '');
        $elem.find('input[name="contact_form_phone"]').val($elem.find('.selected-flag').attr('title') + data);
      }
    }

    var form = [];

    if ($('form[name="iletisim-formu"]').length > 0) {
      form['iletisim-formu'] = {};

      form['iletisim-formu'].form = $("form[name='iletisim-formu']");
      form['iletisim-formu'].button = form['iletisim-formu'].form.find('button[type="submit"]');
      form['iletisim-formu'].elements = form['iletisim-formu'].form.find('input, select, textarea');

      form['iletisim-formu'].form.validate({
        submitHandler: function(e) {
          e.preventDefault;

          form['iletisim-formu'].button.attr('data-process', 'sending');
          addNaitonalCode(form['iletisim-formu'].form);
          form['iletisim-formu'].allData = form['iletisim-formu'].form.serialize();
          form['iletisim-formu'].elements.css('pointer-events', 'none');

          $.ajax({
            type: "POST",
            url: form['iletisim-formu'].form.attr('action'),
            data: form['iletisim-formu'].allData,
            timeout: 10000,
            cache: false,
            success: function(data) {
              data = jQuery.parseJSON(data);

              document.getElementById('messagebox').innerHTML = data.message;
              $('#messagebox').slideDown('slow');
            },
            error: function(errorThrown) {
              form['iletisim-formu'].button.attr('data-process', 'sending-error')
              form['iletisim-formu'].elements.css('pointer-events', 'none');
              //setTimeout(function(){window.location.reload();},7000);

              //data = jQuery.parseJSON(data);

              /*if( data.status == 'error'){
                form['iletisim-formu'].elements.css('pointer-events','initial');
              }*/
            }

          }); //End of Ajax

        } // End of Submit Handler
      }); // End of validate
    }
  });
</script>



