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
        
      <h1 class="text-center"> Dinas Pertanian </h1>
        <div class="div-print">
            <div class="container mb-5">
                <div class="table-responsive mt-4">
                  <table class="w-100 mt-4" style="color: black" border="1">
                    <thead>
                        <tr>
                            <th scope="col" class="text-ceenter">No</th>
                            <th scope="col" class="text-ceenter">Tahun</th>
                            <th scope="col" class="text-ceenter">Kecamatan</th>
                            <th scope="col" class="text-ceenter">Padi</th>
                            <th scope="col" class="text-ceenter">Padi Sawah</th>
                            <th scope="col" class="text-ceenter">Padi Ladang</th>
                            <th scope="col" class="text-ceenter">Jagung</th>
                            <th scope="col" class="text-ceenter">Jagung Hibrida</th>
                            <th scope="col" class="text-ceenter">Jagung Lokal</th>
                            <th scope="col" class="text-ceenter">Ubi Kayu</th>
                            <th scope="col" class="text-ceenter">Ubi Jalar</th>
                            <th scope="col" class="text-ceenter">Kacang Tanah</th>
                            <th scope="col" class="text-ceenter">Kacang Kedelai</th>
                            <th scope="col" class="text-ceenter">Kacang Hijau</th>
                          </tr>
              
                        </thead>
                        <tbody>
      
                          @foreach ($luaspanen as $row)
                          <tr>
                            <th scope="row" class="text-ceenter">{{ $loop->iteration }}</th>
                            <td class="text-ceenter">{{ $row->tahun }}</td>
                            <td class="text-ceenter">{{ $row->kecamatan }}</td>
                            <td class="text-ceenter">{{ $row->padi }}</td>
                            <td class="text-ceenter">{{ $row->padi_sawah }}</td>
                            <td class="text-ceenter">{{ $row->padi_ladang }}</td>
                            <td class="text-ceenter">{{ $row->jagung }}</td>
                            <td class="text-ceenter">{{ $row->jagung_hibrida }}</td>
                            <td class="text-ceenter">{{ $row->jagung_lokal }}</td>
                            <td class="text-ceenter">{{ $row->ubi_kayu }}</td>
                            <td class="text-ceenter">{{ $row->ubi_jalar }}</td>
                            <td class="text-ceenter">{{ $row->kacang_tanah }}</td>
                            <td class="text-ceenter">{{ $row->kacang_kedelai }}</td>
                            <td class="text-ceenter">{{ $row->kacang_hijau }}</td>
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
