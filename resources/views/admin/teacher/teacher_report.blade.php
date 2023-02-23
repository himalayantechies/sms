@if (count($teachers) > 0)
    <!-- Table -->
    <table>
        <thead>
            <tr>
                <th>{{ get_phrase('S.N') }}</th>
                <th>{{ get_phrase('Name') }}</th>
                <th>{{ get_phrase('Gender') }}</th>
                <th>{{ get_phrase('Caste/Ethnicity') }}</th>
                <th>{{ get_phrase('Nationality') }}</th>
                <th>{{ get_phrase('Date of Birth (A.D)') }}</th>
                <th>{{ get_phrase('Citizenship No') }}</th>
                <th>{{ get_phrase('Issue District') }}</th>
                <th>{{ get_phrase("Father's Name") }}</th>
                <th>{{ get_phrase("Mother's Name") }}</th>
                <th>{{ get_phrase("Spouse's Name") }}</th>
                <th>{{ get_phrase('Mother Tongue') }}</th>
                <th>{{ get_phrase('Disability') }}</th>
                <th>{{ get_phrase('Email') }}</th>
                <th>{{ get_phrase('Mobile/Phone No.') }}</th>
                <th>{{ get_phrase('Teacher Type') }}</th>
                <th>{{ get_phrase('Designation') }}</th>
        </thead>
        <tbody>
            <?php $count = 1; ?>
            @foreach ($teachers as $teacher)
                <tr>
                    <td scope="row">
                        {{ $count++ }}
                    </td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->gender }}</td>
                    <td>{{ $teacher->caste }}</td>
                    <td>{{ $teacher->nationality }}</td>
                    <td>{{ $teacher->dob }}</td>
                    <td>{{ $teacher->citizenship_no }}</td>
                    <td>{{ $teacher->issuing_district }}</td>
                    <td>{{ $teacher->father_name }}</td>
                    <td>{{ $teacher->mother_name }}</td>
                    <td>{{ $teacher->spouse_name }}</td>
                    <td>{{ $teacher->mother_tongue }}</td>
                    <td>{{ $teacher->disability }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ $teacher->mobile_number }}</td>
                    <td>{{ $teacher->teacher_type }}</td>
                    <td>{{ $teacher->designation }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
