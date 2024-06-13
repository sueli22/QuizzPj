@extends('admin.master')
@section('content')
<style>
    .fontwmz {
        font-family: 'Freckle Face', cursive;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);

    }

    .btn-fixed-size {
        width: 80px; /* Fixed width */
        height: 30px; /* Fixed height */
        font-size: 9px; /* Adjust font size */
        padding: 5px;
        overflow: hidden;/* Adjust padding */
    }
</style>
<div class="page-wrapper mt-0">
    <div class="card bg-dark text-white">
        <img class="w-100" src="{{ asset('ui-images/bgg.jpg') }}" alt="Card image"
        style="height:720px; filter: blur(60px); object-fit: cover;">
        <div class="card-img-overlay">
            <!-- Page Content -->
            <div class="content container ">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <h3 class="page-title mb-3 fontwmz">Score Of Student Previous Test</h3>
                        @if(!$scores->isEmpty())
                        <a href="{{ route('delete.all.score') }}" style=" font-size: 12px;" class="ml-3 col-3 btn btn-danger text-white mb-3 btn-fixed-size" onclick="return confirm('Are you sure to delete all records?')">Delete All Records</a>
                            @endif
                        <div class="col-md-6"></div>
                    </div>
                </div>

                @if ($scores->isEmpty())
                   <h2>No History Students Have Answered</h2>
                @else
                    <table class="custom-table border-success table-hover" style="table-layout: fixed; width: 100%;">
                        <thead class="border-success">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Total Score</th>
                                <th>Questions</th>
                                <th>Percentage</th>
                                <th>Grade</th>
                                <th>Time</th>
                                <th>Category</th>
                                <th>Download</th>
                            </tr>
                        </thead>
                        <tbody class="border-success">
                            @foreach ($scores as $index => $s)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $s->user->name ?? 'N/A' }}</td>
                                @if ($s->category)
                                    <td>{{ $s->total_points ?? '0' }}/{{ count($s->category->questions) }} Scores</td>
                                    <td>{{ count($s->category->questions) }}Q</td>
                                    @php
                                        $questionCount = count($s->category->questions);
                                        $percentage = ($questionCount > 0) ? (($s->total_points ?? 0) / $questionCount * 100) : 0;
                                    @endphp
                                @else
                                    <td>0/0 Scores</td>
                                    <td>0Q</td>
                                    @php
                                        $percentage = 0;
                                    @endphp
                                @endif
                                <td>{{ $percentage }}%</td>
                                <td>
                                    @php
                                        $grade = ''; // Initialize grade variable
                                        if ($percentage > 80) {
                                            $grade = 'A';
                                        } elseif ($percentage >= 70 && $percentage <= 80) {
                                            $grade = 'B';
                                        } elseif ($percentage >= 50 && $percentage < 70) {
                                            $grade = 'C';
                                        } else {
                                            $grade = 'D';
                                        }
                                    @endphp
                                    {{ $grade }}
                                </td>
                                <td>{{ $s->created_at }}</td>
                                <td>{{ $s->category->name ?? 'N/A' }}</td>
                                <td>
                                    <div class="row gap-2">
                                        <a href="{{ route('download.pdf', $s->id) }}" class="col-3 btn btn-success text-white mb-3 btn-fixed-size">pdf</a>
                                        <a href="{{ route('download.word', $s->id) }}" class="col-3 btn btn-danger text-white mb-3 btn-fixed-size">word</a>
                                        <a href="{{ route('download.csv', $s->id) }}" class="col-3 btn btn-warning text-white mb-3 btn-fixed-size">CSV</a>
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
