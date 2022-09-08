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


    // emplyoyee part

    public function employees(){
       
        $page = 'employee';

        if(!file_exists(APPPATH.'/views/logs/'.$page.'.php')){
            show_404();
        }else{
                
            $data['title'] = "Employee";

            $empID = $this->input->post('emp');

            if(empty($empID)){
                $data['employee'] = $this->Log_model->getEmployee();
                $this->load->view('logs/'.$page, $data);
            }else{
                $data['employee'] = $this->Log_model->getEmployee();
                $emp = $this->Log_model->getEmployeebyID($empID);
                $data['fn'] = $emp['Fname'];
                $data['ln'] = $emp['Lname'];
                $data['mn'] = $emp['Mname'];
                $data['address'] = $emp['Address'];
                $data['contact'] = $emp['Contact'];
                $this->load->view('logs/'.$page, $data);
            }


        }
      
    }

    public function logemployee(){

        $logemp = $this->input->post('logemp');
        if(!empty($logemp)){
            $this->Log_model->logemployee();
            $this->session->set_flashdata('Added','Added');
            redirect('employee');
        }

        
        
    }










    // college part

    public function college(){
       
        $page = 'college';

        if(!file_exists(APPPATH.'/views/logs/'.$page.'.php')){
            show_404();
        }else{
                
            $data['title'] = "College students";
            $studID = $this->input->post('studID');

            if(empty($studID)){
                $data['student'] = $this->Log_model->getStudentcollege();
                $data['course'] = $this->Log_model->getStudentcollege();
                
                $this->load->view('logs/'.$page, $data);
            }else{
                $data['student'] = $this->Log_model->getStudentcollege();
                $data['course'] = $this->Log_model->getCourse();
                $std = $this->Log_model->getStudentcollegebyID($studID);
                $data['fn'] = $std['FirstName'];
                $data['ln'] = $std['LastName'];
                $data['mn'] = $std['MiddleName'];
                $data['level'] = $std['Level'];
                $data['coursecode'] = $std['CourseCode'];
                $data['section'] = $std['Section'];
                $data['address'] = $std['Address'];
                $data['contact'] = $std['Contact'];

                $this->load->view('logs/'.$page, $data);
            }


        }
      
    }


    public function logstudentcollege(){

        $logstud = $this->input->post('logstud');
        if(!empty($logstud)){
            $this->Log_model->logstudentcollege();
            $this->session->set_flashdata('Added','Added');
            redirect('college');
        }

        
        
    }





















    //Seniorhigh Part
    public function seniorhigh(){
       
        $page = 'seniorhigh';

        if(!file_exists(APPPATH.'/views/logs/'.$page.'.php')){
            show_404();
        }else{
                
            $data['title'] = "Senior High students";
            $studID = $this->input->post('studID');

            if(empty($studID)){
                $data['student'] = $this->Log_model->getStudentSeniorhigh();
                $this->load->view('logs/'.$page, $data);
            }else{
                $data['student'] = $this->Log_model->getStudentSeniorhigh();
                $std = $this->Log_model->getStudentSeniorhighbyID($studID);
                $data['fn'] = $std['FirstName'];
                $data['ln'] = $std['LastName'];
                $data['mn'] = $std['MiddleName'];
                $data['strand'] = $std['Strand'];
                $data['address'] = $std['Address'];
                $data['contact'] = $std['Contact'];

                $this->load->view('logs/'.$page, $data);
            }


        }
      
    }


    public function logstudentseniorhigh(){

        $logstud = $this->input->post('logstud');
        if(!empty($logstud)){
            $this->Log_model->logstudentseniorhigh();
            $this->session->set_flashdata('Added','Added');
            redirect('shs');
        }

        
        
    }




















    //JUNIORHIGH
    public function juniorhigh(){
       
        $page = 'juniorhigh';

        if(!file_exists(APPPATH.'/views/logs/'.$page.'.php')){
            show_404();
        }else{
                
            $data['title'] = "Junior High students";
            $studID = $this->input->post('studID');

            if(empty($studID)){
                $data['student'] = $this->Log_model->getStudentJuniorhigh();
                $this->load->view('logs/'.$page, $data);
            }else{
                $data['student'] = $this->Log_model->getStudentJuniorhigh();
                $std = $this->Log_model->getStudentJuniorhighbyID($studID);
                $data['fn'] = $std['FirstName'];
                $data['ln'] = $std['LastName'];
                $data['mn'] = $std['MiddleName'];
                $data['address'] = $std['Address'];
                $data['contact'] = $std['Contact'];

                $this->load->view('logs/'.$page, $data);
            }


        }
      
    }


    public function logstudentjuniorhigh(){

        $logstud = $this->input->post('logstud');
        if(!empty($logstud)){
            $this->Log_model->logstudentjuniorhigh();
            $this->session->set_flashdata('Added','Added');
            redirect('jhs');
        }

        
        
    }















    //gradeschool
    public function gradeschool(){
       
        $page = 'gradeschool';

        if(!file_exists(APPPATH.'/views/logs/'.$page.'.php')){
            show_404();
        }else{
                
            $data['title'] = "Grade School Students";
            $studID = $this->input->post('studID');

            if(empty($studID)){
                $data['student'] = $this->Log_model->getStudentGradeschool();
                $this->load->view('logs/'.$page, $data);
            }else{
                $data['student'] = $this->Log_model->getStudentGradeschool();
                $std = $this->Log_model->getStudentGradeschoolbyID($studID);
                $data['fn'] = $std['FirstName'];
                $data['ln'] = $std['LastName'];
                $data['mn'] = $std['MiddleName'];
                $data['address'] = $std['Address'];
                $data['contact'] = $std['Contact'];

                $this->load->view('logs/'.$page, $data);
            }


        }
      
    }


    public function logstudentgradeschool(){

        $logstud = $this->input->post('logstud');
        if(!empty($logstud)){
            $this->Log_model->logstudentgradeschool();
            $this->session->set_flashdata('Added','Added');
            redirect('gs');
        }

        
        
    }


    

    

}