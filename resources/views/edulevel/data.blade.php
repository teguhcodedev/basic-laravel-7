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
        @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow">
               <div class="card-header">
                   <div class="pull-left">
                      <strong>Data Jenjang</strong>
                   </div>
                   <div class="pull-right">
                       <a href="{{url('edulevels/add')}}" class="btn btn-success btn-sm">
                           <i class="fa fa-plus mr-3"></i>Add</a>
                    </div>
               </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            
                             @foreach ($edulevels as $item)
                                 <tr>
                                     <td>{{$loop->iteration}}</td>
                                     <td>{{$item->name}}</td>
                                     <td>{{$item->desc}}</td>
                                     <td class="text-center">
                                         <a href="{{url('edulevels/edit/'.$item->id)}}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil mr-2"></i></a>
                                         </a>
                                         <form method="post" 
                                         action="{{url('edulevels/'.$item->id)}}" 
                                         onsubmit="return confirm('Apka yakin ingin menghapus data')"
                                         class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                         </form>
                                     </td>
                                 </tr>
                                
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    


        </div>
    </div><!-- .animated -->
</div><!-- .content -->

@endsection