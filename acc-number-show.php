<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>แสดงรายการเลขบัญชี</h4>
            </div>
            <div class="card-body">
                
                <table id="dataTable" class="table table-bordered table-hover" >
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>เลขที่บัญชี</th>
                            <th>รายการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tb_account_number ORDER BY acc_number ASC";
                        $query = mysqli_query($conn, $sql);
                        
                        $index = 1;
                        while($row = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td> <?=$index?> </td>
                            <td> <?=$row['acc_number']?> </td>
                            <td> <?=$row['acc_title']?> </td>
                        </tr>
                        <?php
                            $index++;
                        }
                        ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>