<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Patients extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'patients';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'patient_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["full_name","gender","birth_date","phone","email","address"];
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
		];
	}

	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"patient_id", 
			"full_name", 
			"gender", 
			"birth_date", 
			"phone", 
			"email", 
			"address", 
			"created_at" 
		];
	}

	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"patient_id", 
			"full_name", 
			"gender", 
			"birth_date", 
			"phone", 
			"email", 
			"address", 
			"created_at" 
		];
	}

	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"patient_id", 
			"full_name", 
			"gender", 
			"birth_date", 
			"phone", 
			"email", 
			"address" 
		];
	}

	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
