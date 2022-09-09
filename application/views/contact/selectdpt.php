
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
                </div>
    
            </div>
    </div>
    <div class="container-fluid p-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color: aliceblue;">
        <div class="">
            <h4>Select Department</h4>
        </div>

        <div class="row justify-content-center">
            <div class="card m-3" style="background-image: url(image/college.png); background-size: 150px; background-position: right; background-repeat: no-repeat; width:130px;background-color:rgba(255,255,255,0.9) ;box-shadow: 0 4px 8px 0 rgba(13, 14, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.5); border-radius: 25px;">
                <div class="card-body">
                    <h5 class="card-title">College</h5>
                    <br><br><br>
                    <a href="<?= base_url();?>college" class="stretched-link"></a>
                </div>
            </div>

            <div class="card m-3" style="background-image: url(image/shs.png); background-size: 150px; background-position: right; background-repeat: no-repeat; width:130px;background-color:rgba(255,255,255,0.9) ;box-shadow: 0 4px 8px 0 rgba(13, 14, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.5); border-radius: 25px;">
                <div class="card-body">
                    <h5 class="card-title">Senior High</h5>
                    <br><br><br>
                    <a href="<?= base_url();?>shs" class="stretched-link"></a>
                </div>
            </div>

            <div class="card m-3" style="background-image: url(image/jhs2.png); background-size: 150px; background-position: right; background-repeat: no-repeat; width:130px;background-color:rgba(255,255,255,0.9) ;box-shadow: 0 4px 8px 0 rgba(13, 14, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.5); border-radius: 25px;">
                <div class="card-body">
                    <h5 class="card-title">Junior High</h5>
                    <br><br><br>
                    <a href="<?= base_url();?>jhs" class="stretched-link"></a>
                </div>
            </div>

            <div class="card m-3" style="background-image: url(image/gs1.png); background-size: 150px; background-position: right; background-repeat: no-repeat; width:130px;background-color:rgba(255,255,255,0.9) ;box-shadow: 0 4px 8px 0 rgba(13, 14, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.5); border-radius: 25px;">
                <div class="card-body">
                    <h5 class="card-title">Grade School</h5>
                    <br><br><br>
                    <a href="<?= base_url();?>gs" class="stretched-link"></a>
                </div>
            </div>


            <div class="card m-3" style="background-image: url(); background-size: 150px; background-position: right; background-repeat: no-repeat; width:150px;background-color:rgba(255,255,255,0.9) ;box-shadow: 0 4px 8px 0 rgba(13, 14, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.5); border-radius: 25px;">
                <div class="card-body">
                    <h4 class="card-title">Employee</h4>
                    <br><br><br>
                    <a href="<?= base_url();?>employee" class="stretched-link"></a>
                </div>
            </div>

        </div>
        

            

        
    </div>

    <div class="container-fluid bg-primary">
        <div class="row align-items-center col-xl-6" style="margin-bottom: 0px;">
            <div class="justify-content-center">
                <img class="logo" src="image/logo4.png" alt="logo" srcset="" style="height: 40px;">
            </div>
            <div class="form-inline text-white" style="font-size: 11px;">
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