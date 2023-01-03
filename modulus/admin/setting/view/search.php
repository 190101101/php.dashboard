<div class="card mb-4">
    <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <i class="fas fa-table me-1"></i>
                <span>search</span>
            </div>      
            <?php page_data($data->page); ?>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>desc</th>
                    <th>key</th>
                    <th>value</th>
                    <th>type</th>
                    <th>show</th>
                    <th>update</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td>id</td>
                    <td>desc</td>
                    <td>key</td>
                    <td>value</td>
                    <td>type</td>
                    <td>show</td>
                    <td>update</td>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach($data->setting as $setting): ?>
                <tr>
                    <td><?php echo $setting->setting_id; ?></td>
                    <td><?php echo substr($setting->setting_description, 0, 10); ?></td>
                    <td><?php echo substr($setting->setting_key, 0, 10); ?></td>
                    <td><?php echo substr($setting->setting_value, 0, 30); ?></td>
                    <td><?php echo substr($setting->setting_type, 0, 30); ?></td>
                    <td><a class="btn btn-sm btn-success"
                        href="/panel/setting/show/<?php echo $setting->setting_id; ?>">show</a></td>
                    <td><a class="btn btn-sm btn-warning"
                        href="/panel/setting/update/<?php echo $setting->setting_id; ?>">update</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td>id</td>
                    <td>desc</td>
                    <td>key</td>
                    <td>value</td>
                    <td>type</td>
                    <td>show</td>
                    <td>update</td>
                </tr>
            </tfoot>
        </table>
        <ul class="pagination justify-content-center">
            <?php pagination::selector($data->page, breadcump_search()); ?>
        </ul>
    </div>
</div>