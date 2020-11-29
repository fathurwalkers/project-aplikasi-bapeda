@extends('layouts.adminlayout')

@section('title', 'Input Data')

@section('main-content')
{{-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> --}}
    
<div class="container mt-2">
    <div class="card">
        <h5 class="card-header">Edit Data Indeks Desa</h5>
        <div class="card-body">
        <form action="{{ url('/admin/data/data-indeks-desa-membangun/update') }}/{{ $data_idm->id }}" method="POST">
        @csrf
         <body onload="resetSelection()">
         <div class="form-group row">
            <div class="col-md-5 mb-3">
            <label for="Kecamatan">Kecamatan</label>
            <select  value="{{$data_idm->namakecamatan}}" autofocus name="namakecamatan" class="form-control" id="category" size="1" onchange="makeSubmenu(this.value)">
            <option value="" disabled selected>{{$data_idm->namakecamatan}}</option>
            <option>Pasarwajo</option>
            <option>Kapuntori</option>
            <option>Lasalimu</option>
            <option>Lasalimu_Selatan</option>
            <option>Siotapina</option>
            <option>Wolowa</option>
            <option>Wabula</option>
            </select>
            </div>

            <div class="col-md-5 mb-3">
            <label for="Desa">Desa</label>
            <select value="{{$data_idm->namadesa}}" name="namadesa" class="form-control" id="categorySelect" size="1">
            <option value="" disabled selected>{{$data_idm->namadesa}}</option>
            <option></option>
            </select>
            </div>
         </div>
            </body>
         
        
            <div class="form-group row">
                <div class="col-md-5 mb-3">
                  <label for="StatusDesa">Status Desa</label>
                  <select value="{{$data_idm->statusdesa}}" name="statusdesa" class="form-control" id="kecamatanFormControlSelect1">
                  <option hidden >{{$data_idm->statusdesa}}</option>
                  <option>Maju</option>
                  <option>Berkembang</option>
                  <option>Tertinggal</option>
                  <option>Sangat Tertinggal</option>
                  <option>Mandiri</option>
                </select>
              </div>
              <div class="col-md-5 mb-3">
                <label for="contoh2">Indeks Desa Membangun</label>
                <input value="{{$data_idm->indeksdesamembangun}}" name="indeksdesamembangun" type="text" class="form-control" id="contoh2">
              </div>
            </div>
           
            <div class="form-group">
                <button type="submit" class="btn btn-success float-right">Edit Data</button>  
            </div>
           

        </form>
        </div>
    </div>
</div>
@endsection

@section('after-script')
<script type="text/javascript">
    var subcategory = {
        Pasarwajo: ["Banabungi", "Lapodi", "Kancinaa","Dongkala", "Kondowa","Laburunci","Kabawakole","Warinta","Kaongkeongkea","Holimombo Jaya","Mantowu","Waangu-angu","Winning"],
        Kapuntori: ["Lambusango", "Mabulugo", "Barangka","Tumada","Kamelanta","Bukit Asri","Boneatiro Barat","Boneatiro","Wakuli","Tuangila","Lambusango Timur","Todanga","Waondo Wolio","Wakalambe","Wambulu"],
        Lasalimu: ["Wasambaa", "Sribatara", "Wagari","Waoleona","Bonelalo","Wasuamba","Kakenauwe","Togomangura","Nambo","Suandala","Talaga Baru","Lasembangi","Lawele","Benteng"],
        Lasalimu_Selatan: ["Wajah  Jaya", "Mopaano","Megabahari","Sumber Agung","Harapan Jaya","Balimu","Mulya  Jaya","Kinapani Makmur","Sangia Arano","Siontapina","Lasalimu","Siomanuru","Ambuau Togo","Umalaoge","Ambuau Indah","Rejo Sari"],
        Siotapina: ["Walompo","Gunung Jaya","Sumber Sari","Matanauwe","Sampuabalo","Bahari Makmur","Kuraa","Manuru","Karya Jaya","Labuandiri","Kumbewaha"],
        Wolowa: ["Bungi","Galanti","Kaumbu","Matawia","Wolowa Baru","Suka Maju","Wolowa"],
        Wabula: ["Wasuemba","Wabula Satu","Wasampela","Wabula","Holimombo","Koholimembona","Bajo Bahari"]
    }

    function makeSubmenu(value) {
        if (value.length == 0) document.getElementById("categorySelect").innerHTML = "<option></option>";
        else {
            var citiesOptions = "";
            for (categoryId in subcategory[value]) {
                citiesOptions += "<option>" + subcategory[value][categoryId] + "</option>";
            }
            document.getElementById("categorySelect").innerHTML = citiesOptions;
        }
    }

    function displaySelected() {
        var country = document.getElementById("category").value;
        var city = document.getElementById("categorySelect").value;
        alert(country + "\n" + city);
    }

    function resetSelection() {
        document.getElementById("category").selectedIndex = 0;
        document.getElementById("categorySelect").selectedIndex = 0;
    }
</script>
@endsection