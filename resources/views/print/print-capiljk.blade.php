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
      <h1 class="text-center"> Dinas Pencatatan Sipil </h1>
        <div class="div-print">
            <div class="container mb-5">
                <div class="table-responsive mt-4">
                  <table class="w-100 mt-4" style="color: black" border="1">
                    <thead>
                      <tr class="">
                        <th rowspan="2" class="text-center p-1">No</th>
                        <th rowspan="2" class="text-center p-1 border-1">Nama Kecamatan</th>
                        <th colspan="9" class="text-center p-1">Jumlah KK</th>
                      </tr>
                      <tr>
                        <th  class="text-center p-1">Jenis Kelamin</th>
                        <th  class="text-center p-1">Jumlah</th>
                        <th  class="text-center p-1">Tahun</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($capiljk as $row)
                      <tr>
                        <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                      <td>{{ $row->kecamatan }}</td>
                        <td>{{ $row->jenkel }}</td>
                        <td>{{ $row->jumlah }}</td>
                        <td>{{ $row->tahun }}</td>
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
