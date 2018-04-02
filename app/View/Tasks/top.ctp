<!-- Introduction Row -->
<h1 class="my-4">Youtuberコレクション<br>
<span class="sub_title">あなたにあったYoutuberがきっと見つかる</span>
</h1>
<p></p>
<!-- Team Members Row -->
<textarea name="" style="width:100%;border: 1px solid black" rows="5">
変更履歴
12/1 プレリリース
1/1 youtuberの追加
2/2 ユーザー登録機能追加
2/3 評価機能の追加
</textarea>
<div class="row">
	<?php
		foreach ($youtubers_data as $row) {
			?>
		<div class="col-lg-4 col-sm-6 text-center mb-4">
			<a href="./youtubers/detail?id=<?php echo $row['Youtuber']['id'] ?>">
		  <?php $img = base64_encode($row['Youtuber']['profile_img']); ?>
 		  <img class="rounded-circle img-fluid d-block mx-auto" src="data:image/png;base64,<?php echo $img; ?>" alt="">
		  <h3><?php echo $row['Youtuber']['channel_name'] ?>
		  </h3>
		  <p><?php echo $row['Youtuber']['sub_name'] ?></p>
			</a>
		</div>

		<?php 
		}
	 ?>
	  <p><a href="./youtubers">Youtuber一覧を見る</a></p>
</div>
<div class="row">
<!-- 	<div class="col-lg-12">
	  <h2 class="my-4">事務所から探す</h2>
	</div>
	<h3>開設中</h3>
 --><!-- 
	<?php
		foreach ($offices_data as $row) {
			?>
		<div class="col-lg-4 col-sm-6 text-center mb-4">
			<a href="./youtubers/office?office=<?php echo $row['Office']['office_name'] ?>">
		  <img class="rounded-circle img-fluid d-block mx-auto" src="<?php echo $row['Office']['office_image_url'] ?>" alt="">
		  <h3><?php echo $row['Office']['office_name'] ?>
		  </h3>
		    </a>
		</div>
		<?php 
		}
	 ?>
 --></div>