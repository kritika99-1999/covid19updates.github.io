<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <section class="corona_update container-fluid">
	<div class="my-5 ml-5">
		<h3 class="text-center text-uppercase " align="center">Arunachal Pradesh corona updates</h3>
	</div>
<div class=" table-responsive">
	<table class="  table table-bordered table-striped text-center  " align="center" width="50%"  style=" border-collapse: collapse; text-align: center; font-size: 18px;font-style: italic;text-align: center;">



		<tr>
			
			<th class="text-capitalize" style="border:2px solid #ddd;padding: 15px; background-color: dodgerblue; color: white">District</th>
			<th class="text-capitalize"style="border:2px solid #ddd;padding: 15px; background-color: dodgerblue; color: white">Active</th>
			<th class="text-capitalize"style="border:2px solid #ddd;padding: 15px; background-color: dodgerblue; color: white">Confirmed</th>
			<th class="text-capitalize"style="border:2px solid #ddd;padding: 15px; background-color: dodgerblue; color: white">Recovered</th>
			<th class="text-capitalize"style="border:2px solid #ddd;padding: 15px; background-color: dodgerblue; color: white">Deceased</th>
		</tr>
			
		

                      <?php
                       $data=file_get_contents('https://api.covid19india.org/v2/state_district_wise.json');
                       $coronalive=json_decode($data,true); 

                        $districtscount=count($coronalive[2]['districtData']);
                        $i=1;
                        while($i < $districtscount){

                         ?>
                         <tr >

	
	                         <td style="border:2px solid #ddd;padding: 15px;" ><?php echo $coronalive[2]['districtData'][$i]['district'] ?></td>
	                          <td style="border:2px solid #ddd;padding: 15px;"><?php echo $coronalive[2]['districtData'][$i]['active'] ?></td>
	                      <td style="border:2px solid #ddd;padding: 15px;"><?php echo $coronalive[2]['districtData'][$i]['confirmed'] ?></td>
	                       <td style="border:2px solid #ddd;padding: 15px;"><?php echo $coronalive[2]['districtData'][$i]['recovered'] ?></td>
	                       <td style="border:2px solid #ddd;padding: 15px;"><?php echo $coronalive[2]['districtData'][$i]['deceased'] ?></td>
                           </tr>

 
                          <?php
                          $i++;
                           }
                          ?>


</table>

</div>
</div>


</section>
</body></html>