<?php 

namespace App\Exports;
use App\Models\TreatmentRecords;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class TreatmentrecordsListExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	
	protected $query;
	
    public function __construct($query)
    {
        $this->query = $query->select(TreatmentRecords::exportListFields());
    }
	
    public function query()
    {
        return $this->query;
    }
	
	public function headings(): array
    {
        return [
			'Record Id',
			'Appointment Id',
			'Notes',
			'Treatment Result',
			'Created At'
        ];
    }
	
    public function map($record): array
    {
        return [
			$record->record_id,
			$record->appointment_id,
			$record->notes,
			$record->treatment_result,
			$record->created_at
        ];
    }
}
