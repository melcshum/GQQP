<?php
use Illuminate\Database\Seeder;
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 24/12/2016
 * Time: 1:14
 */
class McQuestionSeeder extends Seeder
{
    public function run(){
        DB::table('mcquestions')->delete();

        $mcquestions = array(
            ['question_id'=>1, 'teacher_id'=>1,'question_type'=>'if_else','question_level'=>1,'question'=>'<pre>what
is 
 your 
name</pre>',
                'question_ans'=>'B','mc_ans1'=>'Queenie','mc_ans2' =>'Joe','mc_ans3'=>'John','mc_ans4'=>'Jesse','knowledge'=>10,'gold'=>100,'created_at'=>new DateTime,'updated_at'=>new DateTime],

        );

        DB::table('mcquestions')->insert($mcquestions);
    }
}