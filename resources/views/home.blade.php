<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-tittle">Data Barang</h3>
                    </div>
                    <div class="card-body">
                     <nav>
                            <a class="btn btn-success btn-md" href="/tambahdata/databarang"><i class="fa fa-plus"></i> Add new Data</a>
                            <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Print</button>
                        </nav>
                    <br>
                <table class="table table-bordered table-striped">
                    <thread>
                        <tr>
                            <th colspan="9"><center>Data Barang</center></th></tr>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barang</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Gambar</th>
                            <th>Action</th>
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
                        <td><img src="{{url('assets/image/'.$data->foto)}}" width="70px"> </td>
                        <td>
                            <a href="/tambahdata/detailbarang/{{$data->id_barang}}" class="btn btn-xs btn-danger">Detail</a>
                            <a href="/tambahdata/editbarang/{{$data->id_barang}}" class="btn btn-xs btn-warning">Edit</a>
                            <a href="/tambahdata/destroy/{{$data->id_barang}}" class="btn btn-xs btn-success" onclick="return confirm('Are u Sure?');">Delete</a>
                            </td>
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