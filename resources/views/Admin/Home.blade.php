@extends('layouts.app')


@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><h1>PharMaSol</h1>
            <br>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4>Total Pharmaciens</h4>
                <h1>02</h1>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4>Total Caissiers<sup style="font-size: 20px"></sup></h4>
                <h1>04</h1>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h4>Total Fournisseurs</h4>
               <h1>23</h1>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h4>Total Gerants</h4>
               <h1>03</h1>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="container">
          <div class="row" style="text-align: center;">
            <div class="row" style="width: 100%;">
              <img src="dist/img/202103230.jpg" class="" alt="User Image">
            </div>
          </div>
        </div>
      </div>
  </div>
  <br>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href=" ">ENSET/GinfoTIC</a>.</strong>
    Tous droits reservés.
    <div class="float-right d-none d-sm-inline-block">
      <b>RCP</b>
    </div>
  </footer>
@endsection
