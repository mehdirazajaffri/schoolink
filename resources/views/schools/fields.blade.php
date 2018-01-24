<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- No Of Students Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_of_students', 'No Of Students:') !!}
    {!! Form::text('no_of_students', null, ['class' => 'form-control']) !!}
</div>

<!-- No Of Campuses Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_of_campuses', 'No Of Campuses:') !!}
    {!! Form::text('no_of_campuses', null, ['class' => 'form-control']) !!}
</div>

<!-- No Of Teachers Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_of_teachers', 'No Of Teachers:') !!}
    {!! Form::text('no_of_teachers', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address_id', 'Address Id:') !!}
    {!! Form::text('address_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact Info Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact_info_id', 'Contact Info Id:') !!}
    {!! Form::text('contact_info_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_address', 'Email Address:') !!}
    {!! Form::text('email_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Office Timings Field -->
<div class="form-group col-sm-6">
    {!! Form::label('office_timings', 'Office Timings:') !!}
    {!! Form::text('office_timings', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website', 'Website:') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<!-- School Additional Info Field -->
<div class="form-group col-sm-6">
    {!! Form::label('school_additional_info', 'School Additional Info:') !!}
    {!! Form::text('school_additional_info', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('schools.index') !!}" class="btn btn-default">Cancel</a>
</div>
