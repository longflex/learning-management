@extends('../layout/' . $layout)

@section('subhead')
    <title>Dashboard - Icewall - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')

            <!-- BEGIN: Sales Report -->

            <!--{{ print_r($loggedin_user); }}
            {{ print("---".$loggedin_user->email_verified_at."^|^".$loggedin_user->state."---")}} -->
            @if ($loggedin_user->state === 'ready')
            <div class="col-span-12 lg:col-span-12 mt-8">
                <div  class="text-center">
                    <div class="mb-5 text-lg text-success" style="margin-left:0rem">
                        You are currently on “{{$loggedin_user->level->stage->name}}” “{{$loggedin_user->level->name}}”<br>
There are {{$locked_stages}} Stages, {{ $locked_levels}} Levels & {{$locked_levels}} Courses to Activate & Unlock.
</div>
                    <span class="mt-5 text-lg" style="margin-left:25rem">
                        To Activate your account,&nbsp&nbsp&nbsp&nbsp Click here...
                    </span>
                    <button data-tw-toggle="modal" data-tw-target="#delete-modal-preview" class="btn btn-sm btn-rounded-pending w-24 ml-5 mb-2">Activate</button>
                </div>
            </div>
            @elseif ($loggedin_user->state === 'request')
            <div class="col-span-12 lg:col-span-12 mt-8 ">
                <div  class="text-center mb-5">
                    <span class=" text-lg" style="margin-left:0rem">
                        Dear <i>{{$loggedin_user->name}}</i>, kindly pay your Activation Fee({{$nextlevel->fee}}$) for {{$nextlevel->name}} to the below Bank Details.
                    </span>
                </div>
                <div  class="text-center mb-5">
                    <span class="text-success text-lg" style="margin-left:0rem">
                    Congratulations! You have been ACTIVATED & Your New Course has been <a href="">UNLOCKED</a>...
                    </span>
                </div>
                <div class="box bg-primary p-5 items-center mx-auto" style="width: 400px ;">
                    <div class="flex txt-white">
                        <div class="mx-auto my-auto items-center">
                            <div class="text-md mb-3">Receiver : {{$another->name}}</div>
                            <div class="text-md mb-3">Bank : {{$another->bank}}</div>
                            <div class="text-md">phone : {{$another->phone}}</div>
                        </div>
                        <div class="relative mx-auto">
                            <canvas id="donut-chart-widget1" height="120" width="120"></canvas>
                            <div class="flex flex-col justify-center items-center absolute w-full h-full top-0 left-0">
                            <div class="text-2xl font-medium">{{floor(($nextlevel->wait_time*60 - $ticket_time)/60)}}:{{fmod(($nextlevel->wait_time*60 - $ticket_time),60)}}</div>
                                <div class="text-slate-500 mt-0.5">Remained</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-md text-center mt-8">
                        <button class="btn btn-sm btn-rounded btn-success-soft  ml-auto">CHAT</button>
                        <button class="btn btn-sm btn-rounded btn-warning-soft  ">UPLOAD</button>
                        <button class="btn btn-sm btn-rounded btn-danger-soft  mr-auto">DISPUTE</button>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <span class=" text-sm" style="margin-top:5rem">
                       <span class="text-danger text-md">WARNING!</span>&nbsp&nbsp Please, kindly make payment & upload your correct proof of payment.
                    </span>
                </div>
            </div>
            @elseif ($loggedin_user->state === 'receive')
            <div class="col-span-12 lg:col-span-12 mt-8 ">
                <div  class="text-center mb-5">
                    <span class=" text-lg" style="margin-left:0rem">
                    Dear <i>{{$loggedin_user->name}}</i>, you have been requested by “Paying Username” for Activation below
