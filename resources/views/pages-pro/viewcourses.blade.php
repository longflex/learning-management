@extends('../layout/' . $layout)

@section('subhead')
    <title>Add New Post - Icewall - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<form method="POST" enctype="multipart/form-data" action="{{ route('editcourses.store') }}">
            @csrf   
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">View Course</h2>
    </div>
    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Post Content -->
        <div class="intro-y col-span-12 lg:col-span-12">
            <div class="text-center">
                <h2 class="text-xl font-medium mr-auto">{{ $course->name }}</h2>
            </div>
            <div class="post intro-y overflow-hidden box mt-5">
                <div class="px-10 pt-5 flex">
                    <span class="mr-auto">Level : {{ $course->level->name }}</span>
                    <span class="ml-auto">Posted at : {{ $course->posted_at }}</span>
                </div>
                <div class="post__content tab-content">
                    <div id="contentval" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                        <textarea name="contentval" id="editor" placeholder="Write content" value="">
                        {{ $course->contentval }}
                        </textarea>
                    </div>
                </div>
                <div class="p-10 flex">
                    <span class="ml-auto">Written by : {{ $loggedin_user->name }}</span>
                </div>
            </div>
        </div>
        <!-- END: Post Content -->
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
        .then( editor => {
            editor.isReadOnly = true;
            const toolbarElement = editor.ui.view.toolbar.element;
            toolbarElement.style.display = 'none';
        })
        .catch( error => {
            console.log( error );
        } );

    </script>
@endsection
