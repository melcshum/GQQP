<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call("McQuestionSeeder");
        $this->call("FillQuestionSeeder");
        $this->call("ifTutorialSeeder");
        $this->call("ItemSeeder");
        $this->call("UserSeeder");
        $this->call("Item_UserSeeder");
        $this->call("SkillSeeder");
    }
}
