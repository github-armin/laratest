<div style="margin-top: 30px;">
@if(count($errors) > 0)
  @foreach($errors->all() as $error)
    <div class="alert alert-danger">{{$error}}</div>
  @endforeach
@endif
</div>

@if(session('success'))
<div style="margin-top: 30px;">
  <div class="alert alert-success">{{session('success')}}</div>
</div>
@endif
