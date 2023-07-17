<?php 

// include Function  file
    include_once('../backend/function.php');
    $axisclass = new DB_con();
    $getAllInfoClass = $axisclass->getAllInfo('classes');
    $getAllInfoDivision = $axisclass->getAllInfo('divisions');
    $schoolid = "";
    $getUserInfo = $axisclass->getAllInfoWhere('user',$_SESSION['uid']);
     while ($user = mysqli_fetch_array($getUserInfo)) {
        $userfirstname = $user['first_name'];
        $usermiddlename = $user['middle_name'];
        $userlastname = $user['last_name'];
        $usertype = $user['users_type'];
        $schoolid = $user['schools_id'];
        $email = $user['email'];
        $phone = $user['phone'];
        $gender = $user['gender'];
        
        $dateofbirth = $user['dateofbirth'];
        $nationality = $user['nationality'];
        $aadharid = $user['aadharid'];
        $area = $user['area'];
        $mpcity = $user['city'];
        $state = $user['state'];
        $country = $user['country'];
        $profile_image = $user['profile_image'];
    }
    
    

    
    $getSchoolInfo = $axisclass->getAllInfoWhere('schools',$schoolid);
    
      while ($school = mysqli_fetch_array($getSchoolInfo)) {
        $schoolname = $school['schoolname'];
        $udisenumber = $school['udisenumber'];
        $registrationnumber = $school['registrationnumber'];
        $areaname = $school['areaname'];
        $scity = $school['city'];
        $semail = $school['email'];
        $phonenumber = $school['phonenumber'];
        $imageurl = $school['imageurl'];
        $spincode = $school['pincode'];
        $Principal = $school['Principal'];
        $VicePrincipal = $school['VicePrincipal'];
        $Incharge = $school['Incharge'];
        $WorkingYearstartDate = $school['WorkingYearstartDate'];
        $WorkingYearEndDate = $school['WorkingYearEndDate'];
    }
    
    
    $userfullname = $userfirstname." ".$usermiddlename." ".$userlastname;
    $studentrole="";
    if($usertype == "2"){
        $studentrole = "monitor";
    }
    else if($usertype == "3"){
        $studentrole = "Class Teacher";
    }
    else if($usertype =="4"){
        $studentrole = "Subject Teacher";
    }
    else if($usertype == "5")
    {
        $studentrole = "Correspondent";
    }
    else{
        $studentrole = "student";
    }
    

    
    
?>
<style>
    .username {
        text-transform: capitalize;
        font-size: 20px;
        font-weight: bold;
        color: #333;
    }
    .profile-card-list-css {
    background-image: url(../assets/images/profile-background.879fbc11.jpg);
    height: auto;
    background-repeat: round;
    border-radius: 0;
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
    margin-top: 15px;
    margin-right: 3px;
    margin-left: 3px;
    color: #fff;
}
.myprofile {
    margin-top: 50px;
    margin-bottom: 50px;
}
.postsearchheader {
    color: #fff;
    font-size: 22px;
    font-weight: 600;
}
.join-school-add-button-css, .textbook-add-button-css {
    color: #fff;
    font-weight: 500;
    width: 60px;
    font-size: 12px;
    border-radius: 30px;
    height: 27px;
    text-align: center;
    line-height: 10px;
    border-width: 1px;
    border-color: #fff;
    background-color: #5a55ca;
    margin-left: 1rem;
}

</style>

