<?php

/*

< less than
> greater than
<= less than or equal to
>= greater than or equal to
== equal to
=== identical to
!= not equal to
!=== not identical to

*/

$fav_color = ['yellow'];

if ($fav_color[0] == 'red') {
    echo 'Your fav color is red';
} else {
    echo 'Your fav color is NOT red';
}

echo '<hr>';

//============================ switch case ===================================

$favorite_color = 'yellow';

switch ($favorite_color) {
    case 'red':
        echo 'Your fav color is red';
        break;
    case 'green':
        echo 'Your fav color is green';
        break;
    case 'blue':
        echo 'Your fav color is blue';
        break;
    default:
        echo 'Your fav color is NOT red, green. blue';
        break;
}

echo '<hr>';

//============================ ternary operator ===================================

$list_posts = ['First post'];

$operator_list_posts = !empty($list_posts) ? $list_posts[0] : 'No Posts';
echo $operator_list_posts;
echo '<br>';

$operator_list_posts_second = $list_posts[0] ?? 'No Posts';
echo $operator_list_posts_second;
