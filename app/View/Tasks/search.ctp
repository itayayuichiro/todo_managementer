<h1 class="my-4">Todoリスト一覧</h1>

<!-- 新規登録フォーム -->
<div class="todo_box">
	<div class="contents_text">
		<p>新しいToDoを作成する</p>
		<?php
		print(
		  $this->Form->create('Task', array(
		  	'type' => 'get',
		  	'url' => array('controller' => 'tasks', 'action' => 'search')
		  )));
		  ?>
			<p>ToDo名:<input type="text" name="keyword" value="<?php echo @$_GET['keyword'] ?>" placeholder=""></p>
		<?php
		print(
		  $this->Form->button('ToDoの検索', array('type' => 'submit','class'=>'right_btn btn btn-primary')).
		  $this->Form->end()
		);
		?>
	</div>

</div>

<?php
	if (empty($_GET['keyword'])) {
?>

<?php
	}else if(count($search_task)==0){
?>
		<span class="hit_message">ToDoが見つかりませんでした</span>
<?php
	}else{
?>
		<span class="hit_message">ToDoが<?php echo count($search_task); ?>件見つかりました</span>
<?php
	}
	?>

<?php
	if (!empty($_GET['keyword'])) {
		foreach ($search_task as $row) {
			?>
		<div class="todo_box <?php echo $this->Format->past_date($row['Task']['limit_at']); ?>">
			<div class="contents_text">
				<p><?php echo $row['Task']['title'] ?><br>
				作成日:<?php echo $this->Format->format_date($row['Task']['created']); ?><br>
				期限:<?php echo $this->Format->format_date($row['Task']['limit_at']); ?>
				<div class="right_btn">
					<a href=""></a>
					<form action="./tasks/edit" class="edit_btn" method="get" accept-charset="utf-8">
						<input type="hidden" name="id" value="<?php echo $row['Task']['id']; ?>">
						<input type="submit" name="" value="編集" class="btn btn-success">
					</form>
					<form action="./tasks/finish" class="finish_btn" method="post" accept-charset="utf-8">
						<input type="hidden" name="id" value="<?php echo $row['Task']['id'] ?>">
					<?php
					if ($row['Task']['is_finished']==1) {
					?>
						<input type="submit" name="" value="完了" class="btn btn-info">
					<?php
					}else{
					?>
						<input type="submit" name="" value="未完了" class="btn btn-danger">
					<?php
					}
					?>
					</form>
				</div>
				</p>
			</div>

		</div>
		<?php 
		}
	}
 ?>
