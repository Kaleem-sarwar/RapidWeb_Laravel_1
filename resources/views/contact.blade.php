@include('layouts.header')

<body>
    @yield('contact')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <form method="post" action="{{ url('contact') }} ">
                            @csrf
                            <div class="p-3">
                                <h4>Submit the form</h4>
                                <div class="mb-3 w-50">
                                    <label>Name</label>
                                    <input type="text" class="form-control"  name="name">
                                </div>
                                <div class="mb-3 w-50  ">
                                    <label>Email</label>
                                    <input type="email" class="form-control"  name="email">
                                </div>
                                <div class="mb-3 w-50">
                                    <label>Phone</label>
                                    <input type="text" class="form-control "  name="phone">
                                </div>

                                <div class="mb-3 w-50">
                                    <label>Comments/Queries</label>
                                    <textarea class="form-control" name="queries"  ></textarea>
                                </div class="mb-1">

                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('layouts.footer')
