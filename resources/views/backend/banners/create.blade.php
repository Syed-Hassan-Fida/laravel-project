@extends('backend.layouts.master')

@section('content')

<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Add Banners</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Banners</li>
                            <li class="breadcrumb-item active">Add Banners</li>
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
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Basic</strong> Information <small>Description text here...</small> </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);" class="waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class="waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class="waves-effect waves-block">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- form submission -->
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                        @if($errors->any())
                                        <div class="alert alert-danger" >
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li style="list-style-type: none; font-weight: bold; padding-top: 20px; ">{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                </div>
                            <form  action="{{route('banner.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-lg-6 col-md-12">
                                    <label>Title</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Title" name="title" value="{{old('title')}}">
                                    </div>
                                </div>
                                

                                <div class="col-lg-6 col-md-12">
                                <label>Choose Image</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                            </span>
                                            <input id="thumbnail" class="form-control" type="text" name="photo">
                                        </div>
                                        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                <label>Description</label>
                                    <div class="form-group">
                                        <textarea type="text" id="description" class="form-control" placeholder="Write Description..." name="description" value="{{old('description')}}"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12"> 
                                    <label for="">Condition <span class="text-danger">*</span></label>                               
                                    <select name="condition" class="form-control show-tick">
                                        <option value="">-- Condition --</option>
                                        <option value="banner" {{old('condition') == 'banner' ? 'selected' : '' }}>Banner</option>
                                        <option value="promo" {{old('condition') == 'promo' ? 'selected' : '' }}>Promote</option>
                                    </select>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12">      
                                <label for="">Status <span class="text-danger">*</span></label>                          
                                    <select name="status" class="form-control show-tick">
                                        <option value="">-- Status --</option>
                                        <option value="active" {{old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                    </div>
                            </form>

                            </div>
                                
                            
                            <!-- <div class="row clearfix">
                                <div class="col-md-12">
                                    @if($errors->any())
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                <div class="col-sm-12 col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="body">
                                            <form  action="{{route('banner.store')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row clearfix">
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>
    <script>
         $(document).ready(function() {
            $('#description').summernote();
            });
    </script>
   
@endsection