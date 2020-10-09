@extends('admin.admin_layout')
@section('admin_content')
<div id="content" class="span10">
			
			
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Tables</a></li>
    </ul>

    <div class="row-fluid sortable">		
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Post Title</th>
                          <th>Post Image 1</th>
                          <th>Post Image 2</th>
                          <th>Post Description</th>
                          <th>Created By</th>
                          <th>Created At</th>
                          <th>Action</th>
                      </tr>
                  </thead>   
                  <tbody>
                      @foreach ($all_posts as $post)
                          
                   
                    <tr>
                    <td>{{$post->id}}</td>
                    <td class="center">{{$post->post_title}}</td>
                    <td class="center">
                        <img src="{{asset($post->post_image)}}" height: "30px"; width="30px" >
                    </td>
                    <td class="center">
                        <img src="{{asset($post->post_image2)}}" height: "30px"; width="30px">
                    </td>
                    <td class="center">{{$post->post_description}}</td>
                    <td class="center">{{$post->created_by}}</td>
                    <td class="center">{{$post->created_at}}</td>
                        
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>  
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    
@endsection