<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tekifest</title>
    <link rel="shortcut icon" href="assets/images/logo.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style_template.css">
    <link rel="stylesheet" href="assets/css/modes.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="teki.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><h4>Tekifest</h4></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav  mr-auto mt-2 mt-lg-0 ">
                    <li class="nav-link">
                        <a class="nav-link active" href="nav/Contacto.html">Contacto</a>
                    </li>
                    <li class="nav-link">
                        <a class="nav-link active" href="nav/TekifestVirtual.html">Tekifest Virtual</a>
                    </li>
                    <li class="nav-link">
                        <a class="nav-link active" href="nav/Reglamento TEKIFEST v-1.5.pdf">Reglamento</a>
                    </li>
                    <li class="nav-link">
                        <a type="button" class="nav-link active" data-toggle="modal" data-target="#exampleModal">
                            Settings
                        </a>                  
                    </li>
                </ul>
            </form>
        </div>
    </nav>
    
    <div class="container">
        <!--Logo-->
        <div class="row justify-content-center">
            <div class="col-sm-2 col-md-6 col-lg-12">
                <div class="logo">
                    <img src="assets/images/logo.jpg" alt="" srcset="">
                </div>
            </div>
        </div>
        <!--Fin logo-->

        <div class="row justify-content-center">
            <div class="col-md-6">
                
                <div class="pos-f-t">
                    <div class="collapse" id="navbarToggleExternalContent">
                        <div class="bg-light p-4">
                            <form id="form-estadis">
                                <h5 class="text-dark h4">Consultas</h5>
                                <span class="text-dark">Fecha del evento</span>
                                <!--Select event date-->
                                <div class="form-group">
                                    <select class="myselect form-control" name="event_date" id="event_date">
                                        <?php 
                                            include('App/server/getlistdate.php');
                                            while($row = mysqli_fetch_array($result)){
                                        ?>  
                                            <option class="dropdown-item" data-url="event_date" value="<?php echo $row['event_date']; ?>">
                                                <?php echo $row['event_date']; ?> <?php echo $row['id_track']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <!--FIN select-->  
                                <!--Queries-->          
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block btn-sm" value="Vuelta mas Rapida por Piloto por Evento" data-toggle="tooltip" data-placement="bottom" id="vrpe"/>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block btn-sm" value="Vueltas por Piloto por Evento" name="vpe" id="vpe" data-toggle="tooltip" data-placement="bottom" title="Select event date "/>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block btn-sm" value="Vuelta mas Rapida por categoria" name="vrpce"/>                   
                                </div>
                                    
                                <!--FIN Queries-->  
                            </form>

                        </div>
                    </div>
                    <nav class="navbar navbar-light bg-light">
                        <h6 class="text-dark h6">Estadisticas por evento</h6>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </nav>
                </div>
            </div>
            <div class="sec2 col-md-6">
                <!--Start-->
                <div class="pos-f-t">
                    <div class="collapse" id="navbarToggleExternalContent1">
                        <div class="bg-light p-4">
                        <h5 class="text-dark h4">Consultas</h5>
                            
                            <form action="index.php" method="post">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block btn-sm" value="Vueltas mas Rapidas por Autodromo" name="vre" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block btn-sm" value="Vueltas mas Rapidas" name="vrpte" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block btn-sm" value="Vueltas mas rapidas de cada piloto" name="m" />  
                                </div>
                                
                            </form>
                                
                        </div>
                    </div>
                    <nav class="navbar navbar-light bg-light">
                        <h6 class="text-dark h6">Estadisticas globales</h6>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent1" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </nav>
                </div>                                            
                <!--End-->

            </div>
        </div>

        <div class="jumbotron mt-2">
            <div class="col-md-12 col-sm-6">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead id="list_thead"></thead>
                        <tbody id="list_date"></tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</body>
</html>