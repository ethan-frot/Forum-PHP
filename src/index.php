<?php
    require_once __DIR__ . '/components/header.php';
?>    

    <div class="row">
        <div class="col-6 offset-md-3">
            <p class="text-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat dolores culpa eius rem perferendis. Ullam, quas incidunt doloribus, nsectetur adipisicing eli</p>

            <p class="text-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia corrupti doloribus temporeat, ipsum et porro tenetur corrupti amet voluptatem officia? Deleniti porro ipsa eaque, est dolorem corrupti dolor? Alias assumenda sit doloribus consequuntur.</p>
        </div>
    </div>

<div class="col-6 offset-md-3">   
    <div class="form-group">
        <form action="/actions/create-post.php">
            <input type="text" placeholder="Pseudo" name="title" class="form-control">
            <textarea 
                name="content" 
                id="" 
                cols="20" 
                rows="5"
                placeholder="Message"
                class="form-control mt-3"></textarea>
            <div class="input-group mt-3">
                <input type="submit" value="Envoyer" class="form-control bg-purple">
            </div>
        </form>
    </div>
</div> 
        <?php
            require_once __DIR__ . '/templates/post-list.php'
        ?>

    
<?php
    require_once __DIR__ . '/components/footer.php';
?>  