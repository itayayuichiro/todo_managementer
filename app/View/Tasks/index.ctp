<h1 class="my-4">Todoリスト一覧</h1>

<!-- 新規登録フォーム -->
<div class="todo_box">
	<div class="contents_text">
		<p>新しいToDoを作成する</p>
		<form action="./tasks/create" class="new_post" method="post" accept-charset="utf-8">
			<p>ToDo名:<input type="text" name="title" value="" placeholder="タスクの内容"></p>
			<p>期限:<input type="date" name="limit_date"></p>
			<input type="submit" name="" value="ToDoの追加" class="right_btn btn btn-primary">
		</form>
	</div>

</div>

<?php
	foreach ($all_task as $row) {
		?>
	<div class="todo_box">
		<div class="contents_text">
			<p><?php echo $row['Task']['title'] ?><br>
			作成日:<?php echo $row['Task']['created_at'] ?><br>
			期限:<?php echo $row['Task']['limit_at'] ?>
			<div class="right_btn">
				<form action="./tasks/create" class="edit_btn" method="post" accept-charset="utf-8">
					<input type="submit" name="" value="編集" class="btn btn-success">
				</form>
				<form action="./tasks/finish" class="finish_btn" method="post" accept-charset="utf-8">
					<input type="submit" name="" value="未完了" class="btn btn-info">
				</form>
			</div>
			</p>
		</div>

	</div>
	<?php 
	}
 ?>
