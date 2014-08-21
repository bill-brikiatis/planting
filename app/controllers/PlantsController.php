<?php

class PlantsController  extends BaseController {
	
	public function postPlantList() {	
					
		$collection = Plant::all();
		foreach ($collection as $plant) {
			$plant_list[] = $plant->plant_name;
		}
		
		return View::make('home')->with('plant_list', $plant_list);
	}
}