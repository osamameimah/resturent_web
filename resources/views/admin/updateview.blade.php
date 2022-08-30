<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.admincss')
  </head>
  <body>

<div class="container-scroller">
    @include('admin.navbar')

 <div style="position:relative;top:60px;left:-300px">
            <form action="{{ route('updatevieww',$data->id) }}" method="post" style="position: relative; top:60px; left:-300px;"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="title">{{ __('Title') }}</label>
                    <div>
                        <input type="text" style="color: wheat" class="form-control" name="title" value="{{ $data->title }}"
                            placeholder="Enter Title">
                        @error('title')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div class="form-group mb-3">
                    <label for="price">{{ __('Price') }}</label>
                    <div>
                        <input type="number" style="color: wheat" class="form-control" name="price" value="{{ $data->price }}"
                            placeholder="Enter price">
                        @error('price')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="image">{{ __('image') }}</label>
                    <div>
                        <input type="file" class="form-control" style="color: wheat" name="image" value="{{ $data->image }}"
                            placeholder="Enter image">
                        @error('image')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="description">{{ __('description') }}</label>
                    <div>
                        <input type="text" style="color: wheat" class="form-control" name="description" value="{{ $data->description }}"
                            placeholder="Enter description">
                        @error('description')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
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