<table class="table table-responsive" id="schools-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
        <th>No Of Students</th>
        <th>No Of Campuses</th>
        <th>No Of Teachers</th>
        <th>Address Id</th>
        <th>Contact Info Id</th>
        <th>Phone Number</th>
        <th>Email Address</th>
        <th>Office Timings</th>
        <th>Website</th>
        <th>School Additional Info</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($schools as $school)
        <tr>
            <td>{!! $school->name !!}</td>
            <td>{!! $school->description !!}</td>
            <td>{!! $school->no_of_students !!}</td>
            <td>{!! $school->no_of_campuses !!}</td>
            <td>{!! $school->no_of_teachers !!}</td>
            <td>{!! $school->address_id !!}</td>
            <td>{!! $school->contact_info_id !!}</td>
            <td>{!! $school->phone_number !!}</td>
            <td>{!! $school->email_address !!}</td>
            <td>{!! $school->office_timings !!}</td>
            <td>{!! $school->website !!}</td>
            <td>{!! $school->school_additional_info !!}</td>
            <td>
                {!! Form::open(['route' => ['schools.destroy', $school->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('schools.show', [$school->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('schools.edit', [$school->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>