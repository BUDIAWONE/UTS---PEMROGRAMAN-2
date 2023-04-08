<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tugas UMB | </title>

        <!-- Bootstrap core CSS -->

        <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">

        <!-- Documentation extras -->

        <link href="css/docs.min.css" rel="stylesheet">

        <script src="js/jquery.min.js"></script>

        <script type="text/javascript" src="js/shCore.js"></script>
        <script type="text/javascript" src="js/shBrushXml.js"></script>
        <link type="text/css" rel="stylesheet" href="css/shCoreDefault.css"/>
        <script type="text/javascript">SyntaxHighlighter.all();</script>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style>
            body{
                color: #73879C; background: #F7F7F7;
            }

        </style>
    </head>
    <body data-twttr-rendered="true" cz-shortcut-listen="true">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
     
                    <?php  if ( !empty(session( )-> getFlashdata('message') ) )  :  ?>
     
                    <div class="alert alert-success">
                        <?php  echo session ( ) -> getFlashdata ( 'message' ) ; ?>
                    </div>
                        
                    <?php  endif  ?>
                    <a href="/dosen/input" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                    <table class="table table-bordered table-dark">
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
                            <?php  foreach ( $dosens  as  $key  =>  $dosen )  :  ?>
     
                                <tr>
                                <td> <?php  echo  $dosen['nama']  ?> </td>
                                <td> <?php  echo  $dosen['jabatan']?> </td>
                                <td> <?php  echo  $dosen['telepon']?> </td>
                                <td> <?php  echo  $dosen['alamat']?> </td>
                                <td class="main text">
    <a href=" <?php echo base_url ('dosen/update/'.$dosen['id'])?> " class="btn btn-sm btn-primary">EDIT</a>  
    <a href=" <?php echo base_url ('dosen/delete/'.$dosen['id'])?> " class="btn btn-sm btn-danger">HAPUS</a>  
                                    </td>
                                </tr>
     
                            <?php  endforeach  ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Footer
        ================================================== -->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
     
    </body></html>
