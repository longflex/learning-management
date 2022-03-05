@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Form - Icewall - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Add new level</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="flex items-center">
                <x-auth-validation-errors class="p-5" :errors="$errors" style="color: red;" />
            </div>
            @if(Session::has('success'))
                <div class="font-medium p-5" style="color: green;">
                    {!! Session::get('success') !!}
                </div>
            @endif
            <form method="POST" enctype="multipart/form-data" action="{{ route('addlevels.page') }}">
                 @csrf   
                <!-- BEGIN: Form Layout -->
                <div class="intro-y box p-5">
                    <div>
                        <label for="name" class="form-label">Level Name</label>
                        <input id="name" name="name" type="text" class="form-control w-full" placeholder="Input text" value="{{old('name')}}">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-2" class="form-label">Stage Name</label>
                        <select data-placeholder="Select" class="w-full" id="stage" name="stage">
                            @foreach ($a as $stage)
                                <option value="{{$stage->id}}" 
                                {{ (old('stage') == $stage->id) ? 'selected':'' }}
                                >{{$stage->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-3" class="form-label">Level Number</label>
                        <div class="input-group">
                            <div id="input-group-1" class="input-group-text">No</div>
                            <input id="crud-form-3"  value="{{old('order')}}" name="order" type="text" class="form-control" placeholder="Level Number" aria-describedby="input-group-1">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-4" class="form-label">Level Fee</label>
                        <div class="input-group">
                            <input value="{{old('fee')}}" id="crud-form-4" name="fee" type="text" class="form-control" placeholder="Input fee amount" aria-describedby="input-group-2">
                            <div id="input-group-2" class="input-group-text">$</div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label>Active Status</label>
                        <div class="form-switch mt-2">
                            <input {{ (old('setactive') === '1')?'checked':'' }} value="1" name="setactive" type="checkbox" class="form-check-input">
                        </div>
                    </div>
                    <div class="text-right mt-5">
                        <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24">Save</button>
                    </div>
                </div>
                <!-- END: Form Layout -->
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
@endsection
