@extends('layouts.admin')

@section('title')
<title>Home</title>
@endsection

@section('css')

<style>
  .sidebar .user-panel {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .user-panel .user-action ion-icon {
    font-size: 30px;
  }
</style>

@endsection

@section('content')

<div class="content-wrapper">
  @include('partials.content-header', ['name' => 'Home', 'key' => ''])

  <div class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-12">
          Trang chu

        </div>

      </div>
    </div>
  </div>
</div>
@endsection
