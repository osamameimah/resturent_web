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


        <div class="row " style="margin-right: 400px; color:white; margin-top:200px">

            <div class="col-12 grid-margin">
                @if (Session()->has('success'))
                    <div class="alert alert-success">{{ session()->get('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('createinformation') }}">
                            <button class="btn btn-primary" style="margin:20px;">Create</button>
                        </a>
                        <h4 class="card-title">All Information</h4>

                        <div class="table-responsive">

                            <table class="table" style="color:white;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Phone_Number 1 </th>
                                        <th>Phone_Number 2 </th>
                                        <th>Email 1 </th>
                                        <th>Email 2</th>
                                        <th>Sliders</th>
                                        <th>Video</th>
                                        <th>Photo</th>
                                        <th>Facebook</th>
                                        <th>Twitter</th>
                                        <th>Linkedin</th>
                                        <th>Instagram</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($data as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->phone }}</td>
                                            <td>{{ $data->date }}</td>
                                            <td>{{ $data->time }}</td>
                                            <td>
                                            </td>
                                        </tr>
                                    @endforeach --}}
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