<div class="row">
    <div class="justify-content-center">

        <div class="justify-content-center">
            <div class="col-12">
                <div class="col-12">
                    <div class="card profile-card-list-css">
                        <div class="row">
                            <div class="col-12">
                                <div class="mt-2">
                                    <div class="myprofile col-12 text-center">
                                        <div class="postsearchheader">My Profile<a href="editprofile.php"
                                                class="btn btn-primary d-inline textbook-add-button-css"
                                                type="button">Edit</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="row mt-3 profiledetils d-flex flex-fill justify-content-sm-center justify-content-xs-center justify-content-md-start justify-content-lg-start justify-content-xl-start">
                    <div class="image-profile-div col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 "><img
                            class="img-fluid border img-fluid rounded-circle profile-image position-relative img-thumbnail mx-auto d-block "
                            src="<?php echo $profile_image; ?>"></div>
                    <div class="user-profile-detils col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                        <div class="row ml-2">
                            <div class=""><span class="username d-inline"><?php echo $userfullname;?><h5
                                        class="d-inline"></h5></span></div>
                            <div class="maileicondiv align-items-center "><svg aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="envelope"
                                    class="svg-inline--fa fa-envelope fa-w-16 icon-color" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                    </path>
                                </svg>&nbsp;<?php echo $email; ?></div>
                            <div class="phonecondiv align-items-center "><svg aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="phone-alt"
                                    class="svg-inline--fa fa-phone-alt fa-w-16 icon-color" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z">
                                    </path>
                                </svg>&nbsp;<?php echo $phone; ?></div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 "></div>
                    <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 ">
                        <div>Verified Status</div>
                        <div class="progress mb-3" style="height: 15px;">
                            <div class="progress-bar Progress-bar bg-success" role="progressbar" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100" style="width: 10 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header cardtitle fw-bold text-dark">Personal Details</div>
                            <div class="card-body">
                               
                                <div class="row">
                                    <div class="mb-2 fw-bold col">Full Name</div>
                                    <div class="mb-2 col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3"><?php echo $userfullname;?></div>
                                    <div class="mb-2 fw-bold col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">Area</div>
                                    <div class="mb-2 col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3"><?php echo $area; ?></div>
                                </div>
                                <div class="row">
                                    <div class="mb-2 fw-bold col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">Gender</div>
                                    <div class="mb-2 col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3"><?php echo $gender;?></div>
                                    <div class="mb-2 fw-bold col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">City</div>
                                    <div class="mb-2 col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3"><?php echo $mpcity; ?></div>
                                </div>
                                <div class="row">
                                    <div class="mb-2 fw-bold col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">Date of Birth
                                    </div>
                                    <div class="mb-2 col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3"><?php echo $dateofbirth; ?></div>
                                    <div sm="6" md="6" lg="3" xl="3"
                                        class="mb-2 fw-bold col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">State</div>
                                    <div class="mb-2 col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3"><?php echo $state; ?></div>
                                </div>
                                <div class="row">
                                    <div class="mb-2 fw-bold col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">Nationality
                                    </div>
                                    <div sm="6" md="6" lg="3" xl="3"
                                        class="mb-2 col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3"><?php echo $nationality; ?></div>
                                    <div class="mb-2 fw-bold col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">Country</div>
                                    <div class="mb-2 col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3"><?php echo $country; ?></div>
                                </div>
                                <div class="row">
                                    <div class="mb-2 fw-bold col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">Aadhar Id</div>
                                    <div class="mb-2 col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3"><?php echo $aadharid; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row mt-3">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card mb-2">
                                <div class="card-header cardtitle fw-bold">School Details</div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="card card p-3 assigncard mt-3 mb-3">
                                            <div class="row ">
                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3"><img
                                                        class="card-img img-fluid rounded mx-auto d-flex serchcourse-image"
                                                        src="<?php echo $imageurl; ?>">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-7">
                                                    <div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 card-title font-weight-bold text-center text-col-center text-sm-center text-md-start text-lg-start text-xl-start">
                                                            <?php echo $schoolname; ?></div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                        <div class="row">
                                                            <div
                                                                class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 font-weight-bold">
                                                                Registration Number</div>
                                                            <div
                                                                class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                                                                <?php echo $registrationnumber; ?></div>
                                                        </div>
                                                        <div class="row">
                                                            <div
                                                                class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 font-weight-bold">
                                                                Phone Number</div>
                                                            <div class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                                <?php echo $phonenumber; ?></div>
                                                        </div>
                                                        <div class="row">
                                                            <div
                                                                class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 font-weight-bold">
                                                                Pin code</div>
                                                            <div class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                                <?php echo $spincode; ?></div>
                                                        </div>
                                                        <div class="row">
                                                            <div
                                                                class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 font-weight-bold">
                                                                City</div>
                                                            <div class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                                <?php echo $scity; ?></div>
                                                        </div>
                                                        <div class="row">
                                                            <div
                                                                class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 font-weight-bold">
                                                                Mobile number</div>
                                                            <div class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                                9876543211</div>
                                                        </div>
                                                        <div class="row">
                                                            <div
                                                                class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 font-weight-bold">
                                                                Email address</div>
                                                            <div class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                                <?php echo $semail; ?></div>
                                                        </div>
                                                        <div class="row">
                                                            <div
                                                                class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 font-weight-bold">
                                                                School Principal </div>
                                                            <div class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                                        <?php echo $Principal; ?>
     </div>
                                                        </div>
                                                        <div class="row">
                                                            <div
                                                                class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 font-weight-bold">
                                                                School Vice Principal </div>
                                                            <div class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <?php                           echo $VicePrincipal; ?> 
        </div>
                                                        </div>
                                                        <div class="row">
                                                            <div
                                                                class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 font-weight-bold">
                                                                School Incharge </div>
                                                            <div class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                                <?php echo $Incharge; ?>
        </div>
                                                        </div>
                                                        <div class="row">
                                                            <div
                                                                class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 font-weight-bold">
                                                                School Working Year start Date </div>
                                                            <div
                                                                class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                                                               <?php echo $WorkingYearstartDate; ?>
        </div>
                                                        </div>
                                                        <div class="row">
                                                            <div
                                                                class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 font-weight-bold">
                                                                School Working Year End Date </div>
                                                            <div class="mb-2 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                               <?php echo $WorkingYearEndDate ; ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 justify-content-center">
                                                    <div
                                                        class="row text-end text-col-center text-sm-center text-md-start text-lg-start text-xl-start">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card  mt-3 mb-3">
                        <div class="card-header cardtitle fw-bold">My Schedule</div>
                        <div class="card-body">
                            <div class="MuiPaper-root MuiPaper-elevation2 MuiPaper-rounded" style="position: relative;">
                                <div class="MuiToolbar-root MuiToolbar-regular jss5 MuiToolbar-gutters">
                                    <div class="jss7"></div>
                                    <div class="jss8">
                                        <div>
                                            <div><span></span></div>
                                        </div>
                                    </div>
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    </div>
</div>