<template>
    <TopAdmin/>
    <SidebarAdmin/>
<!-- search form -->
<div class="search-form">
<form action="index.html" method="get">
  <div class="input-group input-group-sm" id="input-group-search">
    <input type="text" autocomplete="off" name="query" id="search-input" class="form-control" placeholder="Search..." />
    <div class="input-group-append">
      <button class="btn" type="button">/</button>
    </div>
  </div>
</form>
<ul class="dropdown-menu dropdown-menu-search">

  <li class="nav-item">
    <a class="nav-link" href="index.html">Morbi leo risus</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.html">Dapibus ac facilisis in</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.html">Porta ac consectetur ac</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.html">Vestibulum at eros</a>
  </li>

</ul>

</div>

<ul class="nav navbar-nav">
<!-- Offcanvas -->
<li class="custom-dropdown">
  <a class="offcanvas-toggler active custom-dropdown-toggler" data-offcanvas="contact-off" href="javascript:" >
    <i class="mdi mdi-contacts icon"></i>
  </a>
</li>
<li class="custom-dropdown">
  <button class="notify-toggler custom-dropdown-toggler">
    <i class="mdi mdi-bell-outline icon"></i>
    <span class="badge badge-xs rounded-circle">21</span>
  </button>
  <div class="dropdown-notify">

    <header>
      <div class="nav nav-underline" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="all-tabs" data-toggle="tab" href="#all" role="tab" aria-controls="nav-home"
          aria-selected="true">All (5)</a>
        <a class="nav-item nav-link" id="message-tab" data-toggle="tab" href="#message" role="tab" aria-controls="nav-profile"
          aria-selected="false">Msgs (4)</a>
        <a class="nav-item nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="nav-contact"
          aria-selected="false">Others (3)</a>
      </div>
    </header>

    <div class="" data-simplebar style="height: 325px;">
      <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tabs">

          <div class="media media-sm bg-warning-10 p-4 mb-0">
            <div class="media-sm-wrapper">
              <a href="user-profile.html">
                <img src="images/user/user-sm-02.jpg" alt="User Image">
              </a>
            </div>
            <div class="media-body">
              <a href="user-profile.html">
                <span class="title mb-0">John Doe</span>
                <span class="discribe">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid at highly months do things on at.</span>
                <span class="time">
                  <time>Just now</time>...
                </span>
              </a>
            </div>
          </div>

          <div class="media media-sm p-4 bg-light mb-0">
            <div class="media-sm-wrapper bg-primary">
              <a href="user-profile.html">
                <i class="mdi mdi-calendar-check-outline"></i>
              </a>
            </div>
            <div class="media-body">
              <a href="user-profile.html">
                <span class="title mb-0">New event added</span>
                <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                <span class="time">
                  <time>10 min ago...</time>...
                </span>
              </a>
            </div>
          </div>

          <div class="media media-sm p-4 mb-0">
            <div class="media-sm-wrapper">
              <a href="user-profile.html">
                <img src="images/user/user-sm-03.jpg" alt="User Image">
              </a>
            </div>
            <div class="media-body">
              <a href="user-profile.html">
                <span class="title mb-0">Sagge Hudson</span>
                <span class="discribe">On disposal of as landlord Afraid at highly months do things on at.</span>
                <span class="time">
                  <time>1 hrs ago</time>...
                </span>
              </a>
            </div>
          </div>

          <div class="media media-sm p-4 mb-0">
            <div class="media-sm-wrapper bg-info-dark">
              <a href="user-profile.html">
                <i class="mdi mdi-account-multiple-check"></i>
              </a>
            </div>
            <div class="media-body">
              <a href="user-profile.html">
                <span class="title mb-0">Add request</span>
                <span class="discribe">Add Dany Jones as your contact.</span>
                <div class="buttons">
                  <a href="#" class="btn btn-sm btn-success shadow-none text-white">accept</a>
                  <a href="#" class="btn btn-sm shadow-none">delete</a>
                </div>
                <span class="time">
                  <time>6 hrs ago</time>...
                </span>
              </a>
            </div>
          </div>

          <div class="media media-sm p-4 mb-0">
            <div class="media-sm-wrapper bg-info">
              <a href="user-profile.html">
                <i class="mdi mdi-playlist-check"></i>
              </a>
            </div>
            <div class="media-body">
              <a href="user-profile.html">
                <span class="title mb-0">Task complete</span>
                <span class="discribe">Afraid at highly months do things on at.</span>
                <span class="time">
                  <time>1 hrs ago</time>...
                </span>
              </a>
            </div>
          </div>

        </div>

        <div class="tab-pane fade" id="message" role="tabpanel" aria-labelledby="message-tab">

          <div class="media media-sm p-4 mb-0">
            <div class="media-sm-wrapper">
              <a href="user-profile.html">
                <img src="images/user/user-sm-01.jpg" alt="User Image">
              </a>
            </div>
            <div class="media-body">
              <a href="user-profile.html">
                <span class="title mb-0">Selena Wagner</span>
                <span class="discribe">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                <span class="time">
                  <time>15 min ago</time>...
                </span>
              </a>
            </div>
          </div>

          <div class="media media-sm p-4 mb-0">
            <div class="media-sm-wrapper">
              <a href="user-profile.html">
                <img src="images/user/user-sm-03.jpg" alt="User Image">
              </a>
            </div>
            <div class="media-body">
              <a href="user-profile.html">
                <span class="title mb-0">Sagge Hudson</span>
                <span class="discribe">On disposal of as landlord Afraid at highly months do things on at.</span>
                <span class="time">
                  <time>1 hrs ago</time>...
                </span>
              </a>
            </div>
          </div>

          <div class="media media-sm bg-warning-10 p-4 mb-0">
            <div class="media-sm-wrapper">
              <a href="user-profile.html">
                <img src="images/user/user-sm-02.jpg" alt="User Image">
              </a>
            </div>
            <div class="media-body">
              <a href="user-profile.html">
                <span class="title mb-0">John Doe</span>
                <span class="discribe">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid
                  at highly months do things on at.</span>
                <span class="time">
                  <time>Just now</time>...
                </span>
              </a>
            </div>
          </div>

          <div class="media media-sm p-4 mb-0">
            <div class="media-sm-wrapper">
              <a href="user-profile.html">
                <img src="images/user/user-sm-04.jpg" alt="User Image">
              </a>
            </div>
            <div class="media-body">
              <a href="user-profile.html">
                <span class="title mb-0">Albrecht Straub</span>
                <span class="discribe"> Beatae quia natus assumenda laboriosam, nisi perferendis aliquid consectetur expedita non tenetur.</span>
                <span class="time">
                  <time>Just now</time>...
                </span>
              </a>
            </div>
          </div>

        </div>
        <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="contact-tab">

          <div class="media media-sm p-4 bg-light mb-0">
            <div class="media-sm-wrapper bg-primary">
              <a href="user-profile.html">
                <i class="mdi mdi-calendar-check-outline"></i>
              </a>
            </div>
            <div class="media-body">
              <a href="user-profile.html">
                <span class="title mb-0">New event added</span>
                <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                <span class="time">
                  <time>10 min ago...</time>...
                </span>
              </a>
            </div>
          </div>

          <div class="media media-sm p-4 mb-0">
            <div class="media-sm-wrapper bg-info-dark">
              <a href="user-profile.html">
                <i class="mdi mdi-account-multiple-check"></i>
              </a>
            </div>
            <div class="media-body">
              <a href="user-profile.html">
                <span class="title mb-0">Add request</span>
                <span class="discribe">Add Dany Jones as your contact.</span>
                <div class="buttons">
                  <a href="#" class="btn btn-sm btn-success shadow-none text-white">accept</a>
                  <a href="#" class="btn btn-sm shadow-none">delete</a>
                </div>
                <span class="time">
                  <time>6 hrs ago</time>...
                </span>
              </a>
            </div>
          </div>

          <div class="media media-sm p-4 mb-0">
            <div class="media-sm-wrapper bg-info">
              <a href="user-profile.html">
                <i class="mdi mdi-playlist-check"></i>
              </a>
            </div>
            <div class="media-body">
              <a href="user-profile.html">
                <span class="title mb-0">Task complete</span>
                <span class="discribe">Afraid at highly months do things on at.</span>
                <span class="time">
                  <time>1 hrs ago</time>...
                </span>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <footer class="border-top dropdown-notify-footer">
      <div class="d-flex justify-content-between align-items-center py-2 px-4">
        <span>Last updated 3 min ago</span>
        <a id="refress-button" href="javascript:" class="btn mdi mdi-cached btn-refress"></a>
      </div>
    </footer>
  </div>
