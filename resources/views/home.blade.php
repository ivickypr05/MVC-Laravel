<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC_Vicky</title>
</head>
<body>
    <div>
    <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-tittle">Model View Controller - Iko Vicky Pratama - Universitas Catur Insan Cendekia</h3>
                    </div>
                    <div class="card-body">
                    <br>
                <table class="table table-bordered table-striped">
                    <thread>
                        <tr>
                            <th colspan="9"><center>Data Barang</center></th>
                        </tr>
                        <tr>
                            <th><center>No</th>
                            <th><center>Kode Barang</th>
                            <th><center>Nama Barang</th>
                            <th><center>Jenis Barang</th>
                            <th><center>Harga</th>
                            <th><center>Jumlah</th>
                            <th><center>Gambar</th>
                        </tr>
                        </thread>
                        <tbody>
                <?php $no=1;?>
                @foreach ($databarang as $data)
                    <tr>
                        <th>{{ $no++}}</th>
                        <td>{{$data->kode_barang }}</td>
                        <td>{{$data->nama_barang }}</td>
                        <td>{{$data->jenis_barang }}</td>
                        <td>Rp.{{number_format ($data->harga) }},-</td>
                        <td>{{$data->jumlah }}</td>
                        <td><img src="{{url('assets/image/'.$data->foto)}}" width="90px"> </td>
                    </tr>
                @endforeach
                    </tbody>
                </tfoot>
            </table>
                    </div>
                 </div>
             </div>
         </div>
    </div>
</section>
    </div>
</body>
</html>