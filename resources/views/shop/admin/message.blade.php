{{-- @if (@session::has('error')) --}}
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Error!</h4>
        {{ $message }}
        {{-- {{ @session::get('error')}} --}}
    </div>
{{-- @endif --}}
{{-- 
@if (@session::has('error'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Error!</h4>

        {{ @session::get('error')}}
    </div>
@endif --}}