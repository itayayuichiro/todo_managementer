<?php


App::uses('AppController', 'Controller');

class TasksController extends AppController {
	public function index(){
        $this->set('all_task', $this->Task->getAllTask());
	}
	public function create(){
		// $this->Task->saveTask($this->request->data);
		$this->Task->saveTask("1","");
		$this->redirect(array('controller' => 'tasks', 'action' => 'index'));
	}

	public function movie(){
		$result = $this->Youtuber->getMovie($_GET['movie_id'])[0];
    $this->set('row', $result);
		$result_array = $this->Youtuber->getAverage($result['youtubers']['id']);
    $this->set('result',$this->Youtuber->getPopularMovies($result['youtubers']['id']));
    $kikaku_point = $result_array[0][0]['kikaku_point'];
		$movie_point = $result_array[0][0]['movie_point'];
    $this->set('kikaku_point', $kikaku_point);
    $this->set('movie_point', $movie_point);
    $this->set('id', $result['youtubers']['id']);
	}
	public function office(){
	    $this->set('youtubers_data', $this->Youtuber->getOfficeYoutuber($_GET['office']));	
	}
  public function about(){

  }
  public function search(){
    $this->set('youtubers_data', $this->Youtuber->searchYoutubers($_GET['name'])[0]);
  }

}
