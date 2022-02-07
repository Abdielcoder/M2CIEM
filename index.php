
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/bitStyle.css">
      <title>Hello, world!</title>
   </head>
   <body>
      <div class="container">
      <nav class="navbar navbar-light nav-color" >
         <div class="container">
            <a class="navbar-brand" href="#">
            <img src="images/bitlabs_logo.png" alt="" width="50" height="50">
            </a>
         </div>
      </nav>
      <?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://us-central1-ciem-58bd7.cloudfunctions.net/tadi/api/ciem',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
$json = json_decode($response, true);
?>
 <div class="card inputs">
 <div class="input-group mb-3 select">
 <button type="button" class="btn btn-default" aria-label="Left Align">
         <i class="fas fa-users colorIcono"></i>
         </button>
 <select class="form-select" aria-label="Default select example">
 <option value="">--------SELECCIONA---------</option>
   <?php
foreach ($json as &$valor) {

    foreach($valor as $key => $value):
      echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
      endforeach;
  
}
?>
    
  
  
</div>
</div>

<script src="js/messages.js"></script>
   </body>
</html>