@if(session('success'))
<div class="alert alert-success alert-dismissable text-center">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    {{ session('success') }}
</div>
@endif

@if(session('warning'))
<div class="alert alert-warning alert-dismissable text-center">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    {{ session('warning') }}
</div>
@endif

@if(session('errors'))
<div class="alert alert-danger alert-dismissable text-center">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    {{ session('errors') }}
</div>
@endif
