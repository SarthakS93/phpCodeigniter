<h2>Add new student</h2>

<?php 
   echo form_open('Stud_controller/add_student', 'class="fc"');
   echo form_label('Roll No.'); 
   echo form_input(array('id'=>'roll_no','name'=>'roll_no')); 
   echo "<br>"; 

   echo form_label('Name'); 
   echo form_input(array('id'=>'name','name'=>'name')); 
   echo "<br>"; 

   echo form_label('Address'); 
   echo form_textarea(array('id'=>'address','name'=>'address')); 
   echo "<br>"; 

   echo form_label('Gender'); 
   echo form_radio(array('name'=>'gender','id'=>'male','value'=>'male'));
   echo form_label('male', 'male');  
   echo form_radio(array('name'=>'gender','id'=>'female','value'=>'female')); 
   echo form_label('female', 'female');  
   echo "<br>"; 

   echo form_label('Activities');  
   echo form_checkbox(array('name'=>'activities[]','id'=>'sports','value'=>'sports'));
   echo form_label('sports', 'sports');
   echo form_checkbox(array('name'=>'activities[]','id'=>'programming','value'=>'programming'));
   echo form_label('programming', 'programming');  
   echo form_checkbox(array('name'=>'activities[]','id'=>'music','value'=>'music'));
   echo form_label('music', 'music');  
   echo form_checkbox(array('name'=>'activities[]','id'=>'arts','value'=>'arts'));
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
   echo form_dropdown('yr', $options, '2016', $js);



   echo form_submit(array('id'=>'submit','value'=>'Add Student')); 
   echo form_close(); 
?> 