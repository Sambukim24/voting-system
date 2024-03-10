<!DOCTYPE html>
<html lang="en">

<head>
    {% load static %}
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Admin home</title>

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{% static 'css/bootstrap1.css' %}">
  <link href="{% static 'css/bootstrap.min.css' %}" rel="stylesheet">
  <link href="{% static 'css/bootstrap1.css' %}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{% static 'css/bootstrap-theme.css' %}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{% static 'css/elegant-icons-style.css' %}" rel="stylesheet" />
  <link href="{% static 'css/font-awesome.min.css' %}" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="{% static 'css/style.css' %}" rel="stylesheet">
  <link href="{% static 'css/style-responsive.css' %}" rel="stylesheet" />
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">

      <!--logo start-->
      <a href="{% url 'adminhome' %}" class="logo">
        <span class="lite" style="color: orangered">Dig<span style="color: white">ital Vot</span><span style="color: green">ing</span></span>
        </a>
      <!--logo end-->

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <li id="task_notificatoin_bar" class="dropdown">
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="Image not found" height="33" width="33" src="{{asset('images/ballot.jpg')}}">
                            </span>
                            <span class="username">{{"username"}}</span>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="/EC_Admin/adminprofile"><i class="icon_profile"></i>Profile</a>
              </li>
              <li>
                <a href="/EC_Admin/achangepassword"><i class="icon_key_alt"></i> Change password</a>
              </li>
                 <li>
                <a href="/logout" style="background-color: #EBEBEB; color: black"><i class="arrow_right_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->
            <section id="main-content" style="margin-left: 0px;">
        <section class="wrapper">
          <div class="container my-4">
            <div class="row mx-auto">
                <div class="card col-auto mx-auto my-4 text-center" style="width: 25rem; box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.15);">
                    <img src="{% static 'images/user.png' %}" class="card-img-top mt-2" height="200" width="200" alt="Image not found">
                    <div class="card-body">
                        <h5 class="card-title">VOTER</h5>
                        <a href="/EC_Admin/addvoter" class="btn btn-primary btn-block">Add Voter</a>
                        <a href="/EC_Admin/editvoter" class="btn btn-primary btn-block">Edit/Delete Voter</a>
                        <a href="/EC_Admin/viewvoter" class="btn btn-primary btn-block">View Voter</a>
                    </div>
                </div>

                <div class="card col-auto mx-auto my-4 text-center" style="width: 25rem; box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.15);">
                    <img src="{% static 'images/candidate.png' %}" class="card-img-top mt-2" height="200" width="200" alt="Image not found">
                    <div class="card-body">
                        <h5 class="card-title">CANDIDATE</h5>
                        <a href="/EC_Admin/addcandidate" class="btn btn-primary btn-block">Add Candidate</a>
                        <a href="/EC_Admin/editcandidate" class="btn btn-primary btn-block">Edit/Delete Candidate</a>
                        <a href="/EC_Admin/viewcandidate" class="btn btn-primary btn-block">View Candidate</a>
                    </div>
                </div>

                <div class="card col-auto mx-auto my-4 text-center" style="width: 25rem; box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.15);">
                    <img src="{% static 'images/election.png' %}" class="card-img-top mt-2" height="200" width="200" alt="Image not found">
                    <div class="card-body">
                        <h5 class="card-title">ELECTION</h5>
                        <a href="/EC_Admin/generateelection" class="btn btn-primary btn-block">Generate Election</a>
                        <a href="/EC_Admin/modifyelection" class="btn btn-primary btn-block">Modify Election</a>
                        <a href="/EC_Admin/completeelection" class="btn btn-primary btn-block">Complete Election</a>
                    </div>
                </div>
            </div>

            <div class="row mx-auto">
                <div class="card col-auto mx-auto my-4 text-center" style="width: 25rem; box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.15);">
                    <img src="{% static 'images/voting.png' %}" class="card-img-top mt-2" height="200" width="200" alt="Image not found">
                    <div class="card-body">
                        <h5 class="card-title">VOTING</h5>
                        <a href="/EC_Admin/voting" class="btn btn-primary btn-block">Polling Booth</a>
                    </div>
                </div>

                <div class="card col-auto mx-auto my-4 text-center" style="width: 25rem; box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.15);">
                    <img src="{% static 'images/result.png' %}" class="card-img-top mt-2" height="200" width="200" alt="Image not found">
                    <div class="card-body">
                        <h5 class="card-title">RESULT & REPORT</h5>
                        <a href="/EC_Admin/generateresult" class="btn btn-primary btn-block">Generate Result</a>
                        <a href="/EC_Admin/viewresult" class="btn btn-primary btn-block">View Result</a>
                        <a href="/EC_Admin/generatereport" class="btn btn-primary btn-block">Generate Report</a>
                        <a href="/EC_Admin/viewreport" class="btn btn-primary btn-block">View Report</a>
                    </div>
                </div>

                <div class="card col-auto mx-auto my-4 text-center" style="width: 25rem; box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.15);">
                    <img src="{% static 'images/complain.png' %}" class="card-img-top mt-2" height="200" width="200" alt="Image not found">
                    <div class="card-body">
                        <h5 class="card-title">COMPLAIN</h5>
                        <a href="/EC_Admin/viewcomplain" class="btn btn-primary btn-block">View Complain</a>
                        <a href="/EC_Admin/replycomplain" class="btn btn-primary btn-block">Reply Complain</a>
                    </div>
                </div>
            </div>
        </div>
        </section>
      </section>
    </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="{% static 'js/jquery.js' %}"></script>
  <script src="{% static 'js/bootstrap.min.js' %}"></script>
  <!-- nicescroll -->
  <script src="{% static 'js/jquery.scrollTo.min.js' %}"></script>
  <script src="{% static 'js/jquery.nicescroll.js' %}" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="{% static 'js/scripts.js' %}"></script>


</body>

</html>