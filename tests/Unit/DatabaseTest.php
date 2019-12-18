<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertDatabaseHas('tbl_products',[
            'product_name'=> "Iphone 6"
        ]);
    }
    public function Test2()
    {
        $this->assertDatabaseHas('tbl_products',[
            'product_short_description'=> "Looking beautifull"
        ]);
    }
    public function Test3()
    {
        $this->assertDatabaseHas('tbl_category',[
            'Categories_name'=> "Man"
        ]);
    }
}
