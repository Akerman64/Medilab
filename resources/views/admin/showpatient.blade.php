<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sira Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('admin/vendors/flag-icon-css/css/flag-icon.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/jquery-bar-rating/fontawesome-stars-o.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/jquery-bar-rating/fontawesome-stars.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->


    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('admin/images/logo.svg') }}" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('admin/images/logo-mini.svg') }}" alt="logo"/></a>
      </div>


      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search Projects.." aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>

        <ul class="navbar-nav navbar-nav-right">


          <li class="nav-item dropdown d-flex mr-4 ">

            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
               @guest
                            @if (Route::has('login'))
                                <li class="nav-item" style="padding:25px;">
                                    <a class="nav-link dropdown-item preview-item" href="{{ route('login') }}" >{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item" style="padding:25px;">
                                    <a class="nav-link dropdown-item preview-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                @else
                                        <li class="nav-item dropdown" style="list-style: none; padding:17px;">
                                            <a id="navbarDropdown " class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu-end dropdown-item preview-item" aria-labelledby="navbarDropdown" style="padding:25px;">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                @endguest
            </div>
          </li>
          <li class="nav-item dropdown mr-4 d-lg-flex d-none">
            <a class="nav-link count-indicatord-flex align-item s-center justify-content-center" href="#">
              <i class="icon-grid"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="{{ asset('admin/images/faces/face28.png') }}">
          </div>
          <div class="user-name">
              {{ Auth::user()->name }}
          </div>

        </div>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin') }}">
                  <i class="icon-box menu-icon"></i>
                  <span class="menu-title">Accueil</span>
                </a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('addpatient') }}">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Ajouter</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('showpatient')}}">
              <i class="icon-pie-graph menu-icon"></i>
              <span class="menu-title">Afficher</span>
            </a>
          </li>


          

        </ul>
      </nav>
      <!-- partial -->
      <div class="col-lg-12 grid-margin stretch-card" style="padding:50px; padding-right:250px;;">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title" align='center' style="font-size:50px; color:darkorchid;">Données des patients</h4>

            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>

                    <th>
                      Nom
                    </th>
                    <th>
                      Prénom
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                        Ville
                    </th>
                    <th>
                        Maladie
                    </th>
                    <th>
                      Age
                    </th>
                    <th>
                        Maladie
                    </th>

                    <th>
                        Traitement
                    </th>
                    <th>
                        Commentaire
                    </th>
                    <th>
                      Mettre à jour
                    </th>
                    <th>
                      Supprimer
                    </th>

                  </tr>
                </thead>
                <tbody>
                  @foreach ( $patient as $patients)
                  <tr>
                    <td>
                      {{ $patients->nom }}
                    </td>
                    <td>
                      {{ $patients->prenom }}
                    </td>
                    <td>
                      {{ $patients->email }}
                    </td>
                    <td>
                        {{ $patients->ville }}
                    </td>
                    <td>
                        {{ $patients->maladie }}
                    </td>
                    <td>
                      {{ $patients->age }}
                    </td>
                    <td>
                      {{ $patients->maladie }}
                      </td>

                      <td>
                        {{ $patients->traitement }}
                      </td>
                      <td>
                        {{ $patients->commentaire }}
                      </td>
                      <td>
                        <a href="{{ url('updatepatient', $patients->id) }}" class="btn btn-success">Update</a>
                      </td>
                      <td>
                        <a href="{{ url('deletepatient', $patients->id) }}" class="btn btn-danger">Delete</a>
                      </td>

                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="{{ asset('admin/vendors/base/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
  <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{ asset('admin/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{ asset('admin/js/dashboard.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>


