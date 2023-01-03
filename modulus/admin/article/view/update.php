<?php $article = $data->article; ?>
<form class="card mb-4" action="/panel/article/update" method="POST">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-10">
                <i class="fas fa-table me-1"></i>
                <span>update</span>
            </div>
            <div class="col-lg-2">
                <button class="btn btn-sm btn-success" type="submit">update</button>
                <a class="btn btn-sm btn-success" href="/panel/article/page/1">back</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label>id</label>
                    <input class="form-control" value="<?php echo $article->article_id; ?>"  required readonly>
                </div>
                <div class="form-group">
                    <label>title</label>
                    <input name="article_title" class="form-control" type="text" value="<?php echo $article->article_title; ?>" required>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>created</label>
                    <input type="text" class="form-control" value="<?php echo $article->article_created; ?>" required readonly>
                </div>
                <div class="form-group">
                    <label>updated</label>
                    <input type="text" class="form-control" value="<?php echo date('Y-m-d H:i:s'); ?>" required>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>view</label>
                    <input name="article_view" class="form-control" type="text" value="<?php echo $article->article_view; ?>" required>
                </div>

            </div>
            <div class="col-lg-12">
                <label>article text</label>
                <textarea name="article_text" rows="5" minlength="100" maxlength="30000" type="text" class="form-control" placeholder="article text" required id="editor1"><?php echo $article->article_text; ?></textarea>
                <script>CKEDITOR.replace('editor1')</script>
            </div>

            <input name="article_id" type="hidden" value="<?php echo $article->article_id; ?>"  required readonly>
        </div>
    </div>
</form>
