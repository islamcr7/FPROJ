<?php

namespace Tests\Unit;
use Illuminate\Http\Request;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ExampleTest  extends TestCase
{   
    use WithoutMiddleware;

    public function testUnderAge()
    { 
        $this->call('POST','/api/customers', ['Name' => 'Test','Surname' => 'high','BirthDate' => '2020-06-06'])->assertJson(['success'=> false,]);
 
    }

    public function testAdultAge()
    { 
        $this->call('POST','/api/customers', ['Name' => 'Test','Surname' => 'high','BirthDate' => '2000-06-06'])->assertJson(['success'=> true,]);
 
    }

    public function testTransactionWithoutAmount()
    { 
        $this->call('POST','/api/transactions', ['Description'=>'hello'])->assertJson(['message'=> 'Validation Error.',]);
 
    }
 
}
