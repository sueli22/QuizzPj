<?php

namespace App\Http\Controllers;
use App\Models\Result;
use App\Models\Option;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreTestRequest;
use App\Models\QuestionResult;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use Illuminate\Support\Facades\Response;
class ResultController extends Controller
{
    public function store(StoreTestRequest $request)

    {
        // Retrieve selected options
        $selectedOptionIds = array_values($request->input('questions'));
        $options = Option::whereIn('id', $selectedOptionIds)->get();
        $category_id=$request->input('category_id');


        // Calculate total points
        $totalPoints = $options->sum('points');

       $user_id=Auth::user()->id;
       $result=Result::create([
        'user_id'=>$user_id,
        'category_id'=> $category_id,
        'total_points'=>$totalPoints
       ]);


        return redirect()->route('client.results.show', $result->id);
    }

   //resultShow
    public function show($id){

     $result=Result::with(['user','category',])->where('id',$id)->first();
     return view('ui.resultshow', compact('result'));
    }

    //ScoreListToAdminDashboard
    public function scoreList(){
        $scores=Result::with(['user','category'])->paginate(7);

        return view('Admin.score.index',compact('scores'));
    }
    //delete All Record From Db

    public function deleteAll(){
        Result::truncate();
        return redirect()->route('admin.index')->with('success','Successfully Delete All Score Record');
    }
    //downloadPdf
    public function downloadQuizResults($id){
        $result=Result::with('category')->findOrfail($id);
        $name=$result->user->name;
        $points=$result->total_points;
        $category=$result->category->name;
        $pdf = Pdf::loadView('pdf.quiz_results', compact('points', 'category','name','result'));
        return $pdf->download('quiz_results.pdf');


    }

    //downloadWord
    public function downloadQuizResultsDoc($id){
        $result=Result::with('category')->findOrfail($id);
        $name=$result->user->name;
        $points=$result->total_points;
        $category=$result->category->name;

        $phpWord = new PhpWord();
        $section = $phpWord->addSection();
        $section->addTitle('Quiz Results for  ' . $result->category->name, 1);
        $section->addText('Name: ' .$name);
        $section->addText('Total Score is: ' .$points.'points');

        foreach ($result->category->questions as $question) {
            $section->addText('Question: ' . $question->name);
            $section->addTextBreak();
        }

        $filePath = storage_path('app/public/quiz_results.docx');
        $writer = IOFactory::createWriter($phpWord, 'Word2007');
        $writer->save($filePath);

        return response()->download($filePath)->deleteFileAfterSend(true);
    }

    //downloadCSV

    public function downloadQuizResultsCSV($id){
        $result = Result::with('user', 'category')->findOrFail($id);
          // Build CSV data
          $csvData = [
            ['Name', 'Score', 'Category']
        ];

            $csvData[] = [
                $result->user->name,
                $result->total_points,
                $result->category->name,
                // Assuming you have a pivot table for storing answers
            ];
            $csvFileName = 'quiz_results.csv';
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $csvFileName . '"',
        ];
        // Return CSV file as download response
        return Response::make($this->arrayToCsv($csvData), 200, $headers);

      }


 //privateFunction
    private function arrayToCsv($array)
    {
        $output = fopen('php://temp', 'w');
        foreach ($array as $row) {
            fputcsv($output, $row);
        }
        fseek($output, 0);
        return stream_get_contents($output);
    }


}
