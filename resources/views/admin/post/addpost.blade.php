@extends('admin.admin_layout')
@section('admin_content')
<div id="content" class="span10">
			
			
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i> 
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="#">Forms</a>
        </li>
    </ul>
    
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                
                @if (session('post_added'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong> {{ session('post_added') }}</strong>
                 <button type="button" class="close" data-dismiss="alert" area-label="close">
                 <span aria-hidden="true"> &times; </span>
                 </button>
                </div>
              @endif

                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Post</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">

          

            <form class="form-horizontal" action="{{route('savepost')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <fieldset>

                    <div class="control-group">
                        <label class="control-label" for="date01">Post Title</label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" name="post_title" id="date01">
                        </div>
                      </div>


                    <div class="control-group">
                      <label class="control-label" for="fileInput">Post Image</label>
                      <div class="controls">
                        <input class="input-file uniform_on" name="post_image" id="fileInput" type="file">
                      </div>
                    </div>   

                    
                    <div class="control-group">
                        <label class="control-label" for="fileInput">Post Image2</label>
                        <div class="controls">
                          <input class="input-file uniform_on" name="post_image2" id="fileInput" type="file">
                        </div>
                      </div>  

                    <div class="control-group hidden-phone">
                      <label class="control-label" for="textarea2">Post Description</label>
                      <div class="controls">
                        <textarea class="cleditor" name="post_description" id="textarea2" rows="3"></textarea>
                      </div>
                    </div>

                    
                    <div class="control-group">
                        <label class="control-label" for="date01">Created By</label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" name="created_by" id="date01">
                        </div>
                      </div>

                    <div class="form-actions">
                      <button type="submit" class="btn btn-primary">Post</button>
                      <button type="reset" class="btn">Cancel</button>
                    </div>
                  </fieldset>
                </form>   

            </div>
        </div><!--/span-->

    </div><!--/row-->

   
    



</div><!--/.fluid-container-->

    
@endsection