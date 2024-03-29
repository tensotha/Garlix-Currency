@extends('header')

@section('content')
  <div class="card">
    <div class="card-body">
        <h3>
            <small class="text-muted"><span id="color">Crypto Currency converter</span></small>
        </h3>
      <div class="input-group">
      <br>
      <main role="main" class="inner cover">
      <form id="Form">
        <br>
        <input style="width: 250px;" type="number" placeholder="Enter Amount to Convert" step="0.01" min="0" id="Amount" class="form-control" value="1">
        
        <br>
        <div class="row" >
            <div class="col">
              <select  class="selectpicker border" data-show-subtext="true" data-live-search="true" data-size="5" id="From">
                @foreach ($cryptos as $item)
                  <option  class="form-control" value="{{ $item->symbol }}">{{ $item->name }} - {{ $item->symbol }}</option>
                @endforeach
              </select>
                </blockquote>
            </div>
      
      <button onclick="swapValues();" type="button" id="swap" class="lead" style="background:none; border:none;"><i class="fa fa-exchange" style="font-size:36px; color: #3C1C78;"></i></button>

      <br>
      
      <div class="col">
          <select  class="selectpicker border" data-show-subtext="true" data-live-search="true" data-size="5" id="To">
            @foreach ($cryptos as $item)
              <option class="form-control" value="{{ $item->symbol }}" selected>{{ $item->name }} - {{ $item->symbol }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <br> <br> 
      </form>
      <div class="row" style="padding-top: 10px;">
          <div class="col">
      <blockquote class="blockquote up">
          <h2 class="mb-0" id="color"><span id="amount" class="lead">1</span> <span id="from" class="lead">BTC</span></h2>
      </blockquote>
          </div>
          <span  class="blockquote" id="mb-0" style="color: black;"> = </span>
          <div class="col">
      <blockquote class="blockquote up">
          <h2 class="mb-0" id="color" style="margin-left: 20px;"><span id="rezult" class="lead">11738.483</span> <span id="to" class="lead">LINK</span></h2>
      </blockquote>
          </div>
      </div>
      </main>
      <?php
        //   if( isset($_GET["From"]) && isset($_GET["Amount"]) && isset($_GET["To"])) 
        // {

        //   if (!empty($_GET["From"]) && !empty($_GET["Amount"]) && !empty($_GET["To"])) {
        //     $rez = \App\Http\Controllers\CryptoController::convert($_GET["From"],$_GET["Amount"],$_GET["To"]);
        //     if ($rez == null) {
        //       //Something went wrong and function wasnt run
        //       echo "Something went wrong!";
        //     }
        //     echo $rez;
        //   }

        // }
      ?>
      </div>
    </div>
  </div>

  
 

  @include('footer')
  @endsection
 