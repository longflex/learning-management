@extends('../layout/' . $layout)

@section('subhead')
    <title>Share - Icewall - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<!-- BEGIN: Content -->
<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            All Courses
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="{{ route('addcourses.page') }}" class="btn btn-primary shadow-md mr-2">Add New Course</a>
            <div class="dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item"> <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Post </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <i data-feather="download" class="w-4 h-4 mr-2"></i> Download Post </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Blog Layout -->
        @foreach($courses as $course)
            <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-5 py-4">
                    <div class="w-10 h-10 flex-none image-fit">
                        <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('storage/images/' . $loggedin_user->photo) }}">
                    </div>
                    <div class="ml-3 mr-auto">
                        <a href="" class="font-medium">{{$loggedin_user->name}}</a> 
                        <div class="flex text-slate-500 truncate text-xs mt-0.5"> <a class="text-primary inline-block truncate" href="">Electronic</a> <span class="mx-1">•</span> 45 seconds ago </div>
                    </div>
                    <div class="dropdown ml-3">
                        <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-slate-500" aria-expanded="false" data-tw-toggle="dropdown"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <ul class="dropdown-content">
                                <li>
                                    <a href="{{route('editcourses.page',$course->id)}}" class="dropdown-item"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="h-40 2xl:h-56 image-fit">   <!-- http://i3.ytimg.com/vi/erLk59H86ww/hqdefault.jpg -->
                        <img alt="Icewall Tailwind HTML Admin Template" class="rounded-md" src="{{$course->portfolio}}" onerror="this.src='dist/images/placeholders/200x200.jpg'">
                    </div>
                    <a href="" class="block font-medium text-base mt-5">{{$course->name}}</a> 
                    <div class="text-slate-600 dark:text-slate-500 mt-2">{{$course->brief_title}}</div>
                </div>
                <div class="flex items-center px-5 py-3 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div class="intro-x flex mr-2">
                        <div class="intro-x w-8 h-8 image-fit">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full border border-white zoom-in tooltip" src="dist/images/profile-4.jpg" title="Al Pacino">
                        </div>
                        <div class="intro-x w-8 h-8 image-fit -ml-4">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full border border-white zoom-in tooltip" src="dist/images/profile-12.jpg" title="Sylvester Stallone">
                        </div>
                        <div class="intro-x w-8 h-8 image-fit -ml-4">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full border border-white zoom-in tooltip" src="dist/images/profile-12.jpg" title="Edward Norton">
                        </div>
                    </div>
                    <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full text-primary bg-primary/10 dark:bg-darkmode-300 dark:text-slate-300 ml-auto tooltip" title="I dislike"> <i data-feather="thumbs-down" class="w-3 h-3"></i> </a>
                    <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-primary text-white ml-2 tooltip" title="I like"> <i data-feather="thumbs-up" class="w-3 h-3"></i> </a>
                </div>
                <div class="px-5 pt-3 pb-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div class="w-full flex text-slate-500 text-xs sm:text-sm">
                        <div class="mr-2"> Reviews: <span class="font-medium">86</span> </div>
                        <div class="mr-2"> Views: <span class="font-medium">37k</span> </div>
                        <div class="ml-auto"> Likes: <span class="font-medium">191k</span> </div>
                    </div>
                    <div class="w-full flex items-center mt-3">
                        <div class="w-8 h-8 flex-none image-fit mr-3">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                        </div>
                        <div class="flex-1 relative text-slate-600">
                            <input type="text" class="form-control form-control-rounded border-transparent bg-slate-100 pr-10" placeholder="Post a review...">
                            <i data-feather="smile" class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"></i> 
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
        
        
        <!-- END: Blog Layout -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                    </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                    <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                    </li>
                </ul>
            </nav>
            <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->
    </div>
</div>
<!-- END: Content -->
@endsection
@section('script')
@endsection
