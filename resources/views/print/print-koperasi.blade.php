<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script
  src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js">
  
    </script>
    <style>
      @media print {
    .doc {
      display:none; 
    }
  }
      </style>
  <title class="doc">Document</title>
</head>
<body>
    <div class="container">
      <h1 class="text-center"> Dinas Koperasi </h1>
        <div class="div-print">
            <div class="container mb-5">
                <div class="table-responsive mt-4">
                  <table class="w-100 mt-4" style="color: black" border="1">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col" class="text-center">Kecamatan</th>
                            <th scope="col" class="text-center">KUD</th>
                            <th scope="col" class="text-center">KPRI</th>
                            <th scope="col" class="text-center">Koptani</th>
                            <th scope="col" class="text-center">Kopwan</th>
                            <th scope="col" class="text-center">Kopnel</th>
                            <th scope="col" class="text-center">Kopmu</th>
                            <th scope="col" class="text-center">Kop.TKBM</th>
                            <th scope="col" class="text-center">Kop.Pontren</th>
                            <th scope="col" class="text-center">Kop.Komite</th>
                            <th scope="col" class="text-center">KSP</th>
                            <th scope="col" class="text-center">Kopkar</th>
                            <th scope="col" class="text-center">Kopas</th>
                            <th scope="col" class="text-center">Primkop</th>
                            <th scope="col" class="text-center">Tahun</th>
                          </tr>
              
                        </thead>
                        <tbody>
      
                          @foreach ($koperasi as $row)
                          <tr>
                            <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                            <td class="text-center">{{ $row->kecamatan }}</td>
                            <td class="text-center">{{ $row->kud }}</td>
                            <td class="text-center">{{ $row->kpri }}</td>
                            <td class="text-center">{{ $row->koptani }}</td>
                            <td class="text-center">{{ $row->kopwan }}</td>
                            <td class="text-center">{{ $row->kopnel }}</td>
                            <td class="text-center">{{ $row->kopmu }}</td>
                            <td class="text-center">{{ $row->kop_tkbm }}</td>
                            <td class="text-center">{{ $row->kop_pontren }}</td>
                            <td class="text-center">{{ $row->kop_komite }}</td>
                            <td class="text-center">{{ $row->ksp }}</td>
                            <td class="text-center">{{ $row->kopkar }}</td>
                            <td class="text-center">{{ $row->kopas }}</td>
                            <td class="text-center">{{ $row->primkop }}</td>
                            <td class="text-center">{{ $row->tahun }}</td>
                          </tr>
                          @endforeach
                      <script>
                        window.print();
                      </script>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script>
    var myState = {
        pdf: null,
        currentPage: 1,
        zoom: 1
    }
  
    pdfjsLib.getDocument('./my_document.pdf').then((pdf) => {
  
        myState.pdf = pdf;
        render();

    });

    function render() {
        myState.pdf.getPage(myState.currentPage).then((page) => {
      
            var canvas = document.getElementById("pdf_renderer");
            var ctx = canvas.getContext('2d');
  
            var viewport = page.getViewport(myState.zoom);

            canvas.width = viewport.width;
            canvas.height = viewport.height;
      
            page.render({
                canvasContext: ctx,
                viewport: viewport
            });
        });
    }
</script>
</body>
</html>
