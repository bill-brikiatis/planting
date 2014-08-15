<?php

class PlantsController  extends BaseController {
	
	public function postPlantList() {
			
		$plant_list = array('Artichoke', 'Arugula', 'Asian Greens', 'Beans', 'Beets', 'Broccoli', 'Broccoli Raab', 
					'Brussel Sprouts', 'Cabbage', 'Carrots', 'Cauliflower', 'Collards', 'Corn', 'Corn Salad', 
					'Cucumbers', 'Eggplants', 'Endive', 'Gourds', 'Kale', 'Kohlrabi', 'LeeksLettuce', 'Melon', 
					'Mesclun', 'Microgreens', 'Mustard', 'Okra', 'Onions', 'Parsnips', 'Peas', 'Peppers', 
					'Pumpkins', 'Radicchio', 'Radish', 'Rhubarb', 'Salad Greens', 'Spinach', 'Squash', 
					'Swiss Chard', 'Tomatoes', 'Turnips');

		return View::make('home')->with('plant_list', $plant_list);
	}
}