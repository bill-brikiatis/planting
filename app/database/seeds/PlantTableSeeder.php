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
				'direct_sow' => 1,
				'ads' => '<span>Click the Photo for<br /> Artichoke Seed Details</span>
		<a href="http://www.amazon.com/gp/product/B0032G8LQE/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B0032G8LQE&linkCode=as2&tag=subuhobbfarm-20&linkId=UXY3OCQ3FWL6WW6X">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B0032G8LQE&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B0032G8LQE" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Arugula',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -10,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Click the Photo for<br /> Arugula Seed Details</span>
		<a href="http://www.amazon.com/gp/product/B0006BK56M/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B0006BK56M&linkCode=as2&tag=subuhobbfarm-20&linkId=7QIM4H5QWNIM2YJD">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B0006BK56M&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B0006BK56M" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Asian Greens',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -10,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => 'span>Click the Photo for<br /> Info Asian Greens Seeds</span>
				<a href="http://www.amazon.com/gp/product/B005ES9F86/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B005ES9F86&linkCode=as2&tag=subuhobbfarm-20&linkId=6PIOMS35ZROWRAWS">
				<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B005ES9F86&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
				<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B005ES9F86" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Beans',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => 0,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => 'span>Click the Photo for<br /> Info on Green Been Seeds</span>
				<a href="http://www.amazon.com/gp/product/B003V1WREC/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B003V1WREC&linkCode=as2&tag=subuhobbfarm-20&linkId=5B7W6EYTZV2LZ5FR">
				<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B003V1WREC&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
				<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B003V1WREC" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Beets',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => 0,
				'transplant_offset_days' => 0,
				'direct_sow' => 1,
				'ads' => 'span>Click the Photo for<br /> Beet Seed Details</span>
				<a href="http://www.amazon.com/gp/product/B002JDSUL2/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B002JDSUL2&linkCode=as2&tag=subuhobbfarm-20&linkId=4QBBHORDQPT44P2T">
				<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B002JDSUL2&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
				<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B002JDSUL2" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Broccoli',
				'indoor_offset_days' => -56,
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Click the Photo for<br /> Info on Broccoli Seeds</span>
		<a href="http://www.amazon.com/gp/product/B001J21ED0/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B001J21ED0&linkCode=as2&tag=subuhobbfarm-20&linkId=3TICSG2GVFL242GQ">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B001J21ED0&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B001J21ED0" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'

		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Broccoli Raab',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Click the Photo for<br /> Broccoli Raab Seed Details</span>
		<a href="http://www.amazon.com/gp/product/B0013HL4VI/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B0013HL4VI&linkCode=as2&tag=subuhobbfarm-20&linkId=L7N4KVILDNC5IF5A">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B0013HL4VI&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B0013HL4VI" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Brussel Sprouts',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Click the Photo for<br /> Brussel Sprout Seed Details</span>
		<a href="http://www.amazon.com/gp/product/B0032GE5ZU/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B0032GE5ZU&linkCode=as2&tag=subuhobbfarm-20&linkId=LI4R74LCB2G6C6JR">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B0032GE5ZU&Format=_SL110_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B0032GE5ZU" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Cabbage',
				'indoor_offset_days' => -42,
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => -7,
				'direct_sow' => 1,
				'ads' => '<span>Click the Photo for<br /> Cabbage Seed Details</span>
		<a href="http://www.amazon.com/gp/product/B0032G6NCI/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B0032G6NCI&linkCode=as2&tag=subuhobbfarm-20&linkId=QMHZYXPWHPX5WXVR">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B0032G6NCI&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B0032G6NCI" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Carrots',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Cauliflower',
				'indoor_offset_days' => -56,
				'outdoor_offset_days' => 0,
				'transplant_offset_days' => 0,
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Collards',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Corn',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => 28,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Corn Salad',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Cucumbers',
				'indoor_offset_days' => -7,
				'outdoor_offset_days' => 28,
				'transplant_offset_days' => 7,
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Eggplants',
				'indoor_offset_days' => -28,
				'outdoor_offset_days' => 'NULL',
				'transplant_offset_days' => 14,
				'direct_sow' => 0,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Endive',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Gourds',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => 24,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Kale',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Kohlrabi',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Leeks',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Lettuce',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => 0,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Melon',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => 24,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Mesclun',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Microgreens',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Mustard',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Okra',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => 24,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Onions',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Parsnips',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => 0,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Peas',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Peppers',
				'indoor_offset_days' => -28,
				'outdoor_offset_days' => 'NULL',
				'transplant_offset_days' => 28,
				'direct_sow' => 0,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Pumpkins',
				'indoor_offset_days' => -14,
				'outdoor_offset_days' => 'NULL',
				'transplant_offset_days' => 14,
				'direct_sow' => 0,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Radicchio',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Radish',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Rhubarb',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Salad Greens',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Spinach',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Squash',
				'indoor_offset_days' => -14,
				'outdoor_offset_days' => 'NULL',
				'transplant_offset_days' => 14,
				'direct_sow' => 0,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Swiss Chard',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => 0,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Tomatoes',
				'indoor_offset_days' => -28,
				'outdoor_offset_days' => 'NULL',
				'transplant_offset_days' => 14,
				'direct_sow' => 0,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		DB::table('plants');
		$plant = new Plant;
		
		$plant->fill(array(
				'plant_name' => 'Turnips',
				'indoor_offset_days' => 'NULL',
				'outdoor_offset_days' => -7,
				'transplant_offset_days' => 'NULL',
				'direct_sow' => 1,
				'ads' => '<span>Advertisement</span>
		<a href="http://www.amazon.com/gp/product/B000AMP9CC/ref=as_li_ss_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000AMP9CC&linkCode=as2&tag=subuhobbfarm-20">
			<img alt="Click Here for Details" src="http://www.suburbanhobbyfarmer.com/wp-content/uploads/2012/11/weatherguard_full.jpg">
		</a>'
		
		));
		
		$plant->save();
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	}

}