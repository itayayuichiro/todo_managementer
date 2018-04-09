<?php

App::uses('AppModel', 'Model');

class Task extends AppModel
{
    public $validate = array(
        'title' => array(
            array(
                'rule' => 'isUnique',
                'message' => 'その名前のタスクはすでにあります。'
            ),
            array(
                'rule' => array('lengthBetween', 1, 31),
                'message' => 'タイトルは1～31文字で入力して下さい'
            )
        ),
    );


    public function getAllTask()
    {
        return $this->find('all', array('order' => array('created DESC')));
    }

    public function saveTask($title, $date)
    {
        $this->save(['title' => $title, 'limit_at' => $date]);
    }

    public function updateTask($id, $title, $value)
    {
        $this->id = $id;
        $this->save(['title' => $title, 'value' => $value]);
    }

    public function getSearchTask($keyword)
    {
        return $this->find('all', array('conditions' => array('title LIKE' => '%' . $keyword . '%', 'is_finished' => 0)));
    }


    public function changeFinished($id, $value)
    {
        $this->id = $id;
        $this->save(['is_finished' => $value]);
    }

    public function getRecord($id)
    {
        return $this->find('first', array('conditions' => array('id' => $id)));
    }

    public function deleteRecord($id)
    {
        return $this->delete($id);
    }
}