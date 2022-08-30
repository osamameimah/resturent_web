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
         <div style="position:relative;top:60px;right:20px">

             @if ('image')
                 <td>
                     <img src="{{ asset('storage') }}/{{ $data->image }}" alt="image" />
                     <span class="ps-2"></span>
                 </td>
             @else
                 <img src="{{ asset('default.jpg') }}" alt="image" />
             @endif
             <form action="{{ route('profilee.store', $data->id) }}" method="post" enctype="multipart/form-data"
                 style="margin-top:50px;margin-left:-1050px;  ">
                 @csrf
                 @if (Session()->has('success'))
                     <div class="alert alert-success">{{ session()->get('success') }}
                     </div>
                 @endif
                 <div class="form-group mb-3 ">
                     <label for="first name">{{ __('first name') }}</label>
                     <div>
                         <input type="text" style="color: wheat" class="form-control" name="firstname"
                             placeholder="Enter First Name">
                         @error('first name')
                             <p class="invalid-feedback">{{ $message }}</p>
                         @enderror
                     </div>

                     <label for="last name">{{ __('last name') }}</label>
                     <div>
                         <input type="text" style="color: wheat" class="form-control" name="lastname"
                             placeholder="Enter Last Name">
                         @error('last name')
                             <p class="invalid-feedback">{{ $message }}</p>
                         @enderror
                     </div>

                     <label for="city">{{ __('Email') }}</label>
                     <div>
                         <input type="email" style="color: wheat" value="{{ $data->email }}" class="form-control"
                             name="email" placeholder="Enter email">
                         @error('email')
                             <p class="invalid-feedback">{{ $message }}</p>
                         @enderror
                     </div>

                     <label for="city">{{ __('City') }}</label>
                     <div>
                         <input type="text" style="color: wheat" value="{{ $data->city }}" class="form-control"
                             name="city" placeholder="Enter City">
                         @error('city')
                             <p class="invalid-feedback">{{ $message }}</p>
                         @enderror
                     </div>


                     <label for="country">{{ __('Country') }}</label>
                     <div>
                         <input type="text" style="color: wheat" value="{{ $data->country }}" class="form-control"
                             name="country" placeholder="Enter Country">
                         @error('country')
                             <p class="invalid-feedback">{{ $message }}</p>
                         @enderror
                     </div>



                     <label for="image">{{ __('image') }}</label>
                     <div>
                         <input type="file" style="color: wheat" class="form-control" name="image">
                         @error('image')
                             <p class="invalid-feedback">{{ $message }}</p>
                         @enderror
                     </div>


                     <div class="form-group mb-3">
                         <label for="submit">{{ __('submit') }}</label>
                         <div>
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
