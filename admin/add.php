<div class="container">
    
    <div class="" style="padding: 10px">
      <!-- <h3 class="text-center text-dark">Add Article</h3> -->
      <a href="admin.php"><button class="btn-danger">Close</button></a>
      <h4 align="center" class="btn-info">Add Article Page</h4>
      <?php
        function input($data)
        {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        if (isset($_POST["add_post"])) {
          
          $judul = input($_POST["judul"]);
          $gambar = @$_FILES['gambar']['name'];
          $tmp = @$_FILES['gambar']['tmp_name'];
          $gambarbaru = date ('dmYis').$gambar;
          $path = "../img/".$gambarbaru;
          $isi = input($_POST["isi"]);

      if(move_uploaded_file($tmp, $path)) {
          $sql = "insert into t_artikel (judul,gambar,isi) values ('$judul','$gambarbaru','$isi')";
          $hasil = mysqli_query($con, $sql);

            if ($hasil ) {
              header("Location:../index.php");
            } else{
              echo "Pesan Error ". mysqli_error($con);
            }
        }
      }
        ?>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="u_form">
          <input type="text" name="judul" placeholder="Article Title" required />
        </div>
        <div class="u_form">
          <input type="file" name="gambar" placeholder="Input Image" required />
        </div>
        <div class="u_form">
          <!-- <input type="text" name="isi" placeholder="Isi Artikel" required /> -->
          <textarea name="isi" rows="5" placeholder="Input Article Content" required
            style="height: 150px"></textarea>
        </div>
        <button type="submit" name="add_post">Submit</button>
      </form>
    </div>
  </div>