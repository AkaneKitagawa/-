(function($) {
    var $wp_inline_edit = inlineEditPost.edit;
    inlineEditPost.edit = function( id ) {
        $wp_inline_edit.apply( this, arguments );
        var $post_id = 0;
        if ( typeof( id ) == 'object' )
            $post_id = parseInt( this.getId( id ) );
        if ( $post_id > 0 ) {
            var $edit_row = $( '#edit-' + $post_id );
            var $post_row = $( '#post-' + $post_id );
            //椅子
            var $chair = $( '.column-椅子', $post_row ).html();
            $( ':input[name="椅子"]', $edit_row ).val( $chair );
            //机
            var $table = $( '.column-机', $post_row ).html();
            $( ':input[name="机"]', $edit_row ).val( $table );
        }
    };
})(jQuery);//カプセル化