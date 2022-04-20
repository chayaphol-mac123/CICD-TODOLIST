<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{

    // Description Start ===============

    // Test User
    public function test_usernam_length(){

    }

    public function test_use_username_another_language(){

    }

    public function test_username_special_alphabet(){

    }

    public function test_passsword_user_length(){

    }

    public function test_password_uppercase_alphabet(){

    }

    public function test_password_special_alphabet(){
        
    }

    // Test Schema That In Descriptio Filled Is Correct
    public function test_schema_description(){
        
        $task = new Task([
            'user_id' => 1,
            'description' => "",
        ]); 

        $this->assertEquals('', $task->description);
    }

    // Test Schema In Description can be another language or Empty or Special Alphabet or ....
    public function test_schema_description_another_language(){

    }

    public function test_schema_description_length_word(){

    }

    public function test_schema_description_empty(){

    }

    public function test_schema_description_null(){

    }

    public function test_schema_description_special_string(){

    }





    // User ID Start =================
    
    // Test Schema That User ID is Correct
    public function test_schema_user_id(){

    }

    // Test Schema User ID That can be empty or null or nagative number or .... 
    public function test_schema_user_id_empty(){

    }

    public function test_schema_user_id_null(){

    }

    public function test_schema_user_id_negative(){

    }

    public function test_schema_user_id_uniques(){

    }


}
