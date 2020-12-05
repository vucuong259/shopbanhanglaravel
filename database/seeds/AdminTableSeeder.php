<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = array();
        $data['admin_email'] = 'admin@gmail.com';
        $data['admin_password'] = md5('Cuong@1994');
        $data['admin_name'] = 'Vu Cuong';
        $data['admin_phone'] = '0918888888';
        Admin::create($data);
    }
}
