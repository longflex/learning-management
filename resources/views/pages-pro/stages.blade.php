@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Form - Icewall - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Add new stage</h2>
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
            <!-- BEGIN: Form Layout -->
            <form method="POST" enctype="multipart/form-data" action="{{ route('addstages.store') }}">
            @csrf   
            <div class="intro-y box p-5">
                <div>
                    <label for="name" class="form-label">Stage Name</label>
                    <input id="name" name="name" value="{{old('name')}}" type="text" class="form-control w-full" placeholder="Input text">
                </div>
                <div class="mt-3">
                    <label>Active Status</label>
                    <div class="form-switch mt-2" for="setactive">
                        <input value="1" {{ (old('setactive') === '1')?'checked':'' }} type="checkbox" name="setactive" id="setactive" class="form-check-input">
                    </div>
                </div>
                <div class="text-right mt-5">
                    <button type="submit" class="btn btn-primary w-24">Save</button>
                </div>
            </div>
            </form>
            <!-- END: Form Layout -->
        </div>
        <div class="col-span-6">
            <div class="intro-y overflow-auto lg:overflow-visible">
                <table class="table table-report">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">NUMBER</th>
                            <th class="whitespace-nowrap">STAGE NAME</th>
                            <th class="text-center whitespace-nowrap">STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                    @foreach($a as $stage)
                    
                        <tr class="intro-x">
                            <td class="w-30">
                                <div class="">
                                    <div class="w-10 h-10 image-fit zoom-in items-center text-center">
                                        <span class="my-auto items-center text-center">{{$i}}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">{{$stage->name}}</a> 
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{$stage->created_at}}</div>
                            </td>
                            <td class="text-center"><i data-feather="{{($stage->setactive === 1)?'circle':'x'}}" class="w-4 h-4 mr-2"></i></td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
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
            </div>
        </div>
    </div>
@endsection

@section('script')
    
@endsection
