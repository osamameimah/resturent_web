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

        <div style="position:relative;top:x;left:-300px60p;margin-top:-10px;">
            <form action="{{ route('createinformationn') }}" method="post" style="position: relative; top:60px; left:-300px;" enctype="multipart/form-data">
                @csrf
                {{-- <h4 class="card-title" style="padding: 20px;">All Information</h4> --}}

                <div class="form-group mb-2">
                    <label for="phone1">{{ __('Phone Number 1') }}</label>
                    <div>
                        <input type="text" style="color: wheat" class="form-control" name="phone1" value="{{ $data->phone_number1 }}"
                            placeholder="Enter phone 1">
                        @error('phone1')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                               <div class="form-group mb-2">
                    <label for="phone2">{{ __('Phone Number 2') }}</label>
                    <div>
                        <input type="text" style="color: wheat" class="form-control" name="phone2" value="{{ $data->phone_number2 }}"
                            placeholder="Enter phone 2">
                        @error('phone2')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div class="form-group mb-2">
                    <label for="email1">{{ __('email 1') }}</label>
                    <div>
                        <input type="email" style="color: wheat" class="form-control" name="email1" value="{{ $data->email1 }}"
                            placeholder="Enter email 1">
                        @error('email1')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                                <div class="form-group mb-2">
                    <label for="email2">{{ __('email 2') }}</label>
                    <div>
                        <input type="email" style="color: wheat" class="form-control" name="email2" value="{{ $data->email2 }}"
                            placeholder="Enter email 2">
                        @error('email2')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-2">
                    <label for="image">{{ __('sliders') }}</label>
                    <div>
                        <input type="file" class="form-control" style="color: wheat" name="sliders[]" value="{{$data->sliders }}" multiple>
                        @error('sliders')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div class="form-group mb-2">
                    <label for="video">{{ __('video') }}</label>
                    <div>
                        <input type="text" style="color: wheat" class="form-control" name="video" value="{{ $data->video }}"
                            placeholder="Enter video">
                        @error('video')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-2">
                    <label for="photo">{{ __('photo') }}</label>
                    <div>
                        <input type="file" class="form-control" style="color: wheat" name="photo[]" value="{{ $data->photo }}" multiple
                            placeholder="Enter photo">
                        @error('photo')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div class="form-group mb-2">
                    <label for="facebook">{{ __('FaceBook') }}</label>
                    <div>
                        <input type="text" style="color: wheat" class="form-control" name="facebook" value="{{ $data->facebook }}"
                            placeholder="Enter facebook">
                        @error('facebook')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-2">
                    <label for="twitter">{{ __('Twitter') }}</label>
                    <div>
                        <input type="text" style="color: wheat" class="form-control" name="twitter" value="{{ $data->twitter }}"
                            placeholder="Enter twitter">
                        @error('twitter')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label for="linkedin">{{ __('LinkedIn') }}</label>
                    <div>
                        <input type="text" style="color: wheat" class="form-control" name="linkedin" value="{{ $data->linkedin }}"
                            placeholder="Enter linkedin">
                        @error('linkedin')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>



                <div class="form-group mb-2">
                    <label for="instagram">{{ __('Instagram') }}</label>
                    <div>
                        <input type="text" style="color: wheat" class="form-control" name="instagram"
                            value="{{ $data->instagram }} " placeholder="Enter instagram">
                        @error('instagram')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group mb-2">
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
