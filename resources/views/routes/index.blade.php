@extends('layouts.master')
@section('content')

        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i>Home</li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>



        <div class="row">
        @csrf
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-product-hunt" aria-hidden="true"></i><strong>Melhor rota</strong></h2>
                
              </div>
              <div class="panel-body">
              </div>

            </div>

          </div>

@endsection