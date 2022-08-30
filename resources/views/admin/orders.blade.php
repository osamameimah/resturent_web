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

                        <h4 class="card-title">All Orders</h4>

                        <div class="table-responsive">

                            <table class="table" style="color:white;">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>foodname</th>
                                        <th>quantity</th>
                                        <th>price</th>
                                        <th>phone</th>
                                        <th>address</th>
                                        <th>Total Price</th>
                                        <th>since</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($order as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->foodname }}</td>
                                            <td>{{ $data->quantity }}</td>
                                            <td>{{ $data->price }}$</td>
                                            <td>{{ $data->phone }}</td>
                                            <td>{{ $data->address }}</td>
                                            <td>{{ $data->quantity*$data->price }}$   </td>
                                            <td>{{ $data->created_at->diffForHumans() }}</td>
                                            <td>
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


    </div>


    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.adminscript')
    <!-- End custom js for this page -->
</body>

</html>
