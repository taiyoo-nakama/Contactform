<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ContactFactory extends Factory{
    protected $model = Contact::class;
    public function definition(){
        return [
            'id' => $this->faker->randomNumber(),
            'fullname' => $this->faker->name(),
            'gender' => $this->faker->numberBetween(1,2),
            'email' => $this->faker->safeEmail(),
            'postcode' => $this->faker->randomNumber(),
            'address' => $this->faker->state(),
            'billding_name' => $this->faker->city(),
            'opinion' => $this->faker->sentence(),
        ];
    }
}
