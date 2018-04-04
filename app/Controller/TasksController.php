<?php


App::uses('AppController', 'Controller');

class TasksController extends AppController {
	public $helpers = array('Format');

	public function index(){
		$this->set('error',NULL);
        $this->set('all_task', $this->Task->getAllTask());
	}
	public function create(){
		// $this->Task->saveTask($this->request->data);
		// print_r($this->request->data);
		// if ($this->Task->saveTask($this->request->data['title'],$this->request->data['limit_date']) == false) {
	 //        $this->set('error', "失敗");
		// 	$this->redirect(array('controller' => 'tasks', 'action' => 'index'));
		// }
		// if ($this->Task->saveTask($this->request->data['Task']['title'],$this->request->data['Task']['limit_date']) == false) {
		// 	return $this->render('index');
		// }
		$this->set('log','ハンサっむ');
		$this->Task->saveTask(htmlspecialchars($this->request->data['title']),$this->request->data['limit_date']);
		$this->set('error',$this->Task->validationErrors);
		// $this->redirect(array('controller' => 'tasks', 'action' => 'index'));
        $this->set('all_task', $this->Task->getAllTask());
		$this->render('index');
	}

	public function finish(){
		if($this->Task->getRecord($this->request->data['id'])['Task']['is_finished'] == 1){
			$this->Task->changeFinished($this->request->data['id'],0);
		}else{
			$this->Task->changeFinished($this->request->data['id'],1);
		}
		$this->redirect(array('controller' => 'tasks', 'action' => 'index'));
	}

	public function edit(){
		$this->set('task',$this->Task->getRecord($_GET['id'])['Task']);
	}
	
	public function delete(){
		$this->set('task',$this->Task->deleteRecord($this->request->data['id']));
		$this->redirect(array('controller' => 'tasks', 'action' => 'index'));
	}
	

	public function update(){
		$this->Task->updateTask($this->request->data['id'],htmlspecialchars($this->request->data['title']),$this->request->data['limit_date']);
		$this->redirect(array('controller' => 'tasks', 'action' => 'index'));
	}

	public function search(){
        $this->set('search_task', $this->Task->getSearchTask(@$_GET['keyword']));
        // $this->set('search_task', $this->Task->getSearchTask());
	}

}
