<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Inicio</title>
    </head>
    <body>
        <!-- <div class="container">
            <form method="post" action="api.php" autocomplete="off">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cidade</label>
                    <input type="email" class="form-control" id="cidade" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Digite o nome da cidade que deseja verificar a previsao do tempo.</div>
                </div>
                <button type="button" class="btn btn-success">Buscar</button>
            </form>
        </div> -->
    
    <!-- <div class="container"> -->
        <table class="table table-dark table-hover">
            <thead>
                <tr class="text-center">
                    <th scope="col">Data</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Desc</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Temp. Atual</th>
                    <th scope="col">Sensação</th>
                    <th scope="col">Temp. Max.</th>
                    <th scope="col">Temp. Min.</th>
                    <th scope="col">Humidade</th>
                </tr>
            </thead>
            <tbody>
    <?php
        include_once('api.php'); 
        $i=0;
        while ($i < 40){
            echo '<tr class="table-secondary text-center">
                    <th>'.substr($data->list[$i]->dt_txt, 0, 10).'</th>
                    <th>'.substr($data->list[$i]->dt_txt, 10).'</th>
                    <td><img style="max-width:30px;" src ="http://openweathermap.org/img/wn/'.$data->list[$i]->weather[0]->icon.'@2x.png"</td>
                    <td style="text-transform: capitalize;">'.$data->list[$i]->weather[0]->description.'</td>
                    <td>'.$data->city->name.', '.$data->city->country.'</td>
                    <td>'. $data->list[$i]->main->temp.' Cº'.'</td>
                    <td>'. $data->list[$i]->main->feels_like.' Cº'.'</td>
                    <td>'. $data->list[$i]->main->temp_max.' Cº'.'</td>
                    <td>'.$data->list[$i]->main->temp_min.' Cº'.'</td>
                    <td>'.$data->list[$i]->main->humidity.' %'.'</td>                
                </tr>';
                $i++;
        };?>        
            </tbody>
        </table>
    <!-- </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>