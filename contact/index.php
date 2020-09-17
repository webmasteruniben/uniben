<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | UniBEN</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <style>
        
        

        h1{
            color:#fff;
        }
        .map{
           border-radius: 15px;
            /*margin: 40px auto auto auto;*/
            overflow: hidden;
        }
        .contactForm{
            border: 1px solid #9C0C84;
            padding: 0 30px;
            border-radius: 15px;
            
            /*margin: 40px auto auto auto;*/
            color:#fff;
            background-color: #9C0C84;
           /*width: 60%;
            padding: 20px*/
        }
        
  .form-group{
    margin-bottom: 10px;
    padding-bottom: 20px;
    position: relative;
}

.form-group label{
    text-align: left;
    display: inline-block;
    margin-bottom: 5px;
}

.form-group input{
    border: 2px solid #f0f0f0;
    border-radius: 4px;
    padding: 10px 0 10px 10px;
    display: block;
    width: 97%;

}

.form-group textarea{
    border: 2px solid #f0f0f0;
    border-radius: 4px;
    padding: 10px 0 10px 10px;
    display: block;
    width: 97%;
    
}

        .btn {
            width: 100%;
            height: 55px;
            font-size: 16px;
            color: #fff;
            border-radius: 4px;
            background-color: #91048C;
            border: 2px solid #91048C;
            margin-bottom: 8px;
            transition: all 0.3s ease;
        }
        .btn:hover{
            border: 2px solid #500650;
            color: #efff56;
            font-size: 18px;
            cursor: pointer;

        }
        ul {
            list-style-type:none;
            margin-right: 60px;
        }
        .row{
          margin: 0 60px 60px;
          padding-bottom: 30px;
        }
        .address{
            float: left;
        }

        .phone{
            float: left;
        }
        .images{
            float: right;
        }
        
        .item{
            text-decoration: none;
            font-size: 16px;
            color: #fff;
        }
        img{
            height: 30px;
            width: 30px;

        }

        .images img{
            margin-left: 20px;
            border: 1px solid #fff;
            border-radius: 7px;
            overflow: hidden;
           transition: all 0.3s ease;

        }
        .images img:hover{
            height: 40px;
            width: 40px;
        }
        
    </style>

