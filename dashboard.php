<?php
include (".includes/header.php");
$title = "Dashboard";
// Menyertakan file untuk menampilkan notifikasi (jika ada)
include '.includes/toast_notification.php';
?>
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Card untuk menampilkan tabel postingan -->
     <div class="card">
        <!-- Tabel dengan baris yang dapat di hover -->
         <div class="card">
            <!-- Header Tabel -->
             <div class="card-header d-flex justify-content-between alight-items-center">
                <h4>Semua Potingan</h4>
            </div>
            <div class="card-body">
                <!-- Tabel responsif -->
                <div class="table-responsive text-nowrap">
                    <table id="datatable" class="table table-hover">
                        <thead>
                            <tr class="text-center">
                              <th width="50px">#</th>
                              <th>Judul Post</th>
                              <th>Penulis</th>  
                              <th>Kategori</th>      
                              <th width="150px">Pilihan</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
<!-- Menampilkan data dari tabel database -->
 <?php
  $index = 1; // Variabel untuk