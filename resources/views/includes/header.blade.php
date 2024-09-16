<?php

    use App\Models\contact;

    $message= contact::all();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
        <!-- lien editeur d'article  -->
        <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{asset('themes/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('themes/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{asset('themes/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">


</head>

<body id="page-top">
        
        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.index') }}">
                    <div class="sidebar-brand-icon">
                        <img src="../assets/img/logo-6.png" width="50" alt="img">
                    </div>
                    <!-- <div class="sidebar-brand-text mx-3">Dashboard</div> -->
                </a>


                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('dashboard.index')}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Tableau De Bord</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Nav Item - Utilities Collapse Menu -->
                <li
                    class="nav-item active">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-calendar"></i>
                        <span>Gestion Blog</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item active " href="{{ route('article.index') }}">Articles</a>
                            <a class="collapse-item active " href="{{ route('pub.index') }}">Publicités</a>
                            <a class="collapse-item active " href="{{ route('categorie.index') }}">Categories</a>
                            <a class="collapse-item active " href="{{ route('commentaire') }}">Commentaires</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('index') }}">
                        <i class="fas fa-fw fa-user-md"></i>
                        <span>Blog Home</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('message')}}">
                        <i class="fas fa-fw fa-envelope"></i>
                        <span>Messages <sup class="text-warning">{{$message->count()}}</sup></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('profile.edit') }}">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Mon Profil</span></a>
                </li>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                        <!-- Main Content -->
                    <div id="content">

                        <!-- Topbar -->
                        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                            <!-- Sidebar Toggle (Topbar) -->
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>


                            <!-- Topbar Navbar -->
                            <ul class="navbar-nav ml-auto">


                                <div class="topbar-divider d-none d-sm-block"></div>

                                <!-- Nav Item - User Information -->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                        <img class="img-profile rounded-circle" src="assets/img/logo-6.png">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Profil
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Déconnexion
                                        </a>
                                    </div>
                                </li>

                            </ul>

                        </nav>

                        <!-- Logout Modal-->
                        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Êtes-vous sûr?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">De vouloir déconnecter.</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Retour</button>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Déconnecter') }}
                                            </x-dropdown-link>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Topbar -->

                    </div>
                    <!-- End of Main Content -->
                    <div class="container-fluid mb-5">

                   
                    