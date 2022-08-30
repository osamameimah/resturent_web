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


        <div class="row " style="margin-right: 300px; color:white; margin-top:50px">

            <div class="col-12 grid-margin">

                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">All Reservations</h4>

                        <div class="table-responsive">

                            <table class="table" style="color:white;">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $data)
                                        {{-- @if ($data->created_at <= Carbon\Carbon::now()) --}}
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
                                        {{-- @endif --}}
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
