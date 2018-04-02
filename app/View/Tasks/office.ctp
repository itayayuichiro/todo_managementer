<!-- Introduction Row -->
<h1 class="my-4">Youtuberコレクション<br>
<span class="sub_title">あなたにあったYoutuberがきっと見つかる</span>
</h1>
<p></p>
<!-- Team Members Row -->
<div class="row">
	<?php
		foreach ($youtubers_data as $row) {
			?>
		<div class="col-lg-4 col-sm-6 text-center mb-4">
			<a href="./youtubers/detail?id=<?php echo $row['Youtuber']['id'] ?>">
		  <img class="rounded-circle img-fluid d-block mx-auto" src="<?php echo $row['Youtuber']['profile_img'] ?>" alt="">
		  <h3><?php echo $row['Youtuber']['channel_name'] ?>
		  </h3>
		  <p><?php echo $row['Youtuber']['sub_name'] ?></p>
			</a>
		</div>

		<?php 
		}
	 ?>
</div>