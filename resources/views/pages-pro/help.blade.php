@extends('../layout/' . $layout)

@section('subhead')
    <title>Help - Icewall - Tailwind HTML Admin Template</title>
@endsection
@section('subtitle')
<h2 class="text-lg font-medium truncate mr-5">
Help
</h2>
@endsection
@section('subcontent')
<div id="social-media-button" class="col-span-12 lg:col-span-12 p-5">
    <div class="preview text-center">
        <div class="">
            <button class="btn btn-dark w-52 mr-2 mb-2">  <h1 class="font-medium">
                Create Ticket 
            </h1>
            </button>
            <button class="btn btn-danger w-52 mr-2 mb-2">  <h1 class="font-medium">
                How To Video
            </h1>
            </button>
            <button class="btn btn-success w-52 mr-2 mb-2">  <h1 class="font-medium">
                Chat Admin
            </h1>
            </button>
            
        </div>
    </div>
</div>
<!-- BEGIN: Basic Accordion -->
<div class="col-span-12 lg:col-span-12">
    <div class="intro-y box">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">
                FAQ...
            </h2>
            <button data-tw-toggle="modal" data-tw-target="#delete-modal-preview" class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
            </button>
        </div>
        <div id="basic-accordion" class="p-5">
            <div class="preview">
                <div id="faq-accordion-1" class="accordion">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-1" class="accordion-header">
                            <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-1" aria-expanded="true" aria-controls="faq-accordion-collapse-1"> OpenSSL Essentials: Working with SSL Certificates, Private Keys </button>
                        </div>
                        <div id="faq-accordion-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-2" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-2" aria-expanded="false" aria-controls="faq-accordion-collapse-2"> Understanding IP Addresses, Subnets, and CIDR Notation </button>
                        </div>
                        <div id="faq-accordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-3" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-3" aria-expanded="false" aria-controls="faq-accordion-collapse-3"> How To Troubleshoot Common HTTP Error Codes </button>
                        </div>
                        <div id="faq-accordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-4" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-4" aria-expanded="false" aria-controls="faq-accordion-collapse-4"> An Introduction to Securing your Linux VPS </button>
                        </div>
                        <div id="faq-accordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="delete-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="p-5 ">
                            <i data-feather="smile" style="color:blue;" class="w-4 h-4 text-danger mx-auto mt-3"></i> Add FAQ data
                            
                            <div class="mt-3">
                    <label for="portfolio" class="form-label">Title</label>
                    <input name="portfolio" type="text" class="form-control" id="portfolio" data-single-mode="true"  value="{{ old('portfolio') }}">
                </div>
                            <div class="mt-3">
                    <label for="brief_title" class="form-label">Text</label>
                    <textarea name="brief_title" id="brief_title" class="w-full">{{ old('brief_title') }}</textarea>
                    
                </div>
                        </div>
                        <div class="px-5 pb-8 text-center">
                            <a href="{{route('dashboard.torequest')}}" type="button" class="btn btn-success btn-sm w-16">YES</a>
                            <button type="button" data-tw-dismiss="modal" class="btn btn-sm btn-danger w-16 mr-1">NO</button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Basic Accordion -->
@endsection
@section('script')
@endsection
