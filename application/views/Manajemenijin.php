  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manajemen Ijin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>Home/Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Manajemen Ijin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Ijin</h3>

                  <button class="btn btn-primary float-sm-right" onClick="location.href='<?=base_url()?>Manajemenijin/Viewaddijin'">
                    <i class='fas fa-user-plus mr-2'></i>
                    

                  Pemberian Ijin
                    
                  </button>
                
              </div>



               <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                  <thead>

                  <tr>
                    <th>
                          ID Absen
                        </th>
                   <th>
                          ID Pegawai
                        </th>
                        <th>
                          Nama Pegawai
                        </th>
                        <th>
                          Id Tim
                        </th>
                        <th>
                          Akses
                        </th>
                        <th>
                          Tanggal
                        </th>
                        <th>
                          Keterangan
                        </th>
                        <th>
                          Alasan Ijin
                        </th>
                         <th>
                          Aksi
                        </th>


                  </tr>
                  </thead>
                  <tbody>
                  
               
                     <?php foreach ($dataijinpertim as $i):

                $id_absen=$i['id_absen'];    
                $id_pegawai=$i['id_pegawai'];
                $nama=$i['nama'];
                $id_tim=$i['id_tim'];
                $akses=$i['akses'];
                $tanggal=$i['tanggal'];
                $keterangan=$i['ket_pulang'];
                $alasan_ijin=$i['alasan_ijin'];


                ?>
                

                  <tr>
                    <td> <?php echo $id_absen;?></td>
                    <td> <?php echo $id_pegawai;?></td>
                    <td><?php echo $nama;?></td>
                    <td> <?php echo $id_tim;?></td>
                    <td><?php echo $akses;?></td>
                      <td><?php $date=date_create($tanggal); echo date_format($date,"d/m/Y");?></td>
                        <td><?php echo $keterangan;?></td>
                          <td><?php echo $alasan_ijin;?></td>
                    <td>


                     
  <?php
                        echo "<a href='". base_url() ."Manajemenijin/Deleteijin/". $id_absen ."' title='Edit'  class=' confirmation btn-danger'><i class='fas fa-trash-alt'></i> Hapus</a> </td>";
               
                    ?>
                     
                    
                   
                  </tr>
                  <?php endforeach;?>
                  </tfoot>
                </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


