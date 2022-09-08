<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
       <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script src="https://kit.fontawesome.com/2be74ad659.js" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    
        <link rel="stylesheet" href="css/style.css">
        <title>HCC-VCTF</title>

        <script>
            $(document).ready(function () {
                $('select').selectize({
                    sortField: 'text'
                });
            });
        </script> 
    </head>
    <body style="background-image: url(image/back1.jpg); 
            height: 100%;
            width: auto;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            overflow-x: hidden;
            margin: 0;">

    <div class="container-fluid bg-primary">
            <div class="row justify-content-center align-items-center col-xl-6" style="margin-bottom: 0px;">
                <div class="col-4 justify-content-center">
                    <img class="logo" src="image/logo4.png" alt="logo" srcset="" style="height: 100px;">
                </div>
                
                <div class="col-8 text-white">
                    <h4>Holy Cross College</h4>      
                    <p style="font-size: 15px;">Sta. Lucia Sta. Ana Pampanga</p>
                    <h5>Contact Tracing App</h5>
                    <h5>Grade School Portal</h5>  
                </div>
    
            </div>
    </div>
<div 
class="container-fluid" 
style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color: aliceblue;">
        
        <?php
            if($this->session->flashdata('Added') != null){
                echo '<div class="alert alert-success">
                <strong>Success! </strong> Successfully registered 
            </div>';
            }
        ?>

        <?= form_open('gs');?>

            <div class="container pt-3">
                <div class="row">
                    <div class="col-10 row">
                        <select name="studID" id="" class="form form-control">
                            <option value="" selected>Type your Name</option>
                            <?php foreach($student as $row){?>
                                <option value="<?= $row['AdmissionID']?>"><?= $row['FullName']?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-primary" type="submit"><span class="fas fa-search"></button>
                    </div>
                </div>
            </div>

        <?= form_close();?>

        <br><br>
        
        <?= form_open('logstudentgradeschool');?>

            <div class="form-inline col-12">

                    <label class="mr-sm-2">Last Name:</label>
                    <input 
                    type="text" 
                    class="form-control mb-2 mr-sm-2 form-control-sm" 
                    placeholder="Enter last name" 
                    id="lname" 
                    name="lname" 
                    style="text-transform:uppercase"
                    value="<?php if(!empty($ln)){echo $ln;}?>" required>

                    <label class="mr-sm-2">First Name:</label>
                    <input type="text" 
                    class="form-control mb-2 mr-sm-2 form-control-sm" 
                    placeholder="Enter first name" 
                    id="fname" 
                    name="fname" 
                    style="text-transform:uppercase"
                    value="<?php if(!empty($fn)){echo $fn;}?>" required>

                    <label class="mr-sm-2">Middle Initial:</label>
                    <input 
                    type="text" 
                    class="form-control mb-2 mr-sm-2 form-control-sm" 
                    placeholder="Enter middle name" 
                    id="mname" 
                    name="mname" 
                    style="text-transform:uppercase"
                    value="<?php if(!empty($mn)){echo $mn;}?>">



                    <label class="mr-sm-2">Level:</label>

                    <select name="level" id="level" class="form-control mb-2 mr-sm-2 form-control-sm" required>
                        <option value="" selected>SELECT LEVEL</option>
                        <option value="KINDER 1">KINDER 1</option>
                        <option value="KINDER 2">KINDER 2</option>
                        <option value="GRADE 1">GRADE 1</option>
                        <option value="GRADE 2">GRADE 2</option>
                        <option value="GRADE 3">GRADE 3</option>
                        <option value="GRADE 4">GRADE 4</option>
                        <option value="GRADE 5">GRADE 5</option>
                        <option value="GRADE 6">GRADE 6</option>
                    </select>

                    <label class="mr-sm-2">Section:</label>
                    <select name="section" class="form-control mb-2 mr-sm-2 form-control-sm" required>
                        <option value="" selected>Select Section</option>
                        <option value="MARY HELP OF CHRISTIAN">MARY HELP OF CHRISTIAN</option>
                        <option value="ST. JOSEPH">ST. JOSEPH</option>
                        <option value="ST. DOMINIC SAVIO">ST. DOMINIC SAVIO</option>
                        <option value="ST. LUCY">ST. LUCY</option>
                        <option value="ST. BARTHOLOMEW">ST. BARTHOLOMEW</option>
                        <option value="ST. CATHERINE">ST. CATHERINE</option>
                        <option value="ST. ISIDORE">ST. ISIDORE</option>
                        <option value="ST. JOHN THE BELOVED">ST. JOHN THE BELOVED</option>
                        <option value="ST. FRANCIS OF ASSISI">ST. FRANCIS OF ASSISI</option>
                        <option value="ST. PETER">ST. PETER</option> 
                        <option value="ST. ANNE">ST. ANNE</option>
                        <option value="ST. JOACHIM">ST. JOACHIM</option>
                        <option value="ST. AUGUSTINE">ST. AUGUSTINE</option>
                        <option value="ST. LORENZO">ST. LORENZO</option>
                        <option value="ST. MONICA">ST. MONICA</option>
                        <option value="ST. JUDE">ST. JUDE</option>
                    </select>

                    <label class="mr-sm-2">Home Address:</label>
                    <input 
                    type="text" 
                    class="form-control mb-2 mr-sm-2 form-control-sm" 
                    placeholder="Enter home address" 
                    id="address" 
                    name="address" 
                    style="text-transform:uppercase"
                    value="<?php if(!empty($address)){echo $address;}?>" required>

                    <label class="mr-sm-2">Contact:</label>
                    <input 
                    type="text" 
                    class="form-control mb-2 mr-sm-2 form-control-sm" 
                    placeholder="Enter contact" 
                    step="0.01" 
                    id="contact" 
                    name="contact" 
                    style="text-transform:uppercase"
                    value="<?php if(!empty($contact)){echo $contact;}?>" required>

                    <label class="mr-sm-2">Email Address:</label>
                    <input 
                    type="email" 
                    class="form-control mb-2 mr-sm-2 form-control-sm" 
                    placeholder="Optional" 
                    id="email" 
                    name="email"
                    value="">
                    
            </div>

            <div class="form-inline col-12">
                

                <label class="mr-sm-2">Temperature reading 1:</label>
                <input 
                type="number" 
                class="form-control mb-2 mr-sm-2 form-control-sm" 
                placeholder="Enter temperature 1" 
                step="0.01" id="temperature1" 
                name="temperature1" 
                style="text-transform:uppercase" required>

                <label class="mr-sm-2">Temperature reading 2:</label>
                <input 
                type="number" 
                class="form-control mb-2 mr-sm-2 form-control-sm" 
                placeholder="Enter temperature 2" 
                step="0.01" 
                id="temperature2" 
                name="temperature2" 
                style="text-transform:uppercase">

            </div>

            <div class="form-inline marg col-12">
                <label class="mr-sm-2">Foreign countries, other region, 
                province, or outside in the current Cities or Municipality where you reside that 
                you have visited in the last 14 days?</label>
                <input type="text" class="form-control mb-2 mr-sm-2 form-control-sm" placeholder="Last place Visited" id="visited" name="visited" style="text-transform:uppercase">
                <div class="form-check">
                    <label class="form-check-label">
                    <div class="dropdown-divider"></div>
                        Have you had face-to-face contact with a probable or 
                        confirmed COVID-19 case within 1 meter 
                        and for more than 15 minutes for the past 14 days?
                    </label>
                    <div class="form form-inline">
                        <div class="form-check justify-content-center">
                            <label class="form-check-label col-4">
                                <input type="radio" class="form-check-input" id="facetoface" name="facetoface" value="Yes">Yes
                            </label>
                            <label class="form-check-label col-3">
                                
                            </label>
                            <label class="form-check-label col-4">
                                <input type="radio" class="form-check-input" id="facetoface" name="facetoface" Value="No" required>No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <div class="dropdown-divider"></div>
                        Have you provided direct care for a patient with probable or 
                        confirmed COVID-19 case without using proper personal 
                        protective equipment for the past 14 days?
                    </label>
                    <div class="form-inline justify-content-center">
                        <div class="form-check">
                            <label class="form-check-label col-4">
                                <input type="radio" class="form-check-input" id="directcare" name="directcare" value="Yes">Yes
                            </label>
                            <label class="form-check-label col-3">
                                
                            </label>
                            <label class="form-check-label col-4">
                                <input type="radio" class="form-check-input" id="directcare" name="directcare" Value="No" required>No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <div class="dropdown-divider"></div>
                        Have you travelled outside the Philippines in the last 14 days?
                    </label>
                    <div class="form form-inline justify-content-center">
                        <div class="form-check">
                            <label class="form-check-label col-4">
                                <input type="radio" class="form-check-input" id="travelled" name="travelled" value="Yes">Yes
                            </label>
                            <label class="form-check-label col-3">
                                
                            </label>
                            <label class="form-check-label col-4">
                                <input type="radio" class="form-check-input" id="travelled" name="travelled" Value="No" required>No
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-inline">
                <label class="mr-sm-2">Please uncheck if you have not been sick of any of the following:</label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input mr-sm-2" type="hidden" id="cough" name="cough" value="No" />
                        <input class="form-check-input mr-sm-2" type="checkbox" id="cough" name="cough" value="Yes" checked>
                        Cough
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input mr-sm-2" type="hidden" id="fever" name="fever" value="No" />
                        <input class="form-check-input mr-sm-2" type="checkbox" id="fever" name="fever" value="Yes" checked>
                        Fever
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input mr-sm-2" type="hidden" id="colds" name="colds" value="No" />
                        <input class="form-check-input mr-sm-2" type="checkbox" id="colds" name="colds" value="Yes" checked>
                        Colds
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input mr-sm-2" type="hidden" id="bodypain" name="bodypain" value="No" />
                        <input class="form-check-input mr-sm-2" type="checkbox" id="bodypain" name="bodypain" value="Yes" checked>
                        Body Pains
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input mr-sm-2" type="hidden" id="sore" name="sore" value="No" />
                        <input class="form-check-input mr-sm-2" type="checkbox" id="sore" name="sore" value="Yes" checked>
                        Sore Throat
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input mr-sm-2" type="hidden" id="breathing" name="breathing" value="No" />
                        <input class="form-check-input mr-sm-2" type="checkbox" id="breathing" name="breathing" value="Yes" checked>
                        Difficulty in Breathing
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input mr-sm-2" type="hidden" id="diarrhea" name="diarrhea" value="No" />
                        <input class="form-check-input mr-sm-2" type="checkbox" id="diarrhea" name="diarrhea" value="Yes" checked>
                        Diarrhea
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input mr-sm-2" type="hidden" id="smell" name="smell" value="No" />
                        <input class="form-check-input mr-sm-2" type="checkbox" id="smell" name="smell" value="Yes" checked>
                        Loss of Sense of Smell
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input mr-sm-2" type="hidden" id="taste" name="taste" value="No" />
                        <input class="form-check-input mr-sm-2" type="checkbox" id="taste" name="taste" value="Yes" checked>
                        Loss of Sense of Taste
                    </label>
                </div>

                <div class="form-check">
                    <div class="dropdown-divider"></div>
                    <input class="form-check-input mr-sm-2" type="checkbox" id="" name="" value="" required>
                    <label 
                    class="mr-sm-2" 
                    style="font-size: 11px;">
                    <strong>I hereby authorize Holy Cross College</strong>, to collect and process the data indicated herein 
                    for the purpose of contact tracing effecting control of the COVID-19 transmission. 
                    
                </div>

                <div class="form-check">
                    <div class="dropdown-divider"></div>
                    <input class="form-check-input mr-sm-2" type="checkbox" id="" name="" value="" required>
                    <label 
                    class="mr-sm-2" 
                    style="font-size: 11px;">
                    I understand that my personal information is protected by <strong>RA 10173 or the Data Privacy Act of 2012.</strong>
                </div>
                <div class="form-check">
                    <div class="dropdown-divider"></div>
                    <input class="form-check-input mr-sm-2" type="checkbox" id="" name="" value="" required>
                    <label 
                    class="mr-sm-2" 
                    style="font-size: 11px;">
                    I understand that my failure to answer, or any false or misleading 
                    information given by me may be used as a ground for the filing of 
                    cases against me under <strong>Article 171 and 172 of the 
                    Revised Reporting of Communicable Disease</strong>.</label>
                </div>

                <div class="justify-content-center">
                    <button 
                    type="submit" 
                    id="submit" 
                    name="logstud" 
                    value="submit" 
                    class="btn btn-primary mb-2">Submit</button>
                </div>
            </div>
        <?= form_close();?>
</div>

    <div class="container-fluid bgmonitoring">
        <div class="row align-items-center col-xl-6" style="margin-bottom: 0px;">
            <div class="justify-content-center">
                <img class="logo" src="image/logo4.png" alt="logo" srcset="" style="height: 40px;">
            </div>
            <div class="form-inline" style="font-size: 11px;">
            POWERED BY: HCC-MIS
            </div>
        </div>
    </div>
    

    <script>
        $(document).ready(function() {
            $("input[name$='category']").click(function() {
                var test = $(this).val();

                $("div.desc").hide();
                $("#Cate" + test).show();
            });
        });
    </script>  

 
</body>
</html>