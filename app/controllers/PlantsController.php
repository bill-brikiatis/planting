<?php

class PlantsController  extends BaseController {
	
	public function postFormData() {
		
		$rules = array('date' => array('required', 'date_format:"m/d/Y"'));
		
		$validation = Validator::make(Input::all(), $rules);
		
		    if ($validation->fails())
		    {
		        // Validation has failed.
		        return Redirect::to('/')
		        	//->with_input();
		        	->with('flash_message', 'Please enter a last frost date using the proper format.');
		    }
			
			else {
				
				$plant_table[] = Plant::all();
				//print_r($plant_table);
				$checked_plants[] = Input::get('plant_list');
				if (!$checked_plants[0])
				{
					return Redirect::to('/')
		        	//->with_input();
		        	->with('flash_message', 'Please select at least one plant.');
				}
								
				foreach ($plant_table as $plant) {
					foreach ($plant as $row) {
						if (!in_array(trim($row->plant_name), $checked_plants[0])) {
							unset($row->plant_name);
							}
						else {
							
						}
					}
				}
			}
				
				$date = Input::get('date');
				
				$Seedling = date('n / d / Y', (strtotime($date)));
				if(is_array($checked_plants)) {
					return View::make('planting-dates')
					->with('date', $date)
					->with('checked_plants', $checked_plants)
					->with('seedling', $Seedling)
					->with('plant_table', $plant_table);
					
				}
		}
	
	
	public function postCheckedPlant() {
		$checked_plants[] = Input::has('plant_list');
		return View::make('planting-dates')->with('checked_plants', $checked_plants);
	}
	
	public function postPlantList() {	
					
		$collection = Plant::all();
		foreach ($collection as $plant) {
			$plant_list[] = $plant->plant_name;
		}
		
		return View::make('home')->with('plant_list', $plant_list);
	}
}