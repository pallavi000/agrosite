
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shilpa's dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
{{--    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="sheet.css">
</head>
<body>

@include('admin.temp')

<div class="breadcrumbs">
        <div class="col-sm-12">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" align="right"><i class="fa fa-plus" aria-hidden="true"></i>  Create</button>
                    </ol>
                </div>
            </div>

        </div>
    </div>

    <div class="content mt-3">
        <div class="col-sm-12">
            <div>
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(\Session::has('success'))
                    <div class="alert-success">
                        <p>{{\Session::get('success')}}</p>
                    </div>
                @endif


            </div>
            <table id="datatable" class="table table-bordered" float="right" >

                <thead class="thead-dark">
                <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                    <th scope="col">category</th>

                </tr>
                </thead>
                <tbody>
                @foreach($info as $content)
                    <tr>
                        <td>{{$content->id}}</td>
                        <td>{{$content->title}}</td>
                        <td>{!!substr($content->description,0,100) !!}</td>

                        <td><img src="{{asset('uploads/photos/'. $content->image)}}" width="80px" height="50px" alt="Image"></td>
                        <td>
                            <a href="#" class="btn btn-warning edit"  ><i class="fa fa-edit" style="font-size:20px; color:white" ></i></a>

                            <a href="#" class="btn btn-danger delete " ><i class="fa fa-trash" style="font-size:20px; color:white"></i></a>
                        </td>
                        <td>{{ $content->category ? $content->category->name : 'No category'}}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>

        </div>

        <!-- start add Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Add data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ action('PostController@store') }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="modal-body">

                            <div class="form-group">
                                <label>Title:</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label >Description:</label>
                                <textarea rows="4"class="form-control"  name="description" placeholder="Enter Description"></textarea>
                            </div>



                                <div class="form-group">
                                    <label for="sel1">Categories (select one):</label>
                                    <select class="form-control" id="sel1" name="category">
                                        @foreach($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                    <br>

{{--                                <div class="dropdown-menu">--}}
{{--                                    @foreach($categories as $cat)--}}
{{--                                       <a class="dropdown-item">{{$cat->name}}</a>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}

                            </div>

                            <div class="input-group">
                                <div class="responsive-file">
                                    <input type="file" name="image"  class="responsive-file-input">

                                </div>
                            </div>


                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
{{--            end add modal--}}

<!-- start edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Edit data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post" id="editForm">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Title:</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label >Description:</label>
                            <textarea class="form-control"  id="description"   name="description" placeholder="Enter Description"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="sel1">Categories (select one):</label>
                            <select class="form-control" id="sel1" name="category">
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                            <br>

                        <div class="input-group">
                            <div class="responsive-file">
                                <input type="file" class="responsive-file-input">
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

{{--            end edit modal--}}

{{--        delete--}}
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="deleteForm">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <div class="modal-body">
                    <input type="hidden" name="_method" value="DELETE">
                    <p>Are you sure you want to delete the data??</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ">Yes!</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--  end delete model--}}


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src=" https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src=" https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
{{--<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>--}}
<script type="text/javascript">
    $(document).ready(function () {
        var table = $("#datatable").DataTable();
        table.on('click', '.edit', function () {
            $tr = $(this).closest('tr');
            var data = table.row($tr).data();
            console.log(data);
            $('#title').val(data[1]);
            $('#description').val(data[2]);

            $('#editForm ').attr('action', '{{ url('/post/') }}/' + data[0]);
            $('#editModal').modal('show');
        });
    });
</script>

{{--delete script--}}
<script type="text/javascript">
    $(document).ready(function () {
        var table = $("#datatable").DataTable();
        table.on('click', '.delete', function () {
            $tr = $(this).closest('tr');
            var data = table.row($tr).data();
            console.log(data);
            $('#deleteForm ').attr('action', '{{ url('/post/') }}/' + data[0]);
            $('#deleteModal').modal('show');
        });
    });

</script>

{{--<script>--}}
{{--    $('#summernote').summernote();--}}
{{--</script>--}}


</body>

</html>