</li>


<!-- User Account -->
<li class="dropdown user-menu">
  <button class="dropdown-toggle nav-link" data-toggle="dropdown">
    <img src="images/user/user-xs-01.jpg" class="user-image rounded-circle" alt="User Image" />
    <span class="d-none d-lg-inline-block">John Doe</span>
  </button>
  <ul class="dropdown-menu dropdown-menu-right">
    <li>
      <a class="dropdown-link-item" href="user-profile.html">
        <i class="mdi mdi-account-outline"></i>
        <span class="nav-text">My Profile</span>
      </a>
    </li>
    <li>
      <a class="dropdown-link-item" href="email-inbox.html">
        <i class="mdi mdi-email-outline"></i>
        <span class="nav-text">Message</span>
        <span class="badge badge-pill badge-primary">24</span>
      </a>
    </li>
    <li>
      <a class="dropdown-link-item" href="user-activities.html">
        <i class="mdi mdi-diamond-stone"></i>
        <span class="nav-text">Activitise</span></a>
    </li>
    <li>
      <a class="dropdown-link-item" href="user-account-settings.html">
        <i class="mdi mdi-settings"></i>
        <span class="nav-text">Account Setting</span>
      </a>
    </li>

    <li class="dropdown-footer">
      <a class="dropdown-link-item" href="sign-in.html"> <i class="mdi mdi-logout"></i> Log Out </a>
    </li>
  </ul>
