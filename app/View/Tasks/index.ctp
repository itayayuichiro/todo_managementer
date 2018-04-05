<h1 class="my-4">Todoリスト一覧</h1>

<!-- 新規登録フォーム -->
<div class="todo_box">
	<div class="contents_text">
		<p>新しいToDoを作成する</p>
		<?php
		print(
		  $this->Form->create('Task', array(
		  	'url' => array('controller' => 'tasks', 'action' => 'create')
		  )));
		  ?>
			<p>ToDo名:<input type="text" name="title" required value="" placeholder=""></p>
			<span class="hit_message"><?php echo @$error['title'][0] ?></span>
			<p>期限:<input type="date" name="limit_date" required></p>
			<span class="hit_message"><?php echo @$error['date'][0] ?></span>
		<?php
		print(
		  // $this->Form->input('title',array('label' => 'ToDo名')) .
		  // $this->Form->input('limite_at',array('type'=>'date','label' => '期限')).
		  $this->Form->button('ToDoの追加', array('type' => 'submit','class'=>'right_btn btn btn-primary')).
		  $this->Form->end()
		);
		?>
<!-- 
		<form action="./tasks/create" class="new_post" method="post" accept-charset="utf-8">
			<p>ToDo名:<input type="text" name="title" required maxlength="31" value="" placeholder="タスクの内容"></p>
			<p>期限:<input type="date" name="limit_date"></p>
			<input type="submit" name="" value="ToDoの追加" class="right_btn btn btn-primary">
		</form>
 -->	</div>

</div>
<?php
	if(count($all_task)==0){
?>
		<span class="hit_message">登録されたToDoはございません</span>
<?php
	}
?>

<?php
	foreach ($all_task as $row) {
		?>
	<div class="todo_box <?php echo $this->Format->past_date($row['Task']['limit_at']); ?>">
		<div class="contents_text">
			<p><?php echo $row['Task']['title'] ?><br>
			作成日:<?php  echo $this->Format->format_date($row['Task']['created']); ?><br>
			期限:<?php echo $this->Format->format_date($row['Task']['limit_at']); ?>
			<div class="right_btn">
				<form action="/todo_managementer/tasks/edit" class="edit_btn" method="get" accept-charset="utf-8">
					<input type="hidden" name="id" value="<?php echo $row['Task']['id']; ?>">
					<input type="submit" name="" value="編集" class="btn btn-success">
				</form>
				<form action="/todo_managementer/tasks/delete" class="delete_btn" method="post" accept-charset="utf-8">
					<input type="hidden" name="id" value="<?php echo $row['Task']['id']; ?>">
					<input type="submit" name="" value="×" class="btn btn-warning">
				</form>
				<form action="/todo_managementer/tasks/finish" class="finish_btn" method="post" accept-charset="utf-8">
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
 ?>
