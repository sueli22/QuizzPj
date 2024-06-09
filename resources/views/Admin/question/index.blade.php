@extends('admin.master')
@section('content')
    <div class="page-wrapper mt-0 ">
        <div class="card  bg-dark text-white">
            <img class="w-100" src="{{ asset('ui-images/w.jpg') }}" alt="Card image"
                style="height: 640px; filter: blur(10px); object-fit: cover;">
            <div class="card-img-overlay">
                <!-- Page Content -->
                <div class="content container-fluid">
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h3 class="page-title">Question</h3>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('add.question') }}" class="btn btn-sm wbtn text-white mb-3"><i
                            class="fas fa-plus"></i>Add</a>




                    @if ($questions->isEmpty())
                        <p class="text-white fw-bold border p-2 rounded text-center my-5">No Questions has found ! <a
                                href="{{ route('add.question') }}" class="text-decoration-underline"> Click here to
                                create</a></p>
                    @else
                        <table class="table table-sm border-success table-hover small">
                            <thead class="border-success">
                                <tr>
                                    <th>No</th>
                                    <th>Question Name</th>
                                    <th>Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="border-success">
                                @foreach ($questions as $index => $q)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $q->name }}</td>
                                        <td>{{ $q->category->name ?? 'N/A' }}</td>
                                        <td>
                                            <form action="{{ route('delete.question', $q->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('edit.question', $q->id) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <button class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure to delete?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row mt-2 mb-5">
                            <div class="col-12 d-flex justify-content-center custom-pagination pagination">
                                {{ $questions->links() }}
                            </div>
                        </div>
                </div>
            </div>
            @endif
        @endsection
