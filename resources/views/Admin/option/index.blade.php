@extends('admin.master')
@section('content')
    <div class="page-wrapper mt-0 ">
        <div class="card  bg-dark text-white">
            <img class="w-100" src="{{ asset('assets/img/2.jpg')}}" alt="Card image"
            style="height:720px; filter: blur(60px); object-fit: cover;">
            <div class="card-img-overlay">
                <!-- Page Content -->
                <div class="content container-fluid">
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h3 class="page-title">ရွေးချယ်ရန် အဖြေများ</h3>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('add.option') }}" class="btn btn-sm wbtn text-white mb-3"><i
                            class="fas fa-plus"></i>အသစ်ထည့်ရန်</a>




                    @if ($options->isEmpty())
                        <p class="text-white fw-bold border p-2 rounded text-center my-5">No Answer Options has found ! <a
                                href="{{ route('add.option') }}" class="text-decoration-underline"> Click here to create</a>
                        </p>
                    @else
                        <table class="custom-table table-sm border-success table-hover small">
                            <thead class="border-success">
                                <tr>
                                    <th>စဉ်</th>
                                    <th>အဖြေများ</th>
                                    <th>မေးခွန်း</th>
                                    <th>ပေးမှတ်</th>
                                    <th>စီမံရန်</th>
                                </tr>
                            </thead>
                            <tbody class="border-success">
                                @php
                                $offset = ($options->currentPage() - 1) * $options->perPage();
                                @endphp
                                @foreach ($options as $index => $o)
                                    <tr>
                                        <td>{{ $offset + $loop->iteration }}</td>
                                        <td>{{ $o->answer }}</td>
                                        <td>{{ $o->question->name ?? 'N/A' }}</td>
                                        <td>{{ $o->points }}</td>
                                        <td>
                                            <form action="{{ route('delete.option', $o->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('edit.option', $o->id) }}" class="btn btn-sm btn-primary">
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
                                {{ $options->links() }}
                            </div>
                        </div>
                </div>
            </div>
            @endif
        @endsection
