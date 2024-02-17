<?php

namespace Database\Factories;

use App\Models\Contact
use App\Models\Category
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        protected $model = Contact::class;
        return [
        'first_name'=> $this->faker->name(),
        'last_name'=> $this->faker->name(),
        'gender'=> rand(1, 2, 3),
        'email'=> $this->faker->email(),
        'tel'=> $this->faker->phoneNumber(),
        'address'=> $this->faker->address(),
        'building'=> $this->faker->building(),
        'detail'=> $this->faker->detail(),
        'uuid' => $this->faker->uuid
        //contactsテーブルにダミーデータを35件作成
    ];
    }
           //- categoriesテーブル(お問い合わせの種類)のダミーデータはシーダーファイルを使用し、以下５件のダミーデータを作成1. 商品のお届けについて2. 商品の交換について3. 商品トラブル4. ショップへのお問い合わせ5. その他
    
        
}
