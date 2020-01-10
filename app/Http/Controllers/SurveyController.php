<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
class SurveyController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $survey = Survey::all()->toArray();
        // // dd($survey);
        // if(empty($survey)){
        //    return true;
        // }else{
        //     return false;
        // }
        return response()->json(['status' => 'success','data'=>$survey]);

    } public function getresult()
    {
        $survey = Survey::all()->toArray();
        // // dd($survey);
        // if(empty($survey)){
        //    return true;
        // }else{
        //     return false;
        // }
        return view('result',["survey"=>$survey]);

    }
    public function checkEmpty()
    { $survey = Survey::all()->toArray();
        // dd($survey);
        if(empty($survey)){
           return true;
        }else{
            return false;
        }
        # code...
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $survey = new Survey();

        $survey->totalquestion1 = 1;
        $survey->totalanswer1a = $this->checkAnswer(1,$request->question1);
        $survey->totalanswer1b = $this->checkAnswer(2,$request->question1);
        $survey->totalanswer1c = $this->checkAnswer(3,$request->question1);
        $survey->totalanswer1d = $this->checkAnswer(4,$request->question1);


        $survey->totalquestion2 = 1;
        $survey->totalanswer2a = $this->checkAnswer(1,$request->question2);
        $survey->totalanswer2b = $this->checkAnswer(2,$request->question2);
        $survey->totalanswer2c = $this->checkAnswer(3,$request->question2);
        $survey->totalanswer2d = $this->checkAnswer(4,$request->question2);

        $survey->totalquestion3 = 1;
        $survey->totalanswer3a = $this->checkAnswer(1,$request->question3);
        $survey->totalanswer3b = $this->checkAnswer(2,$request->question3);
        $survey->totalanswer3c = $this->checkAnswer(3,$request->question3);
        $survey->totalanswer3d = $this->checkAnswer(4,$request->question3);

        $survey->totalquestion4 = 1;
        $survey->totalanswer4a = $this->checkAnswer(1,$request->question4);
        $survey->totalanswer4b = $this->checkAnswer(2,$request->question4);
        $survey->save();
        // return ['status'=>'success'];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($this->checkEmpty()){
            $this->create($request);
        }else{
            $survey =Survey::find(1);

            $survey->totalquestion1 = $survey->totalquestion1+1;
            $survey->totalanswer1a = $survey->totalanswer1a+$this->checkAnswer(1,$request->question1);
            $survey->totalanswer1b = $survey->totalanswer1b+$this->checkAnswer(2,$request->question1);
            $survey->totalanswer1c = $survey->totalanswer1c+$this->checkAnswer(3,$request->question1);
            $survey->totalanswer1d = $survey->totalanswer1d+$this->checkAnswer(4,$request->question1);


            $survey->totalquestion2 = $survey->totalquestion2+1;
            $survey->totalanswer2a = $survey->totalanswer2a+$this->checkAnswer(1,$request->question2);
            $survey->totalanswer2b = $survey->totalanswer2b+$this->checkAnswer(2,$request->question2);
            $survey->totalanswer2c = $survey->totalanswer2c+$this->checkAnswer(3,$request->question2);
            $survey->totalanswer2d = $survey->totalanswer2d+$this->checkAnswer(4,$request->question2);

            $survey->totalquestion3 = $survey->totalquestion3+1;
            $survey->totalanswer3a = $survey->totalanswer3a+$this->checkAnswer(1,$request->question3);
            $survey->totalanswer3b = $survey->totalanswer3b+$this->checkAnswer(2,$request->question3);
            $survey->totalanswer3c = $survey->totalanswer3c+$this->checkAnswer(3,$request->question3);
            $survey->totalanswer3d = $survey->totalanswer3d+$this->checkAnswer(4,$request->question3);

            $survey->totalquestion4 = $survey->totalquestion4+1;
            $survey->totalanswer4a = $survey->totalanswer4a+$this->checkAnswer(1,$request->question4);
            $survey->totalanswer4b = $survey->totalanswer4b+$this->checkAnswer(2,$request->question4);
            $survey->save();
        }
        return redirect('result');
    }
    public function checkAnswer($answerLocation,$answerValue)
    {
        if($answerLocation==$answerValue){
            return 1;
        }else{
            return 0;
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update()
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {

    }
    public function check()
    {

    }
}
