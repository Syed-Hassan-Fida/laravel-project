@extends('backend.layouts.master')

@section('content')

<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Library</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Library</li>
                        </ul>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#00c5dc"
                                data-fill-Color="transparent">3,5,1,6,5,4,8,3</div>
                            <span>Visitors</span>
                        </div>
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#f4516c"
                                data-fill-Color="transparent">4,6,3,2,5,6,5,4</div>
                            <span>Visits</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col lg 12">
                    @include('backend.layouts.notification')
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Banner</strong> List</h2>
                            <!-- <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Photo</th>
                                            <th>Condition</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>                            
                                    <tbody>
                                        @foreach($banners as $item)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$item->title}}</td>
                                                <td>{{$item->description}}</td>
                                                <td><img src="{{$item->photo}}" alt="Banner Image" width="130px" height="130px"></td>
                                                <td>
                                                    @if($item->condition=='banner')    
                                                    <span class="badge badge-success">{{$item->condition}}</span>
                                                    @else
                                                    <span class="badge badge-primery">{{$item->condition}}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                <input type="checkbox" class="too" name="toogle" value="{{$item->id}}" data-toggle="toggle"  data-onstyle="success" data-offstyle="danger" data-on="Active" data-off="Inactive"  {{$item->status=='active' ? 'checked' : ''}}>
                                                    
                                                    
                                                </td>
                                                <td>
                                                    <a href="" data-toggle="tooltip" title="edit" class="btn btn-sm btn-outline-warning" data-placement="bottom"><i class="fas fa-edit"></i></a>
                                                    <a href="" data-toggle="tooltip" title="delete" class="btn btn-sm btn-outline-danger" data-placement="bottom"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>

        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $('input[name=toogle]').change(function(){
            var mode=$(this).val();
            var id=$(this).val();
            $.ajax({
                url:"{{route('banner.status')}}",
                type:"POST",
                data:{
                    _token:'{{csrf_token()}}',
                    // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    maode:mode,
                    id:id,
                },
                success:function(response){
                    console.log(response.status);
                }
            });
            alert(status);
        });
    </script>
@endsection