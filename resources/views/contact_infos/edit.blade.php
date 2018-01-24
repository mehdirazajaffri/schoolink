@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Contact Info
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($contactInfo, ['route' => ['contactInfos.update', $contactInfo->id], 'method' => 'patch']) !!}

                        @include('contact_infos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection