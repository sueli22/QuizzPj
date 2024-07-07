@extends('admin.master')
@section('content')
    <div class="page-wrapper mt-0 ">
        <div class="card  bg-dark text-white">
            <img class="w-100" src="{{ asset('assets/img/2.jpg') }}" alt="Card image"
                style="height:720px; filter: blur(60px); object-fit: cover;">
            <div class="card-img-overlay">
                <!-- Page Content -->
                <div class="content container-fluid">
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col-md-6">

                                <a href="{{ route('categories') }}" class="btn btn-sm wbtn text-white mb-3">ပြန်ထွက်မည်</a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('add.question') }}" class="btn btn-sm wbtn text-white mb-3"><i
                            class="fas fa-plus"></i>အသစ်ထည့်ရန်</a>





                    @if ($questions->isEmpty())
                        <p class="text-danger fw-bold border p-2 rounded text-center my-5">No Questions has found ! <a
                                href="{{ route('add.question') }}" class="text-decoration-underline"> Click here to
                                create</a></p>
                    @else
                        <table class="custom-table   border-success table-hover">
                            <thead class=" border-success">
                                <tr>
                                    <th>စဉ်</th>
                                    <th>ဆက်နွယ်‌သောမေးခွန်းများ</th>
                                    <th>ဆက်နွယ်‌သော အဖြေများ</th>

                                </tr>
                            </thead>
                            <tbody class=" border-success">
                                @php
                                $offset = ($questions->currentPage() - 1) * $questions->perPage();
                                @endphp
                                @foreach ($questions as $index => $question)
                                    <tr>
                                        <td>{{ $offset + $loop->iteration }}</td>
                                        <td>{{ $question->name }}</td>
                                        <th><a href="{{ route('see.answers', $question->id) }}">See Answers</a></th>

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
