<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$structure = array();

/*$structure['anasayfa']['neden_biz'] = array('method'=>'get_page','id_page' => '30','media_type'=>'ibs');
  $structure['anasayfa']['neden_biz_c'] = array('method'=>'get_articles','id_page' => '30','id_article'=> null,'limit' => '0','order_by'=> 'a.logical_date','asc_desc' => 'desc','media_type'=>'ibs');*/

$structure['anasayfa']['icerikler'] = array('method' => 'get_articles', 'id_page' => null, 'id_article' => '217', 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs');
$structure['anasayfa']['slogan'] = array('method' => 'get_articles', 'id_page' => null, 'id_article' => '208', 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs');

$structure['anasayfa']['hakkimizda'] = array('method' => 'get_articles', 'id_page' => '47', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs');

$structure['anasayfa']['haberler'] = array('method' => 'get_page', 'id_page' => '53', 'media_type' => 'ibs');
$structure['anasayfa']['haberler_c'] = array('method' => 'get_articles', 'id_page' => '53', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'asc', 'media_type' => 'ibs');

$structure['anasayfa']['slide_underbox'] = array('method' => 'get_articles', 'id_page' => '57', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs');

$structure['anasayfa']['tedaviler'] = array('method' => 'get_articles', 'id_page' => '57', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs');

$structure['anasayfa']['yorumlar'] = array('method' => 'get_articles', 'id_page' => '59', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs');


$structure['anasayfa']['uygulamalar'] = array('method' => 'get_articles', 'id_page' => '40', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs');

