<?php $setting = $data->setting; ?>
<div class="card mb-4">
    <div class="card-header">
        <div class="row">
            <div class="col-md-10">
                <i class="fas fa-table me-1"></i>
                <span>show</span>
            </div>
            <div class="col-md-2">
                <a class="btn btn-sm btn-success" href="/panel/setting/update/<?php echo $setting->setting_id; ?>">update</a>
                <a class="btn btn-sm btn-success" href="/panel/setting/page/1">back</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <h3 class="mt-4 mb-3">#<?php echo $setting->setting_key; ?></h3>

        <div class="row">
            <div class="col-lg-12">
                <p class="lead"><?php echo $setting->setting_value; ?></p>
            </div>
        </div>
    </div>
</div>
