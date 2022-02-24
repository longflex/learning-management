@extends('../layout/' . $layout)

@section('subhead')
    <title>Offer - Icewall - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<!-- BEGIN: Content -->
<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Offer
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2">Add New offer</button>
            <div class="dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item"> <i data-feather="share-2" class="w-4 h-4 mr-2"></i> All Delete </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Blog Layout -->
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    
                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                    
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">Al Pacino</a> 
                    <div class="flex text-slate-500 truncate text-xs mt-0.5"> <a class="text-primary inline-block truncate" href="">Electronic</a> <span class="mx-1">•</span> 45 seconds ago </div>
                </div>
                <div class="dropdown ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-slate-500" aria-expanded="false" data-tw-toggle="dropdown"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="h-40 2xl:h-56 image-fit">
                    <a href="" class="">
                        <img alt="Icewall Tailwind HTML Admin Template" class="rounded-md" src="dist/images/preview-6.jpg">
                    </a>
                </div>
                <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of model sentences</a> 
                <div class="text-slate-600 dark:text-slate-500 mt-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
            </div>
        </div>
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    
                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                    
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">Al Pacino</a> 
                    <div class="flex text-slate-500 truncate text-xs mt-0.5"> <a class="text-primary inline-block truncate" href="">Electronic</a> <span class="mx-1">•</span> 45 seconds ago </div>
                </div>
                <div class="dropdown ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-slate-500" aria-expanded="false" data-tw-toggle="dropdown"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="h-40 2xl:h-56 image-fit">
                    <a href="" class="">
                        <img alt="Icewall Tailwind HTML Admin Template" class="rounded-md" src="dist/images/preview-6.jpg">
                    </a>
                </div>
                <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of model sentences</a> 
                <div class="text-slate-600 dark:text-slate-500 mt-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
            </div>
        </div>
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    
                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                    
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">Al Pacino</a> 
                    <div class="flex text-slate-500 truncate text-xs mt-0.5"> <a class="text-primary inline-block truncate" href="">Electronic</a> <span class="mx-1">•</span> 45 seconds ago </div>
                </div>
                <div class="dropdown ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-slate-500" aria-expanded="false" data-tw-toggle="dropdown"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="h-40 2xl:h-56 image-fit">
                    <a href="" class="">
                        <img alt="Icewall Tailwind HTML Admin Template" class="rounded-md" src="dist/images/preview-6.jpg">
                    </a>
                </div>
                <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of model sentences</a> 
                <div class="text-slate-600 dark:text-slate-500 mt-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
            </div>
        </div>
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    
                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                    
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">Al Pacino</a> 
                    <div class="flex text-slate-500 truncate text-xs mt-0.5"> <a class="text-primary inline-block truncate" href="">Electronic</a> <span class="mx-1">•</span> 45 seconds ago </div>
                </div>
                <div class="dropdown ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-slate-500" aria-expanded="false" data-tw-toggle="dropdown"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="h-40 2xl:h-56 image-fit">
                    <a href="" class="">
                        <img alt="Icewall Tailwind HTML Admin Template" class="rounded-md" src="dist/images/preview-6.jpg">
                    </a>
                </div>
                <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of model sentences</a> 
                <div class="text-slate-600 dark:text-slate-500 mt-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
            </div>
        </div>
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    
                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                    
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">Al Pacino</a> 
                    <div class="flex text-slate-500 truncate text-xs mt-0.5"> <a class="text-primary inline-block truncate" href="">Electronic</a> <span class="mx-1">•</span> 45 seconds ago </div>
                </div>
                <div class="dropdown ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-slate-500" aria-expanded="false" data-tw-toggle="dropdown"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="h-40 2xl:h-56 image-fit">
                    <a href="" class="">
                        <img alt="Icewall Tailwind HTML Admin Template" class="rounded-md" src="dist/images/preview-6.jpg">
                    </a>
                </div>
                <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of model sentences</a> 
                <div class="text-slate-600 dark:text-slate-500 mt-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
            </div>
        </div>
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    
                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                    
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">Al Pacino</a> 
                    <div class="flex text-slate-500 truncate text-xs mt-0.5"> <a class="text-primary inline-block truncate" href="">Electronic</a> <span class="mx-1">•</span> 45 seconds ago </div>
                </div>
                <div class="dropdown ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-slate-500" aria-expanded="false" data-tw-toggle="dropdown"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="h-40 2xl:h-56 image-fit">
                    <a href="" class="">
                        <img alt="Icewall Tailwind HTML Admin Template" class="rounded-md" src="dist/images/preview-6.jpg">
                    </a>
                </div>
                <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of model sentences</a> 
                <div class="text-slate-600 dark:text-slate-500 mt-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
            </div>
        </div>
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    
                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                    
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">Al Pacino</a> 
                    <div class="flex text-slate-500 truncate text-xs mt-0.5"> <a class="text-primary inline-block truncate" href="">Electronic</a> <span class="mx-1">•</span> 45 seconds ago </div>
                </div>
                <div class="dropdown ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-slate-500" aria-expanded="false" data-tw-toggle="dropdown"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="h-40 2xl:h-56 image-fit">
                    <a href="" class="">
                        <img alt="Icewall Tailwind HTML Admin Template" class="rounded-md" src="dist/images/preview-6.jpg">
                    </a>
                </div>
                <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of model sentences</a> 
                <div class="text-slate-600 dark:text-slate-500 mt-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
            </div>
        </div>
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    
                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                    
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">Al Pacino</a> 
                    <div class="flex text-slate-500 truncate text-xs mt-0.5"> <a class="text-primary inline-block truncate" href="">Electronic</a> <span class="mx-1">•</span> 45 seconds ago </div>
                </div>
                <div class="dropdown ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-slate-500" aria-expanded="false" data-tw-toggle="dropdown"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="h-40 2xl:h-56 image-fit">
                    <a href="" class="">
                        <img alt="Icewall Tailwind HTML Admin Template" class="rounded-md" src="dist/images/preview-6.jpg">
                    </a>
                </div>
                <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of model sentences</a> 
                <div class="text-slate-600 dark:text-slate-500 mt-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
            </div>
        </div>
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    
                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                    
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">Al Pacino</a> 
                    <div class="flex text-slate-500 truncate text-xs mt-0.5"> <a class="text-primary inline-block truncate" href="">Electronic</a> <span class="mx-1">•</span> 45 seconds ago </div>
                </div>
                <div class="dropdown ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-slate-500" aria-expanded="false" data-tw-toggle="dropdown"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="h-40 2xl:h-56 image-fit">
                    <a href="" class="">
                        <img alt="Icewall Tailwind HTML Admin Template" class="rounded-md" src="dist/images/preview-6.jpg">
                    </a>
                </div>
                <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of model sentences</a> 
                <div class="text-slate-600 dark:text-slate-500 mt-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
            </div>
        </div>
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
