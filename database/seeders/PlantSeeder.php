<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Plant;
use Illuminate\Database\Seeder;

class PlantSeeder extends Seeder
{
    public function run(): void
    {
        $plants = [
            [
                'name' => 'Вашингтония',
                'description' => 'Веерная пальма, которая привносит тропическую атмосферу.',
                'image' => 'washingtonia.png',
                'care_light' => 'Яркий свет',
                'care_water' => 'Умеренный полив',
                'care_humidity' => 'Средняя влажность',
                'care_fertilizer' => 'Раз в месяц',
                'pet_safe' => false,
                'child_safe' => false,
                'care_level' => 3,
                'light_level' => 3,
                'size' => 3,
                'water_level' => 2,
                'categories' => ['Декоративно-лиственные'],
            ],
            [
                'name' => 'Муррайя',
                'description' => 'Вечнозеленое растение с ароматными цветками.',
                'image' => 'murraya.png',
                'care_light' => 'Яркий рассеянный свет',
                'care_water' => '2-3 раза в неделю летом',
                'care_humidity' => 'Высокая',
                'care_fertilizer' => 'Раз в месяц весной и летом',
                'pet_safe' => true,
                'child_safe' => true,
                'care_level' => 2,
                'light_level' => 3,
                'size' => 2,
                'water_level' => 2,
                'categories' => ['Цветущие', 'Декоративно-лиственные'],
            ],
            [
                'name' => 'Рипсалис',
                'description' => 'Неприхотливый кактус с ниспадающими побегами.',
                'image' => 'rhipsalis.png',
                'care_light' => 'Рассеянный свет',
                'care_water' => 'Редкий полив',
                'care_humidity' => 'Низкая',
                'care_fertilizer' => 'Раз в 2 месяца',
                'pet_safe' => true,
                'child_safe' => true,
                'care_level' => 1,
                'light_level' => 2,
                'size' => 1,
                'water_level' => 1,
                'categories' => ['Суккуленты'],
            ],
            [
                'name' => 'Дерево дракона',
                'description' => 'Медленно растущее растение с красным соком.',
                'image' => 'dracaena-draco.png',
                'care_light' => 'Яркий свет',
                'care_water' => 'Умеренный полив',
                'care_humidity' => 'Средняя',
                'care_fertilizer' => 'Раз в месяц летом',
                'pet_safe' => false,
                'child_safe' => false,
                'care_level' => 2,
                'light_level' => 3,
                'size' => 2,
                'water_level' => 2,
                'categories' => ['Декоративно-лиственные'],
            ],
            [
                'name' => 'Орхидея',
                'description' => 'Царица цветов с изысканными цветками.',
                'image' => 'orchid.png',
                'care_light' => 'Рассеянный свет',
                'care_water' => 'По мере просыхания',
                'care_humidity' => 'Высокая',
                'care_fertilizer' => 'Раз в 2 недели',
                'pet_safe' => true,
                'child_safe' => true,
                'care_level' => 3,
                'light_level' => 2,
                'size' => 1,
                'water_level' => 2,
                'categories' => ['Цветущие'],
            ],
            [
                'name' => 'Хлорофитум',
                'description' => 'Неприхотливое растение с длинными листьями.',
                'image' => 'chlorophytum.png',
                'care_light' => 'Любой свет',
                'care_water' => 'Умеренный полив',
                'care_humidity' => 'Любая',
                'care_fertilizer' => 'Раз в месяц',
                'pet_safe' => true,
                'child_safe' => true,
                'care_level' => 1,
                'light_level' => 1,
                'size' => 1,
                'water_level' => 2,
                'categories' => ['Декоративно-лиственные'],
            ],
            [
                'name' => 'Фиалка',
                'description' => 'Компактное растение с яркими цветками.',
                'image' => 'violet.png',
                'care_light' => 'Рассеянный свет',
                'care_water' => 'Умеренный полив',
                'care_humidity' => 'Средняя',
                'care_fertilizer' => 'Раз в 2 недели',
                'pet_safe' => true,
                'child_safe' => true,
                'care_level' => 1,
                'light_level' => 2,
                'size' => 1,
                'water_level' => 2,
                'categories' => ['Цветущие'],
            ],
            [
                'name' => 'Толстянка',
                'description' => 'Символ богатства с мясистыми листьями.',
                'image' => 'crassula.png',
                'care_light' => 'Яркий свет',
                'care_water' => 'Редкий полив',
                'care_humidity' => 'Низкая',
                'care_fertilizer' => 'Раз в 2 месяца',
                'pet_safe' => false,
                'child_safe' => false,
                'care_level' => 1,
                'light_level' => 3,
                'size' => 1,
                'water_level' => 1,
                'categories' => ['Суккуленты'],
            ],
            [
                'name' => 'Шлюмбергера',
                'description' => 'Лесной кактус с красивыми цветками.',
                'image' => 'schlumbergera.png',
                'care_light' => 'Рассеянный свет',
                'care_water' => 'Умеренный полив',
                'care_humidity' => 'Средняя',
                'care_fertilizer' => 'Раз в месяц',
                'pet_safe' => true,
                'child_safe' => true,
                'care_level' => 2,
                'light_level' => 2,
                'size' => 1,
                'water_level' => 2,
                'categories' => ['Цветущие', 'Суккуленты'],
            ],
        ];

        foreach ($plants as $plantData) {
            $categories = $plantData['categories'];
            unset($plantData['categories']);

            $plant = Plant::create($plantData);

            $categoryIds = Category::whereIn('name', $categories)->pluck('id');
            $plant->categories()->attach($categoryIds);
        }
    }
}
