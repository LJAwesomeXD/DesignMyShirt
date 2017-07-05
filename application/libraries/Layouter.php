<?php

    class Layouter
    {
         public $inst;
         public $header = 'sections/header';
         public $loaders = array();
         public $footer = 'sections/footer';

         public function __construct()
         {
             $this->inst = get_instance();
         }

         public function add($view, $render = false)
         {
             array_push($this->loaders, $view);
             if($render) $this->render();
         }

         public function render($view='', $data = array())
         {
             $loaders = $this->loaders;
             $header = $this->header;
             $footer = $this->footer;

             $this->inst->load->view($this->header, $data);
             //if there exists at least one loader
             if(count($loaders) > 0)
                foreach($loaders as $item => $value)
                    $this->inst->load->view($value, $data);
             else
                $this->inst->load->view($view, $data);
             $this->inst->load->view($footer, $data);
         }
    }
