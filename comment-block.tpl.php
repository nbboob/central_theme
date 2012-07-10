<?php	
$items = array();
  $number = variable_get('comment_block_count', 10);
  foreach (comment_get_recent($number) as $comment) {
    $items[] = l($comment->subject, 'comment/' . $comment->cid, array('fragment' => 'comment-' . $comment->cid)) . '&nbsp;<span>' . t('(@time)', array('@time' => format_date($comment->changed))) . '</span>';
  }

  if ($items) {
    print theme('item_list', array('items' => $items));
  }
 else {
    print t('No comments available.');
  }