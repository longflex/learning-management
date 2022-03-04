
@extends('../layout/' . $layout)

@section('subhead')
    <title>Update Profile - Icewall - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Update Profile</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5">
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('storage/images/' . $loggedin_user->photo) }}">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">{{ $loggedin_user->name }}</div>
                        <div class="text-slate-500">{{ $loggedin_user->job }}</div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                            <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                        </a>
                        <div class="dropdown-menu w-56">
                            <ul class="dropdown-content">
                                <li>
                                    <h6 class="dropdown-header">Export Options</h6>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> English
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="box" class="w-4 h-4 mr-2"></i>
                                        Indonesia
                                        <div class="text-xs text-white px-1 rounded-full bg-danger ml-auto">10</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="layout" class="w-4 h-4 mr-2"></i> English
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="sidebar" class="w-4 h-4 mr-2"></i> Indonesia
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <div class="flex p-1">
                                        <button type="button" class="btn btn-primary py-1 px-2">Settings</button>
                                        <button type="button" class="btn btn-secondary py-1 px-2 ml-auto">View Profile</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center text-primary font-medium" href="{{route('update-profile')}}">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Personal Information
                    </a>
                    <a class="flex items-center mt-5" href="{{route('change-password')}}">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Account Settings
                    </a>
                    <a class="flex items-center mt-5" href="{{route('change-password',[
                    'first_level_active_index' => 'update-profile'
                ])}}">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Change Password
                    </a>
                    
                </div>
                
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400 flex">
                    <button type="button" class="btn btn-primary py-1 px-2">New Group</button>
                    <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto">New Quick Link</button>
                </div>
            </div>
        </div>
        <!-- END: Profile Menu -->
        
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Display Information</h2>
                </div>
                @if(Session::has('status'))
                <div class="font-medium p-5" style="color: green;">
                    {!! Session::get('status') !!}
                </div>
                <!-- <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    
                </div> -->
                @endif
                <div class="flex items-center">
                    <x-auth-validation-errors class="p-5" :errors="$errors" style="color: red;" />
                </div>
                <div class="p-5">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('update-profile.store.displayinfo') }}">
                        @csrf
                        <div class="flex flex-col-reverse xl:flex-row flex-col">
                            <input name="id" type="text" hidden value="{{$loggedin_user->id}}" >
                            <div class="flex-1 mt-6 xl:mt-0">
                                <div class="grid grid-cols-12 gap-x-5">
                                    <div class="col-span-12 2xl:col-span-6">
                                        <div>
                                            <label for="update-profile-form-1" class="form-label">User Name</label>
                                            <input name="uname" id="update-profile-form-1" type="text" class="form-control" placeholder="Input text" value="{{$loggedin_user->name}}" disabled>
                                        </div>
                                        <div>
                                            <label for="update-profile-form-1" class="form-label">First Name</label>
                                            <input name="fname" id="update-profile-form-1" type="text" class="form-control" placeholder="Input text" value="{{$loggedin_user->fname}}" disabled>
                                        </div>
                                        <div>
                                            <label for="update-profile-form-1" class="form-label">Last Name</label>
                                            <input name="lname" id="update-profile-form-1" type="text" class="form-control" placeholder="Input text" value="{{$loggedin_user->lname}}" disabled>
                                        </div>
                                        <div class="mt-3">
                                            <label for="update-profile-form-2" class="form-label">Country</label>
                                            <select name="country" id="update-profile-form-2" data-search="true" class="tom-select w-full">
                                            @foreach ($country_names as $country_name)
                                                @if($country_name['country'] === $loggedin_user->country)
                                                <option value="{{$country_name['country']}}" selected>{{$country_name['country']}}</option>
                                                @else
                                                <option value="{{$country_name['country']}}">{{$country_name['country']}}</option>
                                                @endif
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-span-12">
                                        <div class="mt-3">
                                            <label for="update-profile-form-5" class="form-label">Address</label>
                                            <textarea name ="address" id="update-profile-form-5" class="form-control" placeholder="Adress">{{$loggedin_user->address}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-20 mt-3">Save</button>
                            </div>
                            
                            <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                                <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                    <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                        <img id="image-preview" class="rounded-md" alt="Icewall Tailwind HTML Admin Template" src="{{ asset('storage/images/' . $loggedin_user->photo) }}">
                                        <!-- <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                            <i data-feather="x" class="w-4 h-4"></i>
                                        </div> -->
                                    </div>
                                    <div class="mx-auto cursor-pointer relative mt-5">
                                        <button type="button" class="btn btn-primary w-full">Change Photo</button> 
                                        <input name="photo" id="photo" type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END: Display Information -->
            <!-- BEGIN: Personal Information -->

            <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Personal Information</h2>
                </div>
                @if(Session::has('status1'))
                <div class="font-medium p-5" style="color: green;">
                    {!! Session::get('status1') !!}
                </div>
                @endif
                <div class="p-5">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('update-profile.store.personal') }}">
                        @csrf
                        <input name="id" type="text" hidden value="{{$loggedin_user->id}}" >

                        <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 xl:col-span-6">
                                <div>
                                    <label for="update-profile-form-6" class="form-label">Email</label>
                                    <input name="email" id="update-profile-form-6" type="text" class="form-control" placeholder="Input text" value="{{ $loggedin_user['email'] }}" disabled>
                                </div>
                                <div class="mt-3">
                                    <label for="update-profile-form-11" class="form-label">Crypto Address</label>
                                    <input name="crypto" id="update-profile-form-11" type="text" class="form-control" placeholder="Input text" value="{{$loggedin_user->crypto}}">
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="mt-3 xl:mt-0">
                                    <label for="update-profile-form-10" class="form-label">Phone Number</label>
                                    <input name="phone" id="update-profile-form-10" type="text" class="form-control" placeholder="Input text" value="{{$loggedin_user->phone}}">
                                </div>
                                <div class="mt-3">
                                    <label for="update-profile-form-13" class="form-label">Bank Info</label>
                                    <input name="bank" id="update-profile-form-13" type="text" class="form-control" placeholder="Input text" value="{{$loggedin_user->bank}}">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end mt-4">
                            <button type="submit" class="btn btn-primary w-20 mr-auto">Save</button>
                            <a href="" class="text-danger flex items-center">
                                <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete Account
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END: Personal Information -->
        </div>
    </div>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $(function()
    {
        $('#photo').change( function()
        {
            var file = this.files[0];
            if(file){
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function(e){
                    $('#image-preview').attr('src',e.target.result);
                }
            }
        });
    });
    </script>
@endsection
