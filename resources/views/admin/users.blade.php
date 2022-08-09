<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('sheet.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
@include('admin.temp')
<div class="container">
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('users.store')}}" method="POST">
                {{csrf_field()}}
                <div class="modal-body">
                    {{--              form--}}

                    <div class="form-group">
                        <label for="name ">Name</label>
                        <input type="text" class="form-control" name="name" aria-describedby="nameHelp"
                               placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="Email Address ">Email address</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                               placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{--end  start model--}}

<!-- edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit title</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <form method="POST" id="editForm">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="modal-body">
                    {{--              form--}}
                    <div class="form-group">

                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp"
                               placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                               placeholder="Enter email">

                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="text" class="form-control" id="exampleInputPassword" name="password"
                               placeholder="Password">
                    </div>


                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update data</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- end edit modal--}}
{{--delete--}}

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Data model title</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>

            <form method="POST" id="deleteForm">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <div class="modal-body">

                    <input type="hidden" name="_method" value="DELETE">
                    <p>Are You Sure??</p>

                    <input type="hidden" name="usertype" value="admin">
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ">Yes! Delete Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{--end delete model--}}


        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <button type="button" id="btn1" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" align="right"><i class="fa fa-plus" aria-hidden="true"></i>
                        Create</button>
                </ol>
            </div>
        </div>

</div>
<div class="container">
    <table id="datatable" class="table table-bordered table-striped table">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>


            <th>Name</th>

            <th>Email</th>

            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($userdata as $user)

            <tr>
                <td>{{$user->id }}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email }}</td>
                <td>
                    <button {{ auth()->user()->role !== "superadmin" ? "disabled" : "" }} type="button"
                            class="btn {{ auth()->user()->role !== "superadmin" ? 'btn-default' : 'btn-primary' }} edit" data-toggle="modal" data-target="#editModal">
                        Edit
                    </button>
                    <button {{ auth()->user()->role !== "superadmin" ? "disabled" : "" }}  type="button"
                            class="btn {{ auth()->user()->role !== "superadmin" ? 'btn-default' : 'btn-primary' }}  btn-danger delete" data-toggle="modal"
                            data-target="#deleteModal">
                        Delete
                    </button>

                </td>


            </tr>
        @endforeach


        </tbody>
    </table>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src=" https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src=" https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        var table = $("#datatable").DataTable();
        table.on('click', '.edit', function () {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            console.log(data);
            $('#name').val(data[1]);
            $('#email').val(data[2]);
            $('#password').val(data[3]);

            $('#editForm ').attr('action', '{{ url('/admin/users/') }}/' + data[0]);
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

            $('#deleteForm ').attr('action', '{{ url('/admin/users/') }}/' + data[0]);
            $('#deleteModal').modal('show');

        });
    });
</script>


</body>

</html>
