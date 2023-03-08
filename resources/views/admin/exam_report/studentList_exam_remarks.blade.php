<div class="card">
    <div class="card-header bg-info-subtle text-dark d-flex justify-content-between">
        <div class="d-flex align-items-center">
            Individual Remarks Entry [Grade : <span class="grade mx-2"></span> Section: <span class="section mx-2"></span> Exam :
            <span class="exam mx-2"></span>]
        </div>
        <div>
            
        </div>
    </div>
    <div class="card-body">
    
                    <div class="modal-body">
                        <div class="container">
                        
                            <div class="row">
                                <input id="class_id_selected" type="hidden" value="{{$class_id}}"></input>
                                <input id="section_id_selected" type="hidden" value="{{$section_id}}"></input>
                                <input id="exam_id_selected" type="hidden" value="{{$exam_id}}"></input>
                            </div>

                            <div class="row">
                               
                                <div class="col-sm-12 mt-2">
                                    <label for="student_id"
                                        class="form-label eForm-label">{{ get_phrase('Student') }}*</label>
                                    <select name="enrollment_id" id="enrollment_id"
                                        class="form-select eForm-select eChoice-multiple-with-remove"required style="width:35% !important;">
                                        
                                        @foreach ($students as $student)
                                            <option value="{{$student->enrollment_id}}">{{ $student->name }}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="row">
                            
                            <label for="remarks"
                                        class="form-label eForm-label">{{ get_phrase('Remarks') }}*</label>
                                <div class="col-sm-12 mt-2">
                                    <textarea id="remarks" style="width:75% !important;"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <label id ="msg"></label>
                        <button type="submit" id="submitRemarks" onclick = "saveRemarks();" class="eBtn eBtn btn btn-primary">{{ get_phrase('Save') }}</button>
                    </div>
               
        
        
    </div>
    <div class="card-body" id="student_report">
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            getStudentRemarks();
            $("#enrollment_id").change(function(){
                getStudentRemarks();
                $('#msg').html('');
            });
        });
       
        function saveRemarks(){
            
            var class_id_selected = $("#class_id_selected").val();
            var section_id_selected = $("#section_id_selected").val();
            var exam_id_selected = $("#exam_id_selected").val();
            var enrollment_id = $("#enrollment_id").val();
            var remarks = $("#remarks").val();
            
            $.ajax({
                type: 'POST',
                url: "{{ route('admin.exam.exam_remarks_save') }}",
                data: {
                    "class_id": class_id_selected,
                    "section_id": section_id_selected,
                    "exam_id": exam_id_selected,
                    "enrollment_id": enrollment_id,
                    "remarks": remarks
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    $('#msg').html('Data Saved successfully');
                    // $('#add_exam_button').html(button_body);
                }
            });
        }

        function getStudentRemarks(){
            var class_id_selected = $("#class_id_selected").val();
            var section_id_selected = $("#section_id_selected").val();
            var exam_id_selected = $("#exam_id_selected").val();
            var enrollment_id = $("#enrollment_id").val();
            
            $.ajax({
                type: 'POST',
                url: "{{ route('admin.exam.exam_remarks_get') }}",
                data: {
                    "class_id": class_id_selected,
                    "section_id": section_id_selected,
                    "exam_id": exam_id_selected,
                    "enrollment_id": enrollment_id
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    //console.log(data);
                    $('#remarks').val(data.remarks);
                    // $('#add_exam_button').html(button_body);
                }
            });
        }
    </script>
