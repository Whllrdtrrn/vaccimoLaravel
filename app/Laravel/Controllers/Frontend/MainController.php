<?php

namespace App\Laravel\Controllers\Frontend;
use App\Laravel\Models\User;
use App\Laravel\Models\Sideeffect;
use Illuminate\Http\Request as PageRequest;
use App\Laravel\Models\Counter;
use Helper, Carbon, Session, Str, DB,Input,Event,Auth,ImageUploader;
class MainController extends Controller
{	
	protected $data;

	public function __construct () {
		
	}

    public function home_page(){
			Counter::increment('views');
			return view ('frontend.home_page.index');
	}

	public function side_effect(){
   
		return view ('frontend.side_effect.index');
	}
	public function dashboard(){
   
		return view ('frontend.dashboard.index');
	}


	public function information() {
		$id = Auth::user()->id;
		$user_data = User::find($id);

		$this->data['user_data'] = $user_data;
		return view('frontend.information.index',$this->data);
	}

	

	public function update(PageRequest $request){
		// return dd($request);
		try {
			$id = Auth::user()->id;
			DB::beginTransaction();
			$user_item = User::find($id);

			
				$file = $request->file('file');
				$filename = time().$file->getClientOriginalName();
				$path = public_path().'/uploads/images/';
				// dd($file,$filename,$path);
				$user_item->file_name = $filename;
				$user_item->directory = $path;
				$user_item->full_path = $path."/".$filename;
				$user_item->fill($request->except(['file']));
				$user_item->fill($request->only('name','vaccination_brand','vaccination_site','address','age','gender','email','contact_number'));
				$user_item->save();
				$file->move($path, $filename);
				session()->flash('notification-status','success');
				DB::commit();
				return redirect()->route('frontend.information.side_effect');
				
		
		} catch (Exception $e) {
			DB::rollback();
			session()->flash('notification-status','warning');
			session()->flash('notification-msg',"Went something wrong".$e->message());
			return redirect()->back();
		}
	}

	public function store (PageRequest $request) {
			$id = Sideeffect::where('user_id',Auth::user()->id)->first();
		
			if($id == null) {
				try {
					$side_effect_save = new Sideeffect;
					$side_effect_save->fill($request->only(
						'muscle_ache',
						'headache',
						'fever',
						'redness',
						'swelling',
						'tenderness',
						'warmth',
						'itch',
						'induration',
						'feverish',
						'chills',
						'join_pain',
						'fatigue',
						'nausea',
						'vomiting',
					));
					$side_effect_save->user_id = Auth::user()->id;
					$side_effect_save->name = Auth::user()->name;

					if($side_effect_save->save()) {
						session()->flash('notification-status','success');
						session()->flash('notification-msg',"New record has been added.");
						return redirect()->route('frontend.information.success');
					}
					session()->flash('notification-status','failed');
					session()->flash('notification-msg','Something went wrong.');
		
					return redirect()->back();
				} catch (Exception $e) {
					session()->flash('notification-status','failed');
					session()->flash('notification-msg',$e->getMessage());
					return redirect()->back();
				}
			}
			else {
				try {
					DB::beginTransaction();
					$side_effect_update = Sideeffect::where('user_id',Auth::user()->id)->first();
					

						$side_effect_update->fill($request->except(['file']));
						$side_effect_update->fill($request->only(
							'muscle_ache',
							'headache',
							'fever',
							'redness',
							'swelling',
							'tenderness',
							'warmth',
							'itch',
							'induration',
							'feverish',
							'chills',
							'join_pain',
							'fatigue',
							'nausea',
							'vomiting',
						));
						$side_effect_update->save();
						session()->flash('notification-status','success');
						DB::commit();
						return redirect()->route('frontend.information.success');
						
				
				} catch (Exception $e) {
					DB::rollback();
					session()->flash('notification-status','warning');
					session()->flash('notification-msg',"Went something wrong".$e->message());
					return redirect()->back();
				}
			}
		}
		public function success(){
   
			return view ('frontend.success.index');
	}


}
