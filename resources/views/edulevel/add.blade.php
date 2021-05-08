@extends('main')

@section('title','Dashboard')
    


@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Table</a></li>
                    <li class="active">Basic table</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')  

<div class="content mt-3">
    <div class="animated fadeIn">
        
        <div class="row align-center">
            <div class="col">
                <div class="card shadow">
               <div class="card-header">
                   <div class="pull-left">
                      <strong>Tambah Jenjang</strong>
                   </div>
                   <div class="pull-right">
                       <a href="{{url('edulevels/add')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i>Back
                    </a>
                    </div>
               </div>
                    <div class="card-body">
                      <div class="col-md-4 offset-md-4">
                          <form action="{{url('edulevels')}}" method="post">
                            @csrf
                              <div class="form-group">
                                  <label for="">Nama Jenjang</label><br>
                                      <input type="text" name="name" class="form" autfocus></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description</label>
                                           <textarea name="desc" class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success">Save</button>
                          </form>
                      </div>
                    </div>
                </div>
            </div>

    


        </div>
    </div><!-- .animated -->
</div><!-- .content -->

@endsection