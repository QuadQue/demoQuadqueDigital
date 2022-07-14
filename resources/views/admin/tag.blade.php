@extends('admin.master')
@section('title', 'Admin Tag Page')
@push('styles')

<style>
    .card-title {
        font-size: 16px !important;
    }

    label {
        font-size: 14px !important;
        color: #000;
        font-weight: 500;


    }

    input {
        height: 40px !important;
    }

    #tag-section {
       
        padding-bottom: 100px;
    }

    p {
        font-size: 12px !important;
    }

    .tag-table {

        margin-top: 100px
    }


    #create-btn {
        letter-spacing: 1px;
        font-weight: 500;
        font-size: 15px;

    }
    #create-tag-section
    {
    padding-top:100px;
    }



</style>

@endpush
@section('content')

<div class="bg-grey" id="tag-section">

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

    <div class=" row d-flex justify-content-center my-5 " id="create-tag-section">


        <div class="col-md-4">
            <div id="blog-form">
                <div class="card">
                    <div class="card-header bg-success text-light py-3">

                        <div class="card-title ">Create Tag</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.store.tag') }}" method="POST" class="p-5">
                            @csrf

                            <div class="form-group">
                                <label for="tag">Tag Name</label>
                                <input type="text" name="name" id="tag" class="form-control  form-control-lg">


                            </div>
                            <div class="form-group pt-4">
                                <button class="btn btn-info btn-lg" type="submit" id="create-btn">Create</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class=" d-flex justify-content-center tag-table  row ">

        <div class="col-md-10">
            <table class="table text-center">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Tag Name</td>
                        <td>Action</td>
                    </tr>
                    @isset($tags)
                    @foreach($tags as $tag)
                    <tr>
                        <td>{{ $loop->index +1 }}</td>
                        <td class="name_{{ $tag->id }}">{{ $tag->name }}</td>
                        <td><a href="#editModal" data-toggle="modal" onclick="editTag({{ $tag->id }})" class="btn btn-info btn-lg mr-3">Edit</a><a href="#deleteModal" onclick="deleteTag({{ $tag->id }})" data-toggle="modal" class="btn btn-lg btn-warning">Delete</a></td>
                    </tr>
                    @endforeach
                    @endisset
                </thead>
            </table>

        </div>
    </div>

    {{-- Tag Edit modal --}}
    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Tag</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('admin.update.tag') }}" method="POST" class="p-5">
                        @csrf
                        <input type="hidden" name="tag_id" class="tag_id">
                        <div class="form-group">
                            <label for="name">Tag Name</label>
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
    {{-- Tag delete modal --}}
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Tag</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('admin.destroy.tag') }}" method="POST" class="p-5">
                        @csrf
                        <input type="hidden" name="tag_id" class="tag_id">

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
<script>
    function editTag(id) {

        var id = id;
        var name = $('.name_' + id).text()

        $('#editModal').find('.name').val(name)
        $('#editModal').find('.tag_id').val(id)



    }

    function deleteTag(id) {

        var id = id;

        $('#deleteModal').find('.tag_id').val(id)



    }

</script>
@endsection

