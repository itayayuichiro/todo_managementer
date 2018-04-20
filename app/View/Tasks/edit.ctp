<h1 class="my-4">Todoリスト編集</h1>

<!-- 新規登録フォーム -->
<div class="todo_box">
    <div class="contents_text">
        <?php
        if (empty($task)) {
            echo "このTodoは削除されています";
            echo "<br>";
            print(
            $this->Html->link(
                '戻る',
                array(
                    'controller' => 'tasks',
                    'action' => 'index'
                )
            )
            );
        } else {
            ?>
            <p>ToDoの内容を変更します</p>
            <?php
            print(
            $this->Form->create('Task', array(
                'url' => array('controller' => 'tasks', 'action' => 'update')
            )));
            ?>
            <p>ToDo名:<input type="text" name="title" required maxlength="31" value="<?php echo $task['title'] ?>"
                            placeholder="タスクの内容"></p>
            <span class="hit_message"><?php echo @$error['title'][0] ?></span>
            <p>期限:<input type="date" name="limit_date" value="<?php echo $task['limit_at'] ?>"></p>
            <span class="hit_message"><?php echo @$error['date'][0] ?></span>
            <input type="hidden" name="id" value="<?php echo $task['id'] ?>">
            <?php
            print(
                $this->Form->button('ToDoの編集', array('type' => 'submit', 'class' => 'right_btn btn btn-primary')) .
                $this->Form->end()
            );
        }
        ?>
    </div>
</div>