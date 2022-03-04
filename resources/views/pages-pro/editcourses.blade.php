@extends('../layout/' . $layout)

@section('subhead')
    <title>Add New Post - Icewall - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<div class="flex items-center">
    <x-auth-validation-errors class="p-5" :errors="$errors" style="color: red;" />
</div>
@if(Session::has('success'))
    <div class="font-medium p-5" style="color: green;">
        {!! Session::get('success') !!}
    </div>
@endif
@if(Session::has('id'))
    <div class="font-medium p-5" style="color: orange;">
        {!! Session::get('id') !!}
    </div>
@endif
<form method="POST" enctype="multipart/form-data" action="{{ route('addcourses.store') }}">
            @csrf   
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Add New Course</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="{{route('courses.list')}}" class="btn btn-pending shadow-md w-48 flex items-center" aria-expanded="false" >
                Cancel
            </a>
            <button type="submit" class="btn btn-primary shadow-md w-48 flex items-center" aria-expanded="false" >
                Save
            </button>
        </div>
    </div>
    
    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Post Content -->
        <div class="intro-y col-span-12 lg:col-span-8">
            <input name="name" type="text" class="intro-y form-control py-3 px-4 box pr-10" value="{{ old('name') }}" placeholder="Title">
            <div class="post intro-y overflow-hidden box mt-5">
                
                <div class="post__content tab-content">
                    <div id="contentval" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                        <textarea name="contentval" id="editor" placeholder="Write content" value="">
                        {{ old('contentval') }}
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Post Content -->
        <!-- BEGIN: Post Info -->
        <div class="col-span-12 lg:col-span-4">
            <div class="intro-y box p-5">
                <div>
                    <label class="form-label">Written By</label>
                        <div class="btn w-full btn-outline-secondary dark:bg-darkmode-800 dark:border-darkmode-800 flex items-center justify-start">
                            <div class="w-6 h-6 image-fit mr-3">
                                <img class="rounded" alt="Icewall Tailwind HTML Admin Template" src="{{ asset('storage/images/' . $loggedin_user->photo) }}">
                            </div>
                            <div class="truncate">{{ $loggedin_user->name }}</div>
                        </div>
                </div>
                <div class="mt-3">
                    <label for="posted_at" class="form-label">Post Date</label>
                    <input name="posted_at" type="text" class="datepicker form-control" id="posted_at" value="{{ old('posted_at') }}" data-single-mode="true">
                </div>
                <div class="mt-3">
                    <label for="category" class="form-label">Categories</label>
                    <select name="categories[]" data-placeholder="Select categories" class="tom-select w-full" id="category" multiple>
                        <option value=""></option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}" 
                            
                            @if(isset($course))
                                @if( in_array($category->id, $selectedCategories))
                                    {{ "selected" }}
                                @endif
                            @endif
                            
                            >{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="brief_title" class="form-label">Brief text</label>
                    <textarea name="brief_title" id="brief_title" class="w-full">{{ old('brief_title') }}</textarea>
                    
                </div>
                <div class="mt-3">
                    <label for="portfolio" class="form-label">Portfolio Link</label>
                    <input name="portfolio" type="text" class="form-control" id="portfolio" data-single-mode="true"  value="{{ old('portfolio') }}">
                </div>
                <div class="form-check form-switch flex flex-col items-start mt-3">
                    <label for="setactive" class="form-check-label ml-0 mb-2">Set Active</label>
                    <input value="1" name="setactive" id="setactive" class="form-check-input" type="checkbox">
                </div>
            </div>
        </div>
        <!-- END: Post Info -->
    </div>
    </form>
@endsection

@section('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>

    ClassicEditor
        .create( document.querySelector( '#editor' ), {
            //toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                ]
            }
        } )
        // .then( editor => {
        //     editor.isReadOnly = true;
        //     const toolbarElement = editor.ui.view.toolbar.element;
        //     toolbarElement.style.display = 'none';
        // })
        .catch( error => {
            console.log( error );
        } );

// alert(1);
//         $(document).ready(function (e) {
//          alert(2);
//         $('#photo_store').change(function(e){
//             path = $('#photo_store').val();
//             alert(path);
//             $('#image-preview').attr('src', path);
// //             let reader = new FileReader();

// //             reader.onload = (e) => { 
// // alert(4);
// //                 $('#image-preview').attr('src', e.target.result); 
// //             }

//             //reader.readAsDataURL(this.files[0]); 
        
//         });
        
//         });


    $(function()
    {
        $('#photo_store').change( function()
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
