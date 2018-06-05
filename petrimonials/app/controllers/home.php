<?php
	class Home extends Controller
	{
		public function index($name='')
		{
			$user = $this->model('Model');
			$user->getCards();
			echo $user->name;
		}
	}
?>