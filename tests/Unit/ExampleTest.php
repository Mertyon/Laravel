<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    /** @test */
    public function index_returns_first_page_message()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSeeText('Pierwsza strona');
    }

    /** @test */
    public function show_returns_array_with_specific_elements()
    {
        $response = $this->get('/show');
        $response->assertStatus(200);
        $response->assertJson([1, 2, 3, 4, 'abc', 5]);
    }

    /** @test */
    public function time_returns_shifted_time()
    {
        $response = $this->get('/time');
        $response->assertStatus(200);

        // Pobieram czas zwrócony przez funkcję time()
        $shiftedTime = $response->getContent();
    }

    /** @test */
    public function time_returns_current_time_within_tolerance()
    {
        // Pobieram obecny czas
        $currentTime = time();

        // Wywołujem funkcję time()
        $response = $this->get('/time');
        $response->assertStatus(200);

        // Pobieram czas zwrócony przez funkcję time()
        $shiftedTime = strtotime($response->getContent());

        // Sprawdzam, czy zwrócony czas jest w granicach tolerancji (np. 5 sekund)
        $tolerance = 5; // Tolerancja w sekundach
        $this->assertGreaterThanOrEqual($currentTime - $tolerance, $shiftedTime);
        $this->assertLessThanOrEqual($currentTime + $tolerance, $shiftedTime);
    }
}
