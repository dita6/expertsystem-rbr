@extends('frontend.index')
@section('content')
<div class="row mt-4">
            <div class="col-sm-8">
              <div class="alert alert-warning p-2"><span class="iconify" data-icon="foundation:comment-quotes" data-width="25"></span>" Self-care is how you take your power back." — Lalah Delia</div>
              <div class="diagnosa p-4 text-black">
                <h3>
                  Deteksi gangguan kesehatan  <br />
                  mental kamu sekarang
                </h3>
                <a href="{{route('diagnosa') }}" class="btn btn-secondary mt-2">Coba Deteksi</a>
              </div>
              
              
             
            </div>
            <div class="col-sm-4">
              <div class="alert alert-info alert-dismissible fade show" role="alert">
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Halo,</strong><br />{{ Auth::user()->name }}<span class="iconify ms-2" data-icon="noto:pill" data-width="20"></span>
                
              </div>
              
            </div>
          </div>
@endsection
