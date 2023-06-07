<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Env;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
  public function testGetEnv()
  {
    $youtube = env('YOUTUBE');
    self::assertEquals('programmer zaman now', $youtube);
  }

  public function testDefaultEnv()
  {
    // $author = env('AUTHOR', 'eko');
    $author = Env::get('AUTHOR', 'eko');

    self::assertEquals('eko', $author);
  }
}
