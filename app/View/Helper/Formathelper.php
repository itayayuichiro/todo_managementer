<?php
class FormatHelper extends AppHelper {
  function format_date($date) {
  	$date = explode(" ", $date);
  	$str = explode("-", $date[0]);
  	return $str[0]. '年' .$str[1]. '月'.$str[2]. '日';
  }
  function past_date($date){
  	$today = date("Y-m-d");
  	if ($today > $date) {
  		return 'past';
  	}else{
  		return 'no_past';
  	}
  }
}