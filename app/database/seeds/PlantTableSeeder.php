<?php

class PlantTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('plants')->delete();
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Artichoke',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => 21,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Arugula',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -10,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Asian Greens',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -10,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Beans',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => 0,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Beets',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => 0,
				'transplant_offset_days' => 0,
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Broccoli',
				'indoor_offset_days' => -56,
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Broccoli Raab',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Brussel Sprouts',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Cabbage',
				'indoor_offset_days' => -42,
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => -7,
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Carrots',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Cauliflower',
				'indoor_offset_days' => -56,
				'outdoor_offset_days' => 0,
				'transplant_offset_days' => 0,
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Collards',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Corn',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => 28,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Corn Salad',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Cucumbers',
				'indoor_offset_days' => -7,
				'outdoor_offset_days' => 28,
				'transplant_offset_days' => 7,
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Eggplants',
				'indoor_offset_days' => -28,
				'outdoor_offset_days' => 'NULL',
				'transplant_offset_days' => 14,
				'direct_sow' => 0
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Endive',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Gourds',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => 24,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Kale',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Kohlrabi',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Leeks',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Lettuce',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => 0,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Melon',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => 24,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Mesclun',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Microgreens',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Mustard',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Okra',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => 24,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Onions',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Parsnips',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => 0,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Peas',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Peppers',
				'indoor_offset_days' => -28,
				'outdoor_offset_days' => 'NULL',
				'transplant_offset_days' => 28,
				'direct_sow' => 0
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Pumpkins',
				'indoor_offset_days' => -14,
				'outdoor_offset_days' => 'NULL',
				'transplant_offset_days' => 14,
				'direct_sow' => 0
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Radicchio',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Radish',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Rhubarb',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Salad Greens',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Spinach',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Squash',
				'indoor_offset_days' => -14,
				'outdoor_offset_days' => 'NULL',
				'transplant_offset_days' => 14,
				'direct_sow' => 0
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Swiss Chard',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => 0,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Tomatoes',
				'indoor_offset_days' => -28,
				'outdoor_offset_days' => 'NULL',
				'transplant_offset_days' => 14,
				'direct_sow' => 0
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Turnips',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1
		));
		
		$plant->save();
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	}

}