@extends('../layout/' . $layout)

@section('subhead')
    <title>Help - Icewall - Tailwind HTML Admin Template</title>
@endsection
@section('subtitle')
<h2 class="text-lg font-medium truncate mr-5">
Courses
</h2>
@endsection
@section('substyle')
<style>
    .page-link {
        margin-right: 0px !important;
    }
</style>
@endsection
@section('subcontent')
<div class="grid grid-cols-12 gap-6">
<!-- BEGIN: Weekly Top Products -->
<div class="col-span-6 mt-6">
    <div class="intro-y block sm:flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">
            All Courses
        </h2>
    </div>
    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
        <table class="table table-report sm:mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">Preview</th>
                    <th class="whitespace-nowrap">PRODUCT NAME</th>
                    <th class="text-center whitespace-nowrap">Level</th>
                </tr>
            </thead>
            <tbody>
            @foreach($allcourses as $course)
                <tr class="intro-x">
                    <td class="w-30">
                        <div class="flex">
                            <div class="w-10 h-10 image-fit zoom-in">
                                <img  class="tooltip rounded-full" src="{{$course->portfolio}}" onerror="this.src='dist/images/placeholders/200x200.jpg'">
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="{{ route('viewcourses.page',$course->id) }}" class="font-medium whitespace-nowrap">{{$course->name}}</a> 
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{$course->posted_at}}</div>
                    </td>
                    <td class="text-center">{{$course->level->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
        <nav class="w-full sm:w-auto sm:mr-auto">
            <ul class="pagination">
                <li class="page-item">
                    <a  class="page-link !mr-0" style="margin-right: 0px; " href="#"> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
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
</div>
<!-- END: Weekly Top Products -->
<!-- BEGIN: Weekly Top Products -->
<div class="col-span-6 mt-6">
    <div class="intro-y block sm:flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">
            All Unlocked Courses
        </h2>
    </div>
    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
        <table class="table table-report sm:mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">Preview</th>
                    <th class="whitespace-nowrap">PRODUCT NAME</th>
                    <th class="text-center whitespace-nowrap">Level</th>
                </tr>
            </thead>
            <tbody>
            @foreach($unlockedcourses as $course)
                <tr class="intro-x">
                    <td class="w-30">
                        <div class="flex">
                            <div class="w-10 h-10 image-fit zoom-in">
                                <img  class="tooltip rounded-full" src="{{$course->portfolio}}" onerror="this.src='dist/images/placeholders/200x200.jpg'">
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="{{ route('viewcourses.page',$course->id) }}" class="font-medium whitespace-nowrap">{{$course->name}}</a>
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{$course->posted_at}}</div>
                    </td>
                    <td class="text-center">{{$course->level->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
        <nav class="w-full sm:w-auto sm:mr-auto">
            <ul class="pagination">
                <li class="page-item">
                    <a  class="page-link !mr-0" style="margin-right: 0px; " href="#"> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
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
</div>
<!-- END: Weekly Top Products -->
</div>
@endsection
@section('script')
@endsection
