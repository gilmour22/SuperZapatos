<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class ServicesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
      $this->withoutMiddleware();
      $this->json('GET', '/services/articles')->seeJson(['success' => true]);
      $this->json('GET', '/services/stores')->seeJson(['success' => true]);
      $this->json('GET', '/services/stores/5')->seeJson(['success' => true]);
      $this->json('GET', '/services/stores/99')->seeJson(['success' => false]);
      $this->json('GET', '/services/stores/aaaa')->seeJson(['success' => false]);
    }
}
