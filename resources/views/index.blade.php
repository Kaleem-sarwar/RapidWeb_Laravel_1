@extends('home')
@section('content')
    <div class="m-4"></div>
    <h4 class="m-4">Admin page</h4>
    <table class="table table-striped m-4 table table-bordered " >
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Comments</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <th scope="row"></th>
                    <td>{{ $member['id'] }}</td>
                    <td>{{ $member['name'] }}</td>
                    <td>{{ $member['email'] }}</td>
                    <td>{{ $member['phone'] }}</td>
                    <td>{{ substr($member['queries'], 0, 150) }}</td>
                    <td><a href='delete/{{ $member->id }}' onclick="return confirm('Are you want to delete?')"><img src="images/delete.png" alt="" height="22px"
                                width="22px"></a></td>
                    <td><a href='edit/{{ $member->id }}' data-bs-toggle="modal" data-bs-target="#myModal"><img
                                src="images/edit.png" alt="" height="22px"></a></td>
                    </div>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Information</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

                </div>
                <form method="post" action="{{ url('update') }} ">
                    @csrf
                    {{-- value="{{ $member['id'] }}" --}}

                    <input type="hidden" class="form-control input-sm"   value="{{ $member['id'] }}"name="id">


                    <div class="modal-body">
                        <label>Name</label>
                        {{-- value="{{ $member['name'] }}" --}}
                        <input type="text" class="form-control input-sm" value="{{ $member['name'] }}"  name="name">
                    </div>

                    <div class="modal-body">
                        <label>Email</label>
                        {{-- value="{{ $member['email'] }}"  --}}
                        <input type="email" class="form-control input-sm" value="{{ $member['email'] }}"  name="email">
                    </div>

                    <div class="modal-body">
                        <label>Phone</label>
                        {{-- value="{{ $member['phone'] }}" --}}
                        <input type="text" class="form-control input-sm" value="{{ $member['phone'] }}" name="phone">
                    </div>

                    <div class="modal-body">
                        <label>Comments/Queries</label>
                        {{-- value="{{ $member['queries'] }}" --}}
                        <textarea class="form-control" name="queries" rows="3"> {{ $member['queries'] }}</textarea>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
