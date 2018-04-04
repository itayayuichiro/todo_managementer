<?php
class FormatHelper extends AppHelper {
  function format_date($date) {
  	$date = explode(" ", $date);
  	$str = explode("-", $date[0]);
  	return $str[0]. '年' .$str[1]. '月'.$str[2]. '日';
  }
}