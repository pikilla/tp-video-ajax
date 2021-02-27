<?php
require_once '../modele/mediaDowloadBdd.php';
$afficherMedia=afficher_ligne_carrousel($download,$bdd);
$affichageHtmlParcategorie=[];
$categories=['cinema','theatre','musique','jeux','danse','mannequinat'];
    $j=0;
foreach($afficherMedia as $categorie){
    $media=[];
    $i=0;
    $titre=$categorie;
    
    foreach($categorie as $lienHtml){

        $media[$i]=$lienHtml;
        
       $i++; }
    
    
    $ligne_carrous[$j]="

    <div class='container my-4 hauteurcarouselligne'>
        <div id='affichage_video_accueil'>
             <div id='ligne'>
                   <a href='../controller/routing/routing_$categories[$j].php'> <h2 >$categories[$j]</h2></a>
                    <hr class='my-4' />

                    <!--Carousel Wrapper-->
                    <div
                        id='multi-item-example'
                        class='carousel slide carousel-multi-item'
                        data-ride='carousel'
                    >
                        <!--Controls-->
                        
                

                <!--Indicators-->
                <ol class='carousel-indicators'>
                    <li
                        data-target='#multi-item-example'
                        data-slide-to='0'
                        class='active'
                    ></li>
                    <li
                        data-target='#multi-item-example'
                        data-slide-to='1'
                    ></li>
                    <li
                        data-target='#multi-item-example'
                        data-slide-to='2'
                    ></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class='carousel-inner' role='listbox'>
                    <!--First slide-->
                    <div class='carousel-item active'>
                        <div class='row'>
                            <div class='col-md-4'>
                            $media[0]
                            
                            
                            <h5>titre</h5>
                            <p>pseudo</p>
                            <div class='carousel-caption d-none d-md-block'>
                                </div>
                            </div>

                            <div class='col-md-4'>
                            $media[1]
                            <h5>titre</h5>
                            <p>pseudo</p>
                        
                            <div class='carousel-caption d-none d-md-block'>
                                </div>
                            </div>

                            <div class='col-md-4'>
                            $media[2]
                            <h5>titre</h5>
                            <p>pseudo</p>
                        
                            <div class='carousel-caption d-none d-md-block'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class='carousel-item'>
                        <div class='row'>
                           
                            <div class='col-md-4'>
                            $media[3]
                            <h5>titre</h5>
                            <p>pseudo</p>
                        
                            <div class='carousel-caption d-none d-md-block'>
                                </div>
                           
                            </div>

                          
                            <div class='col-md-4'>
                            $media[4]
                            <h5>titre</h5>
                            <p>pseudo</p>
                        
                            <div class='carousel-caption d-none d-md-block'>
                                </div>
                       
                            </div>

                           
                            <div class='col-md-4'>
                            $media[5]
                            <h5>titre</h5>
                            <p>pseudo</p>
                        
                            <div class='carousel-caption d-none d-md-block'>
                                </div>
                           
                            </div>
                        </div>
                    </div>
                    <!--/.Second slide-->

                    <!--Third slide-->
                    <div class='carousel-item'>
                        <div class='row'>
                            
                            <div class='col-md-4'>
                            $media[6]
                            <h5>titre</h5>
                            <p>pseudo</p>
                        
                            <div class='carousel-caption d-none d-md-block'>
                                </div>
                          
                            </div>

                         
                            <div class='col-md-4'>
                            $media[7]
                            <h5>titre</h5>
                            <p>pseudo</p>
                        
                            <div class='carousel-caption d-none d-md-block'>
                                </div>
                            </div>
                    

                       
                            <div class='col-md-4'>
                            $media[8]
                            <h5>titre</h5>
                            <p>pseudo</p>
                        
                            <div class='carousel-caption d-none d-md-block'>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <!--/.Third slide-->
                </div>
                <!--/.Slides-->
            </div>
            <!--/.Carousel Wrapper-->
        </div>
    </div>
</div>";
$j++;
} 
//var_dump($media);
  
?>