</li>
</ul>





<!-- ====================================
——— CONTENT WRAPPER
===================================== -->
<div class="content-wrapper">
<div class="content"><div class="row no-gutters">
<div class="col-lg-5 col-xxl-4">
<div class="card card-default chat-left-sidebar">
<form class="card-header px-0">
<div class="input-group px-5">
<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search...">
</div>
</form>

<ul class="card-body px-0" data-simplebar style="height: 630px;">
<li class="mb-4 px-5 py-2">
<a href="javascript:void(0)" class="media media-message">
<div class="position-relative mr-3">
<img class="rounded-circle" src="images/user/user-sm-01.jpg" alt="User Image">
<span class="status away"></span>
</div>

<div class="media-body">
<div class="message-contents">
<span class="d-flex justify-content-between align-items-center mb-1">
<span class="username text-dark">Anna Patuary</span>
<span class="">
  <span class="state text-smoke"><em>5min</em></span>
</span>
</span>

<p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
odio, eligendi delectus vitae.</p>
</div>
</div>
</a>
</li>

<li class="mb-4 px-5 py-2">
<a href="javascript:void(0)" class="media media-message">
<div class="position-relative mr-3">
<img class="rounded-circle" src="images/user/user-sm-02.jpg" alt="User Image">
<span class="status away"></span>
</div>

<div class="media-body">
<div class="message-contents">
<span class="d-flex justify-content-between align-items-center mb-1">
<span class="username text-dark">Riman Ghose</span>
<span class="">
  <span class="badge badge-secondary">3</span>
  <span class="state text-smoke"><em>1hrs</em></span>
</span>
</span>

<p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
odio, eligendi delectus vitae.</p>
</div>
</div>
</a>
</li>

<li class="bg-primary mb-4 px-5 py-2">
<a href="javascript:void(0)" class="media media-message">
<div class="position-relative mr-3">
<img class="rounded-circle" src="images/user/user-sm-03.jpg" alt="User Image">
<span class="status active"></span>
</div>

<div class="media-body">
<div class="message-contents">
<span class="d-flex justify-content-between align-items-center mb-1">
<span class="username text-white">Anna Patuary</span>
<span class="">
  <span class="state text-white"><em>11:59am</em></span>
</span>
</span>

<p class="last-msg text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
odio, eligendi delectus vitae.</p>
</div>
</div>
</a>
</li>

<li class="mb-4 px-5 py-2">
<a href="javascript:void(0)" class="media media-message">
<div class="position-relative mr-3">
<img class="rounded-circle" src="images/user/user-sm-04.jpg" alt="User Image">
<span class="status away"></span>
</div>

