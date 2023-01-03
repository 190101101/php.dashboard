<?php $article = $data->article; ?>
<div class="card mb-4">
    <div class="card-header">
        <div class="row">
            <div class="col-md-10">
                <i class="fas fa-table me-1"></i>
                <span>show</span>
            </div>
            <div class="col-md-2">
                <a class="btn btn-sm btn-danger" href="/panel/article/destroy/<?php echo $article->article_id; ?>">delete</a>
                <a class="btn btn-sm btn-success" href="/panel/article/page/1">back</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <h3 class="mt-4 mb-3">#<?php echo $article->article_title; ?></h3>

        <div class="row">
            <div class="col-lg-12">
                <p class="lead"><?php echo $article->article_text; ?></p>
                <hr>

                <div class="my-3">
                    <div>
                        <span>
                            <span> Nəşr edilmişdir: </span>
                            <span><?php echo $article->article_created; ?></span>
                        </span>

                        <span>
                            <span> baxış: </span>
                            <span><?php echo $article->article_view; ?></span>
                        </span>

                         <span>
                            <a href="/panel/article/category/<?php echo $article->section_slug; ?>/<?php echo $article->category_slug; ?>/page/1">
                                <span>category: </span>
                                <span><?php echo $article->category_title; ?></span>
                            </a>
                        </span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

