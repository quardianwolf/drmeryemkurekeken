<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$generic = array();

/*$generic += array('hizmetler'=>array('method'=>'get_page','id_page' => '28','media_type'=>'ibs'));
  $generic += array('hizmetler_c'=>array('method'=>'get_sub_pages','id_page'=>'28','limit'=>'0','media_type'=>'ibs'));*/

//$generic += array('portfolio'=>array('method'=>'get_articles','id_page' => '35','id_article'=> null,'limit' => '0','asc_desc' => 'desc','media_type'=>'ibs'));


$generic += array('menuler_c' => array('method' => 'get_sub_pages', 'id_page' => '0', 'limit' => '0', 'media_type' => 'ibs'));

$generic += array('iletisim' => array('method' => 'get_articles', 'id_page' => null, 'id_article' => '191', 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));

$generic += array('kozmetik' => array('method' => 'get_page', 'id_page' => '55', 'media_type' => 'ibs'));
$generic += array('kozmetik_c' => array('method' => 'get_articles', 'id_page' => '55', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));

$generic += array('dermatoloji' => array('method' => 'get_page', 'id_page' => '54', 'media_type' => 'ibs'));
$generic += array('dermatoloji_c' => array('method' => 'get_articles', 'id_page' => '54', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));

$generic += array('about' => array('method' => 'get_articles', 'id_page' => '60', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));

$generic += array('tedavilerr' => array('method' => 'get_articles', 'id_page' => '40', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));

$generic += array('haberler' => array('method' => 'get_articles', 'id_page' => '53', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));

$generic += array('uygulamalar' => array('method' => 'get_articles', 'id_page' => '40', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));

$generic += array('hesaplamalar' => array('method' => 'get_articles', 'id_page' => '67', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));

$generic += array('gebelik' => array('method' => 'get_articles', 'id_page' => '72', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));
$generic += array('yumurtlama' => array('method' => 'get_articles', 'id_page' => '73', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));
$generic += array('tupbebek' => array('method' => 'get_articles', 'id_page' => '74', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));

