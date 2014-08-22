<?php

class Plant extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
	protected $fillable = array('plant_name', 'indoor_offset_days', 'outdoor_offset_days', 'transplant_offset_days', 'direct_sow', 'ads');

}