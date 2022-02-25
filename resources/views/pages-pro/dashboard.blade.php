@extends('../layout/' . $layout)

@section('subhead')
    <title>Dashboard - Icewall - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')

            <!-- BEGIN: Sales Report -->

            <!--{{ print_r($loggedin_user); }}
            {{ print("---".$loggedin_user->email_verified_at."^|^".$loggedin_user->state."---")}} -->
            <div class="col-span-12 lg:col-span-6 mt-8">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        To Activate your account Click here
                    </h2>
                    <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                        <button data-tw-toggle="modal" data-tw-target="#delete-modal-preview" class="btn btn-rounded-primary w-24 mr-1 mb-2">Activate</button>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-12 mt-8 ">
                <div class="box bg-primary p-5 w-64 mx-auto">
                    <div class="flex">
                        <div class="">
                            <div class="text-md">Receiver : username</div>
                            <div class="text-md">Bank : details</div>
                            <div class="text-md">phone : unmber</div>
                        </div>
                        <div class="w-12 h-12 bg-pending rounded-full mr-3"></div>
                    </div>
                    <div class="text-md flex mt-8">
                        <button class="btn btn-sm btn-rounded btn-success-soft mr-1">chat</button>
                        <button class="btn btn-sm btn-rounded btn-warning-soft mr-1">upload</button>
                        <button class="btn btn-sm btn-rounded btn-danger-soft mr-1">dispute</button>
                    </div>
                </div>
            </div>
            <div id="delete-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="p-5 text-center">
                                <i data-feather="smile" style="color:blue;" class="w-16 h-16 text-danger mx-auto mt-3"></i> 
                                <div class="text-3xl mt-5">Are you sure you want<br>"Stage Name, Level Name"<br>Activation?
</div>
                                <div class="text-slate-500 mt-2">
                                You will be paired with a user to Activate<br>"Stage Name, Level Name
with Level Amount"<br>to a user that will be displayed on your dashboard.
                                    <br>
                                </div>
                            </div>
                            <div class="px-5 pb-8 text-center">
                                <button type="button" data-tw-dismiss="modal" class="btn btn-success w-24 mr-1">YES</button>
                                <button type="button" class="btn btn-danger w-24">NO</button>
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
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-6 intro-y">
                        <div class="box bg-primary p-5">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                <span class="text-md">Total Earning : NGN 135,000</span>
                            </div>
                            <div class="flex items-center mt-3">
                                <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                <div class="text-md text-justify ">Total Unlocked Course : 5</div>
                            </div>    
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-6 intro-y">
                        <div class="box bg-primary p-5">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-danger rounded-full mr-3"></div>
                                <span class="text-md">Total Completed Stage : 1</span>
                            </div>
                            <div class="flex items-center mt-3">
                                <div class="w-2 h-2 bg-success rounded-full mr-3"></div>
                                <div class="text-md text-justify ">Total Completed Level : 5</div>
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
                                <th class="text-center whitespace-nowrap">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="intro-x">
                                <td>
                                    <div class=" text-xs whitespace-nowrap mt-0.5">User Updated profile</div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class=" mt-1">2022-02-11 07:37:00</div>
                                </td>
                            </tr>
                            <tr class="intro-x">
                                <td>
                                    <div class=" text-xs whitespace-nowrap mt-0.5">User Updated profile</div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class=" mt-1">2022-02-11 07:37:00</div>
                                </td>
                            </tr>
                            <tr class="intro-x">
                                <td>
                                    <div class=" text-xs whitespace-nowrap mt-0.5">User Updated profile</div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class=" mt-1">2022-02-11 07:37:00</div>
                                </td>
                            </tr>
                            <tr class="intro-x">
                                <td>
                                    <div class=" text-xs whitespace-nowrap mt-0.5">User Updated profile</div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class=" mt-1">2022-02-11 07:37:00</div>
                                </td>
                            </tr>
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
<script>
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

</script>
@endsection
