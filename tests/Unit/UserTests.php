<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTests extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testUserCreateAndUpdate(){

        $user = factory(App\User::class)->create();
        /*Creates a dummy user from the factory...condition will be to check if the user
        has been created.*/
        $this->assertDatabaseHas('users',[
           'email' => $user->email,
           'name' => $user->name
        ]);

        /*Testing for updating the database*/
        $user->email ='mtotodev05@gmail.com';
        $user->name ='mtotodev';
        $user->save();

        $this->assertDatabaseHas('users',[
            'email' => $user->email,
            'name' => $user->name
        ]);

    }

}
