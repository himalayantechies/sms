<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;

class TeacherDataExport implements FromCollection, WithHeadings, WithTitle, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    protected $class_id;

    function __construct($class_id)
    {
        $this->class_id = $class_id;
    }
    public function collection()
    {
        $query = User::join('teachers', 'teachers.user_id', 'users.id');
        if (isset($this->class_id)) {
            $query->join('routines', 'users.id', 'routines.teacher_id')
                ->where('routines.class_id', $this->class_id);
        }
        $teacher = $query->where('users.school_id', auth()->user()->school_id)->get([
            'users.name',
            'teachers.gender',
            'teachers.caste',
            'teachers.nationality',
            'teachers.dob',
            'teachers.citizenship_no',
            'teachers.issuing_district',
            'teachers.father_name',
            'teachers.mother_name',
            'teachers.spouse_name',
            'teachers.mother_tongue',
            'teachers.disability',
            'users.email',
            'teachers.mobile_number',
            'teachers.teacher_type',
            'teachers.designation'
        ]);
        $collection = [];
        $count = count($teacher);
        for ($i = 0; $i < $count; $i++) {
            array_push($collection, array(
                $i + 1,
                $teacher[$i]->name,
                $teacher[$i]->gender,
                $teacher[$i]->caste,
                $teacher[$i]->nationality,
                $teacher[$i]->dob,
                $teacher[$i]->citizenship_no,
                $teacher[$i]->issuing_district,
                $teacher[$i]->father_name,
                $teacher[$i]->mother_name,
                $teacher[$i]->spouse_name,
                $teacher[$i]->mother_tongue,
                $teacher[$i]->disability,
                $teacher[$i]->email,
                $teacher[$i]->mobile_number,
                $teacher[$i]->teacher_type,
                $teacher[$i]->designation,
            ));
        }
        return new Collection($collection);
    }
    public function headings(): array
    {
        return [
            'S.N',
            'Name',
            'Gender',
            'Caste/Ethnicity',
            'Nationality',
            'Date of Birth (A.D)',
            'Citizenship No',
            'Issue District',
            "Father's Name",
            "Mother's Name",
            "Spouse's Name",
            'Mother Tongue',
            'Disability',
            'Email',
            'Mobile/Phone No.',
            'Teacher Type',
            'Designation'
        ];
    }
    public function title(): string
    {
        return 'Teacher List';
    }
}
