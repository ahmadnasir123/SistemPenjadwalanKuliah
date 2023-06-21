<?php 
    include 'header.php'; 
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }else{
        $id = 0;
    }
?>

<div class="container" id="container">
    <h2 class="text-center mb-5">Jadwal Perkuliahan Dosen</h2>
    
    <div class="card">
        <div class="card-body">
        <form class="form-inline">
        <input type="search" placeholder="Search" name="search" class="srch">
        <label for="">By</label>
        <select id="hari">
            <option value="#" selected>Pilih Hari</option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
        </select>
        <select id="kategori">
            <option value="#" selected>Pilih Kategori</option>
            <option value="Mata Kuliah">Mata Kuliah</option>
            <option value="Ruang">Ruang</option>
            <option value="Dosen">Dosen</option>
        </select>
        <button type="submit" class="btn btn-primary">Search</button>
        </form>
        </div>
    </div>

    <table class="table table-striped table-bordered" id="tb">
        <thead class="table-light">
            <tr>
                <th rowspan = '3'> Hari </th>
                <th colspan = '2'>Slot Waktu </th>
                <th rowspan = '2' colspan = '4' > <?php namaKelas($id); ?> </th> 
            </tr>
            <tr>
                <th rowspan = '2' colspan = '2'> Pagi </th>
            </tr>
                <th colspan> Mata kuliah </th>
                <th colspan> Dosen </th>
                <th colspan> Ruang</th>
                <th colspan> JJ</th>    
            <tr>
        </thead>

        <tbody>
            <?php
                TampilTabel($id)
            ?> 
        </tbody>
        
     </table>
     <div class="pagination">
        <?php pagination($id); ?>   
    </div>
</div>
</body>
</html>

 