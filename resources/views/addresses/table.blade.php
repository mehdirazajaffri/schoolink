<table class="table table-responsive" id="addresses-table">
    <thead>
        <tr>
            <th>Country Id</th>
        <th>City Id</th>
        <th>Area Id</th>
        <th>Zipcode</th>
        <th>Location</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($addresses as $address)
        <tr>
            <td>{!! $address->country_id !!}</td>
            <td>{!! $address->city_id !!}</td>
            <td>{!! $address->area_id !!}</td>
            <td>{!! $address->zipcode !!}</td>
            <td>{!! $address->location !!}</td>
            <td>
                {!! Form::open(['route' => ['addresses.destroy', $address->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('addresses.show', [$address->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('addresses.edit', [$address->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>