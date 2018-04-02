
<!-- Introduction Row -->
<h1 class="my-4">Youtuberコレクション<br>
<span class="sub_title">あなたにあったYoutuberがきっと見つかる</span>
</h1>
<p></p>
<!-- Team Members Row -->
<div class="section">
    <div class="container">
        <div class="row">
			<?php
				foreach ($result as $row) {
			?>
			            <div class="col-xs-12 col-sm-6 col-md-3">
			                <div class="col_box clearfix frame">
			                    <div class="col-xs-6 col-sm-12 img_frame">
			                        <img src="https://i.ytimg.com/vi/<?php echo split('v=',$row['movies']['movie_url'])[1] ?>/hqdefault.jpg" alt="" class="img-responsive" style="width:100%;"/>
			                    </div>
			                    <div class="col-xs-6 col-sm-12">
            						<a href="./movie?movie_id=<?php echo $row['movies']['id']; ?>" title="">
			    	                    <?php echo mb_strimwidth($row['movies']['movie_name'], 0, 30, "..."); ?>
						            </a>
			                    </div>
			                </div>
			            </div>
			<?php
				}
			 ?>
        </div>
    </div>
</div>
<?php 
if ($_GET['all'] != true) {
	?>
  	<a href="./movies?youtuber_id=<?php echo $_GET['youtuber_id'] ?>&all=true" title="">すべての動画を見る</a>
	<?php

 } ?>


