@extends('../layout/' . $layout)

@section('subhead')
    <title>Courses - Icewall - Tailwind HTML Admin Template</title>
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
                        <div class="flex text-slate-500 truncate text-xs mt-0.5"> <span class="mx-1">•posted at </span> {{$course->posted_at}} </div>
                    </div>
                    <div class="dropdown ml-3">
                        <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-slate-500" aria-expanded="false" data-tw-toggle="dropdown"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                        <div class="dropdown-menu w-40">
                            <ul class="dropdown-content">
                                <li>
                                    <a href="{{route('editcourses.page',$course->id)}}" class="dropdown-item"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                                </li>
                                <li>
                                    <a onclick="filldelinfo('{{route('courses.del',$course->id)}}')" data-tw-toggle="modal" data-tw-target="#delete-modal-preview" class="dropdown-item cursor-pointer"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="h-40 2xl:h-56 image-fit">
                        <img alt="Icewall Tailwind HTML Admin Template" class="rounded-md" src="{{$course->portfolio}}" onerror="this.src='dist/images/placeholders/200x200.jpg'">
                    </div>
                    <a href="{{ route('viewcourses.page',$course->id) }}" class="block font-medium text-base mt-5">{{$course->name}}</a> 
                    <div class="text-slate-600 dark:text-slate-500 mt-2">{{$course->brief_title}}</div>
                </div>
                <div class="px-5 pt-3 pb-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div class="w-full flex text-slate-500 text-xs sm:text-sm">
                        <div class="mr-2"> Level: <span class="font-medium">{{$course->level->name}}</span> </div>
                    </div>
                </div>
            </div>

        @endforeach
        
        
        <!-- END: Blog Layout -->
        <!-- BEGIN: Pagination -->
        <!-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
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
        </div> -->
        <!-- END: Pagination -->
    </div>
    <div id="delete-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-feather="smile" style="color:blue;" class="w-16 h-16 text-danger mx-auto mt-3"></i> 
                        <div class="text-3xl mt-5">Are you sure you want to delete<br>this course?
                        </div>
                        <div class="text-slate-500 mt-2">
                            This course data will be deleted permanentely
                            <br>Please confirm
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <a id="delbtn" href="" type="button" class="btn btn-success w-24">YES</a>
                        <button type="button" data-tw-dismiss="modal" class="btn btn-danger w-24 mr-1">NO</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content -->
@endsection
@section('script')
<script>
    function filldelinfo(url)
    {
        var link = document.getElementById("delbtn");

        link.setAttribute('href', url);
    }
</script>

@endsection
