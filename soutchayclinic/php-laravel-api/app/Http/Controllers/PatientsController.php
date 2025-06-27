<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\PatientsAddRequest;
use App\Http\Requests\PatientsEditRequest;
use App\Models\Patients;
use Illuminate\Http\Request;

use \PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PatientsListExport;
use App\Exports\PatientsViewExport;
use Exception;

class PatientsController extends Controller
{
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view(Request $request, $rec_id = null){
		$query = Patients::query();
		// if request format is for export example:- product/view/344?export=pdf
		if($this->getExportFormat()){
			return $this->ExportView($query, $rec_id, $request);
		}

		$record = $query->findOrFail($rec_id, Patients::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(PatientsAddRequest $request){
		$modeldata = $request->validated();
		
		//save Patients record
		$record = Patients::create($modeldata);
		$rec_id = $record->patient_id;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(PatientsEditRequest $request, $rec_id = null){
		$query = Patients::query();
		$record = $query->findOrFail($rec_id, Patients::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $request->validated();
			$record->update($modeldata);
		}
		return $this->respond($record);
	}
	

	/**
     * Delete record from the database
	 * Support multi delete by separating record id by comma.
	 * @param  \Illuminate\Http\Request
	 * @param string $rec_id //can be separated by comma 
     * @return \Illuminate\Http\Response
     */
	function delete(Request $request, $rec_id = null){
		$arr_id = explode(",", $rec_id);
		$query = Patients::query();
		$query->whereIn("patient_id", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
	

	/**
     * Export table records to different format
	 * supported format:- PDF, CSV, EXCEL, HTML
	 * @param \Illuminate\Database\Eloquent\Model $query
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
	private function ExportList($query, $request){
		ob_end_clean(); // clean any output to allow file download
		$filename = "ListPatientsReport-" . date_now();

		$format = $this->getExportFormat();

		if($format == "print"){
			$records = $query->get(Patients::exportListFields());
			return view("reports.patients-list", ["records" => $records]);
		}
		elseif($format == "pdf"){
			$records = $query->get(Patients::exportListFields());
			$pdf = PDF::loadView("reports.patients-list", ["records" => $records]);
			return $pdf->download("$filename.pdf");
		}
		elseif($format == "csv"){
			return Excel::download(new PatientsListExport($query), "$filename.csv", \Maatwebsite\Excel\Excel::CSV);
		}
		elseif($format == "excel"){
			return Excel::download(new PatientsListExport($query), "$filename.xlsx", \Maatwebsite\Excel\Excel::XLSX);
		}
	}
	

	/**
     * Export single record to different format
	 * supported format:- PDF, CSV, EXCEL, HTML
	 * @param \Illuminate\Database\Eloquent\Model $record
	 * @param string $rec_id
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
	private function ExportView($query, $rec_id, $request){
		ob_end_clean();// clean any output to allow file download
		$filename ="ViewPatientsReport-" . date_now();
		$format = $this->getExportFormat();
		if($format == "print"){
			$record = $query->findOrFail($rec_id, Patients::exportViewFields());
			return view("reports.patients-view", ["record" => $record]);
		}
		elseif($format == "pdf"){
			$record = $query->findOrFail($rec_id, Patients::exportViewFields());
			$pdf = PDF::loadView("reports.patients-view", ["record" => $record]);
			return $pdf->download("$filename.pdf");
		}
		elseif($format == "csv"){
			return Excel::download(new PatientsViewExport($query, $rec_id), "$filename.csv", \Maatwebsite\Excel\Excel::CSV);
		}
		elseif($format == "excel"){
			return Excel::download(new PatientsViewExport($query, $rec_id), "$filename.xlsx", \Maatwebsite\Excel\Excel::XLSX);
		}
	}
}
