<?php $setting = $data->setting; ?>
<form class="card mb-4" action="/panel/setting/update" method="POST">
    <div class="card-header">
        <div class="row">
            <div class="col-md-10">
                <i class="fas fa-table me-1"></i>
                <span>update</span>
            </div>
            <div class="col-md-2">
                <button class="btn btn-sm btn-success" type="submit">update</button>
                <a class="btn btn-sm btn-success" href="/panel/setting/page/1">back</a>
            </div>
        </div>
    </div>
    <div class="card-body"> 
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>id</label>
                    <input name="setting_id" class="form-control" value="<?php echo $setting->setting_id; ?>" readonly required>
                </div>
                <div class="form-group">
                    <label>description</label>
                    <input name="setting_description" class="form-control" value="<?php echo $setting->setting_description; ?>" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>key</label>
                    <input class="form-control" value="<?php echo $setting->setting_key; ?>" required readonly>
                </div>
                <div class="form-group">
                    <label>type</label>
                    <select class="form-control" name="setting_type" required>
                        <option value="<?php echo $setting->setting_type; ?>">
                            <?php echo $setting->setting_type; ?>
                        </option>
                        <option value="text">text</option>
                        <option value="textarea">textarea</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>updated</label>
                    <input class="form-control" value="<?php echo $setting->setting_updated; ?>" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>text</label>
                    <?php if($setting->setting_type == 'textarea'): ?>
                    <textarea name="setting_value" type="text" class="form-control" rows="5" required><?php echo $setting->setting_value; ?></textarea>
                    <?php elseif($setting->setting_type == 'text'): ?>
                    <input name="setting_value" type="text" class="form-control" value="<?php echo $setting->setting_value; ?>" required>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</form>
