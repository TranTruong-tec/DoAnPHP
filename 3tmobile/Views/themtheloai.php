<form autocomplete="off"  action="<?php echo url?>/theloai/inserttheloai" method="post">
    <?php
    if (isset($msg)) {
        echo '<span style = "color:red"; font-weight: bold;>'.$msg.'</span>';
        # code...
    }
        
    ?>

    <table>
        <tr>
            <td>Tên loại</td>
            <td><input type="text" required = "1" name="TenLoai"></td> 
        </tr>
        <tr>
        <td><input type="submit" value="Thêm Thể loại" name="themtheloai"></td>
        </tr>
    </table>

</form>