<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use App\Models\CoursesCategories;
use App\Models\Share;
use App\Models\SharesCategories;
use App\Models\Offer;
use App\Models\OffersCategories;
use App\Models\Stage;
use App\Models\Level;
use App\Models\Ticket;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Carbon;
// use Carbon\Carbon;
class PageController extends Controller
{
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dashboardOverview1()
    {
        return view('pages/dashboard-overview-1', [
            // Specify the base layout.
            // Eg: 'side-menu', 'simple-menu', 'top-menu', 'login'
            // The default value is 'side-menu'

            //'layout' => 'top-menu',
        ]);
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dashboardOverview2()
    {
        return view('pages/dashboard-overview-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dashboardOverview3()
    {
        return view('pages/dashboard-overview-3');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function inbox()
    {
        return view('pages/inbox');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function fileManager()
    {
        return view('pages/file-manager');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pointOfSale()
    {
        return view('pages/point-of-sale');
    }



    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function post()
    {
        return view('pages/post');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function calendar()
    {
        return view('pages/calendar');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crudDataList()
    {
        return view('pages/crud-data-list');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crudForm()
    {
        return view('pages/crud-form');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function usersLayout1()
    {
        return view('pages/users-layout-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function usersLayout2()
    {
        return view('pages/users-layout-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function usersLayout3()
    {
        return view('pages/users-layout-3');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function profileOverview1()
    {
        return view('pages/profile-overview-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function profileOverview2()
    {
        return view('pages/profile-overview-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function profileOverview3()
    {
        return view('pages/profile-overview-3');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wizardLayout1()
    {
        return view('pages/wizard-layout-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wizardLayout2()
    {
        return view('pages/wizard-layout-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wizardLayout3()
    {
        return view('pages/wizard-layout-3');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function blogLayout1()
    {
        return view('pages/blog-layout-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function blogLayout2()
    {
        return view('pages/blog-layout-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function blogLayout3()
    {
        return view('pages/blog-layout-3');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pricingLayout1()
    {
        return view('pages/pricing-layout-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pricingLayout2()
    {
        return view('pages/pricing-layout-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function invoiceLayout1()
    {
        return view('pages/invoice-layout-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function invoiceLayout2()
    {
        return view('pages/invoice-layout-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function faqLayout1()
    {
        return view('pages/faq-layout-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function faqLayout2()
    {
        return view('pages/faq-layout-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function faqLayout3()
    {
        return view('pages/faq-layout-3');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('pages/login');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('pages/register');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function errorPage()
    {
        return view('pages/error-page');
    }

    

    

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function regularTable()
    {
        return view('pages/regular-table');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tabulator()
    {
        return view('pages/tabulator');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function modal()
    {
        return view('pages/modal');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function slideOver()
    {
        return view('pages/slide-over');
    }



    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function accordion()
    {
        return view('pages/accordion');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function button()
    {
        return view('pages/button');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function alert()
    {
        return view('pages/alert');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function progressBar()
    {
        return view('pages/progress-bar');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tooltip()
    {
        return view('pages/tooltip');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dropdown()
    {
        return view('pages/dropdown');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function typography()
    {
        return view('pages/typography');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function icon()
    {
        return view('pages/icon');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loadingIcon()
    {
        return view('pages/loading-icon');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function regularForm()
    {
        return view('pages/regular-form');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function datepicker()
    {
        return view('pages/datepicker');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tomSelect()
    {
        return view('pages/tom-select');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function fileUpload()
    {
        return view('pages/file-upload');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wysiwygEditorClassic()
    {
        return view('pages/wysiwyg-editor-classic');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wysiwygEditorInline()
    {
        return view('pages/wysiwyg-editor-inline');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wysiwygEditorBalloon()
    {
        return view('pages/wysiwyg-editor-balloon');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wysiwygEditorBalloonBlock()
    {
        return view('pages/wysiwyg-editor-balloon-block');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wysiwygEditorDocument()
    {
        return view('pages/wysiwyg-editor-document');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function validation()
    {
        return view('pages/validation');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function chart()
    {
        return view('pages/chart');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function slider()
    {
        return view('pages/slider');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function imageZoom()
    {
        return view('pages/image-zoom');
    }
    public function activate()
    {
        return view('pages-pro/activate');
    }
    public function dashboard()
    {
        $courses = Course::all();
        $course_num = $courses->count();
        $levels = Level::all();
        $level_num = $levels->count() - 1;
        $stages = Stage::all();
        $stage_num = $stages->count();
        $me = Auth::user();
        $unlocked_levels = $me->level->id - 1;
        $locked_levels = $level_num - $unlocked_levels;
        $unlocked_stages = $me->level->stage->id - 1;
        $locked_stages = $stage_num - $unlocked_stages;
        $ticket_time=0;
        $another=0;
        $nextlevel=0;
        if($me->state != "ready"){

            $startTime = strtotime($me->ticket->created_at);
            $curtime = time();
            $ticket_time = round(($curtime - $startTime)/60);
            $nextlevel = $me->ticket->level;

            if($me->state == "request"){
                $another = $me->ticket->receiver_user;
            }else if($me->state == "receive"){
                $another = $me->ticket->request_user;
            }
        }
        $histories = $me->history;

        return view('pages-pro/dashboard', compact('level_num','stage_num','unlocked_levels','locked_levels','unlocked_stages','locked_stages','ticket_time','another','nextlevel','histories'));
    }
    public function dashboard_torequest()
    {

        $id = Auth::user()->id;
        $user = User::findOrFail($id);

        $next_level_id = $user->level->id + 1;
        $next_level = Level::findOrFail($next_level_id);

        $next_fee = $next_level->fee;
        $next_name = $next_level->name;

        $verifier = User::where('level_id', $next_level_id)
            ->where('state', 'ready')->first();
        $new_model = Ticket::create([
            'request'=>$id,
            'receiver'=>$verifier->id,
            'level_id'=>$next_level_id
        ]);
        $verifier->ticket_id = $new_model->id;
        $verifier->state = 'receive';
        $verifier->save();
        $user->ticket_id = $new_model->id;
        $user->state = 'request';
        $user->save();

        return redirect()->back()->with('status', 'successfully updated');
    }
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateProfile()
    {
        return view('pages-pro/update-profile');
    }
    public function updateProfile_store_displayinfo(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpg,png,jpeg,gif|max:2048',
            'address' => 'required|max:150|min:10',
        ]);

        $id = $request->input("id");
        $user = User::find($id);
        if ($request->hasFile('photo')){ 
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->store('public/images');
            $hname = $request->file('photo')->hashName();
            $user->photo = $hname;
        } 
        
        $user->address = $request->address;
        $user->country = $request["country"];
        $user->save();
        
        return redirect()->back()->with('status', 'successfully updated');
    }
    public function updateProfile_store_personal(Request $request)
    {
        $validatedData = $request->validate([
            'crypto' => 'required|max:50|min:45',
            'phone' => 'required|numeric|max:20|min:7',
            'bank' => 'required|max:50|min:12',
        ]);

        $id = $request->input("id");
        $user = User::find($id);

        $user->phone = $request->phone;
        $user->bank = $request->bank;
        $user->crypto = $request["crypto"];
        $user->save();
        
        return redirect()->back()->with('status1', 'successfully updated');
    }
    public function help()
    {

        return view('pages-pro/help');
    }
    public function share()
    {
        $shares = Share::all();
        return view('pages-pro/share',compact('shares'))->with(['layout'=>'side-menu-private']);
    }
    public function addshares_page()
    {
        $categories = Category::all();
        $levels = Level::all();
        return view('pages-pro/addshares', compact('categories','levels'))->with(['layout'=>'side-menu-private']);
    }
    public function addshares_store(Request $request)
    {
        //dd($request->categories,$request->setactive);
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'contentval' => 'required|max:10000',
            'categories' => 'required',
            'brief_title' => 'required|max:200',
            'portfolio' => 'required|max:300|url',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput($request->all);
        }

        $share = Share::create($request->all());

        $categories = $request->categories;
        foreach ($categories as $category){
            $newSharesCategories = new SharesCategories();
            $newSharesCategories->share_id = $share->id;
            $newSharesCategories->category_id = $category;
            $share->categories()->save($newSharesCategories);
        }

        return redirect()->back()->withInput()->with(['success'=>"A share successfully added!",'id'=>$share->id]);
    }
    public function offer()
    {
        $offers = Offer::all();

        return view('pages-pro/offer', compact('offers'))->with(['layout'=>'side-menu']);
        
    }
    public function chat()
    {

        return view('pages-pro/chat');
    }
    public function history()
    {
        $me = Auth::user();
        $histories = $me->history;
        return view('pages-pro/transaction', compact('histories'));
    }
        /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function notification()
    {
        $me = Auth::user();
        $histories = $me->history;
        return view('pages-pro/transaction', compact('histories'));
    }
    public function groups()
    {
        return view('pages-pro/groups');
    }
    public function addoffers_page()
    {
        $categories = Category::all();
        $levels = Level::all();
        return view('pages-pro/addoffers', compact('categories','levels'))->with(['layout'=>'side-menu']);
    }
    public function addoffers_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'categories' => 'required',
            'brief_title' => 'required|max:200',
            'portfolio' => 'required|max:300|url',
            'mainlink' => 'required|max:300|url',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput($request->all);
        }

        $offer = Offer::create($request->all());

        $categories = $request->categories;
        foreach ($categories as $category){
            $newOffersCategories = new OffersCategories();
            $newOffersCategories->offer_id = $offer->id;
            $newOffersCategories->category_id = $category;
            $offer->categories()->save($newOffersCategories);
        }

        return redirect()->back()->withInput()->with(['success'=>"An offer successfully added!"]);
    }
    public function addcourses_page()
    {
        $categories = Category::all();
        $levels = Level::all();
        return view('pages-pro/addcourses', compact('categories','levels'))->with(['layout'=>'admin-menu']);
    }
    public function addcourses_store(Request $request)
    {
        //dd($request->categories,$request->setactive);
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'contentval' => 'required|max:10000',
            'categories' => 'required',
            'brief_title' => 'required|max:200',
            'portfolio' => 'required|max:300|url',
        ]);
 
        if ($validator->fails()) {
            return redirect('addcourses/page')
                        ->withErrors($validator)
                        ->withInput($request->all);
        }

        $course = Course::create($request->all());

        $categories = $request->categories;
        foreach ($categories as $category){
            $newCoursesCategories = new CoursesCategories();
            $newCoursesCategories->course_id = $course->id;
            $newCoursesCategories->category_id = $category;
            $course->categories()->save($newCoursesCategories);
        }

        return redirect()->back()->withInput()->with(['success'=>"A course successfully added!",'id'=>$course->id]);
        
        
    }
    public function editcourses_page($id)
    {
        $course = Course::findOrFail($id);
        $mode = 'edit';
        $categories = Category::all();
        $levels = Level::all();
        $selectedCategories = [];
        
        foreach($course->categories as $category){
            $selectedCategories []= $category->category_id;
        }

        return view('pages-pro/editcourses',compact('categories','mode', 'course', 'selectedCategories','levels'))->with(['layout'=>'admin-menu']);
    }
    public function editcourses_store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'contentval' => 'required|max:10000',
            'categories' => 'required',
            'brief_title' => 'required|max:200',
            'portfolio' => 'required|max:300|url',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput($request->all);
        }
        $id = $request->id;
        $course = Course::find($id);

        $course->fill($request->all())->save();

        $categories = $request->categories;
        foreach ($categories as $category){
            $newCoursesCategories = new CoursesCategories();
            $newCoursesCategories->course_id = $id;
            $newCoursesCategories->category_id = $category;
            $course->categories()->save($newCoursesCategories);
        }

        return redirect()->back()->withInput()->with(['success'=>"A course successfully added!",'id'=>$course->id]);
        
        
    }
    public function viewcourses_page($id)
    {
        $course = Course::findOrFail($id);
        $mode = 'view';
        $categories = Category::all();
        $levels = Level::all();
        $selectedCategories = [];
        
        foreach($course->categories as $category){
            $selectedCategories []= $category->category_id;
        }

        return view('pages-pro/viewcourses',compact('categories','mode', 'course', 'selectedCategories','levels'))->with(['layout'=>'admin-menu']);
    }
    public function courses_list()
    {

        $courses = Course::all();

        $courses->each(function($course) // foreach($posts as $post) { }
        {
            //do something
        });
        return view('pages-pro/courses_list', ['layout'=>'admin-menu','courses'=>$courses]);

    }
    public function courses_del($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->back()->with(['success'=>"A course successfully added!"]);
    }
    public function courses()
    {
        $me = Auth::user();
        $allcourses = Course::all();
        $unlockedcourses = Course::where('level_id','<=',$me->level_id)->get();
        
        return view('pages-pro/course',compact('allcourses','unlockedcourses'))->with(['layout'=>'side-menu']);
    }
    public function levels_page()
    {
        //$a = Level::all();
        $a = Stage::where('setactive','1')->get();
        return view('pages-pro/levels', compact('a'))->with(['layout'=>'admin-menu']);

    }
    public function addlevels_page(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100|unique:levels',
            'order' => 'required|max:1000|numeric',
            'fee' => 'required|max:10000|numeric',

        ]);
 
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $stage = Level::create($request->all());

        return redirect()->back()->withInput()->with(['success'=>"A state successfully added!"]);

    }
    public function stages_page()
    {
        $a = Stage::all();
        return view('pages-pro/stages', compact('a'))->with(['layout'=>'admin-menu']);

    }
    public function addstages_store(Request $request)
    {
        //dd($request->categories,$request->setactive);
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100|unique:stages',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $stage = Stage::create($request->all());

        return redirect()->back()->withInput()->with(['success'=>"A state successfully added!"]);
        
        
    }
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changePassword()
    {

        return view('pages-pro/change-password',['layout'=>'side-menu-private']);
    }
    
    
    public function changePasswordStore(Request $request)
    {
        
        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }
    
        if(strcmp($request->get('current_password'), $request->get('password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }
    
        $validatedData = $request->validate([
            'current_password' => 'required',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
    
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('password'));
        $user->save();
    
        return redirect()->back()->with("success","Password successfully changed!"); 
    }
}
