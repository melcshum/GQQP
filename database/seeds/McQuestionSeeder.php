
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
        DB::table('mcQuestions')->delete();

        $mcquestions = array(
            ['question_id'=>1, 'teacher_id'=>1,'question_type'=>'if_else','type'=>"mc",'question_level'=>1,'question'=>'Write a Java program by using two for loops to product the output shown below:','program'=>'<pre>public class star{
	public static void main (String [] args){
		printStars();
	}

	static void printStars(){
		int i,j;
		for<input type="text" name="ans1" disabled >{
			System.out.println("");
			for<input type="text" name="ans2" disabled>{
				System.out.print("*");
			}
		}
	}
}</pre>',

                'question_ans'=>'a','mc_ans1'=>'asd','mc_ans2' =>'ddd','mc_ans3'=>'sss','mc_ans4'=>'qqq','knowledge'=>10,'gold'=>100,'time'=>60, 'hint'=>'<p>here are 7 line</p>
<p>The first line will print 7 * in line1</p>.<p>The second line will print 6 * in line2</p>','photo'=>'./images/ans2.JPG','created_at'=>new DateTime,'updated_at'=>new DateTime],

            ['question_id'=>2, 'teacher_id'=>1,'question_type'=>'if_else','type'=>"mc",'question_level'=>1,'question'=>'Write a Java program by using two for loops to product the output shown below:','program'=>'<pre>public class star{

	public static void main (String [] args){
		printStars();
	}

	static void printStars(){
		int i,j;
		for<input type="text" name="ans1" disabled >{
			System.out.println("");
			for<input type="text" name="ans2" disabled>{
				System.out.print("*");
			}
		}
	}
}</pre>',
                'question_ans'=>'a',
                'mc_ans1'=>'<br>(i=0;i<=6;i++)<br>(j=0;j<7-i;j++)<br>',
                'mc_ans2' =>'<br>(i=0;i<=6;i++)<br>(j=0;j<=7-i;j++)<br>'
                ,'mc_ans3'=>'<br>(i=0;i<=6;i++)<br>(j=0;j<=7-i;j--)<br>'
                ,'mc_ans4'=>'<br>(i=0;i<=6;i++)<br>(j=0;j<=7+i;j--)<br>',
                'knowledge'=>10,'gold'=>100,'time'=>60,'hint'=>'<p>here are 7 line</p>
<p>The first line will print 7 * in line1</p>.<p>The second line will print 6 * in line2</p>','photo'=>'./images/ans2.JPG','created_at'=>new DateTime,'updated_at'=>new DateTime],

        );

        DB::table('mcQuestions')->insert($mcquestions);
    }
}