<?php

use PHPUnit\Framework\TestCase;
require "./User.php";
class ClassHasAttributeTest extends TestCase
{
    public function testIdUserExist()
    {
        $this->assertClassHasAttribute('id', User::class);
    }

    public function testEmailExist()
    {
        $this->assertClassHasAttribute('email', User::class);
    }

    public function testCreatedAtExist()
    {
        $this->assertClassHasAttribute('createdAt', User::class);
    }

}
?>