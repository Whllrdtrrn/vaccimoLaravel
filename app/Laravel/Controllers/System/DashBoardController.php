<?php 

namespace App\Laravel\Controllers\System;

/**
*
* Models used for this controller
*/
use App\Laravel\Models\User;
use App\Laravel\Models\Sideeffect;
use App\Laravel\Models\Counter;
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

class DashBoardController extends Controller{

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
		$this->data['heading'] = "Dashboard";
	}

	public function index () {
		$this->data['projects'] = Counter::latest()->paginate(5);
		$this->data['page_title'] = " :: Dashboard - Record Data";
		$this->data['dashboard_item'] = User::orderBy('updated_at',"DESC")->where('type', '!=', "super_user")->get();
		$this->data['dashboards_item'] = sideeffect::orderBy('updated_at',"DESC")->get();
		$this->data['totalId'] = User::where('type','user')->count(); 
		$this->data['totalSurvey'] = Sideeffect::count();
		$this->data['admin'] = User::where('type','super_user')->count();

		$this->data['muscle_ache'] = Sideeffect::where('muscle_ache', '!=','')->count();
		$this->data['headache'] = Sideeffect::where('headache', '!=','')->count();
		$this->data['fever'] = Sideeffect::where('fever', '!=','')->count();
		$this->data['redness'] = Sideeffect::where('redness', '!=','')->count();
		$this->data['swelling'] = Sideeffect::where('swelling', '!=','')->count();
		$this->data['tenderness'] = Sideeffect::where('tenderness', '!=','')->count();
		$this->data['warmth'] = Sideeffect::where('warmth', '!=','')->count();
		$this->data['itch'] = Sideeffect::where('itch', '!=','')->count();
		$this->data['induration'] = Sideeffect::where('induration', '!=','')->count();
		$this->data['feverish'] = Sideeffect::where('feverish', '!=','')->count();
		$this->data['chills'] = Sideeffect::where('chills', '!=','')->count();
		$this->data['join_pain'] = Sideeffect::where('join_pain', '!=','')->count();
		$this->data['fatigue'] = Sideeffect::where('fatigue', '!=','')->count();
		$this->data['nausea'] = Sideeffect::where('nausea', '!=','')->count();
		$this->data['vomiting'] = Sideeffect::where('vomiting', '!=','')->count();



		return view('system.dashboard.index',$this->data);
	}
}