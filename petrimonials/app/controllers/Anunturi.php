<?php
  class Anunturi extends Controller
  {
    public function get($id = '')
    {
        $modelcon = $this->model('Model');
      
        $data = $modelcon->iaAnunt($id);

        $this->view('home/anunturi', $data);
        $modelcon->closeCon();
    }
  }

?>