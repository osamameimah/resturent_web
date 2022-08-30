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
        <div style="position:relative;top:60px;right:-150px">


 <form action="{{ route('uploadchef') }}" method="post" enctype="multipart/form-data" style="margin-top:50px;margin-left:-750px; ">
    @csrf
 
<div class="form-group mb-3">
                    <label for="name">{{ __('name') }}</label>
                    <div>
                        <input type="text" style="color: wheat" class="form-control" name="name"
                            placeholder="Enter name">
                        @error('name')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                <div class="form-group mb-3">
                    <label for="speciality">{{ __('speciality') }}</label>
                    <div>
                        <input type="text" style="color: wheat" class="form-control" name="speciality"
                            placeholder="Enter speciality">
                        @error('speciality')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="image">{{ __('image') }}</label>
                    <div>
                        <input type="file" style="color: wheat" class="form-control" name="image"
                            placeholder="Enter Title">
                        @error('image')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="submit">{{ __('submit') }}</label>
                    <div>
                        {{-- <input type="submit" style="color: wheat" class="form-control"> --}}
                           <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

    </div>
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