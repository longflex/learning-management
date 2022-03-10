@extends('../layout/' . $layout)

@section('subhead')
    <title>Update Profile - Icewall - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Change Password</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5">
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('storage/app/public/images/' . $loggedin_user->photo) }}">
                    </div>
                    <div class="ml-4 mr-auto">
                    <div class="font-medium text-base">{{ $loggedin_user->name }}</div>
                        <div class="text-slate-500">{{ $loggedin_user->job }}</div>
                    </div>
                    
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center text-primary font-medium" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Personal Information
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Account Settings
                    </a>
                    <a class="flex items-center mt-5" href="">
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
            <!-- BEGIN: Change Password -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Change Password</h2>
                </div>
                <form method="POST" action="{{ route('change-password.store') }}">
                @csrf
                @if($errors)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                @if(Session::has('error'))
                <div class="alert alert-danger">{!! Session::get('error') !!}</div>
                @elseif(Session::has('success'))
                <div class="alert alert-success">{!! Session::get('success') !!}</div>
                @endif
                <div class="p-5">
                    <div>
                        <label for="change-password-form-1" class="form-label">Old Password</label>
                        <input name="current_password" id="change-password-form-1" type="password" class="form-control" placeholder="Input text" required autofocus>
                    </div>
                    <div class="mt-3">
                        <label for="change-password-form-2" class="form-label">New Password</label>
                        <input name="password" id="change-password-form-2" type="password" class="form-control" placeholder="Input text" required>
                    </div>
                    <div class="mt-3">
                        <label for="change-password-form-3" class="form-label">Confirm New Password</label>
                        <input name="password_confirmation" id="change-password-form-3" type="password" class="form-control" placeholder="Input text" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Change Password</button>
                </div>
                </form>
            </div>
            <!-- END: Change Password -->
        </div>

    </div>
@endsection
