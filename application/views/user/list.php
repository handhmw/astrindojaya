<font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<table border="1">
    <tr>
        <th>User ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Level</th>
        <th>Jabatan</th>
        <th></th>
    </tr>
    <?php
    foreach ($datapengguna as $pengguna){
        echo "<tr>
              <td>$pengguna->usr_id</td>
              <td>$pengguna->usr_name</td>
              <td>$pengguna->usr_email</td>
              <td>$pengguna->usr_password</td>
              <td>$pengguna->usr_level</td>
              <td>$pengguna->usr_jabatan</td>
              <td>".anchor('user/edit/'.$pengguna->usr_id,'Edit')."
                  ".anchor('user/delete/'.$pengguna->usr_id,'Delete')."</td>
              </tr>";
    }
    ?>
</table>
<a href="http://localhost/ci_rest/index.php/user/create">+ Tambah data<a>