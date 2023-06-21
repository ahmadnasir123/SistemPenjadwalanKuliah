<?php 
    include 'header.php';
?>

<div class="container" id="container">
<div class="card text-center">
  <div class="card-header">
    <h3>JADWAL KULIAH</h3> 
  </div>
  <div class="card-body">
    <h5 class="card-title">Upload File Spreadsheet Jadwal Kuliah</h5>
    <p class="card-text">Pastikan file yang diupload berformat .xls</p>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <form action="file.php" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="fileExcel"  id="fileExcel">
                        <input class="btn btn-primary" type="submit" value="Upload File" name="submit"> 
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>
</div>
</body>
</html>

 
