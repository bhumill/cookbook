<?php session_start();
// print_r($_SESSION)?>
<?php  require 'ingridient/adddata.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script src="https://kit.fontawesome.com/24326faed9.js" crossorigin="anonymous"></script>
   
 
    <title>ingredients</title>
    <style>
        .w3-card{
            width: 71% !important;
    overflow: hidden;
    height: 255px;
        }
        .w3-card img{width:100% !important;}
        </style>
 
    <body>
    <div class="container">
    <?php require 'index.php';?>
    <hr>
    <main>

      <section style="width: 100%; margin: auto;">
          <!--First Row---------      -->
          <div class="row">
              <div class="col-md-4">
                <div class="w3-card" style="width:50%">
                <img class="img-responsive" alt="user" src="image/vatsal.jpg" width="300px" height="250px">
                   
                </div>
                <div class="w3-container">
                    <h4><b>Vatsal Chauhan</b></h4>
                    <p>(Scrum Master)</p>
                    </div>
            </div>
            <div class="col-md-4">
                <div class="w3-card" style="width:50%">
                <img class="img-responsive" alt="user" src="image/gurpreet.jpg"width="300px" height="250px">
                   
                </div>
                <div class="w3-container">
                    <h4><b>Gurpreet Kaur</b></h4>
                    <p>(Designer)</p>
                    </div>
                </div>
            <div class="col-md-4">
                <div class="w3-card" style="width:50%">
                <img class="img-responsive" alt="user" src="image/meet.jpg" width="300px" height="250px">
                    
                </div>
                <div class="w3-container">
                    <h4><b>Meet Patel</b></h4>
                    <p>(Developer)</p>
                    </div>
                </div>
                </div>
                <br><br>
                <div class="row">
            <div class="col-md-4">
                <div class="w3-card" style="width:50%">
                <img class="img-responsive" alt="user" src="image/vivek.jpg" width="300px" height="250px">
                   
                </div>
                <div class="w3-container">
                    <h4><b>Bhumil Lakhtariya</b></h4>
                    <p>(Developer)</p>
                    </div>
                </div>
            <div class="col-md-4">
                <div class="w3-card" style="width:50%">
                <img class="img-responsive" alt="user" src="image/dhruv.jpg" width="300px" height="250px">
                   
                </div>
                <div class="w3-container">
                    <h4><b>Dhruv Chopra</b></h4>
                    <p>(Developer)</p>
                    </div>
                </div>
            <div class="col-md-4">
                <div class="w3-card" style="width:50%">
                <img class="img-responsive" alt="user" src="image/raj.jpg" width="300px" height="250px">
                    
                </div>
                <div class="w3-container">
                    <h4><b>Raj Patel</b></h4>
                    <p>(Developer)</p>
                    </div>
                </div>
</div>


          <!-- <div class="row">
              <div class="col-md-4">
                  <div class="thumbnail">
                      <div id="team">
                          <img class="img-responsive" alt="user" src="image/vatsal.jpg" ><br> 
                          <h2 id="name">Vatsal Chauhan</h2>
						   <h5 id="name">(Scrum Master)</h5>
                      </div>
                  </div>
              </div> -->
<!-- 

              <div class="col-md-4">
                  <div class="thumbnail">
                      <div id="team">
                          <img class="img-responsive" alt="user" src="image/gurpreet.jpg"><br>
                          <h2>Gurpreet Kaur</h2>
						  <h5>(Developer)</h5>

                      </div>
                  </div>
              </div>

              <div class="col-md-4">
                  <div class="thumbnail">
                      <div id="team">
                          <img class="img-responsive" alt="user" src="image/meet.jpg" width="300px" height="250px"><br>
                          <h2>Meet Patel</h2>
						  <h5>(Developer)</h5>
						  
                      </div>
                  </div>
              </div>
          </div>

              <!--      Second Row------     -->
              <!-- <div class="row">
                  <div class="col-md-4">
                      <div class="thumbnail">
                          <div id="team">
                              <img class="img-responsive" alt="user" src="image/vivek.jpg" width="300px" height="250px"><br>
                              <h2>Bhumil Lakhtariya</h2>
							  <h5>(Developer)</h5>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                      <div class="thumbnail">
                          <div id="team">

                              <img class="img-responsive" alt="user" src="image/dhruv.jpg" width="300px" height="250px"><br>
                              <h2>Dhruv Chopra</h2>
							  <h5>(Developer)</h5>
                          </div>
                      </div>
                  </div>


                  <div class="col-md-4">
                      <div class="thumbnail">
                          <div id="team">
                              <img class="img-responsive" alt="user" src="image/raj.jpg" width="300px" height="250px"><br>
                              <h2>Raj Patel</h2>
							  <h5>(Developer)</h5>
                          </div>
                      </div>
                  </div>
              </div> --> 
      </section>
    </main>
    </div>
    </body>

      <?php
        require_once('footer.php');
        ?>