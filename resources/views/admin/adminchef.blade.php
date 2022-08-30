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



        {{-- ////////////////////////////// --}}
        <div class="row " style="margin-right: 400px; color:white; margin-top:50px;">

            <div class="col-12 grid-margin">


                @if (Session()->has('success'))
                    <div class="alert alert-success">{{ session()->get('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">All Chef</h4>
                        <a href="{{ route('showchef') }}">
                            <button type="submit" class="btn btn-success">Create</button>
                        </a>
                        <div class="table-responsive">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>speciality</th>
                                        <th>image</th>
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
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->speciality }}</td>
                                            <td>
                                                <a href="{{ route('updatechef', $data->id) }}"
                                                    class="btn btn-success btn-sm" style="margin: 5px">Edit</a>
                                                <form action="{{ route('deletechef', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')

                                                    <a href="{{ route('deletechef', $data->id) }}"
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
