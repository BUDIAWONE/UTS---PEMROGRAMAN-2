<!doctype html>
<html lang="en">
  <head>
    <!-- Tag meta yang diperlukan -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Tugas UMB|Admin</title>
  </head>
  <body>
 
    <div class="container mt-5">
        <div class="baris">
            <div class="col-md-12">
 
                <?php  if ( !empty(session( )-> getFlashdata('message') ) )  :  ?>
 
                <div class="alert alert-success">
                    <?php  echo session ( ) -> getFlashdata ( 'message' ) ; ?>
                </div>
                    
                <?php  endif  ?>
                <a href="/admin/input" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>NAMA</th>
                            <th>JABATAN</th>
                            <th>TELEPON</th>
                            <th>ALAMAT</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  foreach ( $admins  as  $key  =>  $admin )  :  ?>
 
                            <tr>
                            <td> <?php  echo  $admin['nama']  ?> </td>
                            <td> <?php  echo  $admin['jabatan']?> </td>
                            <td> <?php  echo  $admin['telepon']?> </td>
                            <td> <?php  echo  $admin['alamat']?> </td>
                            <td class="pusat teks">
<a href=" <?php echo base_url ('admin/update/'.$admin['id'])?> " class="btn btn-sm btn-primary">EDIT</a>  
<a href=" <?php echo base_url ('admin/delete/'.$admin['id'])?> " class="btn btn-sm btn-danger">HAPUS</a>  
                                </td>
                            </tr>
 
                        <?php  endforeach  ?>
                    </tbody>
                </table>
              
            </div>
        </div>
    </div>
 
    <!-- JavaScript Opsional -->
    <!-- jQuery dulu, lalu Popper.js, lalu Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>