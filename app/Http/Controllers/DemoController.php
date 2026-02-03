<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    function index1()
    {
        // *simple data select
        // return DB::table('users')->get();

        // *SINGLE ROW
        // return DB::table('users')->first();
        // return DB::table('users')->find(45);

        // *COLUMN VALUES
        // return DB::table('users')->pluck('firstName');

        //*MINIMUM DATA
        // return DB::table('products')->min('price');

        // *MAXIMUM DATA
        // return DB::table('products')->max('price');

        // *AVG
        // return DB::table('products')->avg('price');

        // *SUM
        // return DB::table('products')->sum('price');

        // *COUNT
        // return DB::table('products')->count();

        // *SELECT CLAUSE
        // return DB::table('products')->select('name', 'price')->get();

        // *INNER JOIN
        /*return DB::table('products')->join('categories', 'products.category_id', '=', 'categories.id')->get();*/

        // *LEFT JOIN
        /*return DB::table('products')->leftJoin('categories', 'products.category_id', '=', 'categories.id')->get();
        */

        // *RIGHT JOIN
        /*return DB::table('products')->rightJoin('categories', 'products.category_id', '=', 'categories.id')->get();
        */

        // *CROSS JOIN
        /*return DB::table('products')->crossJoin('categories', 'products.category_id', '=', 'categories.id')->get();
        */

        // *LIMIT
        // return DB::table('products')->limit(2)->get();

        // *ORDERING ASC
        // return DB::table('products')->orderBy('id', 'asc')->get();

        // *ORDERING DESC
        // return DB::table('products')->orderBy('id', 'desc')->get();

        // *latest
        // return DB::table('products')->latest()->first();

        // *oldest
        // return DB::table('products')->oldest()->first();

        // *pagination
        // return DB::table('products')->simplePaginate(5);

        // *INSERT
        // return DB::table('users')
        //     ->insert([
        //         'firstName'=>'A',
        //         'lastName'=>'B',
        //         'email'=>'c',
        //         'mobile'=>'D',
        //         'password'=>'E',
        //         'otp'=> '0'
        //     ]);

        // *UPDATE
        // return DB::table('users')
        //     ->where('id', 215)
        //     ->update([
        //         'firstName'=>'Bulbul',
        //         'lastName'=>'Islam'
        //     ]);

        //*upsert -> update or insert
        /*return DB::table('users')
            ->updateOrInsert(
                ['email' => 'MNB@gmail.com'],
                [
                    'firstName' => 'A',
                    'lastName' => 'B',
                    'email' => 'MNB@gmail.com',
                    'mobile' => 'D',
                    'password' => 'E',
                    'otp' => '0'
                ]
            );
            */

        // *Delete
        return DB::table('users')
            ->where('id', 216)
            ->delete();
    }
}
