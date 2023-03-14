<!doctype html>
<?php
$title='';
if(isset($_GET ["hal"])){
     global $halaman;
     $halaman=$_GET["hal"]; 
     switch($halaman){
        case 'customer':
        $title = 'ADMIN - Customer';
        break;
      case 'customer-create':
        $title = 'Customer - Tambah';
        break;
      // case "jabatan-store":
      //   include("jabatan/store.php");
      //   break;
      case 'customer-edit':
        $title = 'Customer - Edit';
        break;
      case 'daftarpaket':
        $title = 'ADMIN - Daftarpaket';
        break;
      case 'petugas':
        $title = 'ADMIN - Petugas';
        break;
      case "daftarpaket":
        $title = 'ADMIN - Daftarpaket';
      break;
      case 'daftarpaket':
            $title = 'Daftarpaket - Daftarpaket';
      break;
        default:
        $title = 'DASHBOARD';

     }
    } 
    else {
      include("dashboard.php");
    }
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title><?= $title ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">

    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body class="bg-secondary bg-opacity-10">
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Ardan's Car Wash Company</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark bg-opacity-50  sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link <?= explode ('-', $halaman)[0]== 'dashboard'  ? 'active': '';?>" aria-current="page" href="index.php?hal=dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>ADMIN</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>

          <li class="nav-item">
            <a class="nav-link <?= explode ('-', $halaman)[0]== 'customer' ? 'active': '';?>" href="index.php?hal=customer">
              <span data-feather="users" class="align-text-bottom"></span>
              Customer
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= explode ('-', $halaman)[0]== 'daftarpaket' ? 'active': '';?>" href="index.php?hal=daftarpaket">
              <span data-feather="layers" class="align-text-bottom"></span>
              Daftar Paket
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= explode ('-', $halaman)[0]== 'transaksi' ? 'active': '';?>" href="index.php?hal=transaksi">
              <span data-feather="dollar-sign" class="align-text-bottom"></span>
              Transaksi
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     <?php
     if(isset($_GET ["hal"])){
     $halaman=$_GET['hal'];
     switch($halaman){
        case 'customer':
        include('Customer/index.php');
        break;
        case 'customer-create':
        include('Customer/create.php');
        break;
        case 'customer-edit':
        include('Customer/edit.php');
        break;

        case 'daftarpaket':
        include('Daftarpaket/index.php');
        break;
        case 'daftarpaket':
        include('Daftarpaket/edit.php');
        break;
        case 'daftarpaket-create':
        include('Daftarpaket/create.php');
        break;

        case 'transaksi';
        include('Transaksi/index.php');
        break;
        case 'transaksi';
        include('Transaksi/edit.php');
        break;
        case 'transaksi-create';
        include('Transaksi/create.php');
        break;


        default:
        include("dashboard.php");
     }
    } 
    else {
      include("dashboard.php");
    }
     ?>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="js/dashboard.js"></script>
  </body>
</html>
