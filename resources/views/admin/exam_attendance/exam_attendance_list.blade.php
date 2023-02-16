@php
    $working_day = (isset($data[0]->working_day)) ?$data[0]->working_day :0;   

@endphp
<form method="POST" action="{{ route('admin.exam.bulkupdate_attendance') }}" enctype="multipart/form-data">
    @csrf
@if (count($data)>0)
<div class="row">
    <div class="d-flex flex-column">
        <ul class="d-flex align-items-center exam_attendance_content">
            <li>Total Working Days: &nbsp;&nbsp; </li>
            <li><input class="form-control eForm-control" type="number" id="total-working-days" name="total-working-days"  min="0" value={{$working_day}} required onchange=""></li>
        </ul>
    </div>
</div>
<div class="exam_attendance_content" id="exam_attendance">
    <table class="table eTable table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center">Roll No.</th>
                <th scope="col">{{ get_phrase('Student name') }}</th>
                <th scope="col">Total Present Days</th>    
                <th scope="col" class="text-center">{{ get_phrase('Action')}}</th>
            </tr>   
        </thead>
        <tbody>
            @foreach ($data as $student)
                <tr>
                    <td class="text-center">{{$student->roll_no}} </td>
                    <td> {{$student->name}}</td>
                    <td>
                        <input type="hidden" name="user_id[]" value= '{{$student->user_id}}'>
                        {{-- <input type="hidden" name="user_id-{{$student->user_id}}" value= '{{$student->user_id}}'> --}}
                        <input type="hidden" name="exam_id[]" value= '{{$page_data['exam_id']}}'> 
                        <input class="form-control eForm-control" type="hidden" id="enrollment-id-{{$student->user_id}}" name="enrollment-id[]" value="{{$student->enrollment_id}}">
                        <input class="form-control eForm-control" type="number" id="present-day-{{ $student->user_id }}" name="present-day[]"  min="0" value="{{ $student->present_day }}" required onchange=""></td>
                    <td class="text-center">
                         {{-- <button class="btn btn-success" onclick="updateExamAttendance('{{ $student->user_id }}')"><i class="bi bi-check2-circle"></i></button>  --}}
                        <img onclick="updateExamAttendance('{{ $student->user_id }}')" style="cursor: pointer;" src="../public/assets/images/updateG.png" alt="Update attendance"  height="30">
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <div class="fpb-7 pt-2">
        <button type="submit" class="btn-form">{{ get_phrase('Update') }}</button>
    </div>
</div>
</form>
@endif

<script type="text/javascript">
    "use strict";

    function updateExamAttendance(student_id){
        var working_day     = $('#total-working-days').val();
        var exam_id         = '{{$page_data['exam_id']}}';
        var present_day     = $('#present-day-'+ student_id).val();
        var enrollment_id   = $('#enrollment-id-'+ student_id).val();
        var user_id         = student_id;

        var url = "{{ route('admin.exam.update_attendance') }}";

        // alert(url);
        if (present_day !=""){
            $.ajax({
                type: "GET",
                url : "{{route('admin.exam.update_attendance')}}",
                data:{exam_id: exam_id, enrollment_id: enrollment_id, present_day: present_day, working_day: working_day, user_id: user_id},
                success: function(response){
                    toastr.success("Exam attendance updated successfully");
                },
                error: function(response){
                    toastr.error(response.responseText);
                }                    
            });

        }else{
            toastr.error("Please enter Total Present days value");
        }


    }



</script>