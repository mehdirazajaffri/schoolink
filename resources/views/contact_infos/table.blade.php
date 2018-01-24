<table class="table table-responsive" id="contactInfos-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Email Address</th>
        <th>Phone Number</th>
        <th>Address Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($contactInfos as $contactInfo)
        <tr>
            <td>{!! $contactInfo->name !!}</td>
            <td>{!! $contactInfo->email_address !!}</td>
            <td>{!! $contactInfo->phone_number !!}</td>
            <td>{!! $contactInfo->address_id !!}</td>
            <td>
                {!! Form::open(['route' => ['contactInfos.destroy', $contactInfo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('contactInfos.show', [$contactInfo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('contactInfos.edit', [$contactInfo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>