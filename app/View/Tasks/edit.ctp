<h1 class="my-4">Todoリスト一覧</h1>

<!-- 新規登録フォーム -->
<div class="todo_box">
	<div class="contents_text">
		<p>ToDoの内容を変更します</p>
		<?php
		print(
		  $this->Form->create('Task', array(
		  	'url' => array('controller' => 'tasks', 'action' => 'update')
		  )));
		  ?>
			<p>ToDo名:<input type="text" name="title" required maxlength="31" value="<?php echo $task['title'] ?>" placeholder="タスクの内容"></p>
			<p>期限:<input type="date" name="limit_date" value="<?php echo $task['limit_at'] ?>"></p>
			<input type="hidden" name="id" value="<?php echo $task['id'] ?>">
		<?php
		print(
		  // $this->Form->input('title',array('label' => 'ToDo名')) .
		  // $this->Form->input('limite_at',array('type'=>'date','label' => '期限')).
		  $this->Form->button('ToDoの編集', array('type' => 'submit','class'=>'right_btn btn btn-primary')).
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