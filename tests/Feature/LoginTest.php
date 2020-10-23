<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    /** @test */
    public function store_login(){
        /*$response = $this->post('/password/email',[
          "name" => 'Tito De Leon',
          "email" => 'tdeleon@gmail.com',
          "password" => '$2y$10$CNL1gIfwN58k4A1LiF5WD.vVSK0X1FO3taMix1OcBxY5z7HPIw8yS',
          "type" => 'admin'
        ]);*/

      //  $response->assertJsonStructure(["name","email","password","type"])->assertJson(['email' => 'tdeleon@gmail.com','password' => '$2y$10$CNL1gIfwN58k4A1LiF5WD.vVSK0X1FO3taMix1OcBxY5z7HPIw8yS'])->assertStatus(201);

        //$response->assertDatabaseHas('users',['email' => 'tdeleon@gmail.com','password' => '$2y$10$CNL1gIfwN58k4A1LiF5WD.vVSK0X1FO3taMix1OcBxY5z7HPIw8yS' ]);

        /*$credential = [
          'email' => 'tdeleon@gmail.com',
          'password' => '$2y$10$CNL1gIfwN58k4A1LiF5WD.vVSK0X1FO3taMix1OcBxY5z7HPIw8yS'
        ];

        $response = $this->post('login',$credential);
        $response->assertSessionHasErrors();*/

          /*
        $credential = [
           'email' => 'asdfasfdsaf.com',
           'password' => '$2y$10$CNL1gIfwN58k4A1LiF5WD.vVSK0X1FO3taMix1OcBxY5z7HPIw8yS'
       ];
        $this->post('login',$credential)->assertRedirect('/login');
        */
      /*  $user = create('App\User', [
            "email" => "tdeleon@gmail.com"
        ]);*/

      /*  $this->get('/login')->assertSee('Login');
        $credentials = [
            "email" => "tdeleon@gmail.com",
            "password" => '$2y$10$CNL1gIfwN58k4A1LiF5WD.vVSK0X1FO3taMix1OcBxY5z7HPIw8yS'
        ];

        $response = $this->post('/login', $credentials);
        $response->assertRedirect('/login');*/

    //    $user = create('App\User', ['email' => 'zaratedev@gmail.com']);

        //Test correccion
        /*$credentials = [
           "email" => null,
           "password" => "secret"
       ];

       $response = $this->from('/login')->post('/login', $credentials);
       $response->assertRedirect('/login')->assertSessionHasErrors([
           'email' => 'The email field is required.',
       ]);*/

        //$this->assertCredentials($credentials);
    }

    public function testMustEnterEmailAndPassword()
  {
      $this->json('POST', '/login')
          ->assertStatus(422)
          ->assertJson([
              "message" => "The given data was invalid.",
              "errors" => [
                  'email' => ["The email field is required."],
                  'password' => ["The password field is required."],
              ]
          ]);
  }

}
