<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_root_redirects_to_routing(): void
    {
        $this->get('/')->assertRedirect('/routing');
    }

    public function test_all_modul09_routes_return_expected_responses(): void
    {
        $this->get('/routing')->assertStatus(200)->assertSee('Belajar Laravel Routing');
        $this->get('/basic_routing')->assertStatus(200)->assertSee('Hello World');
        $this->get('/view_route')->assertStatus(200)->assertSee('Hello, My name is Zaki Irsyada Putra');
        $this->get('/controller_route')->assertStatus(200)->assertSee('This is from Controller');
        $this->get('/user/108052500069')->assertStatus(200)->assertSee('User Id: 108052500069');
        $this->get('/posts/01/comments/20')->assertStatus(200)->assertSee('Post Id: 01, Comment Id: 20');
        $this->get('/username')->assertStatus(200)->assertSee('Username:');
        $this->get('/username/zaki')->assertStatus(200)->assertSee('Username: zaki');
        $this->get('/title/abc')->assertStatus(200)->assertSee('Title: abc');
        $this->get('/title/this-is-my-title')->assertStatus(200)->assertSee('This is Fallback Route');
        $this->get('/profile/108052500069')->assertStatus(200)->assertSee('This is Profile from Controller, profile id: 108052500069');
        $this->get('/route_priority/user')->assertStatus(200)->assertSee('This is Route 2');
        $this->get('/asdqwezxc')->assertStatus(200)->assertSee('This is Fallback Route');
        $this->get('/admin/dashboard')->assertStatus(200)->assertSee('This is admin dashboard');
        $this->get('/admin/users')->assertStatus(200)->assertSee('This is user data on admin page');
        $this->get('/admin/items')->assertStatus(200)->assertSee('This is item data on admin page');
        $this->get('/portfolio')->assertStatus(200)->assertSee('Zaki Irsyada Putra');
    }
}