is the Contact Details.
                    </span>
                </div>
                <div class="box bg-primary p-5 items-center mx-auto" style="width: 400px ;">
                    <div class="flex txt-white">
                        <div class="mx-auto my-auto items-center">
                            <div class="text-md mb-3">Receiver : {{$another->name}}</div>
                            <div class="text-md mb-3">Bank : {{$another->bank}}</div>
                            <div class="text-md">phone : {{$another->phone}}</div>
                        </div>
                        <div class="relative mx-auto">
                            <canvas id="donut-chart-widget2" height="120" width="120"></canvas>
                            <div class="flex flex-col justify-center items-center absolute w-full h-full top-0 left-0">
                                <div class="text-2xl font-medium">{{floor(($nextlevel->wait_time*60 - $ticket_time)/60)}}:{{fmod(($nextlevel->wait_time*60 - $ticket_time)/60)}}</div>
                                <div class="text-slate-500 mt-0.5">Remained</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-md text-center mt-8">
                        <button class="btn btn-sm btn-rounded btn-warning-soft  ml-auto">CHAT</button>
                        <button class="btn btn-sm btn-rounded btn-secondary-soft  ">ACTIVATE</button>
                        <button class="btn btn-sm btn-rounded btn-dark-soft  ">DECLINE</button>
                        <button class="btn btn-sm btn-rounded btn-danger-soft  mr-auto">DISPUTE</button>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <span class=" text-sm" style="margin-top:5rem">
                       <span class="text-danger text-md">Caution!</span>&nbsp&nbsp Do not activate if you have not received payment
                    </span>
                </div>
            </div>
            @endif
            

            
            
            <div id="delete-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="p-5 text-center">
                                <i data-feather="smile" style="color:blue;" class="w-16 h-16 text-danger mx-auto mt-3"></i> 
                                <div class="text-3xl mt-5">Are you sure you want<br>"Stage Name, Level Name"<br>Activation?
                                </div>
                                <div class="text-slate-500 mt-2">
                                    You will be paired with a user to Activate<br>"Stage Name, Level Name with Level Amount"<br>to a user that will be displayed on your dashboard.
                                    <br>
                                </div>
                            </div>
                            <div class="px-5 pb-8 text-center">
                                <a href="{{route('dashboard.torequest')}}" type="button" class="btn btn-success w-24">YES</a>
                                <button type="button" data-tw-dismiss="modal" class="btn btn-danger w-24 mr-1">NO</button>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Sales Report -->
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <i data-feather="codepen" style="color:green;" class="block text-primary w-5 h-5 "></i>
                    <h2 class="text-lg font-medium truncate ml-3">
                     Statistics
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5 txt-white">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-6 intro-y">
                        <div class="box bg-primary p-5">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                <span class="text-md">Total Earning : NGN 0</span>
                            </div>
                            <div class="flex items-center mt-3">
                                <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                <div class="text-md text-justify ">Total Unlocked Course : 0</div>
                            </div>    
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-6 intro-y">
                        <div class="box bg-primary p-5">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-danger rounded-full mr-3"></div>
                                <span class="text-md">Total Completed Stage : 0</span>
                            </div>
                            <div class="flex items-center mt-3">
                                <div class="w-2 h-2 bg-success rounded-full mr-3"></div>
                                <div class="text-md text-justify ">Total Completed Level : 0</div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: General Report -->
                                            
            <!-- BEGIN: Weekly Top Products -->
            <div class="col-span-12 mt-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <i data-feather="activity" style="color:green;" class="block text-primary w-5 h-5 "></i>
                    <h2 class="text-lg font-medium truncate ml-3">
                        User Activities
                    </h2>
                    
                </div>
                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                    <table class="table table-report sm:mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Actions</th>
                                <th class="text-center whitespace-nowrap">Date & Time</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($histories as $history)
                            <tr class="intro-x">
                                <td>
                                    <div class=" text-xs whitespace-nowrap mt-0.5">{{$history->data}}</div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class=" mt-1">{{$history->created_at}}</div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
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
            </div>
            <!-- END: Weekly Top Products -->
        
@endsection
@section('script')
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>

<script>
    Pusher.logToConsole = true;

var pusher = new Pusher('4f7afe0ea1e454495543', {
    cluster: 'ap1',
  //encrypted: true
});

// Subscribe to the channel we specified in our Laravel Event
var channel = pusher.subscribe('status-liked');

// Bind a function to a Event (the full Laravel class)
channel.bind('this-event', function(data) {
    console.log(data);
    console.log(data.username);
  console.log(2);
});

const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
const month = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
function addZero(i) {
  if (i < 10) {i = "0" + i}
  return i;
}


function showTime() {
    var d = new Date();
    let h = addZero(d.getHours());
    let m = addZero(d.getMinutes());
    let s = addZero(d.getSeconds());
    let dd = addZero(d.getDate());
    let time = h + ":" + m + ":" + s;
    document.getElementById('time').innerHTML = weekday[d.getDay()]+" "+dd+" "+month[d.getMonth()]+" "+d.getFullYear()+" "+time;
  }

  setInterval(showTime, 1000);

  const dataDoughnut = {
    //labels: ["JavaScript", "Ruby"],
    datasets: [
      {
        //label: "My First Dataset",
        data: [{{($loggedin_user->state == 'ready')?0:$ticket_time}}, {{($loggedin_user->state == 'ready')?0:($nextlevel->wait_time*60 - $ticket_time)}}],
        backgroundColor: [
          "rgb(164, 101, 241)",
          "rgb(101, 143, 241)",
        ],
        borderColor: [
          "rgb(255, 255, 255)",
          "rgb(255, 255, 255)",
        ],
        borderWidth:1,
        hoverOffset: 4,
      },
    ],
  };

  const configDoughnut = {
    type: "doughnut",
    data: dataDoughnut,
    options: {
        cutoutPercentage:86
    },
  };

  var chartBar = new Chart(
    document.getElementById("donut-chart-widget1"),
    configDoughnut
  );
  var chartBar1 = new Chart(
    document.getElementById("donut-chart-widget2"),
    configDoughnut
  );

</script>
@endsection
