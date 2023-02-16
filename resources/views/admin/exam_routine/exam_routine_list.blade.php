@php
        // echo "<pre>";
        // print_r($exam_routines);
        // die;

@endphp

<form method="POST" action="{{ route('admin.exam_routine.list') }}" enctype="multipart/form-data">
@csrf

<div class="exam_routine_content" id="exam_routine_content"> 
    <table class="table eTable table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center">S.N</th>
                <th scope="col">{{ get_phrase('Subject') }}</th>
                <th scope="col">Exam Date</th>    
                <th scope="col">Start Time</th>    
                <th scope="col">End Time</th>    
                {{-- <th scope="col" class="text-center">{{ get_phrase('Action')}}</th> --}}
            </tr>   
        </thead>
         <tbody>
            @php
                $sn = 1;
            @endphp
            @foreach ($exam_routines as $routine)
                <tr>
                    <td class="text-center">{{ $sn++}} </td>
                    <td> {{$routine->name}}</td>
                    <td class="col-md-2">
                        {{-- <input type="hidden" name="subject_id[]" value= '{{$routine->subject_id}}'> --}}
                        {{-- <input class="form-control eForm-control" type="text" id="subject-id-{{$routine->subject_id}}" name="subject-id-id[]" value="">{{$routine->subject_id}}</td> --}}
                        <input id="exam_date" type="date" name="exam_date" value="{{ old('exam_date') }}" class="form-select" required autofocus style="font-size: 12px;" >
                    </td>
                    <td class="col-md-2"> <input id="start_time" type="time" name="start_time"  required autofocus class="form-select" style="font-size: 12px;"></td>
                    <td class="col-md-2"> <input id="end_time" type="time" name="end_time" class="form-select" required autofocus style="font-size: 12px;"></td>
                    {{-- <td class="text-center">
                        <img onclick="updateExamAttendance('{{ $routine->subject_id }}')" style="cursor: pointer;" src="../public/assets/images/updateG.png" alt="Update attendance"  height="30">
                    </td> --}}
                </tr>
            @endforeach

        </tbody> 
    </table>
    <div class="fpb-7 pt-2">
        <button type="submit" class="btn-form">{{ get_phrase('Update') }}</button>
    </div>
</div>

</form>