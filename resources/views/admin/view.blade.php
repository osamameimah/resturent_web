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
        <div style="position:relative;top:60px;right:150px">
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <form action="{{ route('uploadfood') }}" method="post" style="position: relative; top:60px; left:-300px;"
                enctype="multipart/form-data">
                @csrf
                <h4 class="card-title">Edit Foods</h4>

                <div class="form-group mb-3">
                    <label for="title">{{ __('Title') }}</label>
                    <div>
                        <input type="text" style="color: wheat" class="form-control" name="title"
                            placeholder="Enter Title">
                        @error('title')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div class="form-group mb-3">
                    <label for="price">{{ __('Price') }}</label>
                    <div>
                        <input type="number" style="color: wheat" class="form-control" name="price"
                            placeholder="Enter price">
                        @error('price')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="image">{{ __('image') }}</label>
                    <div>
                        <input type="file" class="form-control" style="color: wheat" name="image"
                            placeholder="Enter image">
                        @error('image')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="description">{{ __('description') }}</label>
                    <div>
                        <input type="text" style="color: wheat" class="form-control" name="description"
                            placeholder="Enter description">
                        @error('description')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" id="exampleRadios1" value="breakfast"
                        checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Break Fast
                    </label>

                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" id="exampleRadios2" value="lunch">
                    <label class="form-check-label" for="exampleRadios2">
                        Lunch
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" id="exampleRadios2" value="dinner">
                    <label class="form-check-label" for="exampleRadios2">
                        Dinner
                    </label>
                </div>

                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                </div>
            </form>


        </div>


    </div>






    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.adminscript')
    <!-- End custom js for this page -->
</body>

</html>
