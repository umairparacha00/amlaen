<?php

namespace Tests\Feature\Http\Controllers;

use App\Pin;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PinsController
 */
class PinsControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function create_displays_view()
    {

        $response = $this->get(route('pin.create'));

        $response->assertOk();
        $response->assertViewIs('pins.create');
    }


    /**
     * @test
     */
    public function getpinfee_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PinsController::class,
            'getpinfee',
            \App\Http\Requests\PinsGetpinfeeRequest::class
        );
    }

    /**
     * @test
     */
    public function getpinfee_behaves_as_expected()
    {
        $user = factory(User::class)->create();
        $pin = $this->faker->word;
        $pin_value = $this->faker->numberBetween(-10000, 10000);
        $pin_remaining_value = $this->faker->numberBetween(-10000, 10000);

        $response = $this->get(route('pin.getpinfee'), [
            'user_id' => $user->id,
            'pin' => $pin,
            'pin_value' => $pin_value,
            'pin_remaining_value' => $pin_remaining_value,
        ]);
    }
}
