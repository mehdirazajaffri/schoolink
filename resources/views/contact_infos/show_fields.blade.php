<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $contactInfo->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $contactInfo->name !!}</p>
</div>

<!-- Email Address Field -->
<div class="form-group">
    {!! Form::label('email_address', 'Email Address:') !!}
    <p>{!! $contactInfo->email_address !!}</p>
</div>

<!-- Phone Number Field -->
<div class="form-group">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    <p>{!! $contactInfo->phone_number !!}</p>
</div>

<!-- Address Id Field -->
<div class="form-group">
    {!! Form::label('address_id', 'Address Id:') !!}
    <p>{!! $contactInfo->address_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $contactInfo->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $contactInfo->updated_at !!}</p>
</div>

