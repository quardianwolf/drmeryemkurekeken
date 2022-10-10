<?php
$headerPhone = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->phone))));
?>
<?php
$facebook = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->facebook))));
?>
<?php
$instagram = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->instagram))));
?>
<?php
$twitter = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->twitter))));
?>

<header id="mad-header" class="mad-header header-4 mad-header--transparent mad-header--transparent-single ">
  <div class="mad-pre-header d-none">
    <div class="container">
      <div class="mad-header-items">
        <div class="mad-header-item">
          <div class="mad-our-info">
            <div class="mad-info">
              <i><svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 14 18" fill="none" class="svg replaced-svg">
                </svg></i>
              <a><?= $site_data->address; ?></a>
            </div>
            <div class="mad-info">
              <i><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none" class="svg replaced-svg">
                  <path d="M13.9634 8.04248C14.0512 7.49764 14.0127 6.94056 13.8507 6.41211C13.6659 5.8012 13.3271 5.24502 12.8653 4.79422C12.3969 4.34267 11.8195 4.03209 11.2027 3.93689C10.8332 3.87863 10.4549 3.9021 10.096 4.00556M16.6744 9.33107C17.1096 8.03411 17.1085 6.6357 16.6712 5.33941C16.358 4.39963 15.8334 3.53978 15.1357 2.82258C14.4514 2.11008 13.5965 1.57388 12.6474 1.26191C11.5533 0.911277 10.3725 0.912737 9.2794 1.26608M5.41206 6.43916C4.5447 7.26111 4.80641 9.11206 6.04442 10.6862C7.28244 12.2604 9.04974 12.9877 10.0901 12.3863M12.9139 15.9759C12.876 16.0378 12.6751 16.2027 11.9456 16.7276C10.5196 17.7529 7.13557 15.8151 4.18953 12.0706C1.2435 8.326 0.243148 4.647 1.58852 3.56494C2.31435 2.98177 2.5157 2.85119 2.58192 2.84495M13.2103 15.4603L10.4864 11.9982C10.4115 11.9025 10.3785 11.7816 10.3947 11.6622C10.4109 11.5428 10.475 11.4345 10.573 11.361L11.8072 10.4397C11.8559 10.4029 11.9116 10.3759 11.971 10.3601C12.0304 10.3443 12.0924 10.3402 12.1535 10.3478C12.2146 10.3554 12.2735 10.3747 12.3269 10.4046C12.3803 10.4345 12.4271 10.4743 12.4647 10.5219L15.1886 13.9839C15.226 14.0315 15.2534 14.0858 15.2692 14.1437C15.285 14.2016 15.289 14.2619 15.2809 14.3213C15.2727 14.3807 15.2527 14.4379 15.2218 14.4897C15.1909 14.5416 15.1499 14.5869 15.101 14.6233L13.8667 15.5446C13.7684 15.6175 13.6445 15.6495 13.522 15.6337C13.3995 15.6179 13.2884 15.5556 13.213 15.4603H13.2103ZM5.89381 6.15512L3.16996 2.69304C3.09498 2.59725 3.06199 2.47644 3.07821 2.35702C3.09442 2.2376 3.15852 2.12929 3.25648 2.05577L4.49076 1.13498C4.58911 1.06195 4.71314 1.02982 4.83574 1.04561C4.95834 1.06141 5.06954 1.12384 5.14502 1.21926L7.86887 4.68133C7.94436 4.777 7.97781 4.89793 7.96189 5.01759C7.94597 5.13725 7.88198 5.24587 7.78395 5.31964L6.54967 6.24095C6.45132 6.31398 6.32729 6.34611 6.20469 6.33032C6.08209 6.31453 5.97089 6.2521 5.89541 6.15668L5.89381 6.15512Z" stroke="#3D3D3D" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></i>
              <span href="tel:+90<?= $headerPhone; ?>"><?= $site_data->phone; ?></span>
            </div>
          </div>
        </div>
        <div class="mad-header-item">
          <div class="mad-our-info">
            <div class="mad-info">

            </div>
            <div class="mad-info">
              <div class="mad-social-icons size-small style-2">
                <ul>
                  <li>
                    <a href="<?= $site_data->facebook; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="<?= $site_data->instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="<?= $site_data->twitter; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mad-header-section--sticky-xl">
    <div class="container">
      <div class="mad-header-items">
        <div class="mad-header-item">
          <a href="/" class="mad-logo">
            <img src="<?= theme('images/logo3.png'); ?>" alt="" width="200px" class="head-logo" />
          </a>
        </div>
        <div class="mad-header-item">
        <button class="mad-mobile-nav-btn">
            <span class="line line-top "></span>
            <span class="line line-center "></span>
            <span class="line line-bottom "></span>
          </button>
          <!--================ Navigation ================-->
     
          <nav class="mad-navigation-container" >
            <?= $menu; ?>
            <a href="/tr/iletisim" class="iletime-gec ">İletişime Geç</a>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>