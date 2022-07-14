@extends('admin.master')
@section('title', 'Admin Blog Page')
@push('styles')
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .card-title {
        font-size: 16px !important;
    }

    label {
        
        font-size: 14px !important;
        color: #000;
        font-weight: 500;


    }

    input{
        height:40px !important;
    }
      .form-group {
        margin-bottom: 2rem !important;
    }

    #blog-section {
    
        padding-bottom: 100px;
    }

    p {
        font-size: 12px !important;
    }

    .blog-table {
       
       margin-top:100px

    }
    .select2-container .select2-selection--single {
   
         height: 40px !important;
   
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
                
                font-size: 15px !important;
                line-height: 38px !important;
    }

    #post-btn{
            letter-spacing: 1px;
            font-weight: 500;
            font-size: 15px;

    }
  

    #create-blog-section
    {
        padding-top:100px;
    }

    .edit-btn, .delete-btn{
       
           font-weight: 500 !important;
           padding: 5px 15px !important;
           line-height: 15px !important;
           font-size:13px !important;


    }

    .card-text
      {
        max-height:175px !important;
        overflow: hidden !important;
        text-align:justify !important;
      }
      .category-title{
            font-size: 15px;
            font-weight: 700;

      }
    .category-text{
            border: 1px solid #145222;
            color: #fff;
            background: #145222;
            border-radius: 3px;
            padding: 5px;
    
    }
    .tox-statusbar__branding, .tox-statusbar__path-item{
        display:none;
    }



    

</style>




@endpush
@section('content')

<div class="bg-grey" id="blog-section">

    <div>
        @if(Session::has('success'))
             <p class="alert alert-success text-center">{{ Session::get('success') }}</p>
        @endif
        @if($errors->any())
            @foreach($errors->all() as $error)
                  <p class="alert alert-danger text-center">{{ $error }}</p>
            @endforeach
        @endif
    </div>

    <div class=" row d-flex justify-content-center my-5" id="create-blog-section">
        <div class="col-md-8">
            <div id="blog-form">
                <div class="card">
                    <div class="card-header bg-success text-light">
                        <div class="card-title ">Create Blog</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.store.blog') }}" method="POST" class="px-5 py-3" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id" class="form-control  form-control-lg">
                                        <option>select the category</option>
                                        @isset($categories)
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                        @endisset
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control  form-control-lg">
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input type="file" name="photo" id="photo" class="form-control  form-control-lg">
                                <p class="text-warning">**Minimun width 1844 pixel and height 819 pixel**</p>
                            </div>
                             <div class="form-group">
                                 <label for="tag_id">Tag</label>
                                 <select name="tag[]" id="tag_id" class="form-control  form-control-lg" multiple="multiple">
                                     <option>select the tag</option>
                                     @isset($tags)
                                        @foreach($tags as $tag)

                                          <option value="{{ $tag->id }}">{{ $tag->name }}</option>

                                        @endforeach
                                     @endisset
                                 </select>
                             </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control  form-control-lg">
                                </textarea>
                            </div>
                            <div class="form-group pt-4">
                                <button class="btn btn-info btn-lg  px-3 py-3" type="submit" id="post-btn">Create Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-table  row d-flex justify-content-start">
       @foreach($blogs as $blog)
                 <div class="col-md-3 mb-5">
                     <div class="card" >
                         <img class="card-img-top" src="{{ asset('assets/images/blog_images/'.$blog->photo) }}" alt="Card image cap">
                         <div class="card-body">
                             <a href="{{ route('blog.show', $blog->id) }}" class=" h4 font-weight-bold card-title">{{ $blog->title }}</a>
                             <div class="card-text pt-3"> @php echo $blog->description @endphp </div>

                            <div class="d-flex justify-content-between pt-4">
                            <div>
                                    <p><span class="category-title">Category: </span><span class="category-text">{{ $blog->category->name }}</span></p>



                            </div>
                            <div>
                                     <a href="#" class="btn btn-primary mr-1 edit-btn ">Edit</a>
                                     <a href="#" class="btn btn-warning delete-btn">Delete</a>

                            </div>
                                   
                            </div>
                         </div>
                     </div>
                 </div>

       @endforeach
      
       
    </div>

    {{-- Category Edit modal --}}
    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('admin.update.category') }}" method="POST" class="p-5">
                        @csrf
                        <input type="hidden" name="category_id" class="category_id">
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" name="name" id="name" class="form-control name  form-control-lg">

                            @error('name')
                            <p class="text-danger"> {{ $message }}</p>

                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-lg" type="submit">Update</button>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    {{-- Category delete modal --}}
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('admin.destroy.category') }}" method="POST" class="p-5">
                        @csrf
                        <input type="hidden" name="category_id" class="category_id">

                        <h6 class="text-danger">Are you Sure ...?</h6>


                </div>
                <div class="modal-footer">

                    <button class="btn btn-secondary btn-lg" type="button">No</button>
                    <button class="btn btn-danger btn-lg" type="submit">Yes</button>



                </div>
                </form>

            </div>
        </div>
    </div>



</div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.tiny.cloud/1/krvc4ctq1jqcu2wv0emw6vjgh8lit9tujxyfh0bi791s4t3r/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script>
    function editCategory(id) {

        var id = id;
        var name = $('.name_' + id).text()

        $('#editModal').find('.name').val(name)
        $('#editModal').find('.category_id').val(id)



    }

    function deleteCategory(id) {

        var id = id;

        $('#deleteModal').find('.category_id').val(id)



    }

    //tinymerce 

      tinymce.init({

      selector: '#description',

   
      });

    //select2  for categories
    $('#category_id').select2();

    //select2  for tags
    $('#tag_id').select2();



</script>
@endsection

