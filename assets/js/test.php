<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 
        <title>Staff Login</title>
 
        <!-- CSS links will be here -->
        <!-- Bootstrap 4 CSS and custom CSS -->
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <!--<link rel="stylesheet" type="text/css" href="css/custom.css" />--> 
    <script src="https://cdn.ckeditor.com/4.15.1/standard-all/ckeditor.js"></script>
    </head>
<body>
 <header>
     <h1>Staff Page</h1>
 </header>
<!-- navigation bar will be here -->
<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="https://profiles.uniben.edu/" id='admin'>Uniben Staff Profiles</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="https://profiles.uniben.edu/" id='profiles'>Home Page</a>
            <!-- <a class="nav-item nav-link" href="#" id='staff'>Submit Profile</a> -->
            <a class="nav-item nav-link" href="#" id='home'>Staff</a>
            <a class="nav-item nav-link" href="#" id='update_account'>Account</a>
            <a class="nav-item nav-link" href="#" id='profile'>Profile</a>
            <!--<a class="nav-item nav-link" href="#" id='conferences'>Conferences</a>
            <a class="nav-item nav-link" href="candidates.html" id='candidates'>Candidates</a>
            <a class="nav-item nav-link" href="voters.html" id='voters'>Voters</a> -->
            <a class="nav-item nav-link" href="#" id='logout'>Logout</a>
            <a class="nav-item nav-link" href="#" id='login'>Login</a>
            <!--<a class="nav-item nav-link" href="#" id='sign_up'>Register Staff</a>-->
        </div>
    </div>
</nav>
<!-- /navbar -->
 
<!-- content section will be here -->
<!-- container -->
<main role="main" class="container starter-template">
 
    <div class="row">
        <div class="col">
 
            <!-- where prompt / messages will appear -->
            <div id="response"></div>
 
            <!-- where main content will appear -->
            <div id="content"></div>
        </div>
    </div>
 
</main>
<!-- /container -->
 
<!-- script links will be here -->
<!-- jQuery & Bootstrap 4 JavaScript libraries 
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
<script src="app/assets/js/jquery.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script> 
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
  <!--   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
   <script src="js/google-map.js"></script>-->
    <script src="js/main.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->

<!-- Tiny MCE -->


