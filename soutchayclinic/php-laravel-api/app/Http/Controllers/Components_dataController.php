<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Components Data Contoller
 * Use for getting values from the database for page components
 * Support raw query builder
 * @category Controller
 */
class Components_dataController extends Controller{
	
	/**
     * patient_id_option_list Model Action
     * @return array
     */
	function patient_id_option_list(Request $request){
		$sqltext = "SELECT patient_id as value, full_name as label FROM patients";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}

	/**
     * service_id_option_list Model Action
     * @return array
     */
	function service_id_option_list(Request $request){
		$sqltext = "SELECT service_id as value, name as label FROM services";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}

	/**
     * staff_id_option_list Model Action
     * @return array
     */
	function staff_id_option_list(Request $request){
		$sqltext = "SELECT staff_id as value, name as label FROM staff";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}

	/**
     * appointment_id_option_list Model Action
     * @return array
     */
	function appointment_id_option_list(Request $request){
		$sqltext = "SELECT appointment_id as value, appointment_id as label FROM appointments";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}

	/**
     * role_id_option_list Model Action
     * @return array
     */
	function role_id_option_list(Request $request){
		$sqltext = "SELECT role_id as value, role_name as label FROM roles";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}

	/**
     * getcount_appointments Model Action
     * @return Value
     */
	function getcount_appointments(Request $request){
		$sqltext = "SELECT COUNT(*) AS num FROM appointments";
		$query_params = [];
		$val = DB::select($sqltext, $query_params);
		return $val[0]->num;
	}
}
