<div class="card">
    <div class="card-header bg-info-subtle text-dark d-flex justify-content-between">
        <div class="d-flex align-items-center">
            Marks Sheets [Grade : <span class="grade mx-2"></span> Section: <span class="section mx-2"></span> Exam :
            <span class="exam mx-2"></span>]
        </div>
        <div>
            <a href="" class="btn btn-outline-dark">Calculate marks</a>
            <a href="" class="btn btn-outline-dark">Clear Data</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table eTable table-bordered">
            <thead>
                <tr>
                    <th>{{ get_phrase('Regd') }}</th>
                    <th>{{ get_phrase('Roll No.') }}</th>
                    <th>{{ get_phrase('Name') }}</th>
                    <th>{{ get_phrase('Grade') }}</th>
                    <th>{{ get_phrase('Section') }}</th>
                    <th>{{ get_phrase('Gender') }}</th>
                    {{-- <th>{{ get_phrase('View') }}</th> --}}
                </tr>
            </thead>
            <tbody>
                @forelse  ($students as $student)
                    <tr>
                        <td>{{ $student->registration_no ?? '-' }}</td>
                        <td>{{ $student->roll_no ?? '-' }}</td>
                        <td>{{ $student->name }}</td>
                        <td class="grade"></td>
                        <td class="section"></td>
                        <td>{{ $student->gender ?? '-' }}</td>
                        {{-- <td></td> --}}
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">
                            <h6 class="fs-6 fw-normal">No Students avalable.</h6>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
