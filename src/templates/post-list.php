<?php require_once __DIR__ . '/../data.php' ?>

<div class="row">
    <?php if (isset($postList) && is_array($postList)) : ?>
        <?php foreach ($postList as $key => $post) : ?>
            <div class="col-md-8 offset-2">
                <div class="card mt-3 position-relative">
                    <div class="card-body border border-primary-subtle border-2 bg-primary-subtle d-flex">
                        <div class="flex-grow-1">
                            <div>
                                <div class="mb-2 mx-4">
                                    <a href="/actions/delete-post.php?index=<?= $key ?>" class="link-danger position-absolute top-0 end-0">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </a>
                                </div>
                                <h2><?= $post['title']; ?></h2>
                            </div>
                            <div class="col-md-11">
                                <p class="content-paragraph"><?= $post['content']; ?></p>
                            </div>
                        </div>
                        <div class="position-absolute top-50 end-0 translate-middle-y text-center">
                            <div class="mb-2 mx-4">
                                <a href="/actions/upvote.php?index=<?= $key ?>&action=upvote" class="btn btn-light"><i class="fa-solid fa-arrow-up"></i></a>
                            </div>
                            <div class="mb-2 mx-4">
                                <span class="badge <?= $post['rating'] >= 0 ? 'bg-success' : 'bg-danger'; ?>">
                                    <?= isset($post['rating']) ? $post['rating'] : 0 ?>
                                </span>
                            </div>
                            <div class="mx-4">
                                <a href="/actions/downvote.php?index=<?= $key ?>&action=downvote" class="btn btn-light"><i class="fa-solid fa-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p>Aucun post à afficher pour le moment.</p>
    <?php endif; ?>
</div>
