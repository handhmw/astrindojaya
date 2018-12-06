<?php echo form_open('user/edit');?>
<?php echo form_hidden('usr_id',$datapengguna[0]->usr_id);?>

<table>
    <tr>
        <td>User ID</td>
        <td><?php echo form_input('',$datapengguna[0]->usr_id,"disabled");?></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><?php echo form_input('usr_name',$datapengguna[0]->usr_name);?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo form_input('usr_email',$datapengguna[0]->usr_email);?></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><?php echo form_input('usr_password',$datapengguna[0]->usr_password);?></td>
    </tr>
    <tr>
        <td>Level</td>
        <td><?php echo form_input('usr_level',$datapengguna[0]->usr_level);?></td>
    </tr>
    <tr>
        <td>Jabatan</td>
        <td><?php echo form_input('usr_jabatan',$datapengguna[0]->usr_jabatan);?></td>
    </tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('user','Kembali');?></td></tr>
</table>
<?php
echo form_close();