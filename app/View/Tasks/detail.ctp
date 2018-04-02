<?php
// $query = "select avg(kikaku_point) as kikaku_point,avg(movie_point) as movie_point from evaluations where channel_id = ".$_GET['id'];
// $result = mysql_query($query);
// $result_array = mysql_fetch_assoc($result);
// $kikaku_point = $result_array['kikaku_point'];
// $movie_point = $result_array['movie_point'];
// 	$query = "select * from youtubers where id = ".$_GET['id'];
// 	$result = mysql_query($query);
// 	$row = mysql_fetch_assoc($result);
// 	$query = "select * from popular_movie where youtuber_id = ".$_GET['id'];
// 	$result = mysql_query($query);
//    print_r();
 ?>


  <!-- Portfolio Item Heading -->
  <h1 class="my-4">
  <?php echo $row['channel_name'] ?>
	  <br><span class="sub_title"><?php echo $row['sub_name'] ?></span>
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <?php $img = base64_encode($row['profile_img']); ?>
      <img class="img-fluid main_img" src="data:image/png;base64,<?php echo $img; ?>" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">総合評価</h3>
      <p><span class="score">
      <?php 
      echo round(($kikaku_point+$movie_point)/2, 1);
      ?>
      </span>点</p>
      <h3 class="my-3">企画力</h3>
      <p><span class="star_1">
      <?php
        for ($i=0; $i < floor($kikaku_point/10); $i++) { 
          echo "★";
        }
        for ($i=0; $i < 10-floor($kikaku_point/10); $i++) { 
          echo "☆";
        }
      ?>
      </span></p>
      <h3 class="my-3">映像編集力</h3>
      <p><span class="star_2">
      <?php
        for ($i=0; $i < floor($movie_point/10); $i++) { 
          echo "★";
        }
        for ($i=0; $i < 10-floor($movie_point/10); $i++) { 
          echo "☆";
        }
      ?>
      </span></p>
      <a href="/youtuber_collection/users/review?youtuber_id=<?php echo $row['id'] ?>" class="btn btn-primary">このYoutuberを評価する</a>

      <h3 class="my-3">概要</h3>
      <p><?php echo $row['channel_about'] ?><br>(公式サイトより引用)</p>
      <h3 class="my-3">ソーシャル</h3>
      <ul>
      	<?php if (!empty($row['twitter'])) { ?>
        <li><a href="<?php echo $row['twitter'] ?>">twitter</a></li>
      	<?php } ?>
      	<?php if (!empty($row['instagram'])) { ?>
        <li><a href="<?php echo $row['instagram'] ?>">instagram</a></li>
      	<?php } ?>
      	<?php if (!empty($row['google_plus'])) { ?>
        <li><a href="<?php echo $row['google_plus'] ?>">google+</a></li>
      	<?php } ?>
      </ul>
    </div>

  </div>
  <!-- /.row -->
  <!-- Related Projects Row -->
  <h3 class="my-4">人気動画</h3>
  <div class="row">
  <?php foreach ($result as $row) { ?>
     <iframe class="if_rame" src="https://www.youtube.com/embed/<?php echo split('v=',$row['popular_movie']['movie_url'])[1] ?>" frameborder="0" allowfullscreen></iframe>
  <?php } ?>
  </div>
  <a href="./movies?youtuber_id=<?php echo $_GET['id'] ?>" title="">動画の一覧を見る</a>
  <!-- /.row -->
