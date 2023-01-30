@extends('admin.navigation')
   
@section('content')
<div class="mainSection-title">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h4>{{ get_phrase('School Settings') }}</h4>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="eSection-wrap">
            <div class="eMain">
                <div class="row">
                    <div class="col-md-6 pb-3">
                        <div class="eForm-layouts">
                            <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('admin.school.update') }}">
                                @csrf 
                                @php
                                    // echo "<pre>";
                                    // print_r($school_details->toArray());
                                @endphp    
                                <div class="fpb-7">
                                    <label for="school_name" class="eForm-label">{{ get_phrase('School Name') }}</label>
                                    <input type="text" class="form-control eForm-control" value="{{ $school_details->title }}" id="school_name" name = "school_name" required>
                                </div>
                                <div class="fpb-7">
                                    <label for="address" class="eForm-label">{{ get_phrase('Address') }}</label>
                                    <textarea class="form-control eForm-control" id="address" name="address" required="" spellcheck="false">{{ $school_details->address }}</textarea>
                                </div>
                                <div class="fpb-7">
									<label for="school_email" class="eForm-label">{{ get_phrase('School Email') }}</label>
									<input type="text" class="form-control eForm-control" id="school_email" name="school_email"  value={{$school_details->email}} required>
								</div>
                                <div class="fpb-7">
                                    <label for="phone" class="eForm-label">{{ get_phrase('School Phone') }}</label>
                                    <input type="number" class="form-control eForm-control" value="{{ $school_details->phone }}" id="phone" name = "phone"  value={{$school_details->phone}} required>
                                </div>
                                <div class="fpb-7">
									<label for="year_established" class="eForm-label">Est. Year</label>
									<input type="text" class="form-control eForm-control" id="year_established" name="year_established"  value={{$school_details->year_established}}>
								</div>
								<div class="fpb-7">
									<label for="district_code" class="eForm-label">District Code</label>
									<input type="text" class="form-control eForm-control" id="district_code" name="district_code" value={{$school_details->district_code}}>
								</div>
								<div class="fpb-7">
									<label for="vcd_code" class="eForm-label">VCD Code</label>
									<input type="text" class="form-control eForm-control" id="vcd_code" name="vcd_code" value={{$school_details->vcd_code}}>
								</div>
                                <div class="fpb-7">
                                    <label for="school_info" class="eForm-label">{{ get_phrase('School information') }}</label>
                                    <textarea class="form-control eForm-control" id="school_info" name="school_info" rows="4" required="" spellcheck="false">{{ $school_details->school_info }}</textarea>
                                </div>

                               <div class="fpb-7 pt-2">
                                    <button type="submit" class="btn-form">{{ get_phrase('Update settings') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection