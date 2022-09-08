<?php 
class Log_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    // employee part
    public function getEmployee(){
        $query = $this->db->query("select * from employees");
        return $query->result_array();
    }

    public function getEmployeebyID($empID){
        $query = $this->db->query("select * from employees where empID = '$empID'");
        return $query->row_array();
    }

    public function logemployee(){

        date_default_timezone_set("Asia/Singapore");
                $time = date("H:i:s");
                $date =  date("m/d/Y");

                $lastname = strtoupper($this->input->post('lname'));
                $firstname = strtoupper($this->input->post('fname'));
                $middlename = strtoupper($this->input->post('mname'));
                $name = $lastname.', '.$firstname.' '.$middlename;
                $address = strtoupper($this->input->post('address'));
                $contact = strtoupper($this->input->post('contact'));
                $email = $this->input->post('email');
                $temperature1 = strtoupper($this->input->post('temperature1'));
                $temperature2 = strtoupper($this->input->post('temperature2'));
                $visited = strtoupper($this->input->post('visited'));
                $facetoface = $this->input->post('facetoface');
                $directcare = $this->input->post('directcare');
                $travelled = $this->input->post('travelled');
                $cough = $this->input->post('cough');
                $fever = $this->input->post('fever');
                $colds = $this->input->post('colds');
                $bodypain = $this->input->post('bodypain');
                $sore = $this->input->post('sore');
                $breathing = $this->input->post('breathing');
                $diarrhea = $this->input->post('diarrhea');
                $smell = $this->input->post('smell');
                $taste = $this->input->post('taste');

        $data = array(
            'Category' => 'EMPLOYEE',
            'Name' => $name,
            'Address' => $address,
            'Date' => $date,
            'Timeofvisit' => $time,
            'Contact' => $contact,
            'Email' => $email,
            'Temperature1' => $temperature1,
            'Temperature2' => $temperature2,
            'Visited' => $visited,
            'isFacetoFace' => $facetoface,
            'isDirectCare' => $directcare,
            'isTravelled' => $travelled,
            'Cough' => $cough,
            'Fever' => $fever,
            'Colds' => $colds,
            'Body' => $bodypain,
            'Sorethroath' => $sore,
            'Breathing' => $breathing,
            'Diarrhea' => $diarrhea,
            'Smell' => $smell,
            'Taste' => $taste
        );

        $this->db->insert('visitors', $data);

    }











    // college part
    public function getStudentcollege(){
        $query = $this->db->query("select AdmissionID,FirstName,LastName,MiddleName,FullName,CourseCode,Level,Section,Address,Contact
        from students_college,courses
        where Course = CourseID
        and isEnrolled != 'Dismiss'");
        return $query->result_array();
    }

    public function getStudentcollegebyID($studID){
        $query = $this->db->query("select AdmissionID,FirstName,LastName,MiddleName,FullName,CourseCode,Level,Section,Address,Contact
        from students_college,courses
        where Course = CourseID
        and AdmissionID = '$studID'
        and isEnrolled != 'Dismiss'");
        return $query->row_array();
    }

    public function getCourse(){
        $query = $this->db->query("select * from courses");
        return $query->result_array();

    }


    public function logstudentcollege(){

        date_default_timezone_set("Asia/Singapore");
                $time = date("H:i:s");
                $date =  date("m/d/Y");

                $lastname = strtoupper($this->input->post('lname'));
                $firstname = strtoupper($this->input->post('fname'));
                $middlename = strtoupper($this->input->post('mname'));
                $name = $lastname.', '.$firstname.' '.$middlename;
                $course = strtoupper($this->input->post('course'));
                $level = strtoupper($this->input->post('level'));
                $section = strtoupper($this->input->post('section'));
                $address = strtoupper($this->input->post('address'));
                $contact = strtoupper($this->input->post('contact'));
                $email = $this->input->post('email');
                $temperature1 = strtoupper($this->input->post('temperature1'));
                $temperature2 = strtoupper($this->input->post('temperature2'));
                $visited = strtoupper($this->input->post('visited'));
                $facetoface = $this->input->post('facetoface');
                $directcare = $this->input->post('directcare');
                $travelled = $this->input->post('travelled');
                $cough = $this->input->post('cough');
                $fever = $this->input->post('fever');
                $colds = $this->input->post('colds');
                $bodypain = $this->input->post('bodypain');
                $sore = $this->input->post('sore');
                $breathing = $this->input->post('breathing');
                $diarrhea = $this->input->post('diarrhea');
                $smell = $this->input->post('smell');
                $taste = $this->input->post('taste');

        $data = array(
            'Category' => 'STUDENT',
            'Name' => $name,
            'Course' => $course,
            'Level' => $level,
            'Section' => $section,
            'Department' => 'COLLEGE',
            'Address' => $address,
            'Date' => $date,
            'Timeofvisit' => $time,
            'Contact' => $contact,
            'Email' => $email,
            'Temperature1' => $temperature1,
            'Temperature2' => $temperature2,
            'Visited' => $visited,
            'isFacetoFace' => $facetoface,
            'isDirectCare' => $directcare,
            'isTravelled' => $travelled,
            'Cough' => $cough,
            'Fever' => $fever,
            'Colds' => $colds,
            'Body' => $bodypain,
            'Sorethroath' => $sore,
            'Breathing' => $breathing,
            'Diarrhea' => $diarrhea,
            'Smell' => $smell,
            'Taste' => $taste
        );

        $this->db->insert('visitors', $data);

    }







    
    // shs part
    public function getStudentSeniorhigh(){
        $query = $this->db->query("select AdmissionID,FirstName,LastName,MiddleName,FullName,Strand,Address,Contact
        from students_seniorhigh
        where isEnrolled != 'Dismiss'");
        return $query->result_array();
    }

    public function getStudentSeniorhighbyID($studID){
        $query = $this->db->query("select AdmissionID,FirstName,LastName,MiddleName,FullName,Strand,Address,Contact
        from students_seniorhigh
        where isEnrolled != 'Dismiss'
        and AdmissionID = '$studID'");
        return $query->row_array();
    }


    public function logstudentseniorhigh(){

        date_default_timezone_set("Asia/Singapore");
                $time = date("H:i:s");
                $date =  date("m/d/Y");

                $lastname = strtoupper($this->input->post('lname'));
                $firstname = strtoupper($this->input->post('fname'));
                $middlename = strtoupper($this->input->post('mname'));
                $name = $lastname.', '.$firstname.' '.$middlename;
                $strand = strtoupper($this->input->post('strand'));
                $level = strtoupper($this->input->post('level'));
                $section = strtoupper($this->input->post('section'));
                $address = strtoupper($this->input->post('address'));
                $contact = strtoupper($this->input->post('contact'));
                $email = $this->input->post('email');
                $temperature1 = strtoupper($this->input->post('temperature1'));
                $temperature2 = strtoupper($this->input->post('temperature2'));
                $visited = strtoupper($this->input->post('visited'));
                $facetoface = $this->input->post('facetoface');
                $directcare = $this->input->post('directcare');
                $travelled = $this->input->post('travelled');
                $cough = $this->input->post('cough');
                $fever = $this->input->post('fever');
                $colds = $this->input->post('colds');
                $bodypain = $this->input->post('bodypain');
                $sore = $this->input->post('sore');
                $breathing = $this->input->post('breathing');
                $diarrhea = $this->input->post('diarrhea');
                $smell = $this->input->post('smell');
                $taste = $this->input->post('taste');

        $data = array(
            'Category' => 'STUDENT',
            'Name' => $name,
            'Course' => $strand,
            'Level' => $level,
            'Section' => $section,
            'Department' => 'SENIORHIGH',
            'Address' => $address,
            'Date' => $date,
            'Timeofvisit' => $time,
            'Contact' => $contact,
            'Email' => $email,
            'Temperature1' => $temperature1,
            'Temperature2' => $temperature2,
            'Visited' => $visited,
            'isFacetoFace' => $facetoface,
            'isDirectCare' => $directcare,
            'isTravelled' => $travelled,
            'Cough' => $cough,
            'Fever' => $fever,
            'Colds' => $colds,
            'Body' => $bodypain,
            'Sorethroath' => $sore,
            'Breathing' => $breathing,
            'Diarrhea' => $diarrhea,
            'Smell' => $smell,
            'Taste' => $taste
        );

        $this->db->insert('visitors', $data);

    }
























    //JUNIORHIGH

    public function getStudentJuniorhigh(){
        $query = $this->db->query("select AdmissionID,FirstName,LastName,MiddleName,FullName,Address,Contact
        from students_juniorhigh
        where isEnrolled != 'Dismiss'");
        return $query->result_array();
    }

    public function getStudentJuniorhighbyID($studID){
        $query = $this->db->query("select AdmissionID,FirstName,LastName,MiddleName,FullName,Address,Contact
        from students_juniorhigh
        where isEnrolled != 'Dismiss'
        and AdmissionID = '$studID'");
        return $query->row_array();
    }


    public function logstudentjuniorhigh(){

        date_default_timezone_set("Asia/Singapore");
                $time = date("H:i:s");
                $date =  date("m/d/Y");

                $lastname = strtoupper($this->input->post('lname'));
                $firstname = strtoupper($this->input->post('fname'));
                $middlename = strtoupper($this->input->post('mname'));
                $name = $lastname.', '.$firstname.' '.$middlename;
                $level = strtoupper($this->input->post('level'));
                $section = strtoupper($this->input->post('section'));
                $address = strtoupper($this->input->post('address'));
                $contact = strtoupper($this->input->post('contact'));
                $email = $this->input->post('email');
                $temperature1 = strtoupper($this->input->post('temperature1'));
                $temperature2 = strtoupper($this->input->post('temperature2'));
                $visited = strtoupper($this->input->post('visited'));
                $facetoface = $this->input->post('facetoface');
                $directcare = $this->input->post('directcare');
                $travelled = $this->input->post('travelled');
                $cough = $this->input->post('cough');
                $fever = $this->input->post('fever');
                $colds = $this->input->post('colds');
                $bodypain = $this->input->post('bodypain');
                $sore = $this->input->post('sore');
                $breathing = $this->input->post('breathing');
                $diarrhea = $this->input->post('diarrhea');
                $smell = $this->input->post('smell');
                $taste = $this->input->post('taste');

        $data = array(
            'Category' => 'STUDENT',
            'Name' => $name,
            'Level' => $level,
            'Section' => $section,
            'Department' => 'JUNIORHIGH',
            'Address' => $address,
            'Date' => $date,
            'Timeofvisit' => $time,
            'Contact' => $contact,
            'Email' => $email,
            'Temperature1' => $temperature1,
            'Temperature2' => $temperature2,
            'Visited' => $visited,
            'isFacetoFace' => $facetoface,
            'isDirectCare' => $directcare,
            'isTravelled' => $travelled,
            'Cough' => $cough,
            'Fever' => $fever,
            'Colds' => $colds,
            'Body' => $bodypain,
            'Sorethroath' => $sore,
            'Breathing' => $breathing,
            'Diarrhea' => $diarrhea,
            'Smell' => $smell,
            'Taste' => $taste
        );

        $this->db->insert('visitors', $data);

    }
















    //JUNIORHIGH

    public function getStudentGradeschool(){
        $query = $this->db->query("select AdmissionID,FirstName,LastName,MiddleName,FullName,Address,Contact
        from students_gradeschool
        where isEnrolled != 'Dismiss'");
        return $query->result_array();
    }

    public function getStudentGradeschoolbyID($studID){
        $query = $this->db->query("select AdmissionID,FirstName,LastName,MiddleName,FullName,Address,Contact
        from students_gradeschool
        where isEnrolled != 'Dismiss'
        and AdmissionID = '$studID'");
        return $query->row_array();
    }


    public function logstudentgradeschool(){

        date_default_timezone_set("Asia/Singapore");
                $time = date("H:i:s");
                $date =  date("m/d/Y");

                $lastname = strtoupper($this->input->post('lname'));
                $firstname = strtoupper($this->input->post('fname'));
                $middlename = strtoupper($this->input->post('mname'));
                $name = $lastname.', '.$firstname.' '.$middlename;
                $level = strtoupper($this->input->post('level'));
                $section = strtoupper($this->input->post('section'));
                $address = strtoupper($this->input->post('address'));
                $contact = strtoupper($this->input->post('contact'));
                $email = $this->input->post('email');
                $temperature1 = strtoupper($this->input->post('temperature1'));
                $temperature2 = strtoupper($this->input->post('temperature2'));
                $visited = strtoupper($this->input->post('visited'));
                $facetoface = $this->input->post('facetoface');
                $directcare = $this->input->post('directcare');
                $travelled = $this->input->post('travelled');
                $cough = $this->input->post('cough');
                $fever = $this->input->post('fever');
                $colds = $this->input->post('colds');
                $bodypain = $this->input->post('bodypain');
                $sore = $this->input->post('sore');
                $breathing = $this->input->post('breathing');
                $diarrhea = $this->input->post('diarrhea');
                $smell = $this->input->post('smell');
                $taste = $this->input->post('taste');

        $data = array(
            'Category' => 'STUDENT',
            'Name' => $name,
            'Level' => $level,
            'Section' => $section,
            'Department' => 'GRADESCHOOL',
            'Address' => $address,
            'Date' => $date,
            'Timeofvisit' => $time,
            'Contact' => $contact,
            'Email' => $email,
            'Temperature1' => $temperature1,
            'Temperature2' => $temperature2,
            'Visited' => $visited,
            'isFacetoFace' => $facetoface,
            'isDirectCare' => $directcare,
            'isTravelled' => $travelled,
            'Cough' => $cough,
            'Fever' => $fever,
            'Colds' => $colds,
            'Body' => $bodypain,
            'Sorethroath' => $sore,
            'Breathing' => $breathing,
            'Diarrhea' => $diarrhea,
            'Smell' => $smell,
            'Taste' => $taste
        );

        $this->db->insert('visitors', $data);

    }





























    
    
    
}
