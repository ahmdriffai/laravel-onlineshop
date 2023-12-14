<?php

namespace Tests\Feature;

use App\User;
use GuzzleHttp\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class AppTest extends TestCase
{

    // public function test_route_home_page()
    // {
    //     $response = $this->call('GET', 'home');
    //     $this->assertFalse($response->isOk());
    // }

    // public function test_route_produk_page()
    // {
    //     $response = $this->call('GET', 'produk');
    //     $this->assertFalse($response->isOk());
    // }

    // public function test_route_keranjan_page()
    // {
    //     $response = $this->call('GET', 'keranjang');
    //     $this->assertFalse($response->isOk());
    // }

    // public function test_route_order_page()
    // {
    //     $response = $this->call('GET', 'order');
    //     $this->assertFalse($response->isOk());
    // }

    // public function test_route_add_alamat_page()
    // {
    //     $response = $this->call('GET', 'alamat');
    //     $this->assertFalse($response->isOk());
    // }

    public function test_get_recomendation_user_3(){
        $url = 'https://toko-online-recomender.kpti.my.id';
        $useremail = "user3@gmail.com";
        $response = Http::post($url . '/predict', [
            "email" => $useremail,
            "top_n" => 30
        ]);


        $this->assertEquals(200, $response->status());

        $produkrcmd = json_decode($response->body(), true);

        $this->assertEquals(8, count($produkrcmd ));
    }

    public function test_get_recomendation_user_4(){
        $url = 'https://toko-online-recomender.kpti.my.id';
        $useremail = "user4@gmail.com";
        $response = Http::post($url . '/predict', [
            "email" => $useremail,
            "top_n" => 30
        ]);


        $this->assertEquals(200, $response->status());

        $produkrcmd = json_decode($response->body(), true);

        $this->assertEquals(10, count($produkrcmd ));
    }
}
