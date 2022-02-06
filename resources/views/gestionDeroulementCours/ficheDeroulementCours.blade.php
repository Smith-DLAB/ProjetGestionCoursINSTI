@extends('layouts.app')

@section('title') <title> Déroulement_du_cours - Brand </title> @endsection

@section('style_for_file_point')
    <style>
        .form-control
        {
            text-align : center ;
        }
    </style>
@endsection

@section('main')

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content"><div class="register-photo">
        <div class="form-container shadow">

            <form data-bs-hover-animate="pulse" method="post" action="FontBeeautifulRecupereData.php">
                <h2 class="text-center" data-aos="fade-down" data-aos-duration="600" data-aos-delay="400" style="font-size: 29px;"><strong>Déroulement des Cours </strong></h2>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col"><input class="form-control" type="text" data-aos="fade-right" data-aos-duration="700" data-aos-delay="600" name="surname" placeholder="Nom" required=""></div>
                        <div class="col"><input class="form-control" type="text" data-aos="fade-left" data-aos-duration="700" data-aos-delay="600" name="name" placeholder="Prenoms" required=""></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <label style="font-weight: normal;"> Année d'Etude </label>
                            <select required="" class="form-control" name="yearstudy">
                                <optgroup label="Année_Etude">

                                    
                                    
                                       <!-- < ?php SendData ('semestre_annee','Appelation');  ?> -->
                                </optgroup>
                            </select>   
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">   

                        <div class="col" data-aos="fade-right" data-aos-duration="700" data-aos-delay="600">
                            <label style="font-weight: normal;"> Filière </label>
                            <select class="form-control" name="filiere" required="">
                                    <optgroup label="Filière">


                                        <!-- ?php $varOfData = joinTwoTable( 'groupe_pedagogique', 'Nom_filiere', 'Option'); ?> -->
                                    </optgroup>
                                </select>
                        </div>

                        <div class="col" data-aos="fade-left" data-aos-duration="700" data-aos-delay="600">
                            <label style="font-weight: normal;"> UE concerné </label>
                                <select class="form-control" name="ue" required="">
                                    <optgroup label="UE Concerné">



                                           <!-- < ?php SendData ('ue','Nom UE') ; ?> -->
                                    </optgroup>
                                </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col"><label style="font-weight: normal;"> Date de déroulement </label><input class="form-control" type="date" data-aos="fade-right" data-aos-duration="700" data-aos-delay="600" name="date" required=""></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col"><label style="font-weight: normal;"> Temps de déroulement </label> </div>
                        <div class="col">
                        De
                            <input class="form-control" type="time" data-aos="fade-right" data-aos-duration="700" data-aos-delay="600" name="starttime" placeholder="De" required=""> <br>
                        A 
                            <input class="form-control" type="time" data-aos="fade-right" data-aos-duration="700" data-aos-delay="600" name="endtime" placeholder="A" required=""> 
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col" data-aos="fade-left" data-aos-duration="700" data-aos-delay="600">
                            <label style="font-weight: normal;">Semestre concerné</label>
                            <select class="form-control" name="semester" required="">
                                <optgroup label="Semestre Concerné">


                                    <!-- < ?php SendData ('semestre_cycle','Appelation') ; ?> -->
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col"><label style="font-weight: normal;"> Observation </label><input class="form-control" type="text-area" data-aos="fade-right" data-aos-duration="700" data-aos-delay="600" name="date" required=""></div>
                    </div>
                </div>

                <div class="form-group">
                    <input name="bouton" class="btn btn-primary btn-block" data-aos="fade-up" data-aos-duration="750" data-aos-delay="600" type="submit" style="font-weight: bold;" value="Envoyer">   
                </div>

            </form>

        </div>

@endsection