<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">{{ $name }}</a></li>
          @if ( !empty($key) )
            <li class="breadcrumb-item active">{{ $key }}</li>
          @endif
        </ol>
      </div>
    </div>
  </div>
</div>
