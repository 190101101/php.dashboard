<form class="card mb-4" action="/panel/article/create" method="POST">
    <div class="card-header">
        <div class="row">
            <div class="col-md-10">
                <i class="fas fa-table me-1"></i>
                <span>create</span>
            </div>
            <div class="col-md-2">
                <button class="btn btn-sm btn-success" type="submit">create</button>
                <a class="btn btn-sm btn-success" href="/panel/article/page/1">back</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>title</label>
                    <input name="article_title" class="form-control" type="text" minlength="3" maxlength="100" placeholder="title" required>
                </div>
            </div>

            <div class="col-md-12">
                <label>article text</label>
                <textarea name="article_text" rows="5" minlength="10" maxlength="30000" type="text" class="form-control" placeholder="article text" required id="editor1"></textarea>
                <script>CKEDITOR.replace('editor1')</script>
            </div>
        </div>
    </div>
</form>