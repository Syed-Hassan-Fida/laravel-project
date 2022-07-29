
@if(session('success'))
<div class="alert alert-warning alert-dismissible fade show" id="alert" role="alert">
   
  <strong> {{session('success')}}</strong> 
  <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
</div>
@elseif(session('error'))
<div class="alert alert-warning alert-dismissible fade show" id="alert" role="alert">
    
  <strong>{{session('error')}}</strong> 
  <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
</div>
@endif