<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

  
<!-- Mirrored from prium.github.io/falcon/v3.21.0/modules/icons/material-icons.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2024 20:07:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>Falcon | Dashboard &amp; Web App Template</title>

    <!-- ===============================================--><!--    Favicons--><!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../assets/js/config.js"></script>
    <script src="../../vendors/simplebar/simplebar.min.js"></script>

    <!-- ===============================================--><!--    Stylesheets--><!-- ===============================================-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="../../vendors/prism/prism-okaidia.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="../../assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="../../assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="../../assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="../../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

  <body>
    <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" data-double-top-nav="data-double-top-nav" style="display: none;">
          <div class="w-100">
            <div class="d-flex flex-between-center">
              <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDoubleTop" aria-controls="navbarDoubleTop" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
              <a class="navbar-brand me-1 me-sm-3" href="../../index-2.html">
                <div class="d-flex align-items-center"><img class="me-2" src="../../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
              </a>
              <ul class="navbar-nav align-items-center d-none d-lg-block">
                <li class="nav-item">
                  <div class="search-box" data-list='{"valueNames":["title"]}'>
                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" />
                      <span class="fas fa-search search-box-icon"></span>
                    </form>
                    <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none" data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button></div>
                    <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                      <div class="scrollbar list py-3" style="max-height: 24rem;">
                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs-10 px-x1 py-1 hover-primary" href="../../app/events/event-detail.html">
                          <div class="d-flex align-items-center">
                            <span class="fas fa-circle me-2 text-300 fs-11"></span>
                            <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs-11" data-fa-transform="shrink-2"></span> Events</div>
                          </div>
                        </a>
                        <a class="dropdown-item fs-10 px-x1 py-1 hover-primary" href="../../app/e-commerce/customers.html">
                          <div class="d-flex align-items-center">
                            <span class="fas fa-circle me-2 text-300 fs-11"></span>
                            <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs-11" data-fa-transform="shrink-2"></span> Customers</div>
                          </div>
                        </a>
                        <hr class="text-200 dark__text-900" />
                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-x1 py-1 fs-9" href="../../app/e-commerce/customers.html">
                          <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-warning">customers:</span>
                            <div class="flex-1 fs-10 title">All customers list</div>
                          </div>
                        </a>
                        <a class="dropdown-item px-x1 py-1 fs-9" href="../../app/events/event-detail.html">
                          <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-success">events:</span>
                            <div class="flex-1 fs-10 title">Latest events in current month</div>
                          </div>
                        </a>
                        <a class="dropdown-item px-x1 py-1 fs-9" href="../../app/e-commerce/product/product-grid.html">
                          <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-info">products:</span>
                            <div class="flex-1 fs-10 title">Most popular products</div>
                          </div>
                        </a>
                        <hr class="text-200 dark__text-900" />
                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Files</h6><a class="dropdown-item px-x1 py-2" href="#!">
                          <div class="d-flex align-items-center">
                            <div class="file-thumbnail me-2"><img class="border h-100 w-100 object-fit-cover rounded-3" src="../../assets/img/products/3-thumb.png" alt="" /></div>
                            <div class="flex-1">
                              <h6 class="mb-0 title">iPhone</h6>
                              <p class="fs-11 mb-0 d-flex"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                            </div>
                          </div>
                        </a>
                        <a class="dropdown-item px-x1 py-2" href="#!">
                          <div class="d-flex align-items-center">
                            <div class="file-thumbnail me-2"><img class="img-fluid" src="../../assets/img/icons/zip.png" alt="" /></div>
                            <div class="flex-1">
                              <h6 class="mb-0 title">Falcon v1.8.2</h6>
                              <p class="fs-11 mb-0 d-flex"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                            </div>
                          </div>
                        </a>
                        <hr class="text-200 dark__text-900" />
                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Members</h6><a class="dropdown-item px-x1 py-2" href="../../pages/user/profile.html">
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-l status-online me-2">
                              <img class="rounded-circle" src="../../assets/img/team/1.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h6 class="mb-0 title">Anna Karinina</h6>
                              <p class="fs-11 mb-0 d-flex">Technext Limited</p>
                            </div>
                          </div>
                        </a>
                        <a class="dropdown-item px-x1 py-2" href="../../pages/user/profile.html">
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-l me-2">
                              <img class="rounded-circle" src="../../assets/img/team/2.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h6 class="mb-0 title">Antony Hopkins</h6>
                              <p class="fs-11 mb-0 d-flex">Brain Trust</p>
                            </div>
                          </div>
                        </a>
                        <a class="dropdown-item px-x1 py-2" href="../../pages/user/profile.html">
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-l me-2">
                              <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h6 class="mb-0 title">Emma Watson</h6>
                              <p class="fs-11 mb-0 d-flex">Google</p>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="text-center mt-n3">
                        <p class="fallback fw-bold fs-8 d-none">No Result Found.</p>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                <li class="nav-item ps-2 pe-0">
                  <div class="dropdown theme-control-dropdown"><a class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0" href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span><span class="fas fa-moon fs-7" data-fa-transform="shrink-3" data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span></a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3" aria-labelledby="themeSwitchDropdown">
                      <div class="bg-white dark__bg-1000 rounded-2 py-2"><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="light" data-theme-control="theme"><span class="fas fa-sun"></span>Light<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark" data-theme-control="theme"><span class="fas fa-moon" data-fa-transform=""></span>Dark<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto" data-theme-control="theme"><span class="fas fa-adjust" data-fa-transform=""></span>Auto<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button></div>
                    </div>
                  </div>
                </li>
                <li class="nav-item d-none d-sm-block">
                  <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="../../app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                  <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                    <div class="card card-notification shadow-none">
                      <div class="card-header">
                        <div class="row justify-content-between align-items-center">
                          <div class="col-auto">
                            <h6 class="card-header-title mb-0">Notifications</h6>
                          </div>
                          <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                        </div>
                      </div>
                      <div class="scrollbar-overlay" style="max-height:19rem">
                        <div class="list-group list-group-flush fw-normal fs-10">
                          <div class="list-group-title border-bottom">NEW</div>
                          <div class="list-group-item">
                            <a class="notification notification-flush notification-unread" href="#!">
                              <div class="notification-avatar">
                                <div class="avatar avatar-2xl me-3">
                                  <img class="rounded-circle" src="../../assets/img/team/1-thumb.png" alt="" />
                                </div>
                              </div>
                              <div class="notification-body">
                                <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                                <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                              </div>
                            </a>
                          </div>
                          <div class="list-group-item">
                            <a class="notification notification-flush notification-unread" href="#!">
                              <div class="notification-avatar">
                                <div class="avatar avatar-2xl me-3">
                                  <div class="avatar-name rounded-circle"><span>AB</span></div>
                                </div>
                              </div>
                              <div class="notification-body">
                                <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                                <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                              </div>
                            </a>
                          </div>
                          <div class="list-group-title border-bottom">EARLIER</div>
                          <div class="list-group-item">
                            <a class="notification notification-flush" href="#!">
                              <div class="notification-avatar">
                                <div class="avatar avatar-2xl me-3">
                                  <img class="rounded-circle" src="../../assets/img/icons/weather-sm.jpg" alt="" />
                                </div>
                              </div>
                              <div class="notification-body">
                                <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                                <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                              </div>
                            </a>
                          </div>
                          <div class="list-group-item">
                            <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                              <div class="notification-avatar">
                                <div class="avatar avatar-xl me-3">
                                  <img class="rounded-circle" src="../../assets/img/logos/oxford.png" alt="" />
                                </div>
                              </div>
                              <div class="notification-body">
                                <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                                <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                              </div>
                            </a>
                          </div>
                          <div class="list-group-item">
                            <a class="border-bottom-0 notification notification-flush" href="#!">
                              <div class="notification-avatar">
                                <div class="avatar avatar-xl me-3">
                                  <img class="rounded-circle" src="../../assets/img/team/10.jpg" alt="" />
                                </div>
                              </div>
                              <div class="notification-body">
                                <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                                <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer text-center border-top"><a class="card-link d-block" href="../../app/social/notifications.html">View all</a></div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown px-1">
                  <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
                      <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                      <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                      <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                      <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                      <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                      <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                      <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                      <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                      <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                    </svg></a>
                  <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
                    <div class="card shadow-none">
                      <div class="scrollbar-overlay nine-dots-dropdown">
                        <div class="card-body px-3">
                          <div class="row text-center gx-0 gy-0">
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../pages/user/profile.html" target="_blank">
                                <div class="avatar avatar-2xl"> <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" /></div>
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11">Account</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://themewagon.com/" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/themewagon.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Themewagon</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://mailbluster.com/" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/mailbluster.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Mailbluster</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/google.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Google</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/spotify.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Spotify</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/steam.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Steam</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/github-light.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Github</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/discord.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Discord</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/xbox.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">xbox</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/trello.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Kanban</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/hp.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Hp</p>
                              </a></div>
                            <div class="col-12">
                              <hr class="my-3 mx-n3 bg-200" />
                            </div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/linkedin.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Linkedin</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/twitter.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Twitter</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/facebook.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Facebook</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/instagram.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Instagram</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/pinterest.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Pinterest</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/slack.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Slack</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/deviantart.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Deviantart</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../app/events/event-detail.html" target="_blank">
                                <div class="avatar avatar-2xl">
                                  <div class="avatar-name rounded-circle bg-primary-subtle text-primary"><span class="fs-7">E</span></div>
                                </div>
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11">Events</p>
                              </a></div>
                            <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-xl">
                      <img class="rounded-circle" src="../../assets/img/team/3-thumb.png" alt="" />
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2">
                      <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#!">Set status</a>
                      <a class="dropdown-item" href="../../pages/user/profile.html">Profile &amp; account</a>
                      <a class="dropdown-item" href="#!">Feedback</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="../../pages/user/settings.html">Settings</a>
                      <a class="dropdown-item" href="../../pages/authentication/card/logout.html">Logout</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <hr class="my-2 d-none d-lg-block" />
            <div class="collapse navbar-collapse scrollbar py-lg-2" id="navbarDoubleTop">
              <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../../index-2.html">Default</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/crm.html">CRM</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/lms.html">LMS<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/project-management.html">Management</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/saas.html">SaaS</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/support-desk.html">Support desk<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a></div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                    <div class="card navbar-card-app shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="../../app/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/kanban.html">Kanban</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/followers.html">Followers</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/table-view.html">Table view</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/card-view.html">Card view</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/contacts.html">Contacts</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/contact-details.html">Contact details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/tickets-preview.html">Tickets preview</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/quick-links.html">Quick links</a>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/course-list.html">Course list</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/course-grid.html">Course grid</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/course-details.html">Course details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/create-a-course.html">Create a course</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/student-overview.html">Student overview</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/trainer-profile.html">Trainer profile</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/events/event-list.html">Event list</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/email/compose.html">Compose</a>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/add-product.html">Add product</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/invoice.html">Invoice</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
                    <div class="card navbar-card-pages shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Layouts</p><a class="nav-link py-1 link-600 fw-medium" href="../../demo/navbar-vertical.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../../demo/navbar-top.html">Top nav</a><a class="nav-link py-1 link-600 fw-medium" href="../../demo/navbar-double-top.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../demo/combo-nav.html">Combo nav</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/starter.html">Starter</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/landing.html">Landing</a>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">User</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/user/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/user/settings.html">Settings</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/pricing/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/pricing/pricing-alt.html">Pricing alt</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/errors/500.html">500</a>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/miscellaneous/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/miscellaneous/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/miscellaneous/privacy-policy.html">Privacy policy</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">FAQ</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/faq/faq-basic.html">Faq basic</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/faq/faq-alt.html">Faq alt</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/faq/faq-accordion.html">Faq accordion</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../../index.html#authentication-modal" data-bs-toggle="modal">Modal</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
                    <div class="card navbar-card-components shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="../components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="../components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="../components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="../components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="../components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="../components/bottom-bar.html">Bottom bar<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="../components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="../components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="../components/carousel/bootstrap.html">Bootstrap carousel</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="../components/carousel/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="../components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="../components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="../components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="../components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="../components/jquery-components.html">Jquery<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="../components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/vertical-navbar.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/top-navbar.html">Top nav</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/double-top-navbar.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/combo-navbar.html">Combo nav</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="../components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="../components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/placeholder.html">Placeholder</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pagination.html">Pagination</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="../components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="../components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="../components/sortable.html">Sortable</a><a class="nav-link py-1 link-600 fw-medium" href="../components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="../components/timeline.html">Timeline</a><a class="nav-link py-1 link-600 fw-medium" href="../components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="../components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="../components/treeview.html">Treeview</a><a class="nav-link py-1 link-600 fw-medium" href="../components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="../components/videos/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="../components/videos/plyr.html">Plyr</a></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="../utilities/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/focus-ring.html">Focus ring</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/icon-link.html">Icon link</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/overlayscrollbar.html">Overlay scrollbar</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/ratio.html">Ratio</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/vertical-rule.html">Vertical rule</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/visibility.html">Visibility</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="../tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="../tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="../tables/bulk-select.html">Bulk select</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="../charts/chartjs.html">Chartjs</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/d3js.html">D3js<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                              <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/pie-charts.html">Pie charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/gauge-charts.html">Gauge charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/how-to-use.html">How to use</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/input-mask.html">Input mask</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/range-slider.html">Range slider</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/validation.html">Validation</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column pt-xxl-1">
                              <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="material-icons.html">Material icons</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="../maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="../maps/leaflet-map.html">Leaflet map</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../../documentation/getting-started.html">Getting started</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/configuration.html">Configuration</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/styling.html">Styling<span class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/dark-mode.html">Dark mode</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/plugin.html">Plugin</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/faq.html">Faq</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/gulp.html">Gulp</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/design-file.html">Design file</a><a class="dropdown-item link-600 fw-medium" href="../../changelog.html">Changelog</a></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
          <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">
              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            </div><a class="navbar-brand" href="../../index-2.html">
              <div class="d-flex align-items-center py-3"><img class="me-2" src="../../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item"><!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="dashboard">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Dashboard</span></div>
                  </a>
                  <ul class="nav collapse" id="dashboard">
                    <li class="nav-item"><a class="nav-link" href="../../index-2.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Default</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../dashboard/analytics.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Analytics</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../dashboard/crm.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">CRM</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../dashboard/e-commerce.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">E commerce</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../dashboard/lms.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">LMS</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../dashboard/project-management.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Management</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../dashboard/saas.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">SaaS</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../dashboard/support-desk.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Support desk</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                      </a><!-- more inner pages--></li>
                  </ul>
                </li>
                <li class="nav-item"><!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">App</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link" href="../../app/calendar.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Calendar</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="../../app/chat.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text ps-1">Chat</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Email</span></div>
                  </a>
                  <ul class="nav collapse" id="email">
                    <li class="nav-item"><a class="nav-link" href="../../app/email/inbox.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Inbox</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/email/email-detail.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Email detail</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/email/compose.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Compose</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#events" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="events">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-day"></span></span><span class="nav-link-text ps-1">Events</span></div>
                  </a>
                  <ul class="nav collapse" id="events">
                    <li class="nav-item"><a class="nav-link" href="../../app/events/create-an-event.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Create an event</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/events/event-detail.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event detail</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/events/event-list.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event list</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-shopping-cart"></span></span><span class="nav-link-text ps-1">E commerce</span></div>
                  </a>
                  <ul class="nav collapse" id="e-commerce">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#product" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="product">
                        <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/product/product-list.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product list</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/product/product-grid.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product grid</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/product/product-details.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product details</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/product/add-product.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Add product</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#orders" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Orders</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="orders">
                        <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/orders/order-list.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order list</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/orders/order-details.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order details</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/customers.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customers</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/customer-details.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customer details</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/shopping-cart.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Shopping cart</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/checkout.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Checkout</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/billing.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Billing</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/invoice.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invoice</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#e-learning" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-graduation-cap"></span></span><span class="nav-link-text ps-1">E learning</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                  </a>
                  <ul class="nav collapse" id="e-learning">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#course" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Course</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="course">
                        <li class="nav-item"><a class="nav-link" href="../../app/e-learning/course/course-list.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Course list</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../app/e-learning/course/course-grid.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Course grid</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../app/e-learning/course/course-details.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Course details</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../app/e-learning/course/create-a-course.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Create a course</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../../app/e-learning/student-overview.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Student overview</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/e-learning/trainer-profile.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Trainer profile</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link" href="../../app/kanban.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text ps-1">Kanban</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#social" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="social">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-share-alt"></span></span><span class="nav-link-text ps-1">Social</span></div>
                  </a>
                  <ul class="nav collapse" id="social">
                    <li class="nav-item"><a class="nav-link" href="../../app/social/feed.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Feed</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/social/activity-log.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Activity log</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/social/notifications.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Notifications</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/social/followers.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Followers</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#support-desk" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="support-desk">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-ticket-alt"></span></span><span class="nav-link-text ps-1">Support desk</span></div>
                  </a>
                  <ul class="nav collapse" id="support-desk">
                    <li class="nav-item"><a class="nav-link" href="../../app/support-desk/table-view.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Table view</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/support-desk/card-view.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Card view</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/support-desk/contacts.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Contacts</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/support-desk/contact-details.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Contact details</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/support-desk/tickets-preview.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tickets preview</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/support-desk/quick-links.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Quick links</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/support-desk/reports.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reports</span></div>
                      </a><!-- more inner pages--></li>
                  </ul>
                </li>
                <li class="nav-item"><!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Pages</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link" href="../../pages/starter.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Starter</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="../../pages/landing.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-globe"></span></span><span class="nav-link-text ps-1">Landing</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#authentication" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-lock"></span></span><span class="nav-link-text ps-1">Authentication</span></div>
                  </a>
                  <ul class="nav collapse" id="authentication">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#simple" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Simple</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="simple">
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/simple/login.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/simple/logout.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/simple/register.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/simple/forgot-password.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/simple/confirm-mail.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/simple/reset-password.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/simple/lock-screen.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#card" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Card</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="card">
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/card/login.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/card/logout.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/card/register.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/card/forgot-password.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/card/confirm-mail.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/card/reset-password.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/card/lock-screen.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#split" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Split</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="split">
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/split/login.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/split/logout.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/split/register.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/split/forgot-password.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/split/confirm-mail.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/split/reset-password.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/split/lock-screen.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/authentication/wizard.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Wizard</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../index.html#authentication-modal" data-bs-toggle="modal">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modal</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#user" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user"></span></span><span class="nav-link-text ps-1">User</span></div>
                  </a>
                  <ul class="nav collapse" id="user">
                    <li class="nav-item"><a class="nav-link" href="../../pages/user/profile.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profile</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/user/settings.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Settings</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#pricing" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="pricing">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-tags"></span></span><span class="nav-link-text ps-1">Pricing</span></div>
                  </a>
                  <ul class="nav collapse" id="pricing">
                    <li class="nav-item"><a class="nav-link" href="../../pages/pricing/pricing-default.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing default</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/pricing/pricing-alt.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing alt</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#faq" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faq">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-question-circle"></span></span><span class="nav-link-text ps-1">Faq</span></div>
                  </a>
                  <ul class="nav collapse" id="faq">
                    <li class="nav-item"><a class="nav-link" href="../../pages/faq/faq-basic.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq basic</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/faq/faq-alt.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq alt</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/faq/faq-accordion.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq accordion</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#errors" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="errors">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-exclamation-triangle"></span></span><span class="nav-link-text ps-1">Errors</span></div>
                  </a>
                  <ul class="nav collapse" id="errors">
                    <li class="nav-item"><a class="nav-link" href="../../pages/errors/404.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">404</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/errors/500.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">500</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#miscellaneous" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="miscellaneous">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-thumbtack"></span></span><span class="nav-link-text ps-1">Miscellaneous</span></div>
                  </a>
                  <ul class="nav collapse" id="miscellaneous">
                    <li class="nav-item"><a class="nav-link" href="../../pages/miscellaneous/associations.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Associations</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/miscellaneous/invite-people.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invite people</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/miscellaneous/privacy-policy.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Privacy policy</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#Layouts" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="Layouts">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="far fa-window-restore"></span></span><span class="nav-link-text ps-1">Layouts</span></div>
                  </a>
                  <ul class="nav collapse" id="Layouts">
                    <li class="nav-item"><a class="nav-link" href="../../demo/navbar-vertical.html" target="_blank">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navbar vertical</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../demo/navbar-top.html" target="_blank">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Top nav</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../demo/navbar-double-top.html" target="_blank">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Double top</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../demo/combo-nav.html" target="_blank">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Combo nav</span></div>
                      </a><!-- more inner pages--></li>
                  </ul>
                </li>
                <li class="nav-item"><!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Modules</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link dropdown-indicator" href="#forms" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-file-alt"></span></span><span class="nav-link-text ps-1">Forms</span></div>
                  </a>
                  <ul class="nav collapse" id="forms">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#basic" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Basic</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="basic">
                        <li class="nav-item"><a class="nav-link" href="../forms/basic/form-control.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Form control</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/basic/input-group.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Input group</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/basic/select.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Select</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/basic/checks.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Checks</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/basic/range.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Range</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/basic/layout.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Layout</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#advance" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="advance">
                        <li class="nav-item"><a class="nav-link" href="../forms/advance/advance-select.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance select</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/advance/date-picker.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Date picker</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/advance/editor.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Editor</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/advance/emoji-button.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Emoji button</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/advance/file-uploader.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">File uploader</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/advance/input-mask.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Input mask</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/advance/range-slider.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Range slider</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/advance/rating.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Rating</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../forms/floating-labels.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Floating labels</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../forms/wizard.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Wizard</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../forms/validation.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Validation</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#tables" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="tables">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-table"></span></span><span class="nav-link-text ps-1">Tables</span></div>
                  </a>
                  <ul class="nav collapse" id="tables">
                    <li class="nav-item"><a class="nav-link" href="../tables/basic-tables.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Basic tables</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../tables/advance-tables.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance tables</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../tables/bulk-select.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bulk select</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#charts" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-line"></span></span><span class="nav-link-text ps-1">Charts</span></div>
                  </a>
                  <ul class="nav collapse" id="charts">
                    <li class="nav-item"><a class="nav-link" href="../charts/chartjs.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Chartjs</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../charts/d3js.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">D3js</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#eCharts" data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">ECharts</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="eCharts">
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/line-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Line charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/bar-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bar charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/candlestick-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Candlestick charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/geo-map.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Geo map</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/scatter-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Scatter charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/pie-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pie charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/gauge-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Gauge charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/radar-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Radar charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/heatmap-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Heatmap charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/how-to-use.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">How to use</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#icons" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="icons">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-shapes"></span></span><span class="nav-link-text ps-1">Icons</span></div>
                  </a>
                  <ul class="nav collapse show" id="icons">
                    <li class="nav-item"><a class="nav-link" href="font-awesome.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Font awesome</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="bootstrap-icons.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bootstrap icons</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="feather.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Feather</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link active" href="material-icons.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Material icons</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#maps" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="maps">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-map"></span></span><span class="nav-link-text ps-1">Maps</span></div>
                  </a>
                  <ul class="nav collapse" id="maps">
                    <li class="nav-item"><a class="nav-link" href="../maps/google-map.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Google map</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../maps/leaflet-map.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Leaflet map</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#components" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-puzzle-piece"></span></span><span class="nav-link-text ps-1">Components</span></div>
                  </a>
                  <ul class="nav collapse" id="components">
                    <li class="nav-item"><a class="nav-link" href="../components/accordion.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Accordion</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/alerts.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Alerts</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/anchor.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Anchor</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/animated-icons.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Animated icons</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/background.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Background</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/badges.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Badges</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/bottom-bar.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bottom bar</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/breadcrumbs.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Breadcrumbs</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/buttons.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Buttons</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/calendar.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Calendar</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/cards.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cards</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#carousel" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Carousel</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="carousel">
                        <li class="nav-item"><a class="nav-link" href="../components/carousel/bootstrap.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bootstrap</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/carousel/swiper.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Swiper</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../components/collapse.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Collapse</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/cookie-notice.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cookie notice</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/countup.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Countup</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/dropdowns.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dropdowns</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/jquery-components.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Jquery</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/list-group.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">List group</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/modals.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modals</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#navs-_and_-Tabs" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navs &amp; Tabs</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="navs-_and_-Tabs">
                        <li class="nav-item"><a class="nav-link" href="../components/navs-and-tabs/navs.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navs</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/navs-and-tabs/navbar.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navbar</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/navs-and-tabs/vertical-navbar.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navbar vertical</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/navs-and-tabs/top-navbar.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Top nav</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/navs-and-tabs/double-top-navbar.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Double top</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/navs-and-tabs/combo-navbar.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Combo nav</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/navs-and-tabs/tabs.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tabs</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../components/offcanvas.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Offcanvas</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pictures" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pictures</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="pictures">
                        <li class="nav-item"><a class="nav-link" href="../components/pictures/avatar.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Avatar</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/pictures/images.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Images</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/pictures/figures.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Figures</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/pictures/hoverbox.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Hoverbox</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/pictures/lightbox.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lightbox</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../components/progress-bar.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Progress bar</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/placeholder.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Placeholder</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/pagination.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pagination</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/popovers.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Popovers</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/scrollspy.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Scrollspy</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/search.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Search</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/sortable.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sortable</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/spinners.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Spinners</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/timeline.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Timeline</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/toasts.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Toasts</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/tooltips.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tooltips</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/treeview.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Treeview</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/typed-text.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Typed text</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#videos" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Videos</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="videos">
                        <li class="nav-item"><a class="nav-link" href="../components/videos/embed.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Embed</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/videos/plyr.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Plyr</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#utilities" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="utilities">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-fire"></span></span><span class="nav-link-text ps-1">Utilities</span></div>
                  </a>
                  <ul class="nav collapse" id="utilities">
                    <li class="nav-item"><a class="nav-link" href="../utilities/background.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Background</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/borders.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Borders</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/clearfix.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Clearfix</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/colors.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Colors</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/colored-links.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Colored links</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/display.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Display</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/flex.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Flex</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/float.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Float</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/focus-ring.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Focus ring</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/grid.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Grid</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/icon-link.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Icon link</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/overlayscrollbar.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Overlay scrollbar</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/position.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Position</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/ratio.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Ratio</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/spacing.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Spacing</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/sizing.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sizing</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/stretched-link.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Stretched link</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/text-truncation.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Text truncation</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/typography.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Typography</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/vertical-align.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Vertical align</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/vertical-rule.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Vertical rule</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/visibility.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Visibility</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/visually-hidden.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Visually hidden</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link" href="../../widgets.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-poll"></span></span><span class="nav-link-text ps-1">Widgets</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#multi-level" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-layer-group"></span></span><span class="nav-link-text ps-1">Multi level</span></div>
                  </a>
                  <ul class="nav collapse" id="multi-level">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-two" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Level two</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="level-two">
                        <li class="nav-item"><a class="nav-link" href="../../index.html#!.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 1</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../index.html#!.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 2</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-three" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Level three</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="level-three">
                        <li class="nav-item"><a class="nav-link" href="../../index.html#!.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 3</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-4" data-bs-toggle="collapse" aria-expanded="false" aria-controls="level-three">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 4</span></div>
                          </a><!-- more inner pages-->
                          <ul class="nav collapse" id="item-4">
                            <li class="nav-item"><a class="nav-link" href="../../index.html#!.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 5</span></div>
                              </a><!-- more inner pages--></li>
                            <li class="nav-item"><a class="nav-link" href="../../index.html#!.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 6</span></div>
                              </a><!-- more inner pages--></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-four" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Level four</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="level-four">
                        <li class="nav-item"><a class="nav-link" href="../../index.html#!.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 6</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-7" data-bs-toggle="collapse" aria-expanded="false" aria-controls="level-four">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 7</span></div>
                          </a><!-- more inner pages-->
                          <ul class="nav collapse" id="item-7">
                            <li class="nav-item"><a class="nav-link" href="../../index.html#!.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 8</span></div>
                              </a><!-- more inner pages--></li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-9" data-bs-toggle="collapse" aria-expanded="false" aria-controls="item-7">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 9</span></div>
                              </a><!-- more inner pages-->
                              <ul class="nav collapse" id="item-9">
                                <li class="nav-item"><a class="nav-link" href="../../index.html#!.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 10</span></div>
                                  </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="../../index.html#!.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 11</span></div>
                                  </a><!-- more inner pages--></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item"><!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Documentation</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link" href="../../documentation/getting-started.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-rocket"></span></span><span class="nav-link-text ps-1">Getting started</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#customization" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="customization">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-wrench"></span></span><span class="nav-link-text ps-1">Customization</span></div>
                  </a>
                  <ul class="nav collapse" id="customization">
                    <li class="nav-item"><a class="nav-link" href="../../documentation/customization/configuration.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Configuration</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../documentation/customization/styling.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Styling</span><span class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../documentation/customization/dark-mode.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dark mode</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../documentation/customization/plugin.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Plugin</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link" href="../../documentation/faq.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-question-circle"></span></span><span class="nav-link-text ps-1">Faq</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="../../documentation/gulp.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-gulp"></span></span><span class="nav-link-text ps-1">Gulp</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="../../documentation/design-file.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-palette"></span></span><span class="nav-link-text ps-1">Design file</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="../../changelog.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-code-branch"></span></span><span class="nav-link-text ps-1">Changelog</span></div>
                  </a>
                </li>
              </ul>
              <div class="settings my-3">
                <div class="card shadow-none">
                  <div class="card-body alert mb-0" role="alert">
                    <div class="btn-close-falcon-container"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close" data-bs-dismiss="alert"></button></div>
                    <div class="text-center"><img src="../../assets/img/icons/spot-illustrations/navbar-vertical.png" alt="" width="80" />
                      <p class="fs-11 mt-2">Loving what you see? <br />Get your copy of <a href="#!">Falcon</a></p>
                      <div class="d-grid"><a class="btn btn-sm btn-primary" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Purchase</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="../../index-2.html">
            <div class="d-flex align-items-center"><img class="me-2" src="../../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
          </a>
          <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
            <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../../index-2.html">Default</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/crm.html">CRM</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/lms.html">LMS<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/project-management.html">Management</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/saas.html">SaaS</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/support-desk.html">Support desk<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a></div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                  <div class="card navbar-card-app shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="../../app/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/kanban.html">Kanban</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/followers.html">Followers</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/table-view.html">Table view</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/card-view.html">Card view</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/contacts.html">Contacts</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/contact-details.html">Contact details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/tickets-preview.html">Tickets preview</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/quick-links.html">Quick links</a>
                          </div>
                        </div>
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/course-list.html">Course list</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/course-grid.html">Course grid</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/course-details.html">Course details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/create-a-course.html">Create a course</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/student-overview.html">Student overview</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/trainer-profile.html">Trainer profile</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/events/event-list.html">Event list</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/email/compose.html">Compose</a>
                          </div>
                        </div>
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/add-product.html">Add product</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/invoice.html">Invoice</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
                  <div class="card navbar-card-pages shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Layouts</p><a class="nav-link py-1 link-600 fw-medium" href="../../demo/navbar-vertical.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../../demo/navbar-top.html">Top nav</a><a class="nav-link py-1 link-600 fw-medium" href="../../demo/navbar-double-top.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../demo/combo-nav.html">Combo nav</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/starter.html">Starter</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/landing.html">Landing</a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">User</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/user/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/user/settings.html">Settings</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/pricing/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/pricing/pricing-alt.html">Pricing alt</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/errors/500.html">500</a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/miscellaneous/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/miscellaneous/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/miscellaneous/privacy-policy.html">Privacy policy</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">FAQ</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/faq/faq-basic.html">Faq basic</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/faq/faq-alt.html">Faq alt</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/faq/faq-accordion.html">Faq accordion</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../../index.html#authentication-modal" data-bs-toggle="modal">Modal</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
                  <div class="card navbar-card-components shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="../components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="../components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="../components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="../components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="../components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="../components/bottom-bar.html">Bottom bar<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="../components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="../components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="../components/carousel/bootstrap.html">Bootstrap carousel</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="../components/carousel/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="../components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="../components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="../components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="../components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="../components/jquery-components.html">Jquery<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="../components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/vertical-navbar.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/top-navbar.html">Top nav</a></div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/double-top-navbar.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/combo-navbar.html">Combo nav</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="../components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="../components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/placeholder.html">Placeholder</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pagination.html">Pagination</a></div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="../components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="../components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="../components/sortable.html">Sortable</a><a class="nav-link py-1 link-600 fw-medium" href="../components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="../components/timeline.html">Timeline</a><a class="nav-link py-1 link-600 fw-medium" href="../components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="../components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="../components/treeview.html">Treeview</a><a class="nav-link py-1 link-600 fw-medium" href="../components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="../components/videos/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="../components/videos/plyr.html">Plyr</a></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="../utilities/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/focus-ring.html">Focus ring</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/icon-link.html">Icon link</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/overlayscrollbar.html">Overlay scrollbar</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/ratio.html">Ratio</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/vertical-rule.html">Vertical rule</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/visibility.html">Visibility</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="../tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="../tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="../tables/bulk-select.html">Bulk select</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="../charts/chartjs.html">Chartjs</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/d3js.html">D3js<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                            <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/pie-charts.html">Pie charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/gauge-charts.html">Gauge charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/how-to-use.html">How to use</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/input-mask.html">Input mask</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/range-slider.html">Range slider</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/validation.html">Validation</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column pt-xxl-1">
                            <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="material-icons.html">Material icons</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="../maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="../maps/leaflet-map.html">Leaflet map</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../../documentation/getting-started.html">Getting started</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/configuration.html">Configuration</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/styling.html">Styling<span class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/dark-mode.html">Dark mode</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/plugin.html">Plugin</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/faq.html">Faq</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/gulp.html">Gulp</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/design-file.html">Design file</a><a class="dropdown-item link-600 fw-medium" href="../../changelog.html">Changelog</a></div>
                </div>
              </li>
            </ul>
          </div>
          <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
            <li class="nav-item ps-2 pe-0">
              <div class="dropdown theme-control-dropdown"><a class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0" href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span><span class="fas fa-moon fs-7" data-fa-transform="shrink-3" data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3" aria-labelledby="themeSwitchDropdown">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2"><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="light" data-theme-control="theme"><span class="fas fa-sun"></span>Light<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark" data-theme-control="theme"><span class="fas fa-moon" data-fa-transform=""></span>Dark<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto" data-theme-control="theme"><span class="fas fa-adjust" data-fa-transform=""></span>Auto<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button></div>
                </div>
              </div>
            </li>
            <li class="nav-item d-none d-sm-block">
              <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="../../app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
              <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                <div class="card card-notification shadow-none">
                  <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <h6 class="card-header-title mb-0">Notifications</h6>
                      </div>
                      <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                    </div>
                  </div>
                  <div class="scrollbar-overlay" style="max-height:19rem">
                    <div class="list-group list-group-flush fw-normal fs-10">
                      <div class="list-group-title border-bottom">NEW</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img class="rounded-circle" src="../../assets/img/team/1-thumb.png" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <div class="avatar-name rounded-circle"><span>AB</span></div>
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                            <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-title border-bottom">EARLIER</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img class="rounded-circle" src="../../assets/img/icons/weather-sm.jpg" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                              <img class="rounded-circle" src="../../assets/img/logos/oxford.png" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a class="border-bottom-0 notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                              <img class="rounded-circle" src="../../assets/img/team/10.jpg" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-center border-top"><a class="card-link d-block" href="../../app/social/notifications.html">View all</a></div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown px-1">
              <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
                  <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                  <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                  <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                  <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                  <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                  <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                  <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                  <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                  <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                </svg></a>
              <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
                <div class="card shadow-none">
                  <div class="scrollbar-overlay nine-dots-dropdown">
                    <div class="card-body px-3">
                      <div class="row text-center gx-0 gy-0">
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../pages/user/profile.html" target="_blank">
                            <div class="avatar avatar-2xl"> <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" /></div>
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11">Account</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://themewagon.com/" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/themewagon.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Themewagon</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://mailbluster.com/" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/mailbluster.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Mailbluster</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/google.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Google</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/spotify.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Spotify</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/steam.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Steam</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/github-light.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Github</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/discord.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Discord</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/xbox.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">xbox</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/trello.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Kanban</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/hp.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Hp</p>
                          </a></div>
                        <div class="col-12">
                          <hr class="my-3 mx-n3 bg-200" />
                        </div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/linkedin.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Linkedin</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/twitter.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Twitter</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/facebook.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Facebook</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/instagram.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Instagram</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/pinterest.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Pinterest</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/slack.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Slack</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/deviantart.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Deviantart</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../app/events/event-detail.html" target="_blank">
                            <div class="avatar avatar-2xl">
                              <div class="avatar-name rounded-circle bg-primary-subtle text-primary"><span class="fs-7">E</span></div>
                            </div>
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11">Events</p>
                          </a></div>
                        <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                  <img class="rounded-circle" src="../../assets/img/team/3-thumb.png" alt="" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                  <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#!">Set status</a>
                  <a class="dropdown-item" href="../../pages/user/profile.html">Profile &amp; account</a>
                  <a class="dropdown-item" href="#!">Feedback</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../../pages/user/settings.html">Settings</a>
                  <a class="dropdown-item" href="../../pages/authentication/card/logout.html">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="../../index-2.html">
              <div class="d-flex align-items-center"><img class="me-2" src="../../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
            </a>
            <ul class="navbar-nav align-items-center d-none d-lg-block">
              <li class="nav-item">
                <div class="search-box" data-list='{"valueNames":["title"]}'>
                  <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                  </form>
                  <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none" data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button></div>
                  <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                    <div class="scrollbar list py-3" style="max-height: 24rem;">
                      <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs-10 px-x1 py-1 hover-primary" href="../../app/events/event-detail.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs-11"></span>
                          <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs-11" data-fa-transform="shrink-2"></span> Events</div>
                        </div>
                      </a>
                      <a class="dropdown-item fs-10 px-x1 py-1 hover-primary" href="../../app/e-commerce/customers.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs-11"></span>
                          <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs-11" data-fa-transform="shrink-2"></span> Customers</div>
                        </div>
                      </a>
                      <hr class="text-200 dark__text-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-x1 py-1 fs-9" href="../../app/e-commerce/customers.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-warning">customers:</span>
                          <div class="flex-1 fs-10 title">All customers list</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-x1 py-1 fs-9" href="../../app/events/event-detail.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-success">events:</span>
                          <div class="flex-1 fs-10 title">Latest events in current month</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-x1 py-1 fs-9" href="../../app/e-commerce/product/product-grid.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-info">products:</span>
                          <div class="flex-1 fs-10 title">Most popular products</div>
                        </div>
                      </a>
                      <hr class="text-200 dark__text-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Files</h6><a class="dropdown-item px-x1 py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="border h-100 w-100 object-fit-cover rounded-3" src="../../assets/img/products/3-thumb.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">iPhone</h6>
                            <p class="fs-11 mb-0 d-flex"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-x1 py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="img-fluid" src="../../assets/img/icons/zip.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Falcon v1.8.2</h6>
                            <p class="fs-11 mb-0 d-flex"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                          </div>
                        </div>
                      </a>
                      <hr class="text-200 dark__text-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Members</h6><a class="dropdown-item px-x1 py-2" href="../../pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l status-online me-2">
                            <img class="rounded-circle" src="../../assets/img/team/1.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Anna Karinina</h6>
                            <p class="fs-11 mb-0 d-flex">Technext Limited</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-x1 py-2" href="../../pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="../../assets/img/team/2.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Antony Hopkins</h6>
                            <p class="fs-11 mb-0 d-flex">Brain Trust</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-x1 py-2" href="../../pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Emma Watson</h6>
                            <p class="fs-11 mb-0 d-flex">Google</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="text-center mt-n3">
                      <p class="fallback fw-bold fs-8 d-none">No Result Found.</p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item ps-2 pe-0">
                <div class="dropdown theme-control-dropdown"><a class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0" href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span><span class="fas fa-moon fs-7" data-fa-transform="shrink-3" data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span></a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3" aria-labelledby="themeSwitchDropdown">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2"><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="light" data-theme-control="theme"><span class="fas fa-sun"></span>Light<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark" data-theme-control="theme"><span class="fas fa-moon" data-fa-transform=""></span>Dark<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto" data-theme-control="theme"><span class="fas fa-adjust" data-fa-transform=""></span>Auto<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button></div>
                  </div>
                </div>
              </li>
              <li class="nav-item d-none d-sm-block">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="../../app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none">
                    <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem">
                      <div class="list-group list-group-flush fw-normal fs-10">
                        <div class="list-group-title border-bottom">NEW</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="../../assets/img/team/1-thumb.png" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <div class="avatar-name rounded-circle"><span>AB</span></div>
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                              <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-title border-bottom">EARLIER</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="../../assets/img/icons/weather-sm.jpg" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="../../assets/img/logos/oxford.png" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="../../assets/img/team/10.jpg" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="../../app/social/notifications.html">View all</a></div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown px-1">
                <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
                    <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                  </svg></a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
                  <div class="card shadow-none">
                    <div class="scrollbar-overlay nine-dots-dropdown">
                      <div class="card-body px-3">
                        <div class="row text-center gx-0 gy-0">
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../pages/user/profile.html" target="_blank">
                              <div class="avatar avatar-2xl"> <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" /></div>
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11">Account</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://themewagon.com/" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/themewagon.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Themewagon</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://mailbluster.com/" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/mailbluster.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Mailbluster</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/google.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Google</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/spotify.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Spotify</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/steam.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Steam</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/github-light.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Github</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/discord.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Discord</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/xbox.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">xbox</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/trello.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Kanban</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/hp.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Hp</p>
                            </a></div>
                          <div class="col-12">
                            <hr class="my-3 mx-n3 bg-200" />
                          </div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/linkedin.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Linkedin</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/twitter.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Twitter</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/facebook.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Facebook</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/instagram.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Instagram</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/pinterest.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Pinterest</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/slack.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Slack</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/deviantart.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Deviantart</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../app/events/event-detail.html" target="_blank">
                              <div class="avatar avatar-2xl">
                                <div class="avatar-name rounded-circle bg-primary-subtle text-primary"><span class="fs-7">E</span></div>
                              </div>
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11">Events</p>
                            </a></div>
                          <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="../../assets/img/team/3-thumb.png" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="../../pages/user/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../../pages/user/settings.html">Settings</a>
                    <a class="dropdown-item" href="../../pages/authentication/card/logout.html">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;" data-move-target="#navbarVerticalNav" data-navbar-top="combo">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="../../index-2.html">
              <div class="d-flex align-items-center"><img class="me-2" src="../../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
            </a>
            <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
              <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../../index-2.html">Default</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/crm.html">CRM</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/lms.html">LMS<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/project-management.html">Management</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/saas.html">SaaS</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/support-desk.html">Support desk<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a></div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                    <div class="card navbar-card-app shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="../../app/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/kanban.html">Kanban</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/followers.html">Followers</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/table-view.html">Table view</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/card-view.html">Card view</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/contacts.html">Contacts</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/contact-details.html">Contact details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/tickets-preview.html">Tickets preview</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/quick-links.html">Quick links</a>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/course-list.html">Course list</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/course-grid.html">Course grid</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/course-details.html">Course details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/create-a-course.html">Create a course</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/student-overview.html">Student overview</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/trainer-profile.html">Trainer profile</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/events/event-list.html">Event list</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/email/compose.html">Compose</a>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/add-product.html">Add product</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/invoice.html">Invoice</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
                    <div class="card navbar-card-pages shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Layouts</p><a class="nav-link py-1 link-600 fw-medium" href="../../demo/navbar-vertical.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../../demo/navbar-top.html">Top nav</a><a class="nav-link py-1 link-600 fw-medium" href="../../demo/navbar-double-top.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../demo/combo-nav.html">Combo nav</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/starter.html">Starter</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/landing.html">Landing</a>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">User</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/user/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/user/settings.html">Settings</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/pricing/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/pricing/pricing-alt.html">Pricing alt</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/errors/500.html">500</a>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/miscellaneous/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/miscellaneous/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/miscellaneous/privacy-policy.html">Privacy policy</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">FAQ</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/faq/faq-basic.html">Faq basic</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/faq/faq-alt.html">Faq alt</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/faq/faq-accordion.html">Faq accordion</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../../index.html#authentication-modal" data-bs-toggle="modal">Modal</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
                    <div class="card navbar-card-components shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="../components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="../components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="../components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="../components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="../components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="../components/bottom-bar.html">Bottom bar<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="../components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="../components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="../components/carousel/bootstrap.html">Bootstrap carousel</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="../components/carousel/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="../components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="../components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="../components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="../components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="../components/jquery-components.html">Jquery<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="../components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/vertical-navbar.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/top-navbar.html">Top nav</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/double-top-navbar.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/combo-navbar.html">Combo nav</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="../components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="../components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/placeholder.html">Placeholder</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pagination.html">Pagination</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="../components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="../components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="../components/sortable.html">Sortable</a><a class="nav-link py-1 link-600 fw-medium" href="../components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="../components/timeline.html">Timeline</a><a class="nav-link py-1 link-600 fw-medium" href="../components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="../components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="../components/treeview.html">Treeview</a><a class="nav-link py-1 link-600 fw-medium" href="../components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="../components/videos/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="../components/videos/plyr.html">Plyr</a></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="../utilities/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/focus-ring.html">Focus ring</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/icon-link.html">Icon link</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/overlayscrollbar.html">Overlay scrollbar</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/ratio.html">Ratio</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/vertical-rule.html">Vertical rule</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/visibility.html">Visibility</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="../tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="../tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="../tables/bulk-select.html">Bulk select</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="../charts/chartjs.html">Chartjs</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/d3js.html">D3js<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                              <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/pie-charts.html">Pie charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/gauge-charts.html">Gauge charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/how-to-use.html">How to use</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/input-mask.html">Input mask</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/range-slider.html">Range slider</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/validation.html">Validation</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column pt-xxl-1">
                              <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="material-icons.html">Material icons</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="../maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="../maps/leaflet-map.html">Leaflet map</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../../documentation/getting-started.html">Getting started</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/configuration.html">Configuration</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/styling.html">Styling<span class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/dark-mode.html">Dark mode</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/plugin.html">Plugin</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/faq.html">Faq</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/gulp.html">Gulp</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/design-file.html">Design file</a><a class="dropdown-item link-600 fw-medium" href="../../changelog.html">Changelog</a></div>
                  </div>
                </li>
              </ul>
            </div>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item ps-2 pe-0">
                <div class="dropdown theme-control-dropdown"><a class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0" href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span><span class="fas fa-moon fs-7" data-fa-transform="shrink-3" data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span></a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3" aria-labelledby="themeSwitchDropdown">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2"><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="light" data-theme-control="theme"><span class="fas fa-sun"></span>Light<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark" data-theme-control="theme"><span class="fas fa-moon" data-fa-transform=""></span>Dark<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto" data-theme-control="theme"><span class="fas fa-adjust" data-fa-transform=""></span>Auto<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button></div>
                  </div>
                </div>
              </li>
              <li class="nav-item d-none d-sm-block">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="../../app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none">
                    <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem">
                      <div class="list-group list-group-flush fw-normal fs-10">
                        <div class="list-group-title border-bottom">NEW</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="../../assets/img/team/1-thumb.png" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <div class="avatar-name rounded-circle"><span>AB</span></div>
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                              <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-title border-bottom">EARLIER</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="../../assets/img/icons/weather-sm.jpg" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="../../assets/img/logos/oxford.png" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="../../assets/img/team/10.jpg" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="../../app/social/notifications.html">View all</a></div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown px-1">
                <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
                    <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                  </svg></a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
                  <div class="card shadow-none">
                    <div class="scrollbar-overlay nine-dots-dropdown">
                      <div class="card-body px-3">
                        <div class="row text-center gx-0 gy-0">
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../pages/user/profile.html" target="_blank">
                              <div class="avatar avatar-2xl"> <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" /></div>
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11">Account</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://themewagon.com/" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/themewagon.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Themewagon</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://mailbluster.com/" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/mailbluster.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Mailbluster</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/google.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Google</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/spotify.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Spotify</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/steam.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Steam</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/github-light.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Github</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/discord.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Discord</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/xbox.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">xbox</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/trello.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Kanban</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/hp.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Hp</p>
                            </a></div>
                          <div class="col-12">
                            <hr class="my-3 mx-n3 bg-200" />
                          </div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/linkedin.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Linkedin</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/twitter.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Twitter</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/facebook.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Facebook</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/instagram.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Instagram</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/pinterest.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Pinterest</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/slack.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Slack</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/deviantart.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Deviantart</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../app/events/event-detail.html" target="_blank">
                              <div class="avatar avatar-2xl">
                                <div class="avatar-name rounded-circle bg-primary-subtle text-primary"><span class="fs-7">E</span></div>
                              </div>
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11">Events</p>
                            </a></div>
                          <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="../../assets/img/team/3-thumb.png" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="../../pages/user/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../../pages/user/settings.html">Settings</a>
                    <a class="dropdown-item" href="../../pages/authentication/card/logout.html">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
          <script>
            var navbarPosition = localStorage.getItem('navbarPosition');
            var navbarVertical = document.querySelector('.navbar-vertical');
            var navbarTopVertical = document.querySelector('.content .navbar-top');
            var navbarTop = document.querySelector('[data-layout] .navbar-top:not([data-double-top-nav');
            var navbarDoubleTop = document.querySelector('[data-double-top-nav]');
            var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');

            if (localStorage.getItem('navbarPosition') === 'double-top') {
              document.documentElement.classList.toggle('double-top-nav-layout');
            }

            if (navbarPosition === 'top') {
              navbarTop.removeAttribute('style');
              navbarTopVertical.remove(navbarTopVertical);
              navbarVertical.remove(navbarVertical);
              navbarTopCombo.remove(navbarTopCombo);
              navbarDoubleTop.remove(navbarDoubleTop);
            } else if (navbarPosition === 'combo') {
              navbarVertical.removeAttribute('style');
              navbarTopCombo.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopVertical.remove(navbarTopVertical);
              navbarDoubleTop.remove(navbarDoubleTop);
            } else if (navbarPosition === 'double-top') {
              navbarDoubleTop.removeAttribute('style');
              navbarTopVertical.remove(navbarTopVertical);
              navbarVertical.remove(navbarVertical);
              navbarTop.remove(navbarTop);
              navbarTopCombo.remove(navbarTopCombo);
            } else {
              navbarVertical.removeAttribute('style');
              navbarTopVertical.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarDoubleTop.remove(navbarDoubleTop);
              navbarTopCombo.remove(navbarTopCombo);
            }
          </script>
          <div class="card mb-3">
            <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div><!--/.bg-holder-->
            <div class="card-body position-relative">
              <div class="row">
                <div class="col-lg-8">
                  <h3>Material Icons</h3>
                  <p class="mt-2">Get Material Icons in five styles and a range of downloadable sizes and densities. The icons are crafted based on the core design principles and metrics of Material design guideline.</p><a class="btn btn-link ps-0 btn-sm" href="https://fonts.google.com/icons" target="_blank">Material Icons Documentation<span class="fas fa-chevron-right ms-1 fs-11"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-0">CSS</h5>
            </div>
            <div class="card-body bg-body-tertiary"><pre class="scrollbar mt-2"><code class="language-html">&lt;link rel=&quot;stylesheet&quot; href=&quot;https://fonts.googleapis.com/icon?family=Material+Icons&quot; /&gt;</code></pre>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                  <h5 class="mb-0" data-anchor="data-anchor">Example</h5>
                  <p class="mb-0 pt-1 mt-2 mb-0">You can use these icons with color and font-size helper classes like the example bellow: </p>
                </div>
                <div class="col-auto ms-auto">
                  <div class="nav nav-pills nav-pills-falcon flex-grow-1 mt-2" role="tablist"><button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-52bb80c6-aabb-4543-af4d-ba9af5f0a33d" type="button" role="tab" aria-controls="dom-52bb80c6-aabb-4543-af4d-ba9af5f0a33d" aria-selected="true" id="tab-dom-52bb80c6-aabb-4543-af4d-ba9af5f0a33d">Preview</button><button class="btn btn-sm" data-bs-toggle="pill" data-bs-target="#dom-90593b42-993a-41f5-9085-4306ff246f1d" type="button" role="tab" aria-controls="dom-90593b42-993a-41f5-9085-4306ff246f1d" aria-selected="false" id="tab-dom-90593b42-993a-41f5-9085-4306ff246f1d">Code</button></div>
                </div>
              </div>
            </div>
            <div class="card-body bg-body-tertiary">
              <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-52bb80c6-aabb-4543-af4d-ba9af5f0a33d" id="dom-52bb80c6-aabb-4543-af4d-ba9af5f0a33d"><span class="material-icons text-secondary fs-4">notifications</span></div>
                <div class="tab-pane code-tab-pane" role="tabpanel" aria-labelledby="tab-dom-90593b42-993a-41f5-9085-4306ff246f1d" id="dom-90593b42-993a-41f5-9085-4306ff246f1d"><pre class="scrollbar rounded-1" style="max-height:420px"><code class="language-html">&lt;span class=&quot;material-icons text-secondary fs-4&quot;&gt;notifications&lt;/span&gt;</code></pre>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3" data-list='{"valueNames":["icon-list-item"]}'>
            <div class="card-header">
              <div class="row flex-between-center">
                <div class="col">
                  <h5 class="mb-0">Icons List</h5>
                </div>
                <div class="col-auto"><input class="form-control rounded-pill search" type="search" placeholder="Search" /></div>
              </div>
            </div>
            <div class="card-body bg-body-tertiary">
              <div class="row list" id="icon-list">
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">search</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">search</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="search" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">done</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">done</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="done" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">face</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">face</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="face" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">settings</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">settings</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="settings" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">fingerprint</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">fingerprint</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="fingerprint" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">check_circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">check_circle</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="check_circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">info</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">info</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="info" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">home</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">home</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="home" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">favorite</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">favorite</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="favorite" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">account_circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">account_circle</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="account_circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">help_outline</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">help_outline</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="help_outline" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">lightbulb</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">lightbulb</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="lightbulb" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">android</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">android</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="android" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">delete</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">delete</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="delete" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shopping_cart</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">shopping_cart</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shopping_cart" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">language</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">language</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="language" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">flutter_dash</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">flutter_dash</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="flutter_dash" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">accessibility</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">accessibility</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="accessibility" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">visibility</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">visibility</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="visibility" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">lock</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">lock</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="lock" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">favorite_border</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">favorite_border</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="favorite_border" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">trending_up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">trending_up</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="trending_up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">thumb_up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">thumb_up</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="thumb_up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">schedule</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">schedule</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="schedule" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">verified</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">verified</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="verified" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pets</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">pets</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pets" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">3d_rotation</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">3d_rotation</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="3d_rotation" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">account_balance</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">account_balance</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="account_balance" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">build</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">build</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="build" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">open_in_new</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">open_in_new</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="open_in_new" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">description</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">description</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="description" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bug_report</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">bug_report</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bug_report" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">event</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">event</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="event" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">question_answer</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">question_answer</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="question_answer" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">paid</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">paid</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="paid" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">list</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">list</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="list" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow_right_alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">arrow_right_alt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow_right_alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dashboard</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">dashboard</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dashboard" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">accessibility_new</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">accessibility_new</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="accessibility_new" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pan_tool</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">pan_tool</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pan_tool" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">analytics</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">analytics</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="analytics" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">star_rate</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">star_rate</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="star_rate" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">logout</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">logout</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="logout" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shopping_bag</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">shopping_bag</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shopping_bag" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">manage_accounts</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">manage_accounts</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="manage_accounts" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">credit_card</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">credit_card</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="credit_card" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">verified_user</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">verified_user</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="verified_user" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">work</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">work</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="work" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar_today</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">calendar_today</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar_today" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">help</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">help</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="help" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">login</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">login</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="login" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">launch</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">launch</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="launch" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_alt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">feedback</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">feedback</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="feedback" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">fact_check</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">fact_check</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="fact_check" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">view_in_ar</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">view_in_ar</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="view_in_ar" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">history</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">history</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="history" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">code</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">code</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="code" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">eco</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">eco</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="eco" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">savings</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">savings</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="savings" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">visibility_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">visibility_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="visibility_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">check_circle_outline</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">check_circle_outline</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="check_circle_outline" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">thumb_up_off_alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">thumb_up_off_alt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="thumb_up_off_alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">timeline</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">timeline</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="timeline" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">article</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">article</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="article" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">done_outline</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">done_outline</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="done_outline" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">grade</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">grade</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="grade" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">add_shopping_cart</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">add_shopping_cart</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="add_shopping_cart" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">date_range</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">date_range</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="date_range" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">explore</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">explore</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="explore" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">perm_identity</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">perm_identity</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="perm_identity" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">autorenew</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">autorenew</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="autorenew" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">add_task</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">add_task</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="add_task" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">nightlight_round</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">nightlight_round</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="nightlight_round" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">flight_takeoff</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">flight_takeoff</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="flight_takeoff" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">report_problem</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">report_problem</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="report_problem" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">assignment</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">assignment</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="assignment" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">alarm</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">alarm</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="alarm" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">task_alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">task_alt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="task_alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">update</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">update</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="update" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">highlight_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">highlight_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="highlight_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">watch_later</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">watch_later</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="watch_later" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">lock_open</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">lock_open</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="lock_open" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">account_balance_wallet</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">account_balance_wallet</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="account_balance_wallet" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">store</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">store</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="store" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">privacy_tip</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">privacy_tip</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="privacy_tip" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">room</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">room</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="room" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">print</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">print</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="print" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">account_box</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">account_box</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="account_box" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">touch_app</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">touch_app</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="touch_app" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">today</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">today</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="today" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dns</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">dns</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dns" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">admin_panel_settings</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">admin_panel_settings</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="admin_panel_settings" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">gavel</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">gavel</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="gavel" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">contact_support</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">contact_support</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="contact_support" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">g_translate</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">g_translate</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="g_translate" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">api</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">api</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="api" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">zoom_in</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">zoom_in</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="zoom_in" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">power_settings_new</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">power_settings_new</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="power_settings_new" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">payment</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">payment</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="payment" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">record_voice_over</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">record_voice_over</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="record_voice_over" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmark_border</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">bookmark_border</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmark_border" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">assessment</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">assessment</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="assessment" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">thumb_down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">thumb_down</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="thumb_down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">open_in_full</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">open_in_full</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="open_in_full" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">supervisor_account</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">supervisor_account</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="supervisor_account" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">translate</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">translate</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="translate" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">accessible</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">accessible</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="accessible" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">model_training</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">model_training</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="model_training" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmark</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">bookmark</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmark" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stars</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">stars</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stars" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">work_outline</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">work_outline</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="work_outline" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">get_app</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">get_app</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="get_app" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">book</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">book</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="book" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">done_all</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">done_all</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="done_all" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">extension</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">extension</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="extension" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">label</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">label</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="label" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pending</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">pending</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pending" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cached</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">cached</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cached" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shopping_basket</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">shopping_basket</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shopping_basket" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">published_with_changes</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">published_with_changes</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="published_with_changes" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">leaderboard</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">leaderboard</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="leaderboard" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">group_work</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">group_work</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="group_work" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">loyalty</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">loyalty</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="loyalty" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">accessible_forward</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">accessible_forward</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="accessible_forward" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">input</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">input</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="input" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">query_builder</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">query_builder</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="query_builder" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">announcement</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">announcement</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="announcement" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">add_to_drive</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">add_to_drive</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="add_to_drive" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">drag_indicator</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">drag_indicator</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="drag_indicator" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">delete_outline</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">delete_outline</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="delete_outline" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">note_add</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">note_add</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="note_add" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">assignment_turned_in</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">assignment_turned_in</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="assignment_turned_in" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">reorder</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">reorder</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="reorder" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hourglass_empty</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">hourglass_empty</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hourglass_empty" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">open_with</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">open_with</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="open_with" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">preview</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">preview</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="preview" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">view_list</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">view_list</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="view_list" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">invert_colors</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">invert_colors</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="invert_colors" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">help_center</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">help_center</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="help_center" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pending_actions</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">pending_actions</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pending_actions" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">track_changes</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">track_changes</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="track_changes" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">compare_arrows</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">compare_arrows</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="compare_arrows" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">supervised_user_circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">supervised_user_circle</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="supervised_user_circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">settings_accessibility</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">settings_accessibility</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="settings_accessibility" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">integration_instructions</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">integration_instructions</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="integration_instructions" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">backup</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">backup</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="backup" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">trending_flat</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">trending_flat</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="trending_flat" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">contact_page</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">contact_page</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="contact_page" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">saved_search</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">saved_search</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="saved_search" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">build_circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">build_circle</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="build_circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow_circle_up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">arrow_circle_up</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow_circle_up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">receipt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">receipt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="receipt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">card_giftcard</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">card_giftcard</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="card_giftcard" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">trending_down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">trending_down</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="trending_down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">euro_symbol</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">euro_symbol</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="euro_symbol" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">grading</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">grading</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="grading" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">swipe</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">swipe</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="swipe" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pageview</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">pageview</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pageview" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">close_fullscreen</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">close_fullscreen</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="close_fullscreen" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mediation</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">mediation</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mediation" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sensors</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sensors</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sensors" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">label_important</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">label_important</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="label_important" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">source</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">source</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="source" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">rule</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">rule</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="rule" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">copyright</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">copyright</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="copyright" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">restore</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">restore</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="restore" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">thumbs_up_down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">thumbs_up_down</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="thumbs_up_down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">perm_media</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">perm_media</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="perm_media" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">assignment_ind</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">assignment_ind</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="assignment_ind" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">exit_to_app</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">exit_to_app</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="exit_to_app" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">zoom_out</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">zoom_out</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="zoom_out" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">alarm_on</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">alarm_on</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="alarm_on" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">delete_forever</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">delete_forever</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="delete_forever" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmarks</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">bookmarks</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmarks" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">settings_phone</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">settings_phone</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="settings_phone" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">swap_horiz</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">swap_horiz</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="swap_horiz" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">change_history</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">change_history</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="change_history" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">flaky</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">flaky</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="flaky" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">anchor</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">anchor</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="anchor" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">card_membership</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">card_membership</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="card_membership" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dashboard_customize</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">dashboard_customize</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dashboard_customize" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">support</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">support</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="support" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wysiwyg</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">wysiwyg</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wysiwyg" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow_circle_down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">arrow_circle_down</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow_circle_down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">offline_pin</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">offline_pin</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="offline_pin" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">opacity</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">opacity</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="opacity" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmark_added</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">bookmark_added</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmark_added" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">theaters</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">theaters</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="theaters" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">https</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">https</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="https" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">offline_bolt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">offline_bolt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="offline_bolt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pregnant_woman</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">pregnant_woman</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pregnant_woman" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">book_online</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">book_online</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="book_online" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sticky_note_2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sticky_note_2</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sticky_note_2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tab</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">tab</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tab" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">subject</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">subject</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="subject" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">thumb_down_off_alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">thumb_down_off_alt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="thumb_down_off_alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">rowing</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">rowing</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="rowing" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">no_accounts</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">no_accounts</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="no_accounts" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">redeem</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">redeem</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="redeem" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hourglass_full</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">hourglass_full</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hourglass_full" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">outlet</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">outlet</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="outlet" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">settings_input_antenna</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">settings_input_antenna</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="settings_input_antenna" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">commute</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">commute</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="commute" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">not_started</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">not_started</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="not_started" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">aspect_ratio</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">aspect_ratio</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="aspect_ratio" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">settings_voice</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">settings_voice</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="settings_voice" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">flight_land</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">flight_land</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="flight_land" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">donut_large</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">donut_large</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="donut_large" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">important_devices</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">important_devices</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="important_devices" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmark_add</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">bookmark_add</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmark_add" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">swap_vert</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">swap_vert</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="swap_vert" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">find_in_page</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">find_in_page</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="find_in_page" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">speaker_notes</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">speaker_notes</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="speaker_notes" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">perm_phone_msg</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">perm_phone_msg</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="perm_phone_msg" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">contactless</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">contactless</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="contactless" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">view_headline</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">view_headline</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="view_headline" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">minimize</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">minimize</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="minimize" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">toll</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">toll</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="toll" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">youtube_searched_for</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">youtube_searched_for</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="youtube_searched_for" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">history_toggle_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">history_toggle_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="history_toggle_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">table_view</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">table_view</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="table_view" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dangerous</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">dangerous</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dangerous" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">schedule_send</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">schedule_send</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="schedule_send" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sync_alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sync_alt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sync_alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">highlight_alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">highlight_alt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="highlight_alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">polymer</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">polymer</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="polymer" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">settings_applications</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">settings_applications</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="settings_applications" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">turned_in_not</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">turned_in_not</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="turned_in_not" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">view_week</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">view_week</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="view_week" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">settings_ethernet</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">settings_ethernet</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="settings_ethernet" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">settings_remote</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">settings_remote</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="settings_remote" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">upgrade</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">upgrade</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="upgrade" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">open_in_browser</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">open_in_browser</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="open_in_browser" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">try</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">try</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="try" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">addchart</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">addchart</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="addchart" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">assignment_late</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">assignment_late</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="assignment_late" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">lock_clock</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">lock_clock</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="lock_clock" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">system_update_alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">system_update_alt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="system_update_alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">app_blocking</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">app_blocking</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="app_blocking" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">smart_button</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">smart_button</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="smart_button" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">camera_enhance</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">camera_enhance</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="camera_enhance" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">fit_screen</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">fit_screen</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="fit_screen" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">settings_input_composite</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">settings_input_composite</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="settings_input_composite" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">toc</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">toc</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="toc" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">online_prediction</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">online_prediction</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="online_prediction" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shop</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">shop</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shop" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mark_as_unread</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">mark_as_unread</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mark_as_unread" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">alarm_add</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">alarm_add</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="alarm_add" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">circle_notifications</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">circle_notifications</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="circle_notifications" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">class</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">class</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="class" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">disabled_by_default</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">disabled_by_default</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="disabled_by_default" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">http</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">http</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="http" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">settings_brightness</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">settings_brightness</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="settings_brightness" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">turned_in</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">turned_in</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="turned_in" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">settings_input_hdmi</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">settings_input_hdmi</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="settings_input_hdmi" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">gif</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">gif</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="gif" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">settings_bluetooth</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">settings_bluetooth</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="settings_bluetooth" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">next_plan</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">next_plan</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="next_plan" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">settings_cell</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">settings_cell</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="settings_cell" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">settings_overscan</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">settings_overscan</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="settings_overscan" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">view_carousel</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">view_carousel</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="view_carousel" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dynamic_form</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">dynamic_form</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dynamic_form" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">find_replace</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">find_replace</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="find_replace" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hide_source</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">hide_source</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hide_source" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar_view_month</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">calendar_view_month</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar_view_month" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">donut_small</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">donut_small</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="donut_small" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">search_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">search_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="search_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">perm_contact_calendar</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">perm_contact_calendar</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="perm_contact_calendar" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">quickreply</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">quickreply</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="quickreply" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">view_column</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">view_column</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="view_column" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">card_travel</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">card_travel</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="card_travel" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file_present</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">file_present</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file_present" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">play_for_work</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">play_for_work</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="play_for_work" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">view_day</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">view_day</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="view_day" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">batch_prediction</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">batch_prediction</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="batch_prediction" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tour</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">tour</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tour" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wifi_protected_setup</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">wifi_protected_setup</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wifi_protected_setup" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">settings_power</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">settings_power</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="settings_power" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">view_agenda</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">view_agenda</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="view_agenda" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">all_inbox</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">all_inbox</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="all_inbox" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">expand</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">expand</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="expand" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">perm_scan_wifi</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">perm_scan_wifi</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="perm_scan_wifi" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">settings_input_component</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">settings_input_component</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="settings_input_component" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">flip_to_front</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">flip_to_front</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="flip_to_front" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">unpublished</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">unpublished</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="unpublished" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">maximize</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">maximize</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="maximize" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">picture_in_picture</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">picture_in_picture</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="picture_in_picture" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">markunread_mailbox</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">markunread_mailbox</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="markunread_mailbox" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">segment</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">segment</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="segment" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">spellcheck</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">spellcheck</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="spellcheck" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">event_seat</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">event_seat</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="event_seat" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">alarm_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">alarm_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="alarm_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">production_quantity_limits</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">production_quantity_limits</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="production_quantity_limits" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">settings_input_svideo</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">settings_input_svideo</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="settings_input_svideo" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">outbound</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">outbound</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="outbound" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">remove_shopping_cart</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">remove_shopping_cart</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="remove_shopping_cart" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">view_module</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">view_module</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="view_module" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">line_style</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">line_style</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="line_style" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">plagiarism</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">plagiarism</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="plagiarism" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">view_sidebar</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">view_sidebar</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="view_sidebar" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">assignment_return</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">assignment_return</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="assignment_return" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">restore_from_trash</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">restore_from_trash</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="restore_from_trash" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">settings_backup_restore</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">settings_backup_restore</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="settings_backup_restore" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmark_remove</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">bookmark_remove</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmark_remove" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">compress</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">compress</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="compress" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">perm_camera_mic</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">perm_camera_mic</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="perm_camera_mic" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">restore_page</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">restore_page</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="restore_page" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">eject</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">eject</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="eject" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sensors_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sensors_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sensors_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">view_quilt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">view_quilt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="view_quilt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">code_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">code_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="code_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">remove_done</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">remove_done</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="remove_done" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">assignment_returned</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">assignment_returned</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="assignment_returned" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">horizontal_split</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">horizontal_split</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="horizontal_split" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">vertical_split</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">vertical_split</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="vertical_split" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">voice_over_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">voice_over_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="voice_over_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">outbox</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">outbox</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="outbox" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">send_and_archive</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">send_and_archive</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="send_and_archive" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">speaker_notes_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">speaker_notes_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="speaker_notes_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chrome_reader_mode</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">chrome_reader_mode</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chrome_reader_mode" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">perm_device_information</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">perm_device_information</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="perm_device_information" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shop_2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">shop_2</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shop_2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">view_stream</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">view_stream</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="view_stream" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">all_out</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">all_out</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="all_out" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">not_accessible</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">not_accessible</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="not_accessible" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">swap_vertical_circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">swap_vertical_circle</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="swap_vertical_circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar_view_day</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">calendar_view_day</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar_view_day" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cancel_schedule_send</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">cancel_schedule_send</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cancel_schedule_send" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">picture_in_picture_alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">picture_in_picture_alt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="picture_in_picture_alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">swap_horizontal_circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">swap_horizontal_circle</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="swap_horizontal_circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar_view_week</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">calendar_view_week</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar_view_week" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">edit_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">edit_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="edit_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hourglass_disabled</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">hourglass_disabled</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hourglass_disabled" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">space_dashboard</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">space_dashboard</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="space_dashboard" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">extension_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">extension_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="extension_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">perm_data_setting</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">perm_data_setting</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="perm_data_setting" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tab_unselected</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">tab_unselected</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tab_unselected" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">credit_card_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">credit_card_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="credit_card_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">update_disabled</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">update_disabled</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="update_disabled" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">new_label</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">new_label</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="new_label" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">request_page</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">request_page</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="request_page" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">line_weight</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">line_weight</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="line_weight" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">flip_to_back</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">flip_to_back</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="flip_to_back" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">work_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">work_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="work_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">comment_bank</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">comment_bank</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="comment_bank" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">text_rotate_vertical</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">text_rotate_vertical</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="text_rotate_vertical" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shop_two</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">shop_two</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shop_two" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">view_array</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">view_array</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="view_array" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">backup_table</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">backup_table</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="backup_table" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">explore_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">explore_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="explore_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">label_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">label_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="label_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">rounded_corner</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">rounded_corner</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="rounded_corner" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">text_rotation_angledown</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">text_rotation_angledown</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="text_rotation_angledown" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">text_rotation_down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">text_rotation_down</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="text_rotation_down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">text_rotate_up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">text_rotate_up</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="text_rotate_up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">text_rotation_angleup</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">text_rotation_angleup</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="text_rotation_angleup" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">open_in_new_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">open_in_new_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="open_in_new_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">subtitles_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">subtitles_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="subtitles_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">text_rotation_none</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">text_rotation_none</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="text_rotation_none" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">facebook</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">facebook</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="facebook" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">facebook</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">facebook</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="facebook" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">person</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">groups</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">groups</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="groups" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">public</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">public</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="public" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">notifications</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">notifications</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="notifications" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">school</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">school</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="school" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">people</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">people</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="people" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person_outline</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">person_outline</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person_outline" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">share</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">share</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="share" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">group</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">group</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="group" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">catching_pokemon</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">catching_pokemon</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="catching_pokemon" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">coronavirus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">coronavirus</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="coronavirus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji_events</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">emoji_events</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji_events" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">psychology</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">psychology</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="psychology" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">notifications_active</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">notifications_active</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="notifications_active" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sentiment_satisfied</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sentiment_satisfied</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sentiment_satisfied" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji_emotions</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">emoji_emotions</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji_emotions" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person_add</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">person_add</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person_add" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">construction</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">construction</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="construction" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">science</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">science</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="science" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">engineering</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">engineering</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="engineering" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">health_and_safety</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">health_and_safety</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="health_and_safety" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji_objects</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">emoji_objects</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji_objects" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">people_alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">people_alt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="people_alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">precision_manufacturing</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">precision_manufacturing</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="precision_manufacturing" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cake</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">cake</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cake" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">masks</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">masks</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="masks" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">group_add</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">group_add</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="group_add" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sentiment_dissatisfied</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sentiment_dissatisfied</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sentiment_dissatisfied" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">self_improvement</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">self_improvement</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="self_improvement" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">military_tech</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">military_tech</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="military_tech" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">ios_share</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">ios_share</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="ios_share" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sports_esports</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sports_esports</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sports_esports" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji_people</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">emoji_people</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji_people" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sentiment_very_satisfied</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sentiment_very_satisfied</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sentiment_very_satisfied" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mood</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">mood</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mood" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">thumb_up_alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">thumb_up_alt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="thumb_up_alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">domain</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">domain</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="domain" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">location_city</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">location_city</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="location_city" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sentiment_neutral</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sentiment_neutral</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sentiment_neutral" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">architecture</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">architecture</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="architecture" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sports_kabaddi</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sports_kabaddi</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sports_kabaddi" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">poll</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">poll</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="poll" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person_add_alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">person_add_alt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person_add_alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sports_soccer</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sports_soccer</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sports_soccer" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">travel_explore</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">travel_explore</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="travel_explore" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">whatshot</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">whatshot</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="whatshot" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">connect_without_contact</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">connect_without_contact</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="connect_without_contact" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hiking</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">hiking</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hiking" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sentiment_very_dissatisfied</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sentiment_very_dissatisfied</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sentiment_very_dissatisfied" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">history_edu</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">history_edu</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="history_edu" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">notifications_none</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">notifications_none</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="notifications_none" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">female</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">female</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="female" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji_nature</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">emoji_nature</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji_nature" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">notification_add</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">notification_add</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="notification_add" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">recommend</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">recommend</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="recommend" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">male</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">male</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="male" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">kayaking</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">kayaking</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="kayaking" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mood_bad</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">mood_bad</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mood_bad" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sports_basketball</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sports_basketball</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sports_basketball" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">switch_account</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">switch_account</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="switch_account" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sick</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sick</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sick" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person_add_alt_1</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">person_add_alt_1</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person_add_alt_1" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">6_ft_apart</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">6_ft_apart</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="6_ft_apart" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">luggage</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">luggage</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="luggage" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">notifications_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">notifications_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="notifications_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">clean_hands</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">clean_hands</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="clean_hands" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">nights_stay</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">nights_stay</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="nights_stay" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">outdoor_grill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">outdoor_grill</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="outdoor_grill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji_symbols</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">emoji_symbols</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji_symbols" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">people_outline</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">people_outline</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="people_outline" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">deck</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">deck</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="deck" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person_remove</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">person_remove</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person_remove" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">social_distance</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">social_distance</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="social_distance" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji_flags</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">emoji_flags</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji_flags" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sanitizer</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sanitizer</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sanitizer" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji_food_beverage</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">emoji_food_beverage</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji_food_beverage" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sports_tennis</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sports_tennis</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sports_tennis" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">add_reaction</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">add_reaction</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="add_reaction" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">follow_the_signs</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">follow_the_signs</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="follow_the_signs" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">paragliding</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">paragliding</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="paragliding" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">transgender</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">transgender</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="transgender" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">thumb_down_alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">thumb_down_alt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="thumb_down_alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">elderly</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">elderly</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="elderly" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">nordic_walking</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">nordic_walking</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="nordic_walking" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skateboarding</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">skateboarding</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skateboarding" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sports_volleyball</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sports_volleyball</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sports_volleyball" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">downhill_skiing</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">downhill_skiing</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="downhill_skiing" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sports_motorsports</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sports_motorsports</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sports_motorsports" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">king_bed</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">king_bed</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="king_bed" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">fireplace</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">fireplace</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="fireplace" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">snowboarding</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">snowboarding</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="snowboarding" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sports</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sports</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sports" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sports_baseball</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sports_baseball</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sports_baseball" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">surfing</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">surfing</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="surfing" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">piano</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">piano</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="piano" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sports_football</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sports_football</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sports_football" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">single_bed</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">single_bed</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="single_bed" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sports_mma</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sports_mma</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sports_mma" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">person_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">plus_one</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">plus_one</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="plus_one" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">edit_notifications</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">edit_notifications</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="edit_notifications" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji_transportation</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">emoji_transportation</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji_transportation" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pages</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">pages</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pages" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person_remove_alt_1</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">person_remove_alt_1</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person_remove_alt_1" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">reduce_capacity</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">reduce_capacity</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="reduce_capacity" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">safety_divider</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">safety_divider</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="safety_divider" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">snowshoeing</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">snowshoeing</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="snowshoeing" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">add_moderator</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">add_moderator</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="add_moderator" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">public_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">public_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="public_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">kitesurfing</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">kitesurfing</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="kitesurfing" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">remove_moderator</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">remove_moderator</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="remove_moderator" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">party_mode</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">party_mode</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="party_mode" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sports_rugby</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sports_rugby</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sports_rugby" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sledding</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sledding</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sledding" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sports_cricket</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sports_cricket</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sports_cricket" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sports_hockey</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sports_hockey</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sports_hockey" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">notifications_paused</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">notifications_paused</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="notifications_paused" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sports_handball</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sports_handball</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sports_handball" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">ice_skating</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">ice_skating</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="ice_skating" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sports_golf</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sports_golf</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sports_golf" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">piano_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">piano_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="piano_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">no_luggage</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">no_luggage</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="no_luggage" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">real_estate_agent</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">real_estate_agent</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="real_estate_agent" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">personal_injury</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">personal_injury</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="personal_injury" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">menu</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">menu</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="menu" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">menu</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">menu</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="menu" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">close</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">close</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="close" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">expand_more</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">expand_more</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="expand_more" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow_back</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">arrow_back</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow_back" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow_forward_ios</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">arrow_forward_ios</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow_forward_ios" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron_right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">chevron_right</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron_right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow_drop_down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">arrow_drop_down</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow_drop_down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow_back_ios</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">arrow_back_ios</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow_back_ios" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">more_vert</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">more_vert</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="more_vert" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cancel</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">cancel</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cancel" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow_forward</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">arrow_forward</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow_forward" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">check</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">check</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="check" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">expand_less</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">expand_less</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="expand_less" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">more_horiz</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">more_horiz</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="more_horiz" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">apps</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">apps</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="apps" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow_back_ios_new</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">arrow_back_ios_new</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow_back_ios_new" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron_left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">chevron_left</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron_left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">campaign</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">campaign</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="campaign" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">refresh</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">refresh</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="refresh" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow_upward</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">arrow_upward</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow_upward" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">payments</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">payments</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="payments" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow_right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">arrow_right</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow_right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">east</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">east</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="east" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">menu_open</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">menu_open</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="menu_open" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow_downward</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">arrow_downward</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow_downward" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">double_arrow</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">double_arrow</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="double_arrow" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">maps_home_work</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">maps_home_work</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="maps_home_work" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">unfold_more</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">unfold_more</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="unfold_more" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">fullscreen</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">fullscreen</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="fullscreen" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">south</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">south</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="south" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">home_work</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">home_work</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="home_work" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow_drop_up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">arrow_drop_up</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow_drop_up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">west</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">west</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="west" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow_drop_down_circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">arrow_drop_down_circle</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow_drop_down_circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">last_page</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">last_page</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="last_page" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">north_east</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">north_east</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="north_east" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">fullscreen_exit</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">fullscreen_exit</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="fullscreen_exit" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow_left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">arrow_left</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow_left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">first_page</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">first_page</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="first_page" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">north</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">north</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="north" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">north_west</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">north_west</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="north_west" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">unfold_less</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">unfold_less</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="unfold_less" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">subdirectory_arrow_right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">subdirectory_arrow_right</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="subdirectory_arrow_right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">switch_left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">switch_left</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="switch_left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">subdirectory_arrow_left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">subdirectory_arrow_left</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="subdirectory_arrow_left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">waterfall_chart</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">waterfall_chart</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="waterfall_chart" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">assistant_direction</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">assistant_direction</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="assistant_direction" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">switch_right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">switch_right</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="switch_right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">app_settings_alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">app_settings_alt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="app_settings_alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">legend_toggle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">legend_toggle</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="legend_toggle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">offline_share</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">offline_share</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="offline_share" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">south_west</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">south_west</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="south_west" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">south_east</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">south_east</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="south_east" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pivot_table_chart</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">pivot_table_chart</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pivot_table_chart" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">email</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">email</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="email" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">email</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">email</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="email" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">call</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">call</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="call" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">location_on</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">location_on</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="location_on" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">phone</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">phone</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="phone" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">business</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">business</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="business" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">chat</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">alternate_email</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">alternate_email</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="alternate_email" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">qr_code_scanner</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">qr_code_scanner</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="qr_code_scanner" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">vpn_key</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">vpn_key</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="vpn_key" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">list_alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">list_alt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="list_alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat_bubble</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">chat_bubble</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat_bubble" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat_bubble_outline</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">chat_bubble_outline</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat_bubble_outline" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">qr_code_2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">qr_code_2</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="qr_code_2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sentiment_satisfied_alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sentiment_satisfied_alt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sentiment_satisfied_alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">forum</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">forum</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="forum" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">contact_mail</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">contact_mail</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="contact_mail" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mail_outline</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">mail_outline</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mail_outline" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">comment</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">comment</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="comment" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">rss_feed</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">rss_feed</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="rss_feed" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">message</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">message</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="message" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">textsms</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">textsms</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="textsms" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person_search</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">person_search</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person_search" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">qr_code</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">qr_code</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="qr_code" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">contacts</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">contacts</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="contacts" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hourglass_bottom</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">hourglass_bottom</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hourglass_bottom" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">live_help</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">live_help</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="live_help" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">contact_phone</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">contact_phone</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="contact_phone" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">app_registration</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">app_registration</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="app_registration" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">document_scanner</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">document_scanner</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="document_scanner" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">present_to_all</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">present_to_all</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="present_to_all" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">duo</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">duo</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="duo" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">import_contacts</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">import_contacts</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="import_contacts" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mark_email_read</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">mark_email_read</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mark_email_read" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">forward_to_inbox</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">forward_to_inbox</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="forward_to_inbox" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mark_chat_unread</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">mark_chat_unread</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mark_chat_unread" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mark_email_unread</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">mark_email_unread</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mark_email_unread" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">screen_share</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">screen_share</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="screen_share" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stay_current_portrait</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">stay_current_portrait</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stay_current_portrait" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dialpad</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">dialpad</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dialpad" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hourglass_top</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">hourglass_top</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hourglass_top" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">read_more</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">read_more</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="read_more" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stay_primary_portrait</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">stay_primary_portrait</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stay_primary_portrait" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">call_end</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">call_end</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="call_end" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">import_export</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">import_export</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="import_export" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">phone_enabled</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">phone_enabled</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="phone_enabled" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">phonelink_ring</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">phonelink_ring</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="phonelink_ring" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">location_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">location_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="location_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">3p</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">3p</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="3p" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mark_chat_read</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">mark_chat_read</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mark_chat_read" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">unsubscribe</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">unsubscribe</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="unsubscribe" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person_add_disabled</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">person_add_disabled</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person_add_disabled" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">more_time</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">more_time</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="more_time" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">ring_volume</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">ring_volume</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="ring_volume" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">clear_all</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">clear_all</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="clear_all" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">call_missed</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">call_missed</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="call_missed" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">domain_verification</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">domain_verification</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="domain_verification" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">phone_disabled</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">phone_disabled</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="phone_disabled" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">phonelink_lock</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">phonelink_lock</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="phonelink_lock" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">phonelink_setup</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">phonelink_setup</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="phonelink_setup" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">call_split</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">call_split</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="call_split" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cell_wifi</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">cell_wifi</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cell_wifi" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">domain_disabled</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">domain_disabled</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="domain_disabled" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">portable_wifi_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">portable_wifi_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="portable_wifi_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">voicemail</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">voicemail</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="voicemail" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stay_current_landscape</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">stay_current_landscape</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stay_current_landscape" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cancel_presentation</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">cancel_presentation</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cancel_presentation" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">call_merge</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">call_merge</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="call_merge" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">swap_calls</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">swap_calls</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="swap_calls" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">rtt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">rtt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="rtt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sip</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sip</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sip" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">speaker_phone</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">speaker_phone</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="speaker_phone" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mobile_screen_share</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">mobile_screen_share</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mobile_screen_share" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">add_ic_call</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">add_ic_call</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="add_ic_call" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">nat</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">nat</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="nat" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">call_received</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">call_received</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="call_received" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pause_presentation</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">pause_presentation</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pause_presentation" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">call_missed_outgoing</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">call_missed_outgoing</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="call_missed_outgoing" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">phonelink_erase</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">phonelink_erase</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="phonelink_erase" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stop_screen_share</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">stop_screen_share</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stop_screen_share" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stay_primary_landscape</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">stay_primary_landscape</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stay_primary_landscape" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">call_made</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">call_made</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="call_made" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">desktop_access_disabled</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">desktop_access_disabled</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="desktop_access_disabled" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">print_disabled</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">print_disabled</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="print_disabled" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wifi_calling</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">wifi_calling</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wifi_calling" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dialer_sip</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">dialer_sip</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dialer_sip" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">invert_colors_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">invert_colors_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="invert_colors_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">no_sim</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">no_sim</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="no_sim" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">add</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">add</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="add" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">add</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">add</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="add" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">send</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">send</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="send" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">link</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">link</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="link" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">content_copy</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">content_copy</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="content_copy" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">add_circle_outline</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">add_circle_outline</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="add_circle_outline" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">add_circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">add_circle</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="add_circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">insights</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">insights</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="insights" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">clear</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">clear</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="clear" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mail</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">mail</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mail" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">create</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">create</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="create" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">save</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">save</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="save" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bolt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">bolt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bolt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_list</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_list</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_list" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">inventory</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">inventory</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="inventory" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">inventory_2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">inventory_2</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="inventory_2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">flag</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">flag</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="flag" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">remove</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">remove</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="remove" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">remove_circle_outline</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">remove_circle_outline</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="remove_circle_outline" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calculate</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">calculate</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calculate" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sort</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sort</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sort" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">remove_circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">remove_circle</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="remove_circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">push_pin</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">push_pin</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="push_pin" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">block</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">block</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="block" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">undo</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">undo</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="undo" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shield</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">shield</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shield" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">how_to_reg</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">how_to_reg</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="how_to_reg" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">policy</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">policy</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="policy" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stream</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">stream</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stream" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">reply</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">reply</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="reply" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">content_paste</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">content_paste</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="content_paste" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">add_box</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">add_box</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="add_box" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">content_cut</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">content_cut</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="content_cut" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">report</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">report</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="report" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file_copy</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">file_copy</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file_copy" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">archive</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">archive</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="archive" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tag</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">tag</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tag" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">biotech</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">biotech</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="biotech" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">link_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">link_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="link_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">square_foot</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">square_foot</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="square_foot" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">inbox</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">inbox</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="inbox" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">waves</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">waves</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="waves" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stacked_bar_chart</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">stacked_bar_chart</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stacked_bar_chart" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dynamic_feed</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">dynamic_feed</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dynamic_feed" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">redo</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">redo</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="redo" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">forward</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">forward</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="forward" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">where_to_vote</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">where_to_vote</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="where_to_vote" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">save_alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">save_alt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="save_alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">change_circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">change_circle</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="change_circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">backspace</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">backspace</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="backspace" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">gesture</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">gesture</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="gesture" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">how_to_vote</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">how_to_vote</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="how_to_vote" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">drafts</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">drafts</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="drafts" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">low_priority</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">low_priority</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="low_priority" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">upcoming</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">upcoming</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="upcoming" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">add_link</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">add_link</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="add_link" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">font_download</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">font_download</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="font_download" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">move_to_inbox</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">move_to_inbox</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="move_to_inbox" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">outlined_flag</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">outlined_flag</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="outlined_flag" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">ballot</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">ballot</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="ballot" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">delete_sweep</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">delete_sweep</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="delete_sweep" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">weekend</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">weekend</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="weekend" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">markunread</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">markunread</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="markunread" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">reply_all</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">reply_all</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="reply_all" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">text_format</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">text_format</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="text_format" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">attribution</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">attribution</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="attribution" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">report_gmailerrorred</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">report_gmailerrorred</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="report_gmailerrorred" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">select_all</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">select_all</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="select_all" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">next_week</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">next_week</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="next_week" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">unarchive</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">unarchive</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="unarchive" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">copy_all</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">copy_all</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="copy_all" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">report_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">report_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="report_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">content_paste_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">content_paste_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="content_paste_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">font_download_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">font_download_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="font_download_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">edit</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">edit</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="edit" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">edit</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">edit</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="edit" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">navigate_next</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">navigate_next</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="navigate_next" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">photo_camera</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">photo_camera</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="photo_camera" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">auto_awesome</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">auto_awesome</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="auto_awesome" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tune</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">tune</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tune" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">circle</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">palette</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">palette</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="palette" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">receipt_long</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">receipt_long</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="receipt_long" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">camera_alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">camera_alt</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="camera_alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">auto_stories</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">auto_stories</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="auto_stories" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">timer</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">timer</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="timer" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">image</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">image</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="image" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">navigate_before</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">navigate_before</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="navigate_before" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">brush</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">brush</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="brush" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wb_sunny</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">wb_sunny</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wb_sunny" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">picture_as_pdf</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">picture_as_pdf</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="picture_as_pdf" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">audiotrack</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">audiotrack</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="audiotrack" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">add_a_photo</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">add_a_photo</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="add_a_photo" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">music_note</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">music_note</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="music_note" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">remove_red_eye</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">remove_red_eye</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="remove_red_eye" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">camera</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">camera</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="camera" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">collections</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">collections</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="collections" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">looks_one</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">looks_one</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="looks_one" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">flash_on</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">flash_on</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="flash_on" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">landscape</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">landscape</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="landscape" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">euro</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">euro</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="euro" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_vintage</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_vintage</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_vintage" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">auto_fix_high</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">auto_fix_high</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="auto_fix_high" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">color_lens</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">color_lens</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="color_lens" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">image_search</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">image_search</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="image_search" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">blur_on</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">blur_on</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="blur_on" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_drama</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_drama</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_drama" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">straighten</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">straighten</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="straighten" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tag_faces</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">tag_faces</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tag_faces" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">healing</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">healing</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="healing" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">brightness_6</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">brightness_6</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="brightness_6" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">assistant</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">assistant</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="assistant" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">lens</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">lens</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="lens" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">flare</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">flare</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="flare" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">style</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">style</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="style" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">timelapse</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">timelapse</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="timelapse" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">grid_on</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">grid_on</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="grid_on" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">face_retouching_natural</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">face_retouching_natural</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="face_retouching_natural" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">crop_square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">crop_square</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="crop_square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">texture</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">texture</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="texture" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">crop</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">crop</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="crop" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">video_camera_front</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">video_camera_front</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="video_camera_front" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">brightness_5</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">brightness_5</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="brightness_5" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">motion_photos_on</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">motion_photos_on</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="motion_photos_on" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">add_photo_alternate</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">add_photo_alternate</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="add_photo_alternate" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">control_point</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">control_point</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="control_point" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">looks_two</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">looks_two</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="looks_two" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">nature_people</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">nature_people</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="nature_people" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">animation</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">animation</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="animation" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">auto_awesome_motion</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">auto_awesome_motion</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="auto_awesome_motion" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">portrait</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">portrait</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="portrait" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">brightness_4</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">brightness_4</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="brightness_4" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">brightness_7</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">brightness_7</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="brightness_7" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">crop_free</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">crop_free</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="crop_free" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dehaze</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">dehaze</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dehaze" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">photo_library</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">photo_library</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="photo_library" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">collections_bookmark</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">collections_bookmark</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="collections_bookmark" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">colorize</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">colorize</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="colorize" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">looks_3</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">looks_3</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="looks_3" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cases</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">cases</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cases" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wb_cloudy</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">wb_cloudy</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wb_cloudy" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">transform</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">transform</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="transform" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">auto_awesome_mosaic</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">auto_awesome_mosaic</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="auto_awesome_mosaic" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bedtime</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">bedtime</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bedtime" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">rotate_right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">rotate_right</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="rotate_right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">timer_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">timer_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="timer_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">center_focus_strong</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">center_focus_strong</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="center_focus_strong" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">looks_4</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">looks_4</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="looks_4" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">movie_creation</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">movie_creation</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="movie_creation" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">grain</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">grain</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="grain" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">slideshow</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">slideshow</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="slideshow" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">adjust</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">adjust</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="adjust" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">flip_camera_android</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">flip_camera_android</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="flip_camera_android" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">panorama_fish_eye</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">panorama_fish_eye</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="panorama_fish_eye" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">view_comfy</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">view_comfy</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="view_comfy" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">crop_original</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">crop_original</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="crop_original" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shutter_speed</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">shutter_speed</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shutter_speed" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">gradient</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">gradient</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="gradient" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">looks_5</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">looks_5</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="looks_5" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">leak_add</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">leak_add</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="leak_add" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">looks</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">looks</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="looks" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">photo</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">photo</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="photo" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">thermostat_auto</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">thermostat_auto</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="thermostat_auto" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">brightness_1</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">brightness_1</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="brightness_1" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">details</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">details</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="details" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_center_focus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_center_focus</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_center_focus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">flash_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">flash_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="flash_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">loupe</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">loupe</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="loupe" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mic_external_on</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">mic_external_on</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mic_external_on" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">photo_camera_back</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">photo_camera_back</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="photo_camera_back" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">broken_image</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">broken_image</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="broken_image" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">compare</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">compare</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="compare" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_1</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_1</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_1" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">photo_album</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">photo_album</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="photo_album" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">photo_filter</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">photo_filter</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="photo_filter" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">brightness_3</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">brightness_3</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="brightness_3" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_tilt_shift</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_tilt_shift</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_tilt_shift" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_frames</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_frames</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_frames" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">nature</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">nature</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="nature" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">panorama</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">panorama</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="panorama" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">photo_camera_front</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">photo_camera_front</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="photo_camera_front" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">exposure_neg_2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">exposure_neg_2</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="exposure_neg_2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">24mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">24mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="24mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">camera_roll</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">camera_roll</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="camera_roll" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">center_focus_weak</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">center_focus_weak</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="center_focus_weak" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">photo_size_select_actual</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">photo_size_select_actual</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="photo_size_select_actual" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">vignette</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">vignette</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="vignette" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wb_incandescent</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">wb_incandescent</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wb_incandescent" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">23mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">23mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="23mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">auto_fix_normal</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">auto_fix_normal</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="auto_fix_normal" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">brightness_2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">brightness_2</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="brightness_2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_2</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_hdr</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_hdr</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_hdr" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hdr_strong</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">hdr_strong</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hdr_strong" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">camera_front</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">camera_front</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="camera_front" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">crop_din</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">crop_din</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="crop_din" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">blur_linear</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">blur_linear</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="blur_linear" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">monochrome_photos</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">monochrome_photos</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="monochrome_photos" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">rotate_left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">rotate_left</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="rotate_left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tonality</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">tonality</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tonality" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">assistant_photo</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">assistant_photo</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="assistant_photo" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">crop_7_5</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">crop_7_5</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="crop_7_5" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">video_camera_back</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">video_camera_back</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="video_camera_back" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">view_compact</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">view_compact</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="view_compact" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">blur_circular</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">blur_circular</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="blur_circular" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">grid_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">grid_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="grid_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hdr_weak</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">hdr_weak</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hdr_weak" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">exposure_plus_1</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">exposure_plus_1</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="exposure_plus_1" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hide_image</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">hide_image</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hide_image" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">motion_photos_auto</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">motion_photos_auto</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="motion_photos_auto" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">movie_filter</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">movie_filter</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="movie_filter" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">music_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">music_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="music_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">rotate_90_degrees_ccw</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">rotate_90_degrees_ccw</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="rotate_90_degrees_ccw" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">linked_camera</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">linked_camera</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="linked_camera" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">control_point_duplicate</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">control_point_duplicate</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="control_point_duplicate" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_6</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_6</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_6" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_8</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_8</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_8" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_none</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_none</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_none" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">flip_camera_ios</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">flip_camera_ios</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="flip_camera_ios" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">leak_remove</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">leak_remove</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="leak_remove" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">looks_6</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">looks_6</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="looks_6" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">timer_3</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">timer_3</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="timer_3" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">video_stable</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">video_stable</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="video_stable" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">60fps_select</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">60fps_select</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="60fps_select" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">add_to_photos</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">add_to_photos</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="add_to_photos" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">burst_mode</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">burst_mode</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="burst_mode" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">motion_photos_paused</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">motion_photos_paused</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="motion_photos_paused" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">switch_video</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">switch_video</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="switch_video" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">crop_16_9</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">crop_16_9</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="crop_16_9" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">crop_portrait</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">crop_portrait</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="crop_portrait" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">flash_auto</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">flash_auto</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="flash_auto" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">flip</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">flip</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="flip" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">panorama_horizontal_select</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">panorama_horizontal_select</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="panorama_horizontal_select" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">panorama_wide_angle_select</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">panorama_wide_angle_select</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="panorama_wide_angle_select" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">vrpano</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">vrpano</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="vrpano" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wb_auto</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">wb_auto</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wb_auto" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">crop_5_4</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">crop_5_4</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="crop_5_4" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hdr_enhanced_select</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">hdr_enhanced_select</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hdr_enhanced_select" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">panorama_horizontal</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">panorama_horizontal</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="panorama_horizontal" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">22mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">22mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="22mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">crop_landscape</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">crop_landscape</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="crop_landscape" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">crop_rotate</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">crop_rotate</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="crop_rotate" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">face_retouching_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">face_retouching_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="face_retouching_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_3</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_3</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_3" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hdr_on</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">hdr_on</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hdr_on" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hevc</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">hevc</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hevc" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">panorama_vertical_select</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">panorama_vertical_select</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="panorama_vertical_select" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wb_shade</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">wb_shade</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wb_shade" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wb_twilight</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">wb_twilight</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wb_twilight" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">11mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">11mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="11mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">crop_3_2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">crop_3_2</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="crop_3_2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dirty_lens</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">dirty_lens</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dirty_lens" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_4</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_4</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_4" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_9</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_9</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_9" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">motion_photos_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">motion_photos_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="motion_photos_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">photo_size_select_small</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">photo_size_select_small</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="photo_size_select_small" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">30fps_select</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">30fps_select</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="30fps_select" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">exposure</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">exposure</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="exposure" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_5</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_5</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_5" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_7</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_7</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_7" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_b_and_w</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_b_and_w</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_b_and_w" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">iso</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">iso</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="iso" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">panorama_photosphere_select</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">panorama_photosphere_select</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="panorama_photosphere_select" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">12mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">12mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="12mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">5mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">5mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="5mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter_9_plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">filter_9_plus</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter_9_plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hdr_plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">hdr_plus</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hdr_plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">14mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">14mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="14mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">20mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">20mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="20mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">blur_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">blur_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="blur_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">camera_rear</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">camera_rear</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="camera_rear" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">exposure_plus_2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">exposure_plus_2</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="exposure_plus_2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">panorama_photosphere</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">panorama_photosphere</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="panorama_photosphere" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">photo_size_select_large</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">photo_size_select_large</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="photo_size_select_large" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">raw_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">raw_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="raw_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">switch_camera</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">switch_camera</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="switch_camera" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">10mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">10mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="10mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">2mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">2mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="2mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">8mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">8mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="8mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">autofps_select</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">autofps_select</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="autofps_select" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hdr_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">hdr_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hdr_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">image_aspect_ratio</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">image_aspect_ratio</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="image_aspect_ratio" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">image_not_supported</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">image_not_supported</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="image_not_supported" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">motion_photos_pause</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">motion_photos_pause</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="motion_photos_pause" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">panorama_wide_angle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">panorama_wide_angle</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="panorama_wide_angle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">raw_on</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">raw_on</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="raw_on" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wb_iridescent</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">wb_iridescent</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wb_iridescent" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">17mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">17mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="17mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">18mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">18mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="18mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">21mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">21mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="21mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">9mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">9mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="9mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">exposure_zero</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">exposure_zero</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="exposure_zero" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">panorama_vertical</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">panorama_vertical</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="panorama_vertical" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">timer_10</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">timer_10</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="timer_10" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">13mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">13mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="13mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">15mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">15mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="15mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">16mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">16mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="16mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">19mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">19mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="19mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">3mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">3mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="3mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">4mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">4mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="4mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">6mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">6mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="6mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">exposure_neg_1</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">exposure_neg_1</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="exposure_neg_1" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mic_external_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">mic_external_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mic_external_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">auto_fix_off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">auto_fix_off</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="auto_fix_off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">7mp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">7mp</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="7mp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">place</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">place</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="place" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file_download</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">file_download</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file_download" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">play_arrow</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">play_arrow</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="play_arrow" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">warning</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">warning</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="warning" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">star</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">star</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="star" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">smartphone</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">smartphone</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="smartphone" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">insert_photo</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">insert_photo</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="insert_photo" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">storefront</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">storefront</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="storefront" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wifi</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">wifi</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wifi" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">devices</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">devices</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="devices" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">feed</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">feed</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="feed" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sensor_door</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="material-icons text-900 fs-6">sensor_door</span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sensor_door" /></div>
                </div>
              </div>
              <div class="text-center">
                <p class="fallback fw-bold fs-8 d-none">No icons found</p>
              </div>
            </div>
          </div>
          <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
            <div class="toast align-items-center text-white bg-dark border-0" id="icon-copied-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-theme="light">
              <div class="d-flex flex-between-center">
                <div class="toast-body"></div>
                <div data-bs-theme="dark"><button class="btn-close me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button></div>
              </div>
            </div>
          </div>
          <footer class="footer">
            <div class="row g-0 justify-content-between fs-10 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2024 &copy; <a href="https://themewagon.com/">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v3.21.0</p>
              </div>
            </div>
          </footer>
        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
          <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
              <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                <div class="position-relative z-1">
                  <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                  <p class="fs-10 mb-0 text-white">Please create your free Falcon account</p>
                </div><button class="btn-close position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body py-4 px-5">
                <form>
                  <div class="mb-3"><label class="form-label" for="modal-auth-name">Name</label><input class="form-control" type="text" autocomplete="on" id="modal-auth-name" /></div>
                  <div class="mb-3"><label class="form-label" for="modal-auth-email">Email address</label><input class="form-control" type="email" autocomplete="on" id="modal-auth-email" /></div>
                  <div class="row gx-2">
                    <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-password">Password</label><input class="form-control" type="password" autocomplete="on" id="modal-auth-password" /></div>
                    <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-confirm-password">Confirm Password</label><input class="form-control" type="password" autocomplete="on" id="modal-auth-confirm-password" /></div>
                  </div>
                  <div class="form-check"><input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" /><label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a class="white-space-nowrap" href="#!">privacy policy</a></label></div>
                  <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button></div>
                </form>
                <div class="position-relative mt-5">
                  <hr />
                  <div class="divider-content-center">or register with</div>
                </div>
                <div class="row g-2 mt-2">
                  <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                  <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->

    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
      <div class="offcanvas-header settings-panel-header bg-shape">
        <div class="z-1 py-1">
          <div class="d-flex justify-content-between align-items-center mb-1">
            <h5 class="text-white mb-0 me-2"><span class="fas fa-palette me-2 fs-9"></span>Settings</h5><button class="btn btn-primary btn-sm rounded-pill mt-0 mb-0" data-theme-control="reset" style="font-size:12px"> <span class="fas fa-redo-alt me-1" data-fa-transform="shrink-3"></span>Reset</button>
          </div>
          <p class="mb-0 fs-10 text-white opacity-75"> Set your own customized style</p>
        </div>
        <div class="z-1" data-bs-theme="dark"><button class="btn-close z-1 mt-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
      </div>
      <div class="offcanvas-body scrollbar-overlay px-x1 h-100" id="themeController">
        <h5 class="fs-9">Color Scheme</h5>
        <p class="fs-10">Choose the perfect color mode for your app.</p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
          <div class="row gx-2">
            <div class="col-4"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherLight"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/falcon-mode-default.jpg" alt=""/></span><span class="label-text">Light</span></label></div>
            <div class="col-4"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherDark"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/falcon-mode-dark.jpg" alt=""/></span><span class="label-text"> Dark</span></label></div>
            <div class="col-4"><input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherAuto"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/falcon-mode-auto.jpg" alt=""/></span><span class="label-text"> Auto</span></label></div>
          </div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-start"><img class="me-2" src="../../assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
            <div class="flex-1">
              <h5 class="fs-9">RTL Mode</h5>
              <p class="fs-10 mb-0">Switch your language direction </p><a class="fs-10" href="../../documentation/customization/configuration.html">RTL Documentation</a>
            </div>
          </div>
          <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-rtl" type="checkbox" data-theme-control="isRTL" /></div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-start"><img class="me-2" src="../../assets/img/icons/arrows-h.svg" width="20" alt="" />
            <div class="flex-1">
              <h5 class="fs-9">Fluid Layout</h5>
              <p class="fs-10 mb-0">Toggle container layout system </p><a class="fs-10" href="../../documentation/customization/configuration.html">Fluid Documentation</a>
            </div>
          </div>
          <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-fluid" type="checkbox" data-theme-control="isFluid" /></div>
        </div>
        <hr />
        <div class="d-flex align-items-start"><img class="me-2" src="../../assets/img/icons/paragraph.svg" width="20" alt="" />
          <div class="flex-1">
            <h5 class="fs-9 d-flex align-items-center">Navigation Position</h5>
            <p class="fs-10 mb-2">Select a suitable navigation system for your web application </p>
            <div><select class="form-select form-select-sm" aria-label="Navbar position" data-theme-control="navbarPosition">
                <option value="vertical">Vertical</option>
                <option value="top">Top</option>
                <option value="combo">Combo</option>
                <option value="double-top">Double Top</option>
              </select></div>
          </div>
        </div>
        <hr />
        <h5 class="fs-9 d-flex align-items-center">Vertical Navbar Style</h5>
        <p class="fs-10 mb-0">Switch between styles for your vertical navbar </p>
        <p> <a class="fs-10" href="../components/navs-and-tabs/vertical-navbar.html#navbar-styles">See Documentation</a></p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-transparent"> <img class="img-fluid img-prototype" src="../../assets/img/generic/default.png" alt="" /><span class="label-text"> Transparent</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-inverted"> <img class="img-fluid img-prototype" src="../../assets/img/generic/inverted.png" alt="" /><span class="label-text"> Inverted</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle" value="card" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-card"> <img class="img-fluid img-prototype" src="../../assets/img/generic/card.png" alt="" /><span class="label-text"> Card</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle" value="vibrant" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-vibrant"> <img class="img-fluid img-prototype" src="../../assets/img/generic/vibrant.png" alt="" /><span class="label-text"> Vibrant</span></label></div>
          </div>
        </div>
        <div class="text-center mt-5"><img class="mb-4" src="../../assets/img/icons/spot-illustrations/47.png" alt="" width="120" />
          <h5>Like What You See?</h5>
          <p class="fs-10">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a class="mb-3 btn btn-primary" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Purchase</a>
        </div>
      </div>
    </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
      <div class="card-body d-flex align-items-center py-md-2 px-2 py-1">
        <div class="bg-primary-subtle position-relative rounded-start" style="height:34px;width:28px">
          <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path></svg></span></span></span></div>
        </div><small class="text-uppercase text-primary fw-bold bg-primary-subtle py-2 pe-2 ps-1 rounded-end">customize</small>
      </div>
    </a>

    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src="../../vendors/popper/popper.min.js"></script>
    <script src="../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../vendors/is/is.min.js"></script>
    <script src="../../vendors/prism/prism.js"></script>
    <script src="../../vendors/fontawesome/all.min.js"></script>
    <script src="../../vendors/lodash/lodash.min.js"></script>
    <script src="../../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="../../vendors/list.js/list.min.js"></script>
    <script src="../../assets/js/theme.js"></script>
  </body>


<!-- Mirrored from prium.github.io/falcon/v3.21.0/modules/icons/material-icons.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2024 20:07:11 GMT -->
</html>