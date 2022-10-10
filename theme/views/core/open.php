<?php

$GLOBALS['settings']                           = [];
$GLOBALS['settings']['compress']               = 'offline';

$GLOBALS['settings']['video_gosterimi']        = 'offline';
$GLOBALS['settings']['acilis_galerisi']        = 'offline';
$GLOBALS['settings']['liste_aciklamasi']       = 'online';
$GLOBALS['settings']['pagespeed']              = 'offline';

$GLOBALS['pageTitle'] = $site_data->company_name;

$info = [];
$info['url']     = base_url();
$info['lang']    = $lang_in_use;
$info['company'] = $site_data->company_name;
$info['images']  = [];

// if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false) {
//   //$GLOBALS['settings']['pagespeed'] = 'offline';
// }

// if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') === false) {
//   $GLOBALS['settings']['pagespeed'] = 'offline';
// }


function sanitize_output($buffer)
{

  $search = array(
    '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
    '/[^\S ]+\</s',  // strip whitespaces before tags, except space
    '/(\s)+/s'       // shorten multiple whitespace sequences
  );

  $replace = array(
    '>',
    '<',
    '\\1'
  );

  $buffer = preg_replace($search, $replace, $buffer);

  return $buffer;
}

ob_start("sanitize_output");

/* -------------------------------------------------------------- */

if (isset($article) and ($article == TRUE)) {

  $info['type']         = 'article';
  $info['title']        = (!empty($article->meta_title)) ? $article->meta_title . ' | ' . $info['company'] : $article->title . ' | ' . $info['company'];
  $info['keywords']     = (!empty($article->meta_keywords)) ? $article->meta_keywords : $page_data->meta_keywords;
  $info['description']  = (!empty($article->meta_description)) ? $article->meta_description : substr(html_entity_decode(strip_tags($article->content)), 0, 157) . '...';
} else {

  $info['type']        = 'page';
  $info['title']       = (!empty($page_data->meta_title)) ? $page_data->meta_title . ' | ' . $info['company'] : $page_data->title . ' | ' . $info['company'];;
  $info['keywords']    = (!empty($page_data->meta_keywords)) ? $page_data->meta_keywords : '';
  $info['description'] = (!empty($page_data->meta_description)) ? $page_data->meta_description : substr(html_entity_decode($page_data->subtitle), 0, 157) . '...';
}

$GLOBALS['pageTitle'] = $info['title'];

?>

<!DOCTYPE html>
<html lang="<?= $lang_in_use; ?>">

<head>
  <meta charset="utf-8" />
  <base href="<?= base_url(); ?>" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="language" content="<?= $info['lang']; ?>" />
  <meta name="content-language" content="<?= $info['lang']; ?>" />
  <meta name="keywords" content="<?= $info['keywords']; ?>" />
  <meta name="news_keywords" content="<?= $info['keywords']; ?>" />
  <meta name="title" content="<?= $info['title']; ?>" />
  <meta name="author" content="<?= $info['company']; ?>" />
  <meta name="designer" content="<?= $info['company']; ?>" />
  <title><?= $info['title']; ?></title>
  <meta name="rating" content="general" />
  <meta name="distribution" content="global" />
  <meta name="resource-type" content="document" />
  <link rel="shortcut icon" type="image/icon" href="<?= theme('images/favicon2.png'); ?>" />

  <meta name="googlebot" content="index,follow" />
  <meta name="robots" content="index,follow" />

  <meta name="description" content="<?= $info['description']; ?>" />

  <meta name="owner" content="<?= $info['company']; ?>" />
  <meta name="distribution" content="global" />
  <meta name="resource-type" content="document" />
  <meta name="doc-rights" content="public" />
  <meta name="author" content="<?= $info['company']; ?>" />
  <link rel="canonical" href="<?= $info['url']; ?>">

  <meta name="name" content="<?= $info['url']; ?>" />
  <meta name="rating" content="all" />
  <meta name="audience" content="all" />
  <link rel="canonical" href="<?= $info['url']; ?>">


  <meta name="twitter:url" content="<?= $info['url']; ?>" />
  <meta name="twitter:title" content="<?= $info['title']; ?>" />

  <meta property="article:section" content="Haber" />
  <meta property="article:tag" content="<?= $info['keywords']; ?>" />

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:description" content="<?= $info['description']; ?>" />

  <meta property="og:title" content="<?= $info['title']; ?>">
  <meta property="og:type" content="<?= $info['type']; ?>" />
  <meta property="og:description" content="<?= $info['description']; ?>" />

  <?php foreach ($info['images'] as $w) : ?>
    <meta name="image" content="<?= $w; ?>" />
    <meta name="thumbnail" content="<?= $w; ?>" />
    <link rel="image_src" type="image/jpeg" href="<?= $w; ?>" />
    <meta property="og:image:secure_url" content="<?= $w; ?>">
    <meta name="twitter:image" content="<?= $w; ?>" />
    <meta property="og:image" content="<?= $w; ?>">
  <?php endforeach;  // foreach ($info['images'] as $w) 
  ?>

  <meta name="revisit-after" content="15 days" />
  <meta name="theme-color" content="#293133">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <?php if ($GLOBALS['settings']['pagespeed'] == 'offline') : ?>
    <script>
      function gtag_report_conversion(url) {}

      window.onload = function() {
        var elements = document.querySelectorAll('a[href*="tel:"]');
        for (var i = 0; i < elements.length; i++) {
          elements[i].className += " phone_google";
          elements[i].setAttribute("onclick", "gtag_report_conversion('" + elements[i].getAttribute('href') + "');");
        }
      };
    </script>
  <?php endif; //($GLOBALS['settings']['pagespeed'] == 'offline'): 
  ?>

  <?php $this->load->view($theme . 'views/core/styles'); ?>
</head>

<body class="<?= $page_data->id_page != 1 ? 'subpage' : null; ?>">
  <div id=" mad-page-wrapper" class="mad-page-wrapper">