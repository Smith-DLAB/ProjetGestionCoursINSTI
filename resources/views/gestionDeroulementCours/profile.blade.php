@extends('layouts.app')

@section('title') <title> Profile - Brand </title>@endsection

<!--<body id="page-top"> -->

<body id="page-top">

@section('main')

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Rechercher ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Rechercher ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="badge badge-danger badge-counter">1+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                        role="menu">
                                        <h6 class="dropdown-header">Centre de notification</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">Date d'envoie</span>
                                                <p>Une notification</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Voir tous les notifications&nbsp;</a></div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">User<i class="fa fa-user border rounded" style="padding: 11px;font-size: 16px;"></i></span></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="profileE.html"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item disabled" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <div
                                            class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
            </div>
            </li>
            </ul>
        </div>
        </nav>
        <div class="container-fluid">
            <h3 class="text-dark mb-4" data-aos="zoom-in" data-aos-duration="650" style="font-weight: bold;">Profile</h3>
            <div class="row mb-3" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="200">
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-body text-center shadow" style="height: 339.333px;"><img class="rounded-circle mb-3 mt-4" src="assets/img/profil.jpg" width="160" height="160">
                            <div class="mb-3"><button class="btn btn-primary btn-sm" type="button" style="font-weight: bold;">Modifier la Photo</button></div>
                        </div>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="text-primary font-weight-bold m-0">Avis sur votre Stage</h6>
                        </div>
                        <div class="card-body">
                            <div class="card" data-toggle="tooltip" data-bs-tooltip="" title="Date de pblication">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col col-lg-6">
                                            <h6 class="text-nowrap text-truncate mb-0" style="font-weight: bold;">Entreprise</h6>
                                        </div>
                                        <div class="col col-lg-6">
                                            <h6 class="text-nowrap text-truncate mb-0" style="font-weight: bold;">Auteur</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Avis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 font-weight-bold">Paramètres de l'utilisateur</p>
                                </div>
                                <div class="card-body" style="font-size: 14px;">
                                    <ul class="list-group">
                                        <li class="list-group-item"><span style="font-weight: bold;font-size: 12px;">Nom :</span></li>
                                        <li class="list-group-item"><span style="font-weight: bold;font-size: 12px;">Prénoms :</span></li>
                                        <li class="list-group-item"><span style="font-weight: bold;font-size: 12px;">Fillère :</span></li>
                                        <li class="list-group-item"><span style="font-weight: bold;">Groupe Pédagogique :&nbsp;&nbsp;</span></li>
                                        <li class="list-group-item"><span style="font-weight: bold;">Adresse Email :</span></li>
                                        <li class="list-group-item"><span style="font-weight: bold;">Pays :</span></li>
                                        <li class="list-group-item"><span style="font-weight: bold;">Ville :&nbsp;</span></li>
                                        <li class="list-group-item"><span style="font-weight: bold;">Adresse&nbsp;</span></li>
                                        <li class="list-group-item"><span style="font-weight: bold;">N° Matricule :</span></li>
                                        <li class="list-group-item"><span style="font-weight: bold;">Téléphone :</span></li>
                                    </ul>
                                </div>
                                <div class="card-footer"><a class="btn btn-primary float-right btn-circle ml-1" role="button" data-toggle="tooltip" data-bs-tooltip="" title="Éditer le profil"><i class="fas fa-user-edit text-white"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" role="dialog" tabindex="-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" style="font-weight: bold;font-size: 17px;">Modifier le Profil</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col"><input class="form-control" type="email" placeholder="Email" name="email"></div>
                                        <div class="col"><input class="form-control" type="tel" placeholder="Téléphone" name="tel"></div>
                                    </div>
                                </div><button class="btn btn-primary btn-block" type="submit" style="font-weight: bold;">Enregistrer</button></form>
                        </div>
                        <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal" style="font-weight: bold;">Fermer</button></div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection

</body>