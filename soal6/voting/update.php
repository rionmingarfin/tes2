<?php
require_once "function/config.php"
?>
<form action="" method="post">
    <?php
    $id=$_GET['id'];
    $sql=mysqli_query($conn,"SELECT * FROM quick WHERE id_quick='$id'")or die(mysqli_error($conn));
    $row=mysqli_fetch_assoc($sql);
    ?>
    <div class="form-group">
        <label for="voting">votingan lama</label>
        <input type="text" class="form-control" id="voting" value="<?=$row['voting']?>" required readonly>
    </div>
    <div class="form-group">
        <label for="voting">votingan baru</label>
        <input type="text" class="form-control" id="voting" name='voting' required>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="add" value="kirim">
    </div>
    <?php
     if(isset($_POST['add'])){
         $voting = $_POST['voting'];
         $sql=mysqli_query($conn,"SELECT * FROM quick WHERE id_quick='$id'")or die(mysqli_error($conn));
         $row=mysqli_fetch_assoc($sql);
         $hasil=$row['voting'] + $voting;
         $sql=mysqli_query($conn,"UPDATE quick SET voting='$hasil' WHERE id_quick='$id'")or die(mysqli_error($conn));
         
         if ($sql) {
             echo "<script>
                     alert('data berhasil di ubah');
                  </script>";
             echo "<meta http-equiv='refresh' content='0;url=index.php'>"; 
         }
        }
?>
</form>


