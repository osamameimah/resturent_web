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
        {{-- <div class="form-group"> --}}
        @include('admin.navbar')
        {{-- <div style="position:relative;top:60px;right:-150px">
@foreach ($errors->all() as $message) 
<div class="alert alert-danger">{{ $message }}</div>
@endforeach

            <a href="{{ route('view') }}"> <button class="btn btn-primary" style="margin-left:-200px">Create</button>
            </a>
            <table class="table" style="position:relative;top:60px;right:200px; color:antiquewhite ">
                <tr>
                    <th>id</th>
                    <th>Food Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th></th>
                </tr>
                @foreach ($data as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->description }}</td>
                        <td>{{ asset('storage') }}/{{ $data->image }}</td>
                        <td>
                            <a href="{{ route('updateview', $data->id) }}" class="btn btn-success btn-sm"
                                style="margin: 5px">Edit</a>
                            <form action="{{ route('delete', $data->id) }}" method="POST">
                                @csrf
                                @method('delete')

                                <a href="{{ route('deletefood', $data->id) }}" class="btn btn-danger btn-sm">Delete</a>

                            </form>

                        </td>
                    </tr>
                @endforeach

            </table>
        </div>


    </div> --}}


        <div class="row " style="margin-right: 300px; color:white; margin-top:50px">

            <div class="col-12 grid-margin">
                @if (Session()->has('success'))
                    <div class="alert alert-success">{{ session()->get('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">All Foods</h4>
                        <a href="{{ route('view') }}">
                            <button type="submit" class="btn btn-success">Create</button>
                        </a>
                        <div class="table-responsive">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Image</th>
                                        <th>Food Name</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Type Food</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>
                                                <img src="{{ asset('storage') }}/{{ $data->image }}" alt="image" />
                                                <span class="ps-2"></span>
                                            </td>
                                            <td>{{ $data->title }}</td>
                                            <td>{{ $data->price }}</td>
                                            <td>{{ $data->description }}</td>
                                            <td>{{ $data->type }}</td>
                                            <td>
                                                <a href="{{ route('updateview', $data->id) }}"
                                                    class="btn btn-success btn-sm" style="margin: 5px">Edit</a>
                                                <form action="{{ route('delete', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')

                                                    <a href="{{ route('deletefood', $data->id) }}"
                                                        class="btn btn-danger btn-sm">Delete</a>

                                                </form>
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



        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.adminscript')
        <!-- End custom js for this page -->
</body>

</html>
