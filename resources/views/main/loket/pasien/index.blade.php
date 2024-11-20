@extends('layouts.layout_main')
@section('title', 'Pasien')
@section('content')

<div class="content-wrapper">

    <div class="container-xxl flex-grow-1 container-p-y">
      
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-body">
            <small class="text-light fw-semibold"></small>
            <div class="demo-inline-spacing">
              <button type="button" class="btn btn-primary">Data Pasien</button>
              <button type="button" class="btn btn-secondary">Tambah Pasien</button>
            </div>
          </div>
          <hr class="m-0" />
        </div>
      </div>

          <div class="card">
              <h5 class="card-header">Data Pasien</h5>
              <div class="table-responsive text-nowrap">
              <table class="table">
              <thead>
                    <tr class="text-nowrap">
                    <th>#</th>
                    <th>No. Rekam Medis</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th th>Usia</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Action</th>
                    
                    </tr>
              </thead>
               <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                  <td>Table cell</td>
                  <td>Table cell</td>
                  <td>Table cell</td>
                 
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Table cell</td>
                  <td>Table cell</td>
                  <td>Table cell</td>
                  <td>Table cell</td>
                  <td>Table cell</td>
                  <td>Table cell</td>
                  <td>Table cell</td>
                  
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
        
        <!--/ Responsive Table -->
     </div>

</div>
@endsection