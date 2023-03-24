@include('layouts.header')
<body>
@yield('contact')
{{-- {{action('BlogController@contact') }} --}}
<form  method="post" action="{{ url('contact')}}" >
@csrf
    <div class="p-5" >
    <h4 >Submit the form</h4>
    <div class="mb-3 col-md-8">
      <label >Name</label>
      <input type="text" class="form-control" name="name" required>
    
    </div>
    <div class="mb-3 col-md-8">
      <label >Email</label>
      <input type="email"  class="form-control"  required name="email">
    </div>
    <div class="mb-3 col-md-8">
        <label >Phone</label>
        <input type="text" class="form-control "  required name="phone">
      </div>

    <div class="mb-3 col-md-8">
        <label >Comments/Queries</label>
        <textarea class="form-control" name="queries"  required rows="3"></textarea>
      </div>

      <button type="submit" class="btn btn-primary btn-sm">Submit</button>
    </div>

  </form>
</body>
@include('layouts.footer')