<div class="media-body">
<div class="message-contents">
<span class="d-flex justify-content-between align-items-center mb-1">
<span class="username text-dark">Riman Ghose</span>
<span class="">
  <span class="state text-smoke"><em>10min</em></span>
</span>
</span>

<p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
odio, eligendi delectus vitae.</p>
</div>
</div>
</a>
</li>

<li class="mb-4 px-5 py-2">
<a href="javascript:void(0)" class="media media-message">
<div class="position-relative mr-3">
<img class="rounded-circle" src="images/user/user-sm-05.jpg" alt="User Image">
<span class="status away"></span>
</div>

<div class="media-body">
<div class="message-contents">
<span class="d-flex justify-content-between align-items-center mb-1">
<span class="username text-dark">Anna Patuary</span>
<span class="">
  <span class="state text-smoke"><em>26-Jan-20</em></span>
</span>
</span>

<p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
odio, eligendi delectus vitae.</p>
</div>
</div>
</a>
</li>

<li class="mb-4 px-5 py-2">
<a href="javascript:void(0)" class="media media-message">
<div class="position-relative mr-3">
<img class="rounded-circle" src="images/user/user-sm-01.jpg" alt="User Image">
<span class="status active"></span>
</div>

<div class="media-body">
<div class="message-contents">
<span class="d-flex justify-content-between align-items-center mb-1">
<span class="username text-dark">Anna Patuary</span>
<span class="">
  <span class="badge badge-secondary">4</span>
  <span class="state text-smoke"><em>2hrs</em></span>
</span>
</span>

<p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
odio, eligendi delectus vitae.</p>
</div>
</div>
</a>
</li>

<li class="mb-4 px-5 py-2">
<a href="javascript:void(0)" class="media media-message">
<div class="position-relative mr-3">
<img class="rounded-circle" src="images/user/user-sm-02.jpg" alt="User Image">
<span class="status away"></span>
</div>

<div class="media-body">
<div class="message-contents">
<span class="d-flex justify-content-between align-items-center mb-1">
<span class="username text-dark">Riman Ghose</span>
<span class="">
  <span class="state text-smoke"><em>15-Jan-20</em></span>
</span>
</span>

<p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
odio, eligendi delectus vitae.</p>
</div>
</div>
</a>
</li>

<li class="mb-4 px-5 py-2">
<a href="javascript:void(0)" class="media media-message">
<div class="position-relative mr-3">
<img class="rounded-circle" src="images/user/user-sm-03.jpg" alt="User Image">
<span class="status away"></span>
</div>

<div class="media-body">
<div class="message-contents">
<span class="d-flex justify-content-between align-items-center mb-1">
<span class="username text-dark">Anna Patuary</span>
<span class="">
  <span class="state text-smoke"><em>30min</em></span>
</span>
</span>

<p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
odio, eligendi delectus vitae.</p>
</div>
</div>
</a>
</li>

<li class="mb-4 px-5 py-2">
<a href="javascript:void(0)" class="media media-message">
<div class="position-relative mr-3">
<img class="rounded-circle" src="images/user/user-sm-04.jpg" alt="User Image">
<span class="status away"></span>
</div>

<div class="media-body">
<div class="message-contents">
<span class="d-flex justify-content-between align-items-center mb-1">
<span class="username text-dark">Riman Ghose</span>
<span class="">
  <span class="state text-smoke"><em>01-Jan-20</em></span>
</span>
</span>

<p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
odio, eligendi delectus vitae.</p>
</div>
</div>
</a>
</li>

<li class="mb-4 px-5 py-2">
<a href="javascript:void(0)" class="media media-message">
<div class="position-relative mr-3">
<img class="rounded-circle" src="images/user/user-sm-05.jpg" alt="User Image">
<span class="status away"></span>
</div>

<div class="media-body">
<div class="message-contents">
<span class="d-flex justify-content-between align-items-center mb-1">
<span class="username text-dark">Anna Patuary</span>
<span class="">
  <span class="badge badge-secondary">5</span>
  <span class="state text-smoke"><em>3hrs</em></span>
</span>
</span>

<p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
odio, eligendi delectus vitae.</p>
</div>
</div>
</a>
</li>

