<h2>List of students</h2>

<?php foreach ($records as $r): ?>

        
        <div class="main card-panel red">
        	<h3><?php echo $r->roll_no; ?>. <?php echo $r->name; ?></h3>
            
            <a href="<?php echo site_url('stud/edit/'.$r->roll_no); ?>">Edit</a>
            <a href="<?php echo site_url('stud/delete/'.$r->roll_no); ?>">Delete</a>
        </div>
      

<?php endforeach; ?>