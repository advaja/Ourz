<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bootstrap 5 - Transparent Navbar</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">

  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" />

  <link rel="stylesheet" href="css/style.css">
</head>

<body style="min-width: fit-content;">
  <!-- Navbar  -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark px-3 py-0">
    <a class="navbar-brand brand-style" href="index.php">Ourz</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="mx-auto"></div>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white navbar-link-style" href="find_office.php">Find your office</a>
        </li>
        <li class="nav-item" style="display: none;" id="addPropertyUl">
          <a class="nav-link text-white navbar-link-style" href="share-space.php">Become a host</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white navbar-link-style" href="about.php">About Us</a>
        </li>
        <li class="nav-item" id="loginDiv">
          <a class="nav-link text-white login-btn" style="cursor: pointer;" data-bs-toggle="modal"
            data-bs-target="#signInModal">Login</a>
        </li>
        <li class="nav-item" id="userDiv" style="display: none;">

          <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1"
              data-bs-toggle="dropdown" aria-expanded="false">
              Hi <span id="userNameText"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="right: 0 !important;left: auto;">
            <li><a class="dropdown-item" href="user_order.php">User Orders</a></li>  
            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
              <li><a class="dropdown-item" id="logoutBtn">Logout</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </nav>