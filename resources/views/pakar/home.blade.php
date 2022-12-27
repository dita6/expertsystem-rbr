@extends('pakar.index')
@section('content')
<div class="row mt-4">
            
            <div class="col-sm-8">
              <div class="alert alert-info alert-dismissible fade show" role="alert">
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Halo,</strong><br />{{ Auth::user()->name }}<span class="iconify ms-2" data-icon="noto:pill" data-width="20"></span>
                
              </div>
              
            </div>
          </div>
@endsection
