<?php get_header(); ?>
<div id="container">
<div id="content" style="padding-top:15px;padding-left:15px">
<h1>Not Found</h1><br />
<div>This entry or page no longer exists.<br /><br />
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
<fieldset class="search">
Please search <input class="box" name="s" type="text" onfocus="if(this.value=='here') this.value='';" onblur="if(this.value=='') this.value='here';" value="here" /> &mdash; or select a category from the menus below.
</fieldset>
</form>
</div>
</div><!-- content div -->
</div><!-- container div -->
<?php get_footer(); ?>