<!-- jquery scripts will be here -->
<script>
    // jQuery codes
    $(document).ready(function(){
        // show sign up / registration form
        $('#response').html("<div class='alert alert-success'>Enter your username and password</div>");
        var jwt = getCookie('jwt');
        $.post("api/staff/validate_token.php", JSON.stringify({ jwt:jwt })).done(function(result) {
            $("#login").hide();
            $("#logout", "#profile").show();
        })
        .fail(function(result){
            $("#login").show();
            $("#logout", "#profile").hide();
        });


        $(document).on('click', '#profiles', function(){
            var html = `
                        <p>Administrator log in page. Please click on login to enter your username and password. Please change your password if you have not done so already.</p>
                    `
            $('#content').html(html);
            clearResponse();
            $('#response').html("<div class='alert alert-success'>Enter your username and password</div>");
        });

        $(document).on('click', '#sign_up', function(){
            // validate jwt to verify access
            var jwt = getCookie('jwt');
            $.post("https://profiles.uniben.edu/api/staff/validate_token.php", JSON.stringify({ jwt:jwt })).done(function(result) {
            var html = `
                <h2>Register User</h2>
                <form id='sign_up_form'>
                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" required />
                    </div>
     
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" required />
                    </div>
     
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required />
                    </div>
     
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required />
                    </div>
     
                    <button type='submit' class='btn btn-primary'>Sign Up</button>
                </form>
                `;
     
            clearResponse();
            $('#content').html(html);
            })
            .fail(function(result){
            showLoginPage();
            $('#response').html("<div class='alert alert-danger'>Please login to register a new Staff account.</div>");
        });

        });
     
        // trigger when registration form is submitted here
        // trigger when registration form is submitted
        $(document).on('submit', '#sign_up_form', function(){
        
        // get form data
        var sign_up_form=$(this);
        var form_data=JSON.stringify(sign_up_form.serializeObject());

        // submit form data to api
        $.ajax({
            url: "https://profiles.uniben.edu/api/user/create_staff.php",
            type : "POST",
            contentType : 'application/json',
            data : form_data,
            success : function(result) {
                // if response is a success, tell the user it was a successful sign up & empty the input boxes
                $('#response').html("<div class='alert alert-success'>New Staff Successfully Registered. Please Ask User to Login.</div>");
                sign_up_form.find('input').val('');
            },
            error: function(xhr, resp, text){
                // on error, tell the user sign up failed
                $('#response').html("<div class='alert alert-danger'>Unable Register Staff. Please contact admin.</div>");
            }
        });

        return false;
        });
     
        // show login form trigger will be here
     
        // clearResponse() will be here
        // remove any prompt messages
        function clearResponse(){
            $('#response').html('');
        }
        
        // showLoginPage() will be here
        // show login form
        $(document).on('click', '#login', function(){
            showLoginPage();
        });

        $(document).on('click', '#logout', function(){
            showLoginPage();
        });


        // showUpdateProfilePage() will be here
        // show profile form
        $(document).on('click', '#profile', function(){
        // product ID will be here
        // get product id
        // validate jwt to verify access
        var jwt = getCookie('jwt');
        $.post("https://profiles.uniben.edu/api/staff/validate_token.php", JSON.stringify({ jwt:jwt })).done(function(result) {

            var username = result.data.email;
                // read product record based on given ID
            $.getJSON("https://profiles.uniben.edu/api/profile/read_update_one_by_email.php?id=" + username, function(data){

                console.log('test');
                // read products button will be here
                // start html
                var read_one_profile_html=`
                    <h2>View Profile</h2>
                    <!-- when clicked, it will show the product's list -->
                    <div id='update-profile' class='btn btn-primary pull-right m-b-15px read-products-button'>
                        <span class='glyphicon glyphicon-list'></span> Update Profile
                    </div>
                    <div id='update-profile-photo' class='btn btn-primary pull-right m-b-15px read-products-button'>
                        <span class='glyphicon glyphicon-list'></span> Update Photo
                    </div>
                    <!-- product data will be shown in this table -->
                    <table class='table table-bordered table-hover'>
                    
                        <!-- product name -->
                        <tr>
                            <td class='w-30-pct'>Designation</td>
                            <td class='w-70-pct'>` + data.designation + `</td>
                        </tr>
                        
                        <tr>
                            <td class='w-30-pct'>First Name</td>
                            <td class='w-70-pct'>` + data.firstname + `</td>
                        </tr>

                        <tr>
                            <td class='w-30-pct'>Last Name</td>
                            <td class='w-70-pct'>` + data.lastname + `</td>
                        </tr>

                        <tr>
                            <td class='w-30-pct'>Email</td>
                            <td class='w-70-pct'>` + data.email + `</td>
                        </tr>

                        <tr>
                            <td class='w-30-pct'>Gender</td>
                            <td class='w-70-pct'>` + data.gender + `</td>
                        </tr>

                        <tr>
                            <td class='w-30-pct'>Profile Picture</td>
                            <td class='w-70-pct'><img  width="300px" src='images/` + data.profile_pic + `' class='image-responsive' alt='` + data.firstname + data.lastname +`'></td>
                        </tr>

                        <tr>
                            <td class='w-30-pct'>Phone1</td>
                            <td class='w-70-pct'>` + data.phone1 + `</td>
                        </tr>

                        <tr>
                            <td class='w-30-pct'>Phone2</td>
                            <td class='w-70-pct'>` + data.phone2 + `</td>
                        </tr>

                        <tr>
                            <td class='w-30-pct'>Faculty</td>
                            <td class='w-70-pct'>` + data.faculty + `</td>
                        </tr>

                        <tr>
                            <td class='w-30-pct'>Department</td>
                            <td class='w-70-pct'>` + data.department + `</td>
                        </tr>

                        <tr>
                            <td class='w-30-pct'>Position</td>
                            <td class='w-70-pct'>` + data.position + `</td>
                        </tr>

                        <tr>
                            <td class='w-30-pct'>Office Address</td>
                            <td class='w-70-pct'>` + data.office_address + `</td>
                        </tr>

                        <tr>
                            <td class='w-30-pct'>Biography</td>
                            <td class='w-70-pct'>` + data.biography + `</td>
                        </tr>

                        <tr>
                            <td class='w-30-pct'>Profile Show</td>
                            <td class='w-70-pct'>` + data.profile_show + `</td>
                        </tr>

                        <tr>
                            <td class='w-30-pct'>Username</td>
                            <td class='w-70-pct'>` + data.username + `</td>
                        </tr>
                    
                        
                    
                    </table>`;

                    // inject html to 'page-content' of our app
                    $("#content").html(read_one_profile_html);
                    
                    // chage page title
                    //changePageTitle("View Profile");
            });
        });

        });

        //Conferences Page
        // showUpdateProfilePage() will be here
        // show profile form
        $(document).on('click', '#conferences', function(){
        
        // product ID will be here
        // get product id
        // validate jwt to verify access
        var jwt = getCookie('jwt');
        
        $.post("https://profiles.uniben.edu/api/staff/validate_token.php", JSON.stringify({ jwt:jwt })).done(function(result) {

            var username = result.data.id;
            var html=`
                    <h2>View Conferences</h2>
                    <!-- when clicked, it will show the product's list -->
                    <div id='add-conference' class='btn btn-primary pull-right m-b-15px add-conference-button'>
                        <span class='glyphicon glyphicon-list'></span> Add Conference Info
                    </div>`
                    

                // read product record based on given ID
            $.getJSON("https://profiles.uniben.edu/api/conference/read.php?id=" + username, function(data){
                
                
                // read products button will be here
                // start html
                html+=`
                    <table class="table table-responsive">`;
                    
                    $.each(data.records, function(key, val) {
                html +=` 
                            <tr>
                              
                                <td>` + val.conference_info + `</td>
                                <td>` + val.entry_date + `</td>
                                <td><button data-id='` + val.id + `' class='btn btn-success read-one-conference-item'>Edit</button>
                                    &nbsp; <button data-id='` + val.id + `' class='btn btn-danger delete-one-conference-item'>Delete</button>
                                </td>
                                
                        </tr>`;
                    });

                    html +=`</table>`

                    // inject html to 'page-content' of our app
                    console.log(html);
                    $("#content").html(html);
                    // chage page title
                    //changePageTitle("View Profile");
            });

            
        });

        });

        // Add Conference Form will be here
        // show profile form
        $(document).on('click', '#add-conference', function(){
        // product ID will be here
        // get product id
        // validate jwt to verify access
        var jwt = getCookie('jwt');
        $.post("https://profiles.uniben.edu/api/staff/validate_token.php", JSON.stringify({ jwt:jwt })).done(function(result) {

            var username = result.data.email;
                // read product record based on given ID
                $.getJSON("https://profiles.uniben.edu/api/profile/read_update_one_.php?id=" + username, function(data){

                //console.log('test');
                // read products button will be here
                // start html
                var html=`

                <h2>Add Conference Info</h2>
                <form id='add_conference_form'>

                    <div class="form-group" id="editor">
                        <label for="conference_info">Enter Conference Info</label>
                        <textarea name="conference_info" id="conference_info" class="form-control" rows="10"></textarea>
                        
                    </div>
        
                    
        
                    <div class="form-group">
                        
                        <input type="hidden" class="form-control" name="profile_id" id="profile_id" value="` + data.id + `" />
                    </div>

                                       
        
                    <button type='submit' class='btn btn-primary'>
                        Save Changes
                    </button>
                </form>`;

                    // inject html to 'page-content' of our app
                    $("#content").html(html);
                    
                    // chage page title
                    //changePageTitle("View Profile");
                    CKEDITOR.replace('conference_info', {
                    height: 200,
                    // By default, some basic text styles buttons are removed in the Standard preset.
                    // The code below resets the default config.removeButtons setting.
                    removeButtons: ''
                    });
                    
                    // chage page title
                    //changePageTitle("View Profile");
                });
            
        });

        });

        // trigger for updating user account will be here
        // trigger when 'update account' form is submitted
        $(document).on('submit', '#add_conference_form', function(){
        
        // handle for update_account_form
        var add_conference_form=$(this);

        // validate jwt to verify access
        var jwt = getCookie('jwt');

        // get form data and jwt here
        // get form data
        var add_conference_form_obj = add_conference_form.serializeObject()
        
        // add jwt on the object
        add_conference_form_obj.jwt = jwt;
        
        // convert object to json string
        var form_data=JSON.stringify(add_conference_form_obj);
        
        // send data to api here
        // submit form data to api
        //console.log(jwt);
        $.ajax({
            url: "api/conference/create.php",
            type : "POST",
            contentType : 'application/json',
            data : form_data,
            success : function(result) {
        
                // tell the user account was updated
                $('#response').html("<div class='alert alert-success'>Conference Info was Inserted.</div>");
        
                // store new jwt to coookie
                //setCookie("jwt", result.jwt, 1);
            },
        
            // errors will be handled here
            // show error message to user
            error: function(xhr, resp, text){
                if(xhr.responseJSON.message=="Unable to Insert Conference Info."){
                    $('#response').html("<div class='alert alert-danger'>Unable to Insert Conference Info.</div>");
                }
            
                else if(xhr.responseJSON.message=="Access denied."){
                    showLoginPage();
                    $('#response').html("<div class='alert alert-success'>Access denied. Please login</div>");
                }
            }
        });

        return false;
        });

        $(document).on('click', '.read-one-conference-item', function(){
        // product ID will be here
        // get product id
        var id = $(this).attr('data-id');
        // read product record based on given ID
        $.getJSON("https://profiles.uniben.edu/api/conference/read_one.php?id=" + id, function(data){
            // read products button will be here
            // start html
            var html=`

            <h2>Edit Conference Info</h2>
                <form id='edit_conference_form'>

                    <div class="form-group" id="editor">
                        <label for="conference_info">Enter Conference Info</label>
                        <textarea name="conference_info" id="conference_info" class="form-control" rows="10">` + data.conference_info + `</textarea>
                        
                    </div>
        
                    
        
                    <div class="form-group">
                        
                        <input type="hidden" class="form-control" name="profile_id" id="profile_id" value="` + data.id + `" />
                    </div>

                                       
        
                    <button type='submit' class='btn btn-primary'>
                        Save Changes
                    </button>
                </form>`;


                ;

                // inject html to 'page-content' of our app
                $("#content").html(html);
                
                // chage page title
                //changePageTitle("View Profile");
                CKEDITOR.replace('conference_info', {
                    height: 200,
                    // By default, some basic text styles buttons are removed in the Standard preset.
                    // The code below resets the default config.removeButtons setting.
                    removeButtons: ''
                    });
        });
    });
 


        // showProfilePagePicture() will be here
        // show profile form
        $(document).on('click', '#update-profile-photo', function(){
        // product ID will be here
        // get product id
        // validate jwt to verify access
        var jwt = getCookie('jwt');
        $.post("https://profiles.uniben.edu/api/staff/validate_token.php", JSON.stringify({ jwt:jwt })).done(function(result) {

            var username = result.data.id;
                // read product record based on given ID
            $.getJSON("https://profiles.uniben.edu/api/profile/read_update_one.php?id=" + username, function(data){

                //console.log('test');
                // read products button will be here
                // start html
                var read_one_profile_photo_html=`

                <h2>Update Profile Photo</h2>
                <form method="POST" action="upload.php" enctype="multipart/form-data">

                    <div class="form-group">

                        <img width="300px" src="images/` + data.profile_pic + `" class="image-responsive" alt="` + data.firstname + data.lastname +`">

                    </div>
                    <div class="form-group">
                        <label for="profile_photo">Profile Picture</label>
                        
                        <input type="file" class="form-control" name="profile_photo" id="profile_photo" />
                    </div>
        
                    
        
                    <div class="form-group">
                        
                        <input type="hidden" class="form-control" name="username" id="username" value="` + data.username + `" />
                    </div>

                    <div class="form-group">
                        
                        <input type="hidden" class="form-control" name="id" id="id" value="` + data.id + `" />
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" >
                    </div>
        
                    <!--<button type='submit' class='btn btn-primary'>
                        Save Changes
                    </button>-->
                </form>`;

                    // inject html to 'page-content' of our app
                    $("#content").html(read_one_profile_photo_html);
                    
                    // chage page title
                    //changePageTitle("View Profile");
            });
        });

        });




        // showProfilePage() will be here
        // show profile form
        $(document).on('click', '#update-profile', function(){
        // product ID will be here
        // get product id
        // validate jwt to verify access
        var jwt = getCookie('jwt');
        $.post("https://profiles.uniben.edu/api/staff/validate_token.php", JSON.stringify({ jwt:jwt })).done(function(result) {

            var username = result.data.id;
                // read product record based on given ID
            $.getJSON("https://profiles.uniben.edu/api/profile/read_update_one.php?id=" + username, function(data){

                console.log('test');
               
                // read products button will be here
                // start html
                var read_one_profile_html=`

                <h2>Update Profile</h2>
                <form id='update_profile_form'>
                    <div class="form-group">
                        <label for="designation">Designation</label>
                        
                        <select class="form-control" name="designation" id="designation">
                            <option value="` + data.designation + `">` + data.designation + `</option>
                            <option value="Miss.">Miss.</option>
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Dr.">Dr.</option>
                            <option value="Prof.">Prof.</option>
                            <option value="Dr. (Miss.)">Dr. (Miss.)</option>
                            <option value="Dr. (Mrs.)">Dr. (Mrs.)</option>
                            <option value="Prof. (Miss.)">Prof. (Miss.)</option>
                            <option value="Prof. (Mrs.)">Prof. (Mrs.)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" required value="` + data.firstname + `" />
                    </div>
        
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" required value="` + data.lastname + `" />
                    </div>
        
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required value="` + data.email + `" />
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" id="gender" required>
                            <option value="` + data.gender + `">` + data.gender + `</option>
                            <option value="FEMALE">FEMALE</option>
                            <option value="MALE">MALE</option>
                        </select>
                    </div>

                  
                   
                    <div class="form-group">
                        <label for="phone1">Phone1</label>
                        <input type="phone" class="form-control" name="phone1" id="phone1" value="` + data.phone1 + `" />
                    </div>

                    <div class="form-group">
                        <label for="phone2">Phone2</label>
                        <input type="phone" class="form-control" name="phone2" id="phone2" value="` + data.phone2 + `" />
                    </div>

                    <div class="form-group">
                        <label for="faculty">Faculty</label>
                        <input type="text" class="form-control" name="faculty" id="faculty" value="` + data.faculty + `" />
                    </div>

                    <div class="form-group">
                        <label for="department">Department</label>
                        <input type="text" class="form-control" name="department" id="department" value="` + data.department + `" />
                    </div>
                    
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" name="position" id="position" value="` + data.position + `" />
                    </div>

                    <div class="form-group">
                        <label for="office_address">Office Address</label>
                        <input type="text" class="form-control" name="office_address" id="office_address" value="` + data.office_address + `" />
                    </div>

                    <div class="form-group" id="editor">
                        <label for="biography">Biography</label>
                        <textarea class="form-control" name="biography" id="biography" rows="10">` + data.biography + `</textarea>
                    </div>

                    <div class="form-group">
                        <label for="profile_show">Profile Show</label>
                        <select class="form-control" name="profile_show" id="profile_show">
                            <option value="` + data.profile_show + `">` + data.profile_show + `</option>
                            <option value="NO">NO</option>
                            <option value="YES">YES</option>
                        </select>
                        
                    </div>
        
                    <div class="form-group">
                        
                        <input type="hidden" class="form-control" name="username" id="username" value="` + data.username + `" />
                    </div>

                    <div class="form-group">
                        
                        <input type="hidden" class="form-control" name="id" id="id" value="` + data.id + `" />
                    </div>
        
                    <button type='submit' class='btn btn-primary'>
                        Save Changes
                    </button>
                </form>`;

                    // inject html to 'page-content' of our app
                    $("#content").html(read_one_profile_html);

                    CKEDITOR.replace('biography', {
                    height: 200,
                    // By default, some basic text styles buttons are removed in the Standard preset.
                    // The code below resets the default config.removeButtons setting.
                    removeButtons: ''
                    });
                    
                    // chage page title
                    //changePageTitle("View Profile");
            });
        });

        });
        
        // login form submit trigger will be here
        // trigger when login form is submitted
        $(document).on('submit', '#login_form', function(){
        
        // get form data
        var login_form=$(this);
        var form_data=JSON.stringify(login_form.serializeObject());

        // http request will be here
        // submit form data to api
        console.log('test');


        $.ajax({
            url: "https://profiles.uniben.edu/api/staff/login.php",
            type : "POST",
            contentType : 'application/json',
            data : form_data,
            success : function(result){
                console.log('test');
                // store jwt to cookie
                setCookie("jwt", result.jwt, 1);
                console.log(result.jwt);
                // show home page & tell the user it was a successful login
                showHomePage();
                $('#response').html("<div class='alert alert-success'>Successful login.</div>");
        
            },
            // error response will be here
            error: function(xhr, resp, text){
                // on error, tell the user login has failed & empty the input boxes
                $('#response').html("<div class='alert alert-danger'>Login failed. Email or password is incorrect.</div>");
                login_form.find('input').val('');
            }
        });

        return false;
        });

        // trigger to show home page will be here
        // show home page
        $(document).on('click', '#home', function(){
            showHomePage();
            clearResponse();
        });
        
        // trigger to show account form will be here 
        // show update account form
        $(document).on('click', '#update_account', function(){
            showUpdateAccountForm();
        });
        
        // trigger for updating user account will be here
        // trigger when 'update account' form is submitted
        $(document).on('submit', '#update_account_form', function(){
        
        // handle for update_account_form
        var update_account_form=$(this);

        // validate jwt to verify access
        var jwt = getCookie('jwt');

        // get form data and jwt here
        // get form data
        var update_account_form_obj = update_account_form.serializeObject()
        
        // add jwt on the object
        update_account_form_obj.jwt = jwt;
        
        // convert object to json string
        var form_data=JSON.stringify(update_account_form_obj);
        
        // send data to api here
        // submit form data to api
        //console.log(jwt);
        $.ajax({
            url: "api/staff/update_staff.php",
            type : "POST",
            contentType : 'application/json',
            data : form_data,
            success : function(result) {
        
                // tell the user account was updated
                $('#response').html("<div class='alert alert-success'>Account was updated.</div>");
        
                // store new jwt to coookie
                setCookie("jwt", result.jwt, 1);
            },
        
            // errors will be handled here
            // show error message to user
            error: function(xhr, resp, text){
                if(xhr.responseJSON.message=="Unable to update Staff."){
                    $('#response').html("<div class='alert alert-danger'>Unable to update account.</div>");
                }
            
                else if(xhr.responseJSON.message=="Access denied."){
                    showLoginPage();
                    $('#response').html("<div class='alert alert-success'>Access denied. Please login</div>");
                }
            }
        });

        return false;
        });

        // trigger for updating user profile photo will be here
        // trigger when 'update account' form is submitted
        $(document).on('submit', '#update_profile_photo_form', function(){
        
        // handle for update_account_form
        var update_profile_photo_form=$(this);

        // validate jwt to verify access
        var jwt = getCookie('jwt');

        // get form data and jwt here
        // get form data
        var update_profile_form_obj = update_profile_photo_form.serializeObject()

        //check the file
        var fileInputElement = document.getElementById("profile_photo");
        console.log(fileInputElement.value);
        
        // add jwt on the object
        update_profile_form_obj.jwt = jwt;
        
        // convert object to json string
        var form_data=JSON.stringify(update_profile_form_obj);

        console.log(form_data);
        
        // send data to api here
        // submit form data to api
        //console.log(jwt);
        $.ajax({
            url: "api/profile/update_photo.php",
            type : "POST",
            contentType : 'application/json',
            data : form_data,
            success : function(result) {
        
                // tell the user account was updated
                $('#response').html("<div class='alert alert-success'>Profile Photo was updated.</div>");
        
                // store new jwt to coookie
                setCookie("jwt", result.jwt, 1);
            },
        
            // errors will be handled here
            // show error message to user
            error: function(xhr, resp, text){
                if(xhr.responseJSON.message=="Unable to update Profile Photo."){
                    $('#response').html("<div class='alert alert-danger'>Unable to update profile Photo.</div>");
                }
            
                else if(xhr.responseJSON.message=="Access denied."){
                    showLoginPage();
                    $('#response').html("<div class='alert alert-success'>Access denied. Please login</div>");
                }
            }
        });

        return false;
        });

        // trigger for updating user account will be here
        // trigger when 'update account' form is submitted
        $(document).on('submit', '#update_profile_form', function(){
        
        // handle for update_account_form
        var update_profile_form=$(this);

        // validate jwt to verify access
        var jwt = getCookie('jwt');

        // get form data and jwt here
        // get form data
        var update_profile_form_obj = update_profile_form.serializeObject()
        
        // add jwt on the object
        update_profile_form_obj.jwt = jwt;
        
        // convert object to json string
        var form_data=JSON.stringify(update_profile_form_obj);
        
        // send data to api here
        // submit form data to api
        //console.log(jwt);
        $.ajax({
            url: "api/profile/update.php",
            type : "POST",
            contentType : 'application/json',
            data : form_data,
            success : function(result) {
        
                // tell the user account was updated
                $('#response').html("<div class='alert alert-success'>Profile was updated.</div>");
        
                // store new jwt to coookie
                setCookie("jwt", result.jwt, 1);
            },
        
            // errors will be handled here
            // show error message to user
            error: function(xhr, resp, text){
                if(xhr.responseJSON.message=="Unable to update Profile."){
                    $('#response').html("<div class='alert alert-danger'>Unable to update profile.</div>");
                }
            
                else if(xhr.responseJSON.message=="Access denied."){
                    showLoginPage();
                    $('#response').html("<div class='alert alert-success'>Access denied. Please login</div>");
                }
            }
        });

        return false;
        });

        // trigger to logout will be here
        // logout the user
        $(document).on('click', '#logout', function(){
            showLoginPage();
            $('#response').html("<div class='alert alert-info'>You are logged out.</div>");
        });
        // show login page
        function showLoginPage(){
        
        // remove jwt
        setCookie("jwt", "", 1);

        // login page html
        var html = `
            <h2>Login</h2>
            <form id='login_form'>
                <div class='form-group'>
                    <label for='email'>Email address</label>
                    <input type='email' class='form-control' id='email' name='email' placeholder='Enter email'>
                </div>

                <div class='form-group'>
                    <label for='password'>Password</label>
                    <input type='password' class='form-control' id='password' name='password' placeholder='Password'>
                </div>

                <button type='submit' class='btn btn-primary'>Login</button>
            </form>
            `;

        $('#content').html(html);
        clearResponse();
        showLoggedOutMenu();
        }

        // setCookie() will be here 
        // function to set cookie
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+ d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        // showLoggedOutMenu() will be here
        // if the user is logged out
        function showLoggedOutMenu(){
            // show login and sign up from navbar & hide logout button
            //$("#login, #sign_up").show();
            $("#login").show();
            $("#logout", "#profile").hide();
        }
        
        // showHomePage() function will be here
        // show home page
        function showHomePage(){
        
        // validate jwt to verify access
        var jwt = getCookie('jwt');
        $.post("https://profiles.uniben.edu/api/staff/validate_token.php", JSON.stringify({ jwt:jwt })).done(function(result) {

            // home page html will be here
            // if valid, show homepage
            var html = `
                <div class="card">
                    <div class="card-header">Welcome to Staff Account Page!</div>
                    <div class="card-body">
                        <h5 class="card-title">You are logged in.</h5>
                        <p class="card-text">You won't be able to access the home and account pages if you are not logged in.</p>
                    </div>
                </div>
                `;
            
            $('#content').html(html);
            showLoggedInMenu();
        })

        // show login page on error will be here
        // show login page on error
        .fail(function(result){
            showLoginPage();
            $('#response').html("<div class='alert alert-danger'>Please login to access the Staff page.</div>");
        });
        }

        // getCookie() will be here
        // get or read cookie
        function getCookie(cname){
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for(var i = 0; i <ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' '){
                    c = c.substring(1);
                }
        
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        // showLoggedInMenu() will be here
        // if the user is logged in
        function showLoggedInMenu(){
            // hide login and sign up from navbar & show logout button
            //$("#login, #sign_up").hide();
            $("#login").hide();
            $("#logout", "#profile").show();
        }
        
        // showUpdateAccountForm() will be here
        function showUpdateAccountForm(){
            // validate jwt to verify access
            var jwt = getCookie('jwt');
            $.post("https://profiles.uniben.edu/api/staff/validate_token.php", JSON.stringify({ jwt:jwt })).done(function(result) {
        
                // html form for updating user account will be here
                // if response is valid, put user details in the form
                console.log(result.data);
                var html = `
                        <h2>Update Account</h2>
                        <form id='update_account_form'>
                            <div class="form-group">
                                <label for="fullname">Name</label>
                                <input type="text" class="form-control" name="fullname" id="fullname" required value="` + result.data.fullname + `" />
                            </div>
                
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username" required value="` + result.data.username + `" />
                            </div>
                
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required value="` + result.data.email + `" />
                            </div>
                
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" />
                            </div>
                
                            <button type='submit' class='btn btn-primary'>
                                Save Changes
                            </button>
                        </form>
                    `;
                
                clearResponse();
                $('#content').html(html);
            })
        
            // error message when jwt is invalid will be here
            // on error/fail, tell the user he needs to login to show the account page
            .fail(function(result){
                showLoginPage();
                $('#response').html("<div class='alert alert-danger'>Please login to access the staff account page.</div>");
            });
        }
        
        // serializeObject will be here
        // function to make form values to json format
        $.fn.serializeObject = function(){
        
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if (o[this.name] !== undefined) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
        };
    });
    </script>
 
</body>
</html>