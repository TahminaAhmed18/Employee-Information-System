<?php include('inc/header.php'); ?>


<!-- content start here -->
<div class="container" style="margin-top: 5%;">
  <div class="panel panel-warning">
    <div class="panel-heading">
      <h2 style="text-align: center;">Select Department</h2>
    </div>
    <div class="panel-body">

      <div style="width: 60%; margin: 0 auto;">
        
      <form action="staff-info.php" method="post">

         <div class="form-group">
          <label for="select2">Department</label>
          <select name="dept" class="form-control" id="select2" >
            <option value="cse">CSE</option>
            <option value="eee">EEE</option>
            <option value="bba">BBA</option>
            <option value="law">LAW &amp; Human Rights</option>
            <option value="Journalism">Journalism</option>
            <option value="Farmecy">Farmecy</option>
            <option value="Economics">Economics</option>
          </select>
        </div> 

      <div class="form-group">
        <input type="submit" name="staff" class="btn btn-warning" value="submit"><br><br>
      </div>

      </form>
      <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['staff'])) {
           // $staff_info = $campus->getstaffinfo($_POST);
            var_dump($_POST);}
?>
        
      </div>

    </div>
  </div>
</div>


<?php include'inc/footer.php'; ?>
