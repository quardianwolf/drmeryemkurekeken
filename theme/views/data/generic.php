<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$generic = array();

/*$generic += array('hizmetler'=>array('method'=>'get_page','id_page' => '28','media_type'=>'ibs'));
  $generic += array('hizmetler_c'=>array('method'=>'get_sub_pages','id_page'=>'28','limit'=>'0','media_type'=>'ibs'));*/

//$generic += array('portfolio'=>array('method'=>'get_articles','id_page' => '35','id_article'=> null,'limit' => '0','asc_desc' => 'desc','media_type'=>'ibs'));


$generic += array('menuler_c' => array('method' => 'get_sub_pages', 'id_page' => '0', 'limit' => '0', 'media_type' => 'ibs'));

$generic += array('iletisim' => array('method' => 'get_articles', 'id_page' => '39', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));


$generic += array('about' => array('method' => 'get_articles', 'id_page' => '60', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));

$generic += array('tedavii' => array('method' => 'get_articles', 'id_page' => '40', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));

$generic += array('nav_icerik' => array('method' => 'get_articles', 'id_page' => '56', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));

$generic += array('basin' => array('method' => 'get_articles', 'id_page' => '77', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));


$generic += array('jinekoloji' => array('method' => 'get_page', 'id_page' => '80', 'media_type' => 'ibs'));
$generic += array('jinekoloji_c' => array('method' => 'get_articles', 'id_page' => '80', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));

$generic += array('tup_bebek' => array('method' => 'get_page', 'id_page' => '81', 'media_type' => 'ibs'));
$generic += array('tup_bebek_c' => array('method' => 'get_articles', 'id_page' => '81', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));


$generic += array('blog' => array('method' => 'get_page', 'id_page' => '78', 'media_type' => 'ibs'));
$generic += array('blog_c' => array('method' => 'get_articles', 'id_page' => '78', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));

$generic += array('basin' => array('method' => 'get_page', 'id_page' => '79', 'media_type' => 'ibs'));
$generic += array('basin_c' => array('method' => 'get_articles', 'id_page' => '79', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));
