
    <?php
   //  $cidade = mysqli_real_escape_string($_POST['cidade']);
   $cidade = 'concordia';
    $URL="https://api.openweathermap.org/data/2.5/forecast?appid=093ce6ecabbf25627b1b05217357a35d&q=".$cidade.",BR&units=metric&lang=pt_br";
    if (!empty($cidade)) {
      $curl = curl_init();
      $headers = array(
         "Accept: application/json",
      );
      curl_setopt($curl, CURLOPT_HEADER, 0);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_URL, $URL);
      curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
      curl_setopt($curl, CURLOPT_VERBOSE, 0);
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
      $resp = curl_exec($curl);
      curl_close($curl);
      $data =json_decode($resp);
      $currentTime =Time();
      // echo $resp;   
    }
    $url2='http://economia.awesomeapi.com.br/json/last/USD-BRL,EUR-BRL,BTC-BRL';
    $curl = curl_init($url2);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, 0);
    $response = json_decode(curl_exec($curl));
    echo '<span style="font-weight: bold;">'.$response->USDBRL->code.'/'.$response->USDBRL->codein.'</span><br>';
    echo '<span style="font-weight: bold;">'.$response->USDBRL->name.'</span><br>';
    echo 'Atual '.floatval($response->USDBRL->bid).'<br>';
    echo 'Alta ',floatval($response->USDBRL->high).'<br>';
    echo 'Baixa '.floatval($response->USDBRL->low).'<br>';
    if (floatval($response->USDBRL->varBid)>0) {
        echo '<span style="color:green;">Variação: </span>'.floatval($response->USDBRL->varBid).'<br>';    
    }else {
        echo '<span style="color:red;">Variação </span>'.floatval($response->USDBRL->varBid).'<br>';    
    }
    echo 'Data e Hora '.($response->USDBRL->create_date).'<br><br><br>';
    echo '<span style="font-weight: bold;">'.$response->BTCBRL->code.'/'.$response->BTCBRL->codein.'</span><br>';
    echo '<span style="font-weight: bold;">'.$response->BTCBRL->name.'</span><br>';
    echo 'Atual '.floatval($response->BTCBRL->bid).'<br>';
    echo 'Alta '.floatval($response->BTCBRL->high).'<br>';
    echo 'Baixa '.floatval($response->BTCBRL->low).'<br>';
    if (floatval($response->BTCBRL->varBid)>0) {
        echo '<span style="color:green;">Variação: </span>'.floatval($response->BTCBRL->varBid).'<br>';    
    }else {
        echo '<span style="color:red;">Variação </span>'.floatval($response->BTCBRL->varBid).'<br>';    
    }
    echo 'Data e Hora '.($response->BTCBRL->create_date);
   //  header("Refresh:2");  
    // echo curl_exec($curl);
    // header('location:index.php');
    
    ?>
