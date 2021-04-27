
@extends('layout.layout')
@section('content')
<div class="card uper mt-5">
  <div class="card-header h3 text-center ">
    See More
    
  </div>
  <div class="card-body ">
     <div class="row ">

        <div class="col-xs-12 mb-3 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>name:</strong>

                {{ $data->name }}

            </div>

        </div>
        <div class="col-xs-12 mb-3 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Component:</strong>

                {{ $data->component }}

            </div>

        </div>
       
       

        <div class="col-xs-12 mb-3 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>type:</strong>

                {{ $data->type }}
            </div>

        </div>
        <div class="col-xs-12 mb-3 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>price:</strong>

                {{ $data->price }}
            </div>

        </div>
        <div class="col-xs-12 mb-3 col-sm-12 col-md-12">

          <div class="form-group">

              <strong>created at:</strong>

              {{ $data->created_at }}
          </div>

      </div>
    

    </div>
    
  </div>
  <a class="btn btn-primary" href="{{ route('menus.index') }}"> Back</a> 
</div>
@endsection