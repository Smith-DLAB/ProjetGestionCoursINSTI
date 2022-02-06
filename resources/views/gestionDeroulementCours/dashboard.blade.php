@extends('layouts.app')

@section('title') <title> Table - Brand</title>@endsection

<!--<body id="page-top"> -->

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
                <h3 class="text-capitalize text-dark mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" style="font-weight: bold;">Tableau de Bord</h3>
                <div class="modal fade text-center border-danger shadow-lg" role="dialog" tabindex="-1" id="popup" style="width: 280px;">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="width: 260px;">
                                <h4 class="modal-title text-break" style="width: 350px;font-weight: bold;font-size: 14px;">Votre Entreprise de Stage</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                            <div class="modal-body" style="width: 260px;">
                                <div role="tablist" id="accordion-1">
                                    <div class="card">
                                        <div class="card-header" role="tab">
                                            <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1" style="font-weight: bold;font-size: 14px;">Sélectionnez l'entreprise&nbsp;</a></h5>
                                        </div>
                                        <div class="collapse item-1" role="tabpanel" data-parent="#accordion-1">
                                            <div class="card-body">
                                                <form method="post"><select class="form-control"><optgroup label="Entreprisse "><option value="12">Une entreprise </option></optgroup></select><label class="float-left">Du</label><input class="form-control" type="date"><label class="float-left">Au</label>
                                                    <input
                                                        class="form-control" type="date"><button class="btn btn-secondary btn-block" type="submit" style="font-weight: bold;">Valider</button></form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" role="tab">
                                            <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-2" href="#accordion-1 .item-2" style="font-weight: bold;font-size: 14px;">Autre</a></h5>
                                        </div>
                                        <div class="collapse item-2" role="tabpanel" data-parent="#accordion-1">
                                            <div class="card-body"><span><i class="fa fa-link float-left"></i><a class="text-nowrap text-dark" href="#" style="font-weight: normal;">Proposer une entreprise</a></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer" style="width: 260px;"><button class="btn btn-light" type="button" data-dismiss="modal" style="font-weight: bold;">Fermer</button></div>
                        </div>
                    </div>
                </div>
                <div class="card shadow" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="200">
                    <div class="card-header py-3">
                        <p class="text-center text-primary m-0 font-weight-bold">Listes des Entreprises Disponibles</p>
                        <p class="text-primary m-0 font-weight-bold">Département :</p>
                    </div><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" data-aos="fade-up" data-aos-duration="700" data-aos-delay="950" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Télécharger pdf</a>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-nowrap">
                                <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><a class="btn btn-warning btn-sm btn-circle ml-1" role="button" data-toggle="tooltip" data-bs-tooltip="" data-placement="right" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="950" title="Votre profil indique que vous n'êtes pas en stage.Veuillez sélectionné l' entreprise dans laquellle vous êtes en stage"><i class="fas fa-exclamation-triangle text-white"></i></a></div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                            </div>
                        </div>
                        <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                            <table class="table dataTable my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th class="text-nowrap text-truncate">N°</th>
                                        <th class="text-nowrap text-truncate"><strong>DESIGNATION</strong><br></th>
                                        <th class="text-nowrap text-truncate">DESCRIPTION&nbsp;</th>
                                        <th class="text-nowrap text-truncate">SITUATION</th>
                                        <th class="text-nowrap text-truncate">CONTACTS</th>
                                        <th class="text-nowrap"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-weight: bold;font-size: 13px;">01</td>
                                        <td class="text-truncate" style="font-weight: bold;font-size: 13px;">ART CREATIVITY</td>
                                        <td style="font-size: 14px;">Développement Web</td>
                                        <td style="font-size: 14px;">Calavi (Akassto)</td>
                                        <td style="font-size: 14px;">67-40-49-87<br></td>
                                        <td><a class="btn btn-info" role="button" data-toggle="tooltip" data-bs-tooltip="" title="Voir plus d'info"><i class="fas fa-info-circle text-white"></i></a></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td><strong class="text-nowrap text-truncate">N°</strong></td>
                                        <td class="text-nowrap text-truncate"><strong>DÉSIGNATION&nbsp;</strong></td>
                                        <td><strong class="text-nowrap text-truncate">DESCRIPTION&nbsp;</strong></td>
                                        <td><strong class="text-nowrap text-truncate">SITUATION&nbsp;</strong></td>
                                        <td><strong class="text-nowrap text-truncate">CONTACTS<br></strong></td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            @endsection

<!--  </body> -->