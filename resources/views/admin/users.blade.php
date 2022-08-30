<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')

 

 
        <div class="row " style="margin-right: 400px; color:white; margin-top:50px">

            <div class="col-12 grid-margin">
@if(Session()->has('success'))
    <div class="alert alert-success">{{ session()->get('success') }}
    </div>
@endif
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">All Users</h4>

                        <div class="table-responsive">

                            <table class="table" style="color:white;">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            @if ($data->usertype == '0')
                                                <td>
                                                    <form action="{{ route('delete', $data->id) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                                                        {{-- <input type="submit"> --}}
                                                        <a href="{{ route('delete', $data->id) }}"
                                                            class="btn btn-danger btn-sm">Delete</a>

                                                    </form>

                                                </td>
                                            @else
                                                <td>Not Allowed</td>
                                            @endif


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

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.adminscript')
    <!-- End custom js for this page -->
</body>

</html>
