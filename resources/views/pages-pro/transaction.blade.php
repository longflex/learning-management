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
    <div class="p-5 flex flex-col-reverse sm:flex-row text-slate-500 border-b border-slate-200/60"></div>
    <div class="overflow-x-auto sm:overflow-x-visible">
        <?php $i = 1?>
        @foreach($histories as $history)
        <div class="intro-y">
            <div class="inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                    <div class="w-12 flex-none flex items-center mr-5">
                        <div class="inbox__item--sender truncate ml-3">{{$i}}</div>
                    </div>
                    <div class="w-64 sm:w-auto truncate"> {{ $history->data }} </div>
                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">{{ $history->created_at }}</div>
                </div>
            </div>
        </div>
        <?php $i++ ?>
        @endforeach
    </div>
    <div class="p-5 flex flex-col sm:flex-row items-center text-center sm:text-left text-slate-500"></div>
</div>
<!-- END: Inbox Content -->
@endsection
@section('script')
@endsection
