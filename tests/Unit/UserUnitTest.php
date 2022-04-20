<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class UserUnitTest extends TestCase
{

    // Description Start ===============

    // Test User
    public function test_user_create(){
        $user = new User([
            'name' => 'user',
            'email' => 'test@gmail.com',
            'password' => bcrypt("password")
        ]);

        $this->assertEquals('Test User', $user->name);
    
    }

}
