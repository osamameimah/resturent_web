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

             <form action="{{ route('updatepassword', Auth::user()->id) }}" method="post" enctype="multipart/form-data"
                 style="margin-top:50px;margin-left:-750px; ">
                 @csrf

                 @if (Session()->has('success'))
                     <div class="alert alert-success">{{ session()->get('success') }}
                     </div>
                 @endif

                 <div class="form-group mb-3">
                     <label for="current_password">{{ __('Current Password') }}</label>
                     <div>
                         <input type="password" style="color: wheat;" placeholder="Current Password"
                             id="current_password" class="form-control @error('current_password') is-invalid @enderror"
                             name="current_password" />

                         @error('current_password')
                             <p class="invalid-feedback">{{ $message }}</p>
                         @enderror
                     </div>
                 </div>

                 <div class="form-group mb-3">
                     <label for="password">{{ __('New Password') }}</label>
                     <div>
                         <input type="password" style="color: wheat;" placeholder="New Password" id="password"
                             class="form-control @error('password') is-invalid @enderror" name="password" />

                         @error('password')
                             <p class="invalid-feedback">{{ $message }}</p>
                         @enderror
                     </div>
                 </div>

                 <div class="form-group mb-3">
                     <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                     <div>
                         <input type="password" style="color: wheat;" placeholder="New Password"
                             id="password_confirmation" class="form-control @error('password') is-invalid @enderror"
                             name="password_confirmation" />

                         @error('password')
                             <p class="invalid-feedback">{{ $message }}</p>
                         @enderror
                     </div>
                 </div>


                 <div class="form-group mb-3">
                     <button type="submit" class="btn btn-primary">{{ __('Update Password') }}</button>
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
