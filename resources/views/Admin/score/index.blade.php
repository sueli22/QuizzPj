@extends('admin.master')
@section('content')
<div class="page-wrapper mt-0 ">
    <div class="card bg-dark text-white">
        <img class="w-100" src="{{ asset('ui-images/bgg.jpg') }}" alt="Card image"
        style="height:720px; filter: blur(60px); object-fit: cover;">
        <div class="card-img-overlay">
            <!-- Page Content -->
            <div class="content container-fluid">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <h3 class="page-title">Score Of Students</h3>
                        <div class="col-md-6">

                            <a href="{{route('delete.all.score')}}" class="btn btn-sm btn-danger text-white mb-3"   onclick="return confirm('Are you sure to delete?')">Delete All Record</a>
                        </div>
                        <div class="col-md-6 align-middle">
                            {{-- <a href="" class="btn btn-sm btn-success text-white mb-3">DownLoad PDf</a>
                            <a href="" class="btn btn-sm btn-success text-white mb-3">DownLoad CSV</a> --}}
                        </div>
                    </div>
                </div>

                @if ($scores->isEmpty())
                    <!-- Handle empty state if needed -->
                @else
                    <table class="table border-success table-hover" style="table-layout: fixed; width: 100%;">
                        <thead class="border-success">
                            <tr>
                                <th style="width: 5%;">No</th>
                                <th style="width: 25%;">Name</th>
                                <th style="width: 20%;">Total Score</th>
                                <th style="width: 25%;">Answer Time</th>
                                <th style="width: 25%;">Category</th>
                                <th style="width: 25%;">Download</th>
                            </tr>
                        </thead>
                        <tbody class="border-success">
                            @foreach ($scores as $index => $s)
                            <tr>
                                <td>{{ ++ $index}}</td>
                                <td>{{ $s->user->name ?? 'N/A'}}</td>
                                <td>{{ $s->total_points ??'0'}} Score</td>
                                <td>{{ \Carbon\Carbon::parse($s->created_at)->format('l, d M Y h:i A') }}</td>
                                <td>{{ $s->category->name}}</td>
                                <td>
                                    <div class="row gap-2 ">
                                        <a href="{{route('download.pdf',$s->id)}}" class="col-3 btn btn-sm btn-success text-white mb-3">pdf</a>
                                        <a href="{{route('download.word',$s->id)}}" class="col-3 btn btn-sm btn-danger text-white mb-3">word</a>
                                        <a href="{{route('download.csv',$s->id)}}" class="col-3 btn btn-sm btn-warning text-white mb-3">CSV</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row mt-2 mb-5">
                        <div class="col-12 d-flex justify-content-center custom-pagination pagination">
                            {{ $scores->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
