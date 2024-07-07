@extends('ui.master')
@section('content')
    <style>
        .btn-fixed-size {
            width: 80px;
            /* Fixed width */
            height: 30px;
            /* Fixed height */
            font-size: 12px;
            /* Adjust font size */
            padding: 5px;
            /* Adjust padding */
        }


        .fontwmz {
            font-family: 'Freckle Face', cursive;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .table {
            font-size: 0.875rem;
            /* Smaller font size */
        }

        .table th,
        .table td {
            padding: 0.5rem;
            /* Less padding */
        }

        .table th {
            white-space: nowrap;
            /* Prevent line breaks */
        }

        .table th,
        .table td {
            vertical-align: middle;
            /* Center content vertically */
        }

        .table th:first-child,
        .table td:first-child {
            width: 5%;
            /* Adjust width of the first column */
        }

        .table th:nth-child(2),
        .table td:nth-child(2) {
            width: 15%;
            /* Adjust width of the Name column */
        }

        .table th:nth-child(3),
        .table td:nth-child(3),
        .table th:nth-child(4),
        .table td:nth-child(4),
        .table th:nth-child(5),
        .table td:nth-child(5),
        .table th:nth-child(6),
        .table td:nth-child(6),
        .table th:nth-child(7),
        .table td:nth-child(7) {
            width: 10%;
            /* Adjust width of other columns */
        }

        .table th:nth-child(8),
        .table td:nth-child(8) {
            width: 20%;
            /* Adjust width of the Download column */
        }

        .wbtn {

            overflow: hidden;

        }
    </style>
    <div class="card bg-dark text-black">
        <img class="card-img" src="{{ asset('assets/img/2.jpg') }}" alt="Card image"
            style="height: 640px; filter: blur(90px); object-fit: cover;">
        <div class="card-img-overlay">
            <div class="page-wrapper mt-0">

                <!-- Page Content -->
                <div class="content container mt-5"style="min-height: 550px">
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row align-items-center ">
                            <h3 class="text-white mb-3 fontwmz mt-5">ချစ်ခင်ရပါသော {{ Auth::user()->name }}
                                သင်ဖြေဆိုခဲ့ဖူးသော အမှတ်များမှာ</h3>
                            <div class="col-md-6 mt-5"></div>
                        </div>
                    </div>

                    @if ($scores->isEmpty())
                        <h2 class="text-white">No History You Have Answered</h2>
                    @else
                        <table class="custom-table border-success table-hover" style="table-layout: fixed; width: 100%;">
                            <thead class=" text-white border-buttom">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Total Score</th>
                                    <th>Questions</th>
                                    <th>Percentage</th>
                                    <th>Grade</th>
                                    <th>Answer Time</th>
                                    <th>Category</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody class=" text-white border-buttom">
                                @foreach ($scores as $index => $s)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $s->user->name ?? 'N/A' }}</td>
                                        <td>{{ $s->total_points ?? '0' }}/{{ count($s->category->questions) }} Scores</td>
                                        <td>{{ count($s->category->questions) }}Q</td>
                                        <td>{{ count($s->category->questions) > 0 ? (($s->total_points ?? 0) / count($s->category->questions)) * 100 : 0 }}%
                                        </td>
                                        <td>
                                            @php
                                                $percentage =
                                                    count($s->category->questions) > 0
                                                        ? (($s->total_points ?? 0) / count($s->category->questions)) *
                                                            100
                                                        : 0;
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
                                        <td>{{ $s->category->name }}</td>
                                        <td>
                                            <div class="d-flex justify-items-center gap-2">
                                                <div><a href="{{ route('download.pdf', $s->id) }}"
                                                        class="btn btn-success text-white mb-1 btn-sm">pdf</a></div>
                                                <div><a href="{{ route('download.word', $s->id) }}"
                                                        class="btn btn-danger text-white mb-1 btn-sm">word</a></div>
                                                <div> <a href="{{ route('download.csv', $s->id) }}"
                                                        class="btn btn-warning text-white mb-1 btn-sm">CSV</a></div>
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
                @endif
            </div>
        @endsection
