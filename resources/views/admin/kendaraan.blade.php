<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif
            <div class="row">
                <div class="col-6">
                    <h1>Data Kendaraan</h1>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data Kendaraan
                      </button>
                </div>
                <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>KODE KENDARAAN</th>
                        <th>KETERANGAN</th>
                        <th>ID KENDARAAN</th>

                        <th>AKSI</th>
                    </tr>
                    @foreach ($data_kendaraan as $k)
                    <tr>
                    <td>{{$k->id}}</td>
                    <td>{{$k->kode_kendaraan}}</td>
                    <td>{{$k->keterangan}}</td>
                    <td>{{$k->id_kategori}}</td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/kendaraan/store" method="post">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="kodeKendaraan">Masukkan Kode Kendaraan</label>
                  <input name="kode_kendaraan" type="text" class="form-control" id="kodeKendaraan" aria-describedby="emailHelp" placeholder="Masukkan Kode Kendaraan">
                </div>
                <select name="id_kategori">
                    <option>pilih data</option>
                    @foreach($kategori as $d)
                    <option value="{{ $d->id }}">{{ $d->nam}}</option>
                    @endforeach
                </select>
                <div class="form-group">
                    <label for="keterangan">Masukkan Keterangan</label>
                    <input name="keterangan" type="text" class="form-control" id="keterangan" aria-describedby="emailHelp" placeholder="Masukkan Keterangan">
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
      </div>
    </div>
  </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>


