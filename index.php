<!DOCTYPE html>

<!-- Using w3>CSS framework's -->
<html>
    <title>RUEHDM | Rural and Urban Education Health Development Mission</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <script type="text/javascript" src="assets/js/main.js"></script>

    <body>
        <!-- Navbar (stick on top) -->
        <!--<div class="w3-container">-->  
        <div class="w3-top">
            <div class="w3-bar" id="myNavbar">
                <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                  <i class="fa fa-bars"></i>
                </a>
                <a id="nav" href="#home"  class="w3-bar-item w3-button w3-left">
                    <img src="assets/w3images/logo.jpg" style="width: 55px; height: 50px"> 
                </a>
                <a id="nav" href="#home" class="w3-bar-item w3-button w3-hide-small w3-left" style="color: black;">Rural and Urban Education Health Development Mission</a>  
                <a href="#donate" class="w3-bar-item w3-button w3-tag w3-right">DONATE</a>
                <a id="nav" href="#contact" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-envelope"></i> CONTACT US</a>
                <a id="nav" href="#gallery" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-th"></i> GALLERY</a>
                <a id="nav" href="#about" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-user"></i> ABOUT</a>
                <a id="nav" href="#home" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-home"></i>HOME</a>                          
            </div>

              <!-- Navbar for mobiles screens -->
            <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
                <a href="#home" class="w3-bar-item w3-button" onclick="toggleFunction()">HOME</a>
                <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
                <a href="#gallery" class="w3-bar-item w3-button" onclick="toggleFunction()">GALLERY</a>
                <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT US</a>
            </div>
        </div>

        <!-- First Image with Logo Text -->        
            <div class="bgimg-1 w3-display-container w3-opacity-min" >             
                <div class="w3-display-middle" style="white-space:nowrap;" id="home">
                    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">RUEHDM</span>
                </div>
            </div>
        </div>
<!--**********************-->

<!--**********************-->
        <!-- Container (About Section) -->
        <div class="w3-content w3-container w3-padding-64" id="about">
            <h3 class="w3-center">ABOUT US</h3>
            <p class="w3-center"><em></em></p>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

            <p class="w3-large w3-center w3-padding-16"><b>Our on-going events</b></p>
            <p class="w3-wide"><i class="fa fa-home"></i>Social Cause</p>
            <div class="w3-light-grey">
                <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
            </div>
            <p class="w3-wide"><i class="fa fa-male"></i>Social Awareness</p>
            <div class="w3-light-grey">
                <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
            </div>
            <p class="w3-wide"><i class="fa fa-photo"></i>Animal Care</p>
            <div class="w3-light-grey">
                <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">75%</div>
            </div>    
        </div>

        <div class="w3-row w3-center w3-dark-grey w3-padding-16">
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">14+</span><br>
                Partners
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">55+</span><br>
                Event's Done
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">10K+</span><br>
                Happy Lives
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">150+</span><br>
                Volunteers 
            </div>
        </div>

        <!-- Second Parallax Image with Gallery Text -->
        <div class="bgimg-2 w3-display-container w3-opacity-min">        
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide">GALLERY</span>
            </div>
        </div>

        <!-- Container (Gallery Section) -->
        <div class="w3-content w3-container w3-padding-64" id="gallery">
        
          <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
        <div class="w3-row-padding w3-center">
            <div class="w3-col m3">
                <img src="assets/w3images/img1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
            </div>

            <div class="w3-col m3">
                <img src="assets/w3images/img2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans">
            </div>

            <div class="w3-col m3">
                <img src="assets/w3images/img3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup">
            </div>

            <div class="w3-col m3">
                <img src="assets/w3images/img4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
            </div>
        </div>

        <div class="w3-row-padding w3-center w3-section">
            <div class="w3-col m3">
                <img src="assets/w3images/img2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
            </div>

            <div class="w3-col m3">
                <img src="assets/w3images/img3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">
            </div>

            <div class="w3-col m3">
                <img src="assets/w3images/img1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">
            </div>

            <div class="w3-col m3">
                <img src="assets/w3images/img4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
            </div>
            <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>
        </div>
        </div>

        <!-- Modal for full size images on click-->
        <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
            <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
            <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
                <img id="img01" class="w3-image">
                <p id="caption" class="w3-opacity w3-large"></p>
            </div>
        </div>

        <!-- Third Parallax Image with Contact Text -->
        <div class="bgimg-3 w3-display-container w3-opacity-min">
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide">CONTACT US</span>
            </div>
        </div>

        <!-- Container (Contact Section) -->
        <div class="w3-content w3-container w3-padding-64" id="contact">
            <h3 class="w3-center"><b>WHERE WE WORK</b></h3>
            <p class="w3-center"><em>We'd love your feedback!</em></p>

            <div class="w3-row w3-padding-32 w3-section">
                <div class="w3-col m4 w3-container">
              <!-- Add Google Maps -->
                    <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
                </div>
            <div class="w3-col m8 w3-panel">
                <div class="w3-large w3-margin-bottom">
                    <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>Lucknow, Uttar Pradesh, INDIA<br>
                    <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +00 151515<br>
                    <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: mail@mail.com<br>
                </div>
                <br/>

                <form action="/action_page.php" target="_blank">
                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                        </div>
                    </div>
                    <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                    <br/>
                    <button class="w3-button w3-black w3-right w3-section" type="submit">
                        <i class="fa fa-paper-plane"></i> SEND MESSAGE
                    </button>
                </form>
            </div>
          </div>
        </div>

        <!-- Footer -->
        <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
            <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
            <div class="w3-xlarge w3-section">
                <i class="fa fa-facebook-official w3-hover-opacity"></i>
                <i class="fa fa-instagram w3-hover-opacity"></i>
                <i class="fa fa-snapchat w3-hover-opacity"></i>
                <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                <i class="fa fa-twitter w3-hover-opacity"></i>
                <i class="fa fa-linkedin w3-hover-opacity"></i>
            </div>
            <p>Copywrite &COPY; 2018 RUEHDM </p>
        </footer>

        <!-- Add Google Maps -->
        <script>
        function myMap()
        {
          myCenter=new google.maps.LatLng(26.8467, 80.9462);
          var mapOptions= {
            center:myCenter,
            zoom:12, scrollwheel: false, draggable: false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
          };
          var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

          var marker = new google.maps.Marker({
            position: myCenter,
          });
          marker.setMap(map);
        }

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAB-Z1FHeqQj9MqPiGnfHJhFBfJZfcTKOY&callback=myMap"></script>     
    </body>
</html>
