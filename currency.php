<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Currency Exchange Website">
    <meta name="author" content="Florian Shllaku, Hakeem Shrief">
    <title>Currency Exchange</title>
    <!-- Connecting with Google Material for websit's logo/icon autorenew-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Setting up BootstrapCDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Main Custom styles for the website  -->
    <link href="css\main.css" rel="stylesheet">
    <link href="css\fiatcrypto.css" rel="stylesheet">
  </head>
  <body class="text-center" background="img\background.jpg">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <i class="material-icons masthead-brand img-fluid">autorenew</i>
      <h3 class="masthead-brand">XCHANGE</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href="index.html">Home</a>
        <a class="nav-link active" href="currency.php">Currency</a>
        <a class="nav-link" href="crypto.html">Crypto</a>
        <a class="nav-link" href="contact.php">Contact</a>
        <a class="nav-link" href="subscribe.html">Subscribe</a>
      </nav>
    </div>
  </header>
    <br> <br> <br>
    <div class="card">
      <div class="card-body">
        <select class="mdb-select md-form">
          <option value="" disabled selected>Choose your option</option>
          <option>USD</option>
          <option>EUR</option>
          <option>CHF</option>
          <option>NOK</option>
          <option>GBP</option>
          <option>AED</option>
          <option>SEK</option>
        </select>
        <input type="number" class="form-control form-control-lg mx-3" value="">
          <div class="form-group">
            <br> <br>
            <label for="FormControlSelect1">To</label>
            <br>
              <select class="form-control" id="FormControlSelect1">
                <option>USD</option>
                <option>EUR</option>
                <option>CHF</option>
                <option>NOK</option>
                <option>GBP</option>
                <option>AED</option>
                <option>SEK</option>
                </select>
        </div>
        <input type="number" class="form-control form-control-lg mx-3" value="">
        <br> <br>
        <div class="btn">
          <button class="btn btn--pill" type="submit">Convert!</button>
        </div>
      </div>
  </div>
 
  </body>
  </html>