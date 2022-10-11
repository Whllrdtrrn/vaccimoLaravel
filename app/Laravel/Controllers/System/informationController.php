<?php 

namespace App\Laravel\Controllers\System;

/**
*
* Models used for this controller
*/
use App\Laravel\Models\User;
use App\Laravel\Models\Sideeffect;
use Illuminate\Http\Request as PageRequest;
/**
*
* Requests used for validating inputs
*/
use App\Laravel\Requests\System\CategoryRequest;

/**
*
* Classes used for this controller
*/
use Helper, Carbon, Session, Str,ImageUploader,Auth;

class informationController extends Controller{

	/**
	*
	* @var Array $data
	*/
	protected $data;

	public function __construct () {
		$this->data = [];
		parent::__construct();
		array_merge($this->data, parent::get_data());
		$this->data['statuses'] = [ 'active' => "Active","inactive" => "Inactive"];
		$this->data['heading'] = "Information Collection";
	}

	public function index () {
		$this->data['page_title'] = " :: Information  - Record Data";
		$this->data['information_item'] = User::orderBy('updated_at',"DESC")->where('type', '!=', "super_user")->get();
		return view('system.information.index',$this->data);
	}

	public function destroy ($id = NULL) {
		try {
			$info = User::find($id);

			if (!$info) {
				session()->flash('notification-status',"failed");
				session()->flash('notification-msg',"Record not found.");
				return redirect()->route('system.information.index');
			}

			if($id < 0){
				session()->flash('notification-status',"warning");
				session()->flash('notification-msg',"Unable to remove special record.");
				return redirect()->route('system.information.index');	
			}

			if($info->delete()) {
				session()->flash('notification-status','success');
				session()->flash('notification-msg',"Record has been deleted.");
				return redirect()->route('system.information.index');
			}

			session()->flash('notification-status','failed');
			session()->flash('notification-msg','Something went wrong.');

		} catch (Exception $e) {
			session()->flash('notification-status','failed');
			session()->flash('notification-msg',$e->getMessage());
			return redirect()->back();
		}
	}
	

	

}