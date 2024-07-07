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
                                <h3 class="page-title">ပေးပို့ထားသောmailများ</h3>
                            </div>
                        </div>
                    </div>




                    @if ($mails->isEmpty())
                        <p class="text-white fw-bold border p-2 rounded text-center my-5">ပေးပို့ထားသောmail မရှိပါ!

                        </p>
                    @else
                        <table class="custom-table table-sm border-success table-hover small">
                            <thead class="border-success">
                                <tr>
                                    <th>စဉ်</th>
                                    <th>ပို့သူအမည်</th>
                                    <th>Gmail</th>
                                    <th>subject</th>
                                    <th>Messages</th>
                                </tr>
                            </thead>
                            <tbody class="border-success">
                                @php
                                    $offset = ($mails->currentPage() - 1) * $mails->perPage();
                                @endphp
                                @foreach ($mails as $index => $o)
                                    <tr>
                                        <td>{{ $offset + $loop->iteration }}</td>
                                        <td>{{ $o->user->name ?? 'N/A' }}</td>
                                        <td>{{ $o->user->email ?? 'N/A' }}</td>
                                        <td>{{ $o->message }}</td>
                                        <td>{{ $o->subject }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row mt-2 mb-5">
                            <div class="col-12 d-flex justify-content-center custom-pagination pagination">
                                {{ $mails->links() }}
                            </div>
                        </div>
                </div>
            </div>
            @endif
        @endsection
