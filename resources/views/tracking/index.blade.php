<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>cek Ongkir</title>
</head>
<body>
<br>
<div class="container">    
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-succes">
                    <div class="panel-heading">
					    <h3 class="panel-title">Cek Ongkos Kirim IT BRA</h3>
                    </div>
                    <div class="panel-body">
                        
                    <div class="form-group">    
                    <label for="province">Provinsi</label><br>    
                    <select class="form-control" name="province" id="province">
                            @foreach ($province as $item)
                                <option value="{{$item['province_id']}}">
                                {{$item["province"]}}   
                            </option>
                            @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="city">Kota Asal</label><br>    
                    <select class="form-control" name="city" id="city">
                            @foreach ($city as $item)
                                <option value="{{$item['city_id']}}">
                                {{$item["city_name"]}}   
                            </option>
                            @endforeach
                    </select>
                    </div>
                {{-- destination  --}}
                    <div class="form-group">
                    <label for="provinceDest">Provinsi Tujuan</label><br>        
                    <select class="form-control" name="provinceDest" id="provinceDest">
                            @foreach ($provinceDest as $item)
                                <option value="{{$item['province_id']}}">
                                {{$item["province"]}}   
                            </option>
                            @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="cityDest">Kota Tujuan</label><br>        
                    <select class="form-control" name="cityDest" id="cityDest">
                            @foreach ($city as $item)
                                <option value="{{$item['city_id']}}">
                                {{$item["city_name"]}}   
                            </option>
                            @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="weight">Berat (gram)</label><br>
                    <input class="form-control" name="weight" id="weight" type="text">
                    </div>
                    <label for="curier">Kurir (gram)</label><br>
                    <select class="form-control" id="curier" name="curier">
                        <option value=""></option>
                        <option value="jne">JNE</option>
                        <option value="tiki">TIKI</option>
                        <option value="pos">POS INDONESIA</option>
                    </select>
                    <br>
                    <button class="btn btn-primary" id="tombolCost" >Proses</button>
                </div>
            </div>
        </div>
        <!-- di dalam div col-4 taruh div col 8 untuk berada di sampingnya -->
        <div class="col-md-8">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Hasil</h3>
                    </div>
                    
                    <div class="panel-body">
                    <ol>
                            <div id="cost"></div>
                    </div>
                    </ol>
                </div>
        </div>

    </div>
    </div>    
</div>

<script src={{asset('js/app.js')}}></script>
<script src={{asset('js/tracking.js')}}></script>
</body>
</html>