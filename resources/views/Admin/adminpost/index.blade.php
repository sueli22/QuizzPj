@extends('admin.master')
@section('content')
<div class="page-wrapper mt-0 ">
    <div class="card bg-dark text-white">
        <img class="w-100" src="{{ asset('assets/img/2.jpg') }}" alt="Card image"
        style="height:720px; filter: blur(60px); object-fit: cover;">
        <div class="card-img-overlay">
            <!-- Page Content -->
            <div class="content container-fluid">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="page-title">POSTများ</h3>
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin.post.create') }}" class="btn btn-sm wbtn text-white mb-3">
                    <i class="fas fa-plus"></i> အသစ်ထည့်ရန်
                </a>

                @if ($posts->isEmpty())
                    <p class="text-danger fw-bold border p-2 rounded text-center my-5">
                        No posts have been found! <a href="{{ route('admin.post.create') }}" class="text-decoration-underline">Click here to create</a>
                    </p>
                @else
                    <table class="custom-table border-success table-hover">
                        <thead class="border-success">
                            <tr>
                                <th>စဉ်</th>
                                <th>အကြောင်းအရာ</th>
                                <th>ပုံ</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="border-success">
                            @php
                                $offset = ($posts->currentPage() - 1) * $posts->perPage();
                            @endphp
                            @foreach ($posts as $index => $post)
                                <tr>
                                    <td class="small">{{ $offset + $loop->iteration }}</td>
                                    <td class="small">{{ $post->description }}</td>
                                    <td class="small text-white">
                                        <img src="{{ asset('storage/posts-images/'.$post->image) }}" class="rounded-circle" style="width: 80px; height:80px; object-fit:cover">
                                    </td>
                                    <td class="small">
                                        <form action="{{ route('admin.post.delete', $post->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('admin.post.edit', $post->id) }}" style="color: greenyellow" class="btn btn-sm btn-buttom">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <button class="btn btn-sm btn-buttom" style="color: red" onclick="return confirm('Are you sure to delete?')">
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
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
@endsection
