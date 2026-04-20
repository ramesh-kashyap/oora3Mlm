   <!--**********************************
            Content body start
        ***********************************-->
   <div class="content-body">
       <div class="container-fluid">
           <div class="row page-titles">
               <ol class="breadcrumb">
                   <li class="breadcrumb-item active"><a href="javascript:void(0)">Settings</a></li>
                   <li class="breadcrumb-item"><a href="javascript:void(0)">Add content</a></li>
               </ol>
           </div>
           <!-- row -->
           <div class="row">


               <div class="col-xl-6 col-lg-12">
                   <div class="card">
                       <div class="card-header">
                           <h4 class="card-title">Add Content</h4>
                       </div>
                       <div class="card-body">
                           <div class="basic-form">
                               <form action="{{ route('admin.add_content') }}" method="POST">
                                   {{ csrf_field() }}


                                   @if ($errors->any())
                                   <div style="color: red; margin-bottom: 10px;">
                                       <ul>
                                           @foreach ($errors->all() as $error)
                                           <li>{{ $error }}</li>
                                           @endforeach
                                       </ul>
                                   </div>
                                   @endif

                                   {{-- Success Notification --}}
                                   @if(session('notify'))
                                   <div style="color: green; margin-bottom: 10px;">
                                       @foreach(session('notify') as $n)
                                       <p>{{ $n[1] }}</p>
                                       @endforeach
                                   </div>
                                   @endif
                                   <div class="row">
                                       <div class="mb-3 col-md-12">
                                           <label class="form-label">Title</label>
                                           <input class="form-control" placeholder="write a title" value="{{ $content->title ?? '' }}" type="text" name="title">
                                       </div>


                                       <div class="mb-3 col-md-12">
                                           <label class="form-label">Content1</label><br>
                                           <textarea name="content1" id=""style="border-color: #e4dfdfff; border-radius: 10px; width:400px; height:100px;padding:6px;">{{ $content->content1 ?? '' }}</textarea>
                                           <!-- <input class="form-control" id="" placeholder="write a content1" type="text" name="content1"> -->
                                       </div>
                                       <div class="mb-3 col-md-12">
                                           <label class="form-label">Content2</label> <br>
                                           <textarea name="content2" id="" style="border-color: #cececeff; border-radius: 10px; width:400px; height:100px;padding:6px;">{{ $content->content2 ?? '' }}</textarea>
                                           <!-- <input class="form-control" id="" placeholder="write a content2" type="text" name="content2"> -->
                                       </div>


                                   </div>

                                   <div class="mb-3">
                                       <div class="form-check">
                                           <input class="form-check-input" type="checkbox">
                                           <label class="form-check-label">
                                               Check me out
                                           </label>
                                       </div>
                                   </div>
                                   <button type="submit" class="btn btn-primary">submit</button>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>




           </div>
       </div>
   </div>
   <!--**********************************
                 Content body end
             ***********************************-->