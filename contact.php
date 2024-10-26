<?php
@include('db_con.php');
if(isset($_POST['enter'])){
    $Name = $_POST['Name'];
    $Email = $_POST['email'];
    $Phone = $_POST['contact'];

    $query = mysqli_query($con,"INSERT INTO customer(Name,Email,Phone) Values('$Name','$Email','$Phone')");
    if($query){
        echo "<script>
            alert('Successfull');
        </script>";
    }
    else{
        echo "<script>
            alert('error');
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <nav style="background-color:  rgb(100, 149, 230);" class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand animate__animated animate__fadeInLeft" href="#"><img data-aos="fade-right" data-aos-duration="700" src="logo.png"
                    width="150px" alt="" srcset=""></a><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>       
            <div class="collapse navbar-collapse justify-content-end " id="navbarNavAltMarkup">
                <div style="display: flex;" class="navbar-nav">
                <a class="nav-link active text-c" aria-current="page" href="index.html">Home</a>
                    <a class="nav-link active text-c" aria-current="page" href="about.html">About us</a>
                    <a class="nav-link active text-c" aria-current="page" href="project.html">Our Projects</a>
                    <a class="nav-link active text-c" aria-current="page" href="contact.php">Contact us</a>
                    
                </div>
            </div>
        </div>
    </nav>
    <div>
        <div class="">
            <img src="page.jpg" alt="Snow" style="width:100%;">
            <div class="centered"><h2 style="color: rgb(125, 211, 92); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Santosh Valley</h2></div>
            <div class="centeredw">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                      <a style="color: black;" class="nav-link active" aria-current="page" href="index.html"> >Home</a>
                    </li>
                    <li class="nav-item">
                      <a style="color: black;" class="nav-link" href="project.html"> >Our Projects</a>
                    </li>
                    <li class="nav-item">
                      <a style="color: black;" class="nav-link" href="#"> >Santosh Valley</a>
                    </li>
                    
                  </ul>
            </div>
            <div class="bottom-left"><button type="button" class="btn btn-primary">Contact us</button></div>
          </div>
    </div>
    <div  class="container">
        <div class="row">
          <div class="col">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="card">
                            <div class="card-tittle">
                                <h2 class="text-center py-2">Contact us</h2>
                            </div>
                            <br>
                            <?php
                            if(isset($_GET['error'])){
                                $Msg='fill the blanks';
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                            if(isset($_GET['success']))
                            {
                                $Msg='Success';
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                            ?> 
                            <div >
                                <div  class="card-body ">
                                    <form action="process.php" method="POST">
        
                                        <div class="form-floating mb-3">
                                            <input type="text" name="Name" class="form-control" id="floatingInput" placeholder="name">
                                            <label for="Name">Name</label>
                                          </div>
                                        <br>
                                        <div class="form-floating mb-3">
                                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="email">Email address</label>
                                          </div>
                                         <br>
                                        <div class="form-floating mb-3">
                                            <input type="tel" name="contact" class="form-control" id="floatingInput" placeholder="[0-9]">
                                            <label for="tel">Phone</label>
                                          </div>
                                        <button class="btn btn-primary" name="enter" type="submit">submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
                <div class="card-body">
                    <img class="con" src="pin.png" alt="">
                  <b>Corporate Office</b><br>
                  <p style="padding-left: 30px;">Plot No 71, GAR Builders, 3rd Floor, Uppal Bhagayath, Near Shilparamam, Uppal - 500039.</p>
                </div>
              </div><br>
              <div class="card">
                <div class="card-body">
                    <img src="google-maps.png" class="con" alt="">
                  <b>Branch Office</b>
                  <p style="padding-left: 30px;">H.No. 17-1-382/R/14, APSRTC Colony, Champapet, , Opp. Sama Narsimha Reddy Function Hall, Hyderabad</p>
                </div>
              </div><br>
              <div class="card">
                <div class="card-body">
                    <img src="contact.png" class="con" alt="">
                    <b>Contact</b>
                    <p style="padding-left: 30px;">+91987654321</p>
                </div>
              </div><br>
              <div class="card">
                <div class="card-body">
                    <img src="email.png" class="con" alt="">
                        <b>Email Us</b>
                        <p style="padding-left: 30px;">example@gmail.com</p>
                </div>
              </div><br>
          </div>
        </div>
      </div>
      <footer class="text-dark" style="background-color:rgb(161, 66, 234); color:white;">

<div class="row p-3">
    <div class="col-md-3">
        
        <img style="width: 250px;" src="logo.png" />
        <div style="width: 100%; color: white; font-size: 16px; font-family: Mulish; font-weight: 500; line-height: 24px; word-wrap: break-word"></div>
        
    </div>
    <div class="col-md-2">
        <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 40px; display: inline-flex">
            <div style="color: white; font-size: 21px; font-family: Arial; font-weight: 700; line-height: 24px; word-wrap: break-word">Quick Links</div>
            <div style="align-self: stretch; height: 144px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                <div style="align-self: stretch; color: white; font-size: 16px; font-family: Mulish; font-weight: 500; line-height: 24px; word-wrap: break-word"><a style="color: aqua; text-decoration: none;"  href="index.html">Home</a></div>
                <div style="align-self: stretch; color: white; font-size: 16px; font-family: Mulish; font-weight: 500; line-height: 24px; word-wrap: break-word"><a style="color: aqua; text-decoration: none;" href="about.html">About Us</a></div>
                <div style="align-self: stretch; color: white; font-size: 16px; font-family: Mulish; font-weight: 500; line-height: 24px; word-wrap: break-word"><a style="color: aqua; text-decoration: none;" href="project.html">Projects</a></div>
                <div style="align-self: stretch; color: white; font-size: 16px; font-family: Mulish; font-weight: 500; line-height: 24px; word-wrap: break-word"><a style="color: aqua; text-decoration: none;" href="contact.php">Contact</a></div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 40px; display: inline-flex">
            <div style="align-self: stretch; color: white; font-size: 21px; font-family: Arial; font-weight: 700; line-height: 24px; word-wrap: break-word">Contact Us</div>
            <div style="height: 152px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                <div style="align-self: stretch; height: 152px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                        <div style="width: 16px; height: 16px; position: relative">
                            <div style="width: 16px; height: 16px; left: 0px; top: 0px; position: absolute"></div>
                            <div style="width: 13.33px; height: 10.67px; left: 1.33px; top: 2.67px; position: absolute; background: white"></div>
                        </div>
                        <div style="flex: 1 1 0; color: white; font-size: 16px; font-family: Mulish; font-weight: 500; line-height: 24px; word-wrap: break-word"><b>Info@logoipsum.com</b></div>
                    </div>
                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                        <div style="width: 16px; height: 16px; position: relative">
                            <div style="width: 16px; height: 16px; left: 0px; top: 0px; position: absolute"></div>
                            <div style="width: 9.33px; height: 12.98px; left: 3.33px; top: 1.33px; position: absolute; background: white"></div>
                        </div>
                        <div style="flex: 1 1 0; color: white; font-size: 16px; font-family: Mulish; font-weight: 500; line-height: 24px; word-wrap: break-word">To be declared</div>
                    </div>
                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                        <div style="width: 16px; height: 16px; position: relative">
                            <div style="width: 16px; height: 16px; left: 0px; top: 0px; position: absolute"></div>
                            <div style="width: 11.98px; height: 11.98px; left: 2.02px; top: 2.01px; position: absolute; background: white"></div>
                        </div>
                        <div style="flex: 1 1 0; color: white; font-size: 16px; font-family: Mulish; font-weight: 500; line-height: 24px; word-wrap: break-word">+918886912344</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 40px; display: inline-flex">
            <div style="width: 172px; color: white; font-size: 21px; font-family: Arial; font-weight: 700; line-height: 24px; word-wrap: break-word">Contact Now</div>
            <input style="height: 40px; padding:15px; border:none; border-radius:10px;" type="text" placeholder="Phone Number"><button style="width: 100px; border-radius:10px; border:none; background-color:#00A3FF; color:#ffffff; height:40px;" type="submit">Contact</button>
        </div>
    </div>
    <div><center>© 2023 Urban Pride Properties . All Rights Reserved</center></div>

       </footer> 
</body>
</html>

<div class="alert alert-danger"></div>