<li class="mb-4 px-5 py-2">
<a href="javascript:void(0)" class="media media-message">
<div class="position-relative mr-3">
<img class="rounded-circle" src="images/user/user-sm-04.jpg" alt="User Image">
<span class="status away"></span>
</div>

<div class="media-body">
<div class="message-contents">
<span class="d-flex justify-content-between align-items-center mb-1">
<span class="username text-dark">Riman Ghose</span>
<span class="">
  <span class="state text-smoke"><em>31-Dec-19</em></span>
</span>
</span>

<p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
odio, eligendi delectus vitae.</p>
</div>
</div>
</a>
</li>

<li class="mb-4 px-5 py-2">
<a href="javascript:void(0)" class="media media-message">
<div class="position-relative mr-3">
<img class="rounded-circle" src="images/user/user-sm-05.jpg" alt="User Image">
<span class="status away"></span>
</div>

<div class="media-body">
<div class="message-contents">
<span class="d-flex justify-content-between align-items-center mb-1">
<span class="username text-dark">Anna Patuary</span>
<span class="">
  <span class="state text-smoke"><em>26-Dec-19</em></span>
</span>
</span>

<p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
odio, eligendi delectus vitae.</p>
</div>
</div>
</a>
</li>

<li class="mb-4 px-5 py-2">
<a href="javascript:void(0)" class="media media-message">
<div class="position-relative mr-3">
<img class="rounded-circle" src="images/user/user-sm-01.jpg" alt="User Image">
<span class="status active"></span>
</div>

<div class="media-body">
<div class="message-contents">
<span class="d-flex justify-content-between align-items-center mb-1">
<span class="username text-dark">Anna Patuary</span>
<span class="">
  <span class="state text-smoke"><em>10-Dec-19</em></span>
</span>
</span>

<p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
odio, eligendi delectus vitae.</p>
</div>
</div>
</a>
</li>

<li class="mb-4 px-5 py-2">
<a href="javascript:void(0)" class="media media-message">
<div class="position-relative mr-3">
<img class="rounded-circle" src="images/user/user-sm-02.jpg" alt="User Image">
<span class="status away"></span>
</div>

<div class="media-body">
<div class="message-contents">
<span class="d-flex justify-content-between align-items-center mb-1">
<span class="username text-dark">Riman Ghose</span>
<span class="">
  <span class="badge badge-secondary">7</span>
  <span class="state text-smoke"><em>5hrs</em></span>
</span>
</span>

<p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
odio, eligendi delectus vitae.</p>
</div>
</div>
</a>
</li>

<li class="mb-4 px-5 py-2">
<a href="javascript:void(0)" class="media media-message">
<div class="position-relative mr-3">
<img class="rounded-circle" src="images/user/user-sm-03.jpg" alt="User Image">
<span class="status away"></span>
</div>

<div class="media-body">
<div class="message-contents">
<span class="d-flex justify-content-between align-items-center mb-1">
<span class="username text-dark">Anna Patuary</span>
<span class="">
  <span class="state text-smoke"><em>01-Dec-19</em></span>
</span>
</span>

<p class="last-msg text-smoke">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
odio, eligendi delectus vitae.</p>
</div>
</div>
</a>
</li>

</ul>
</div>
</div>

<div class="col-lg-7 col-xxl-8">

<!-- Chat -->
<div class="card card-default chat-right-sidebar">
<div class="card-header">
<h2>Selena Wagner</h2>

<div class="dropdown">
<div class="dropdown">
<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
</a>

<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
<a class="dropdown-item" href="user-profile-settings.html">Profile</a>
<a class="dropdown-item" href="javascript:void(0)">Logout</a>
</div>
</div>
</div>
</div>

<div class="card-body pb-0" data-simplebar style="height: 545px;">
<!-- Media Chat Left -->
<div class="media media-chat">
<img src="images/user/user-sm-01.jpg" class="rounded-circle" alt="Avata Image">
<div class="media-body">
<div class="text-content">
<span class="message">Hello my name is anna.</span>
<time class="time">5 mins ago</time>
</div>
</div>
</div>

<!-- Media Chat Right -->
<div class="media media-chat media-chat-right">
<div class="media-body">
<div class="text-content">
<span class="message">Hello i am Riman.</span>
<time class="time">4 mins ago</time>
</div>

