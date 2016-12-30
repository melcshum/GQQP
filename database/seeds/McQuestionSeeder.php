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
            ['question_id'=>1, 'teacher_id'=>1,'question_type'=>'if_else','question_level'=>1,'question'=>'Write a Java program by using two for loops to product the output shown below:','program'=>'<pre>public class star{
	public static void main (String [] args){
		printStars();
	}

	static void printStars(){
		int i,j;
		for<input type="text" disabled>{
			System.out.println("");
			for<input type="text" disabled>{
				System.out.print("*");
			}
		}
	}
}</pre>',
                'question_ans'=>'a','mc_ans1'=>'<p>(i=0;i<=6;i++)</p>
                <p>(j=0;j<=7+i;j++)</p>','mc_ans2' =>'<p>(i=0;i<=6;i++)</p>
                <p>(j=0;j<=7-i;j++)</p>','mc_ans3'=>'<p>(i=0;i<=6;i++)</p>
                <p>(j=0;j<=7-i;j--)</p>','mc_ans4'=>'<p>(i=0;i<=6;i++)</p>
                <p>(j=0;j<=7+i;j--)</p>','knowledge'=>10,'gold'=>100,'created_at'=>new DateTime,'updated_at'=>new DateTime],

        );

        DB::table('mcquestions')->insert($mcquestions);
    }
}