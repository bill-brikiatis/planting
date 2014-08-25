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
				'ads' => '<span>Click the Photo for<br /> Info Asian Greens Seeds</span>
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
				'ads' => '<span>Click the Photo for<br /> Info on Green Been Seeds</span>
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
				'ads' => '<span>Click the Photo for<br /> Beet Seed Details</span>
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
				'ads' => '<span>Click the Photo for<br /> Info on Carrot Seeds</span>
		<a href="http://www.amazon.com/gp/product/B000UW5QP2/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000UW5QP2&linkCode=as2&tag=subuhobbfarm-20&linkId=U3MBU5ETHZR7MRPG">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B000UW5QP2&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B000UW5QP2" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Cauliflower Seeds</span>
		<a href="http://www.amazon.com/gp/product/B000UW0ZT4/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000UW0ZT4&linkCode=as2&tag=subuhobbfarm-20&linkId=LWIQGSMAN4RECMQD">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B000UW0ZT4&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B000UW0ZT4" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Collard Seeds</span>
		<a href="http://www.amazon.com/gp/product/B0013KBZOQ/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B0013KBZOQ&linkCode=as2&tag=subuhobbfarm-20&linkId=4HQG7XF4WBOKU4QV">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B0013KBZOQ&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B0013KBZOQ" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Corn Seeds</span>
		<a href="http://www.amazon.com/gp/product/B0010Z2SRM/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B0010Z2SRM&linkCode=as2&tag=subuhobbfarm-20&linkId=TZ6Y4P4UELNRDPIT">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B0010Z2SRM&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B0010Z2SRM" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Corn Salad Seeds</span>
		<a href="http://www.amazon.com/gp/product/B00AWLAQFG/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B00AWLAQFG&linkCode=as2&tag=subuhobbfarm-20&linkId=EAUN4CCF62XJ2XZW">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B00AWLAQFG&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B00AWLAQFG" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Cucumber Seeds</span>
		<a href="http://www.amazon.com/gp/product/B000WY3RS6/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000WY3RS6&linkCode=as2&tag=subuhobbfarm-20&linkId=ZAJT77QHQIVI4IRB">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B000WY3RS6&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B000WY3RS6" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Eggplant Seeds</span>
		<a href="http://www.amazon.com/gp/product/B005TVHMHE/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B005TVHMHE&linkCode=as2&tag=subuhobbfarm-20&linkId=NVHDYR2HBMEVN3WX">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B005TVHMHE&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B005TVHMHE" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Endive Seeds</span>
		<a href="http://www.amazon.com/gp/product/B005L4RPL2/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B005L4RPL2&linkCode=as2&tag=subuhobbfarm-20&linkId=6OURLLWYFPVLFGAO">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B005L4RPL2&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B005L4RPL2" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Gourd Seeds</span>
		<a href="http://www.amazon.com/gp/product/B000RO5QM6/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000RO5QM6&linkCode=as2&tag=subuhobbfarm-20&linkId=3I4PX6EBAIHRJNT7">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B000RO5QM6&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B000RO5QM6" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Kale Seeds</span>
		<a href="http://www.amazon.com/gp/product/B002K3JN7Q/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B002K3JN7Q&linkCode=as2&tag=subuhobbfarm-20&linkId=YGVFG4AUR5WPPLXJ">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B002K3JN7Q&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B002K3JN7Q" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Kohlrabi Seeds</span>
		<a href="http://www.amazon.com/gp/product/B004FCOBL8/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B004FCOBL8&linkCode=as2&tag=subuhobbfarm-20&linkId=Y5XNPL2DZ3WDOV2I">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B004FCOBL8&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B004FCOBL8" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Leek Seeds</span>
		<a href="http://www.amazon.com/gp/product/B0032GA5MM/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B0032GA5MM&linkCode=as2&tag=subuhobbfarm-20&linkId=SL26XTMAONVUM4LO">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B0032GA5MM&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B0032GA5MM" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Lettuce Seeds</span>
		<a href="http://www.amazon.com/gp/product/B001RR53R0/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B001RR53R0&linkCode=as2&tag=subuhobbfarm-20&linkId=R3M2A23NTRO4NBYI">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B001RR53R0&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B001RR53R0" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Melon Seeds</span>
		<a href="http://www.amazon.com/gp/product/B001JBC98K/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B001JBC98K&linkCode=as2&tag=subuhobbfarm-20&linkId=3UGALXV4Y36XZY6U">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B001JBC98K&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B001JBC98K" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Mesclun Seeds</span>
		<a href="http://www.amazon.com/gp/product/B000XTGCLY/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B000XTGCLY&linkCode=as2&tag=subuhobbfarm-20&linkId=5WU5IKUX3A4SDM6K">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B000XTGCLY&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B000XTGCLY" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Microgreens Seeds</span>
		<a href="http://www.amazon.com/gp/product/B002O4H7SS/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B002O4H7SS&linkCode=as2&tag=subuhobbfarm-20&linkId=ASOVLITS4RRYQ2H2">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B002O4H7SS&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B002O4H7SS" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Mustard Seeds</span>
		<a href="http://www.amazon.com/gp/product/B001VNKWO4/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B001VNKWO4&linkCode=as2&tag=subuhobbfarm-20&linkId=WVIGJCU4ZBEOAJVL">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B001VNKWO4&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B001VNKWO4" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Okra Seeds</span>
		<a href="http://www.amazon.com/gp/product/B004E3JE4W/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B004E3JE4W&linkCode=as2&tag=subuhobbfarm-20&linkId=CKKQUZJNQO54MQDS">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B004E3JE4W&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" >
		</a><img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B004E3JE4W" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Onion Seeds</span>
		<a href="http://www.amazon.com/gp/product/B0032GC6LU/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B0032GC6LU&linkCode=as2&tag=subuhobbfarm-20&linkId=EQZFS7YTCNGPL7YD">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B0032GC6LU&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B0032GC6LU" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Parsnip Seeds</span>
		<a href="http://www.amazon.com/gp/product/B002BBEZFM/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B002BBEZFM&linkCode=as2&tag=subuhobbfarm-20&linkId=WRGISFCXKR7RKUFH">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B002BBEZFM&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B002BBEZFM" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Peas Seeds</span>
		<a href="http://www.amazon.com/gp/product/B00113EVB4/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B00113EVB4&linkCode=as2&tag=subuhobbfarm-20&linkId=67A4J45J3ZBOAEWC">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B00113EVB4&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B00113EVB4" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Pepper Seeds</span>
		<a href="http://www.amazon.com/gp/product/B004E7OKUG/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B004E7OKUG&linkCode=as2&tag=subuhobbfarm-20&linkId=WVEWBQXI34JP6XO7">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B004E7OKUG&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B004E7OKUG" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Pumpkin Seeds</span>
		<a href="http://www.amazon.com/gp/product/B004ZT2QLS/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B004ZT2QLS&linkCode=as2&tag=subuhobbfarm-20&linkId=6GP6Z23KMZGDURG2">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B004ZT2QLS&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B004ZT2QLS" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Radicchio Seeds</span>
		<a href="http://www.amazon.com/gp/product/B001KCXXWE/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B001KCXXWE&linkCode=as2&tag=subuhobbfarm-20&linkId=KPDZOB2IFGKERSS3">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B001KCXXWE&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B001KCXXWE" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Radish Seeds</span>
		<a href="http://www.amazon.com/gp/product/B004I0GT62/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B004I0GT62&linkCode=as2&tag=subuhobbfarm-20&linkId=FAYCPNJE4WIMRXSE">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B004I0GT62&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B004I0GT62" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Rhubarb Seeds</span>
		<a href="http://www.amazon.com/gp/product/B005ES9BXU/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B005ES9BXU&linkCode=as2&tag=subuhobbfarm-20&linkId=EXAKOHN2S27B4IXR">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B005ES9BXU&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B005ES9BXU" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Seeds for Salad Greens</span>
		<a href="http://www.amazon.com/gp/product/B005IQGZX2/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B005IQGZX2&linkCode=as2&tag=subuhobbfarm-20&linkId=W4DDMJ6AE3WYUQPV">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B005IQGZX2&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B005IQGZX2" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Spinach Seeds</span>
		<a href="http://www.amazon.com/gp/product/B0010644VY/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B0010644VY&linkCode=as2&tag=subuhobbfarm-20&linkId=FIWC7TGPKZYTSDWQ">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B0010644VY&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B0010644VY" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Squash Seeds</span>
		<a href="http://www.amazon.com/gp/product/B003V1WTRC/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B003V1WTRC&linkCode=as2&tag=subuhobbfarm-20&linkId=4MBSASRIONQ5ILCH">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B003V1WTRC&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B003V1WTRC" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Swiss Chard Seeds</span>
		<a href="http://www.amazon.com/gp/product/B004FCW3HC/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B004FCW3HC&linkCode=as2&tag=subuhobbfarm-20&linkId=Q2FPYYZJKUK5PGO3">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B004FCW3HC&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B004FCW3HC" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Tomato Seeds</span>
		<a href="http://www.amazon.com/gp/product/B00FTBA3WA/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B00FTBA3WA&linkCode=as2&tag=subuhobbfarm-20&linkId=TNBPZRO3TADDTFGP">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B00FTBA3WA&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B00FTBA3WA" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
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
				'ads' => '<span>Click the Photo for<br /> Info on Turnip Seeds</span>
		<a href="http://www.amazon.com/gp/product/B001F5F1H6/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B001F5F1H6&linkCode=as2&tag=subuhobbfarm-20&linkId=HZHX5P7OSN5YCRRW">
		<img border="0" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B001F5F1H6&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=subuhobbfarm-20" ></a>
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=subuhobbfarm-20&l=as2&o=1&a=B001F5F1H6" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'
		
		));
		
		$plant->save();
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	}

}