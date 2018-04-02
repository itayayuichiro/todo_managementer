<?php


App::uses('AppController', 'Controller');

class TasksController extends AppController {
	public function index(){
        $this->set('youtubers_data', $this->Youtuber->getAllYoutuber());
	}
	public function top(){
        $this->set('youtubers_data', $this->Youtuber->getTopYoutuber());
        $this->loadModel('Office');
        $this->set('offices_data', $this->Office->find('all'));
	}
	public function detail(){
		$result_array = $this->Youtuber->getAverage($_GET['id']);
    $this->set('row',$this->Youtuber->getYoutuberDetail($_GET['id'])[0]['youtubers']);
    $this->set('result',$this->Youtuber->getPopularMovies($_GET['id']));
    $kikaku_point = $result_array[0][0]['kikaku_point'];
		$movie_point = $result_array[0][0]['movie_point'];
    $this->set('kikaku_point', $kikaku_point);
    $this->set('movie_point', $movie_point);
//        $this->set('youtuber_detail', $this->Youtuber->find('first',['conditions' => ['id'=>$_GET['id']]]));
	}
	public function movies(){
		if (!empty($_GET['all']) && $_GET['all']==true) {
	        $this->set('result', $this->Youtuber->getMoviesAll($_GET['youtuber_id']));
		}else{
	        $this->set('result', $this->Youtuber->getMovies($_GET['youtuber_id']));
		}
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
