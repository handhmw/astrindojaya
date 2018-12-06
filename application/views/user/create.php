<?php echo form_open_multipart('user/create');?>
<table>
    <tr>
        <td>User ID</td>
        <td><?php echo form_input('usr_id');?></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo form_input('usr_name');?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo form_input('usr_email');?></td>
    </tr>   
    <tr>
        <td>Password</td>
        <td><?php echo form_input('usr_password');?></td>
    </tr>
    <tr>
        <td>Level</td>
        <td><?php echo form_input('usr_level');?></td>
    </tr>      
    <tr>
        <td>Jabatan</td>
        <td><?php echo form_input('usr_jabatan');?></td>
    </tr>
    <tr>
        <td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('user','Kembali');?></td>
    </tr>
</table>
<?php
echo form_close();
?>