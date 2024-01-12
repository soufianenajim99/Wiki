<?php

class Home extends Controller{
    private $wikiSer;
    public function __construct(){
    $this->wikiSer = new WikiService();
    }

    public function explore(){

        $wi=$this->wikiSer->displayWiki();
        $data=[
          "wiki"=> $wi
        ];
        $this->view("home/explore", $data);

    }
    public function index(){
        $wi=$this->wikiSer->displayFewWiki();
        $data=[
          "wiki"=> $wi
        ];
        $this->view("home/index", $data);
    }

    public function wikiPage($id){

        $wi=$this->wikiSer->getWiki($id);
        $data=[
            "wiki"=> $wi
          ];
       $this->view("home/wikiPage", $data);
    }
    public function lawiki(){
        $wi=$this->wikiSer->latestwiki();
        $data=[
            "wiki"=> $wi
          ];
       $this->view("home/lawiki", $data);
    }
    public function lacate(){
        $wi=$this->wikiSer->latestcate();
        $data=[
            "wiki"=> $wi
          ];
       $this->view("home/lacate", $data);
    }
}

?>