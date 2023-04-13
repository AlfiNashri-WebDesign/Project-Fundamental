@extends('layouts.layout')

@section('yield')
  <div class="container">
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($contact as $contact)
              <tr>
                <td>{{ $contact->index }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>
                  <a href="/contact/{{ $contact->id }}">Detail</a>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4">No Data Found</td>
              </tr>
            @endforelse
          </tbody>
        </table>

        {{-- {{ $contact->links() }} --}}
      </div>
    </div>
  </div>
@endsection
