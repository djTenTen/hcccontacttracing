<?php
class Log_controller extends CI_Controller{


    public function selectdpt(){

        $page = 'selectdpt';

        if(!file_exists(APPPATH.'/views/logs/'.$page.'.php')){
            show_404();
        }else{
                
            $data['title'] = "Select Category";

            $this->load->view('logs/'.$page, $data);
            
        }
      
    }


    public function employees(){
       
        $page = 'employee';

        if(!file_exists(APPPATH.'/views/logs/'.$page.'.php')){
            show_404();
        }else{
                
            $data['title'] = "Employee";

            $this->load->view('logs/'.$page, $data);
            
        }
      
    }




    

}