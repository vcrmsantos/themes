<?php
global $wp;
$current_url = urlencode(home_url(add_query_arg(array(),$wp->request)));
$text_share = get_the_title();
?>

<div class="share-buttons">
    <div class="title">Compartilhe nas redes sociais: </div>
    <!-- Facebook -->
    <a class="link-share" href="http://www.facebook.com/sharer.php?u=<?php echo $current_url?>" target="_blank">
        <i class="fa fa-facebook" title="" target="_blank" href="#"></i>
    </a>
    <!-- Google+ -->
    <a class="link-share" href="https://plus.google.com/share?url=<?php echo $current_url?>" target="_blank">
        <i class="fa fa-google-plus" title="" target="_blank" href="#"></i>
    </a>
    <!-- Twitter -->
    <a class="link-share" href="https://twitter.com/share?url=<?php echo $current_url?>&amp;text=<?php echo $text_share; ?>"
        target="_blank">
        <i class="fa fa-twitter" title="" target="_blank" href="#"></i>
    </a>
</div>
<div class="clearfix"></div>
    
  
