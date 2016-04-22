<h2>Edit student info</h2>

<?php 
   echo form_open('Stud_controller/update_student', 'class="fc"'); 
   echo form_hidden('old_roll_no',$old_roll_no); 
   echo form_label('Roll No.'); 
   echo form_input(array('id'=>'roll_no',
      'name'=>'roll_no','value'=>$records[0]->roll_no)); 
   echo "<br>"; 
	
   echo form_label('Name'); 
   echo form_input(array('id'=>'name','name'=>'name',
      'value'=>$records[0]->name)); 
   echo "<br>"; 

   echo form_label('Address'); 
   echo form_textarea(array('id'=>'address','name'=>'address',
      'value'=>$records[0]->address)); 
   echo "<br>"; 

   echo form_label('Gender'); 
   echo form_radio(array('name'=>'gender','id'=>'male','value'=>'male', 
      'checked'=>($records[0]->gender == 'male') ? TRUE:FALSE));
   echo form_label('male', 'male');  
   echo form_radio(array('name'=>'gender','id'=>'female','value'=>'female',
      'checked'=>($records[0]->gender == 'female') ? TRUE:FALSE)); 
   echo form_label('female', 'female');  
   echo "<br>"; 

   $ip = explode(" ", $records[0]->activities);
   echo form_label('Activities');  
   echo form_checkbox(array('name'=>'activities[]','id'=>'sports','value'=>'sports',
      'checked'=>(in_array("sports", $ip)) ? TRUE:FALSE));
   echo form_label('sports', 'sports');
   echo form_checkbox(array('name'=>'activities[]','id'=>'programming','value'=>'programming',
      'checked'=>(in_array("programming", $ip)) ? TRUE:FALSE));
   echo form_label('programming', 'programming');  
   echo form_checkbox(array('name'=>'activities[]','id'=>'music','value'=>'music',
      'checked'=>(in_array("music", $ip)) ? TRUE:FALSE));
   echo form_label('music', 'music');  
   echo form_checkbox(array('name'=>'activities[]','id'=>'arts','value'=>'arts',
      'checked'=>(in_array("arts", $ip)) ? TRUE:FALSE));
   echo form_label('arts', 'arts');    
   echo "<br>"; 


   $options = array(
        '2016'        => '2016',
        '2017'        => '2017',
        '2018'        => '2018',
        '2019'        => '2019',
   );


   $js = array(
           'class'=> 'browser-default',
     
   );
   echo form_label('Year', 'yr');  
      echo form_dropdown('yr', $options, $records[0]->year, $js);

	
   echo form_submit(array('id'=>'submit','value'=>'Edit Info')); 
   echo form_close();
?> 

