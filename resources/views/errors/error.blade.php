@if (count($errors)>0)
<div class="alert alert-danger dark alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <i class="fa fa-info pr10"></i>
    @foreach ($errors->all() as $error)
    <strong>{{ $error }}</trong>
      @endforeach
</div>
@endif