<div class="text-content">
<span class="message">I want to know about yourself</span>
<time class="time">3 mins ago</time>
</div>
</div>
<img src="images/user/user-sm-02.jpg" class="rounded-circle" alt="Avata Image">
</div>

<!-- Media Chat Left -->
<div class="media media-chat">
<img src="images/user/user-sm-01.jpg" class="rounded-circle" alt="Avata Image">
<div class="media-body">
<div class="text-content">
<span class="message">Its had resolving otherwise she contented therefore.</span>
<time class="time">1 mins ago</time>
</div>
</div>
</div>

<!-- Media Chat Right -->
<div class="media media-chat media-chat-right">
<div class="media-body">
<div class="text-content">
<span class="message">Hello i am Riman.</span>
<time class="time">4 mins ago</time>
</div>

<div class="text-content">
<span class="message">I want to know about yourself</span>
<time class="time">3 mins ago</time>
</div>
</div>
<img src="images/user/user-sm-02.jpg" class="rounded-circle" alt="Avata Image">
</div>

<!-- Media Chat Left -->
<div class="media media-chat">
<img src="images/user/user-sm-01.jpg" class="rounded-circle" alt="Avata Image">
<div class="media-body">
<div class="text-content">
<span class="message">Its had resolving otherwise she contented therefore.</span>
<time class="time">1 mins ago</time>
</div>
</div>
</div>

<!-- Media Chat Right -->
<div class="media media-chat media-chat-right">
<div class="media-body">
<div class="text-content">
<span class="message">Hello i am Riman.</span>
<time class="time">4 mins ago</time>
</div>

<div class="text-content">
<span class="message">I want to know about yourself</span>
<time class="time">3 mins ago</time>
</div>
</div>
<img src="images/user/user-sm-02.jpg" class="rounded-circle" alt="Avata Image">
</div>

</div>

<div class="chat-footer">
<form>
<div class="input-group input-group-chat">
<div class="input-group-prepend">
<span class="emoticon-icon mdi mdi-emoticon-happy-outline"></span>
</div>
<input type="text" class="form-control" aria-label="Text input with dropdown button">
</div>
</form>
</div>
</div>
</div>
</div>
</div>

</div>



  <!-- Card Offcanvas -->
  <div class="card card-offcanvas" id="contact-off" >
    <div class="card-header">
      <h2>Contacts</h2>
      <a href="#" class="btn btn-primary btn-pill px-4">Add New</a>
    </div>
    <div class="card-body">

      <div class="mb-4">
        <input type="text" class="form-control form-control-lg form-control-secondary rounded-0" placeholder="Search contacts...">
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.html">
            <img src="images/user/user-sm-01.jpg" alt="User Image">
            <span class="active bg-primary"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.html">
            <span class="title">Selena Wagner</span>
            <span class="discribe">Designer</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.html">
            <img src="images/user/user-sm-02.jpg" alt="User Image">
            <span class="active bg-primary"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.html">
            <span class="title">Walter Reuter</span>
            <span>Developer</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.html">
            <img src="images/user/user-sm-03.jpg" alt="User Image">
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.html">
            <span class="title">Larissa Gebhardt</span>
            <span>Cyber Punk</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.html">
            <img src="images/user/user-sm-04.jpg" alt="User Image">
          </a>

        </div>
        <div class="media-body">
          <a href="user-profile.html">
            <span class="title">Albrecht Straub</span>
            <span>Photographer</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.html">
            <img src="images/user/user-sm-05.jpg" alt="User Image">
            <span class="active bg-danger"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.html">
            <span class="title">Leopold Ebert</span>
            <span>Fashion Designer</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.html">
            <img src="images/user/user-sm-06.jpg" alt="User Image">
            <span class="active bg-primary"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.html">
            <span class="title">Selena Wagner</span>
            <span>Photographer</span>
          </a>
        </div>
      </div>

    </div>
  </div>
  <EndAdmin/>
</template>

<style>
 @import '@/assets/css/style.css';
</style>
    
<script>
    import TopAdmin from '@/components/TopAdmin.vue';
    import SidebarAdmin from '@/components/SidebarAdmin.vue';
    import EndAdmin from '@/components/EndAdmin.vue';
   
   export default {
    name: 'chat',
     components: {
       TopAdmin,SidebarAdmin,EndAdmin
     }
   }
</script>
