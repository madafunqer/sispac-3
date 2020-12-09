@extends('layout.master')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="panel panel-default">
                <div id="infoMessage" style="display: none;"></div>
                

                <div class="panel-heading">
                    <span class="pull-right panel-options">
                        <i class="fa" id="toggle"></i>
                    </span>
                    <h3 class="panel-title">[KEW.PA 3 &amp; 5] Daftar Harta Modal</h3>
                </div>

                <div class="panel-body" id="panel">
                   
                </div>
            </div>
        </div>
    </div>
</div>


        <!------------------------------------------------------------------------->


        <div class="content">
            <div class="container-fluid">
            <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
            <div class="card-body">
                <h3 class="panel-title">hasil carian</h3>
            <div class="table-responsive">
            <div id="models_wrapper" class="table table-bordered table-sm table-hover table-striped">
            
 
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
@endsection