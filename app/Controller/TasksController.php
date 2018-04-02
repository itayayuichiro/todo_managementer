<?php


App::uses('AppController', 'Controller');

class TasksController extends AppController {
	public function index(){
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
		$this->Task->saveTask($this->request->data['title'],$this->request->data['limit_date']);
		$this->redirect(array('controller' => 'tasks', 'action' => 'index'));
	}

	public function finish(){
		echo "baka";
		if($this->Task->getFinished($this->request->data['id'])['Task']['is_finished'] == 1){
			$this->Task->changeFinished($this->request->data['id'],0);
		}else{
			$this->Task->changeFinished($this->request->data['id'],1);
		}
		$this->redirect(array('controller' => 'tasks', 'action' => 'index'));
	}

}
