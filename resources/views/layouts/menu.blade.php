<li class="{{ Request::is('cities*') ? 'active' : '' }}">
    <a href="{!! route('cities.index') !!}"><i class="fa fa-edit"></i><span>Cities</span></a>
</li>

<li class="{{ Request::is('countries*') ? 'active' : '' }}">
    <a href="{!! route('countries.index') !!}"><i class="fa fa-edit"></i><span>Countries</span></a>
</li>

<li class="{{ Request::is('areas*') ? 'active' : '' }}">
    <a href="{!! route('areas.index') !!}"><i class="fa fa-edit"></i><span>Areas</span></a>
</li>

<li class="{{ Request::is('addresses*') ? 'active' : '' }}">
    <a href="{!! route('addresses.index') !!}"><i class="fa fa-edit"></i><span>Addresses</span></a>
</li>

<li class="{{ Request::is('contactInfos*') ? 'active' : '' }}">
    <a href="{!! route('contactInfos.index') !!}"><i class="fa fa-edit"></i><span>Contact Infos</span></a>
</li>

<li class="{{ Request::is('schools*') ? 'active' : '' }}">
    <a href="{!! route('schools.index') !!}"><i class="fa fa-edit"></i><span>Schools</span></a>
</li>
