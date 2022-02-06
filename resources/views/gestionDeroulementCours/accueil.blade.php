@extends('layouts.app')

@section('title')<title> Accueil - Brand </title>@endsection

@section('style_for_file_point')

    <style>
        .form-control{
            text-align : center ;
        }
        .description{
            margin : 2%;
            padding : 1%;
        }
    </style>

@endsection

@section('main')

    
        <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
        <div class="register-photo"> 
        <div class="form-container shadow"> 
        </br>
            <h2 class="text-center" data-aos="fade-down" data-aos-duration="600" data-aos-delay="400" style="font-size: 29px;"><strong>Déroulement des Cours </strong></h2>
        
            <div class = "description">
                <p>
                    Enregistrez ici les données relatives au déroulement des cours, permettant de produire
                    une version numérique des cahiers de textes et fiches de déroulement.
                </p>

                <a href="/homefiche" style="" ><button type="button" class="btn btn-primary">Commencer</button></a>
            </div>

        </div>
        </div>
 

@endsection
