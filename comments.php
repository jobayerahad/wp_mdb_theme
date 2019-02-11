<?php if ( get_comment_count()) : ?>
    <div class="card">
        <div class="card-header h5">
            Comments
        </div>
        <div class="card-body text-justify" >
            
            <ul>
                <!-- <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" alt="Avatar">
                <div class="media-body">
                    <h5 class="mt-0 font-weight-bold blue-text">Someone</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                    odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                    fringilla. Donec lacinia congue felis in faucibus.
                </div> -->
                <?php $args = array(
                    'walker'            => null,
                    'max_depth'         => '',
                    'style'             => 'ul',
                    'callback'          => null,
                    'end-callback'      => null,
                    'type'              => 'all',
                    'reply_text'        => 'Reply',
                    'page'              => '',
                    'per_page'          => '',
                    'avatar_size'       => 100,
                    'reverse_top_level' => null,
                    'reverse_children'  => '',
                    'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
                    'short_ping'        => false,   // @since 3.6
                        'echo'              => true     // boolean, default is true
                    ); 
                    wp_list_comments($args);
                ?>
            </ul>
            <?php
                the_comments_pagination(); 
            ?>
        </div>
    </div>
<?php endif; ?>

<?php if (comments_open()) : ?>
    <div class="card">
        
        <div class="card-header h5">Leave a reply</div>
        <div class="card-body text-left">
        
        <?php
            $comments_args = array(
                // change the title of send button 
                'label_submit'=>'Send',
                // change the title of the reply section
                'title_reply'=>'Leave a comment',
                // remove "Text or HTML to be displayed after the set of comment fields"
                'comment_notes_after' => '',
                // redefine your own textarea (the comment body)
                'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
            );

            comment_form($comments_args);
        ?>

        </div> 
    </div>
<?php endif; ?>