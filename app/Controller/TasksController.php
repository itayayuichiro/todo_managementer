<?php


App::uses('AppController', 'Controller');

class TasksController extends AppController
{
    public $helpers = array('Format');

    public function index()
    {
        $this->set('error', NULL);
        $this->set('all_task', $this->Task->getAllTask());
    }

    public function error()
    {
    }

    public function create()
    {
        $this->Task->saveTask($_POST['title'], $_POST['limit_date']);
        $this->set('error', $this->Task->validationErrors);
        $this->set('all_task', $this->Task->getAllTask());
        $this->render('index');
    }

    public function finish()
    {
        if ($this->Task->existId($_POST['id']) == true) {
            if ($this->Task->getRecord($_POST['id'])['Task']['is_finished'] == 1) {
                $this->Task->changeFinished($_POST['id'], 0);
            } else {
                $this->Task->changeFinished($_POST['id'], 1);
            }
            $this->redirect(array('controller' => 'tasks', 'action' => 'index'));
        } else {
            $this->redirect(array('controller' => 'tasks', 'action' => 'error'));
        }

    }

    public function edit()
    {
        if ($this->Task->existId($_GET['id']) == true) {
            $this->set('task', $this->Task->getRecord($_GET['id'])['Task']);
        } else {
            $this->set('all_task', $this->Task->getAllTask());
            $this->set('error_message', 'そのTodoは削除されています。');
            $this->render('index');
        }
    }

    public function delete()
    {
        if ($this->Task->existId($_POST['id']) == true) {
            $this->set('task', $this->Task->deleteRecord($_POST['id']));
            $this->redirect(array('controller' => 'tasks', 'action' => 'index'));
        } else {
            $this->redirect(array('controller' => 'tasks', 'action' => 'error'));
        }
    }


    public function update()
    {
        if ($this->Task->existId($_POST['id']) == true) {
            $this->Task->updateTask($_POST['id'], htmlspecialchars($_POST['title']), $_POST['limit_date']);
            if (empty($this->Task->validationErrors)){
                $this->redirect(array('controller' => 'tasks', 'action' => 'index'));
            }else{
                $this->set('error',$this->Task->validationErrors);
                $this->set('task', $this->Task->getRecord($_POST['id'])['Task']);
                $this->render('edit');
            }

        } else {
            $this->redirect(array('controller' => 'tasks', 'action' => 'error'));
        }
    }

    public function search()
    {
        $this->set('search_task', $this->Task->getSearchTask(@$_GET['keyword']));
        // $this->set('search_task', $this->Task->getSearchTask());
    }

}
