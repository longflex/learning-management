@extends('../layout/' . $layout)

@section('subhead')
    <title>History - Icewall - Tailwind HTML Admin Template</title>
@endsection
@section('subtitle')
<h2 class="text-lg font-medium truncate mr-5">
History
</h2>
@endsection
@section('subcontent')
<!-- BEGIN: Inbox Content -->
<div class="intro-y inbox box mt-5">
    <div class="p-5 flex flex-col-reverse sm:flex-row text-slate-500 border-b border-slate-200/60">
        <div class="flex items-center mt-3 sm:mt-0 border-t sm:border-0 border-slate-200/60 pt-5 sm:pt-0 mt-5 sm:mt-0 -mx-5 sm:mx-0 px-5 sm:px-0">
            <input class="form-check-input" type="checkbox">
            <div class="dropdown ml-1" data-tw-placement="bottom-start">
                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-feather="chevron-down" class="w-5 h-5"></i> </a>
                <div class="dropdown-menu w-32">
                    <ul class="dropdown-content">
                        <li> <a href="" class="dropdown-item">All</a> </li>
                        <li> <a href="" class="dropdown-item">None</a> </li>
                        <li> <a href="" class="dropdown-item">Read</a> </li>
                        <li> <a href="" class="dropdown-item">Unread</a> </li>
                        <li> <a href="" class="dropdown-item">Starred</a> </li>
                        <li> <a href="" class="dropdown-item">Unstarred</a> </li>
                    </ul>
                </div>
            </div>
            <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="refresh-cw"></i> </a>
            <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="more-horizontal"></i> </a>
        </div>
        <div class="flex items-center sm:ml-auto">
            <div class="">1 - 50 of 5,238</div>
            <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
            <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
            <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="settings"></i> </a>
        </div>
    </div>
    <div class="overflow-x-auto sm:overflow-x-visible">
        <div class="intro-y">
            <div class="inbox__item inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" checked>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">Denzel Washington</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">It is a long established fact </span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">03:20 PM</div>
                </div>
            </div>
        </div>
        <div class="intro-y">
            <div class="inbox__item inbox__item--active inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" >
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">Al Pacino</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">It is a long established fact </span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">05:09 AM</div>
                </div>
            </div>
        </div>
        <div class="intro-y">
            <div class="inbox__item inbox__item--active inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" >
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">Leonardo DiCaprio</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">It is a long established fact </span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">01:10 PM</div>
                </div>
            </div>
        </div>
        <div class="intro-y">
            <div class="inbox__item inbox__item--active inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" >
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-8.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">John Travolta</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Contrary to popular belief, Lo</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20 </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">01:10 PM</div>
                </div>
            </div>
        </div>
        <div class="intro-y">
            <div class="inbox__item inbox__item--active inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" >
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">Russell Crowe</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Contrary to popular belief, Lo</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20 </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">05:09 AM</div>
                </div>
            </div>
        </div>
        <div class="intro-y">
            <div class="inbox__item inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" checked>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-8.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">Angelina Jolie</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Contrary to popular belief, Lo</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20 </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">01:10 PM</div>
                </div>
            </div>
        </div>
        <div class="intro-y">
            <div class="inbox__item inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" checked>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-14.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">Kevin Spacey</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">There are many variations of passages of Lorem Ips</span> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">06:05 AM</div>
                </div>
            </div>
        </div>
        <div class="intro-y">
            <div class="inbox__item inbox__item--active inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" >
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">Robert De Niro</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Contrary to popular belief, Lo</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20 </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">05:09 AM</div>
                </div>
            </div>
        </div>
        <div class="intro-y">
            <div class="inbox__item inbox__item--active inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" >
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">Al Pacino</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Contrary to popular belief, Lo</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20 </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">05:09 AM</div>
                </div>
            </div>
        </div>
        <div class="intro-y">
            <div class="inbox__item inbox__item--active inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" >
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">Denzel Washington</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Lorem Ipsum is simply dummy te</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500 </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">01:10 PM</div>
                </div>
            </div>
        </div>
        <div class="intro-y">
            <div class="inbox__item inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" checked>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-11.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">Will Smith</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Lorem Ipsum is simply dummy te</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500 </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">05:09 AM</div>
                </div>
            </div>
        </div>
        <div class="intro-y">
            <div class="inbox__item inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" checked>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">Tom Cruise</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">It is a long established fact </span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">03:20 PM</div>
                </div>
            </div>
        </div>
        <div class="intro-y">
            <div class="inbox__item inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" checked>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-8.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">Kevin Spacey</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">It is a long established fact </span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">05:09 AM</div>
                </div>
            </div>
        </div>
        <div class="intro-y">
            <div class="inbox__item inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" checked>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-10.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">Kevin Spacey</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Contrary to popular belief, Lo</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20 </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">01:10 PM</div>
                </div>
            </div>
        </div>
        <div class="intro-y">
            <div class="inbox__item inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" checked>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">Russell Crowe</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">There are many variations of passages of Lorem Ips</span> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">03:20 PM</div>
                </div>
            </div>
        </div>
        <div class="intro-y">
            <div class="inbox__item inbox__item--active inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" >
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">Nicolas Cage</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">It is a long established fact </span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">05:09 AM</div>
                </div>
            </div>
        </div>
        <div class="intro-y">
            <div class="inbox__item inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" checked>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">Russell Crowe</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Contrary to popular belief, Lo</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20 </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">01:10 PM</div>
                </div>
            </div>
        </div>
        <div class="intro-y">
            <div class="inbox__item inbox__item--active inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" >
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-10.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">Arnold Schwarzenegger</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Contrary to popular belief, Lo</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20 </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">01:10 PM</div>
                </div>
            </div>
        </div>
        <div class="intro-y">
            <div class="inbox__item inbox__item--active inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" >
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-3.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">Russell Crowe</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Contrary to popular belief, Lo</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20 </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">05:09 AM</div>
                </div>
            </div>
        </div>
        <div class="intro-y">
            <div class="inbox__item inbox__item--active inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-72 flex-none flex items-center mr-5">
                        <input class="form-check-input flex-none" type="checkbox" >
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="star"></i> </a>
                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400"> <i class="w-4 h-4" data-feather="bookmark"></i> </a>
                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                            <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                        </div>
                        <div class="inbox__item--sender truncate ml-3">Christian Bale</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Contrary to popular belief, Lo</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20 </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">05:09 AM</div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-5 flex flex-col sm:flex-row items-center text-center sm:text-left text-slate-500">
        <div>4.41 GB (25%) of 17 GB used Manage</div>
        <div class="sm:ml-auto mt-2 sm:mt-0">Last account activity: 36 minutes ago</div>
    </div>
</div>
<!-- END: Inbox Content -->
@endsection
@section('script')
@endsection
