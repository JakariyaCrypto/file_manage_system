@if(session()->has('success'))
 <div class="alert alert-success" id="alert">
    <span>{{session()->get('success')}}</span>
 </div>

 @elseif(session()->has('danger'))
  <div class="alert alert-danger" id="alert">
    <span>{{session()->get('danger')}} </span>
 </div>
@endif