</head>
<body>
    <div class="page">
        <header>
        <div id="site-logo">
                <a href="../index.html" title="Uniben Home Page"><img src="assets/img/logo2.png" alt="Uniben Logo" class="site-logo-image" /></a>
            </div>
        
            <div id="secondary-menu">
            <div style="text-align: right;padding-top: 18px;">
                <a href="https://uniben-alumni.waeup.org/applicants/checktranscript" target="_blank" class="secondary-menu-link link-border">Apply for Transcript</a>
                <a href="#" class="secondary-menu-link link-border">Contact Us</a>
            </div>    
            <ul style="padding-left: 0px;">
					<li class="secondary-menu-link link-border"><a href="https://mail.google.com" class="secondary-menu-link" target="_blank">Mail</a></li>
                    <li class="secondary-menu-link link-border"><a href="../staff.html" class="secondary-menu-link">Staff</a></li>
                    <li class="secondary-menu-link link-border"><a href="../students.html" class="secondary-menu-link">Students</a></li>
                    <li class="secondary-menu-link link-border"><a href="../visitors.html" class="secondary-menu-link">Visitors</a></li>
                    <li class="secondary-menu-link link-border"><a href="../alumni.html" class="secondary-menu-link">Alumni</a></li>
                    <li class="secondary-menu-link link-border"><a href="../library.html" class="secondary-menu-link">Library</a></li>
                    <li class="secondary-menu-link link-border"><a href="../complaints.html" class="secondary-menu-link">Complaints</a></li>
                    <li class="secondary-menu-link link-border">
                        <div class= search-dropbtn>
                            <input type="text" id="search_input" /> 
                            <button id="search_btn"><i class="icon-search" aria-hidden="true"></i></button>
                        </div>
                        <div id="search">
                            <div id="search_result" style="font-size: x-small;"></div>
                            <button id="search_btn_close">Close </button>
                        </div>
                    </li>
                </ul>
                
            </div>
            
        </header>
        <nav class="primary-menu">
            <ul style="padding-left: 0px;">
                <li><a href="../about.html" class="primary-menu-link">ABOUT</a></li>
                <li><a href="../academics.html" class="primary-menu-link">ACADEMICS</a></li>
                <li><a href="../academics.html" class="primary-menu-link">ADMISSIONS</a></li>
                <li><a href="../research.html" class="primary-menu-link">RESEARCH</a></li>
                <li><a href="http://news.uniben.edu" class="primary-menu-link" target="_blank">NEWS</a></li>
                <li><a href="../onlineresources.html" class="primary-menu-link">OER</a></li>
            </ul>
        </nav>
        <div class="page_head">
                        
                <div class="section">
                    <section>
                        <article class="news-section blog-left" style="background-color: #C6C1C5;">
                    
                            <div class="list-left" style="width: 100%; padding: 0; background-color: #C6C1C5;">
                            <div class="contactForm">
                <h1><bold>Contact us:</bold></h1>
            
                <?php
                    include 'contactretrival.php';
                ?>
        

                <form action="contactus.php" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" value="<?php echo $name?>" id="name" placeholder="Name" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" value="<?php echo $email?>" id="email" placeholder="Email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="messages">Message:</label>
                        <textarea name="messages" id="messages" class="form-control" rows="5" placeholder="Message"><?php echo $messages?></textarea>
                    </div>
                    <input type="submit" name="submit" value="Send message" id="submit" class="btn btn-success btn-lg">
                </form>
            </div>
                            </div>
                            
                        
                        </article>
                    </section>
                
                    <aside style="margin-bottom: 20px;">
                    
                        <div class="academic_calendar" style="background-color: #C6C1C5;">
                            
                            
                            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63442.93369776195!2d5.579885213616445!3d6.370312722606933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1040d3014e1c75cf%3A0x5f3cd0b086c0e598!2sUniversity%20of%20Benin!5e0!3m2!1sen!2sng!4v1599746459466!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>           
                            
                        </div>
                    </aside>
                   
                
            </div>
            <hr>
            <div class="row">
                
                <ul class=" col-lg-offset-1 col-4 address" > 
					<li class="item"><i class="fa fa-envelope"></i> P.M.B. 1154, Ugbowo, Benin city, Edo state.</li>
  </ul>
  <ul class=" col-lg-offset-1 col-3 phone" >
  <li class="item"><i class="fa fa-phone-square"></i> 07025004748, 09155660000</li>
  </ul>
  <ul class=" col-lg-offset-1 col-3 images" >
  <!--<li class="item"><a href="info@uniben.edu" target="#"><img src="asset/images/gmailicon.png" alt="Email Us"></a>-->
  <a href="https://twitter.com/UniversityofBen" target="#"><img src="asset/images/twittericon.png" alt="Our Twitter Handle"></a>
  <a href="https://www.facebook.com/greatuniben" target="#"><img src="asset/images/facebook.png" alt="Our Facebook Page"></a>
  <a href="https://www.linkedin.com/school/university-of-benin/" target="#"><img src="asset/images/li3.jpg" alt="Our Linkendin Page"></a>
  <a href="https://www.youtube.com/user/unibenwebmaster/videos" target="#" ><img src="asset/images/youtubeicon2.png" alt="Our Youtube Chanell"></a>
  </ul>
            </div>   
        </div>
            
        </main>
        <footer>
            <div class="ftn">
                <h5>CONNECT WITH US</h5>
                <ul class="ftn-text">
                    <li><a class="ftn-link" href="https://www.facebook.com/greatuniben">Facebook</a></li>
                    <li><a class="ftn-link" href="https://www.linkedin.com/school/university-of-benin/">LinkedIn</a></li>
                    <li><a class="ftn-link" href="https://twitter.com/UniversityofBen">Twitter</a></li>
                    <!--<li><a class="ftn-link" href="#">Google+</a></li>
                    <li><a class="ftn-link" href="#">Instagram</a></li>-->
                </ul>
    
            </div>
            <div class="ftn">
                <h5>CONTACT US</h5>
                <ul class="ftn-text">
                    <li><a class="ftn-link" href="#">PMB. 1154, Ugbowo, Benin City, Nigeria.</a></li>
                    <li><a class="ftn-link" href="#">info@uniben.edu</a></li>
                    <li><a class="ftn-link" href="#">pro@uniben.edu</a></li>
                    
                </ul>
            </div>
            <div class="ftn">
                <h5>QUICKLINKS</h5>
                <div class="quicklinks">
                    <ul class="ftn-text">
                        <li><a class="ftn-link" href="../about.html">About</a></li>
                        <li><a class="ftn-link" href="../academics.html">Academics</a></li>
                        <li><a class="ftn-link" href="../admissions.html">Admissions</a></li>
                        <li><a class="ftn-link" href="../research.html">Research</a></li>
                        <li><a class="ftn-link" href="https://news.uniben.edu">News</a></li>
                        <li><a class="ftn-link" href="../onlineresources.html">O.E.R.</a></li>
                    </ul>
                    <ul class="ftn-text">
                        <li><a class="ftn-link" href="../staff.html">Staff</a></li>
                        <li><a class="ftn-link" href="../students.html">Students</a></li>
                        <li><a class="ftn-link" href="../visitors.html">Visitors</a></li>
                        <li><a class="ftn-link" href="../alumni.html">Alumni</a></li>
                        <li><a class="ftn-link" href="../library.html">Library</a></li>
                        <li><a class="ftn-link" href="../complaints.html">Complaints</a></li>
                    </ul>
                </div>
            </div>
            <div class="ftn ftn-last">
                <h5>FACTS AND FIGURES</h5>
                <ul class="ftn-text">
                    <li>Number of Site Visits: <br><span class="ftn-text-span">10123322</span></li>
                    <li>Number of Studentss: <br><span class="ftn-text-span">10123322</span></li>
                    <li>Number of Programmes: <br><span class="ftn-text-span">10123322</span></li>
                   
                </ul>
            </div>
        </footer>
        <div class="sub-footer">
            <div class="sub-footer-left">Copyright &copy; 2020, University of Benin</div>
            <div class="sub-footer-right">Designed by University of Benin, Web Unit, ICTU</div>
        </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/calendar.js"></script>
</body>
</html>