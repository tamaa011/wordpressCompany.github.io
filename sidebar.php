<div class="sidebar">
    <div class="widget">
        <h3 class="sidebar-title">Make Order</h3>
        <div class="sidebar-content">
            <span>To Make Order Please Call </span>
            <ul>
                <li>01272111470</li>
                <li> 01016422738 </li>
            </ul>
            <span>Or Send Email To </span>
            <ul>
                <li><a>mohamed.tamaa@smartcomput.net</a> </li>
                <li><a>d.yousef@smartcomput.net</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="sidebar">
    <div class="widget">
        <h3 class="sidebar-title">Categories</h3>
        <div class="sidebar-content">
            <?php wp_list_categories(array(
                'title_li' => '',
                'show_count' => 1
            )) ?>
        </div>
    </div>
</div>
<div class="sidebar">
    <div class="widget">
        <h3 class="sidebar-title">Links</h3>
        <div class="sidebar-content">
            <a href="<?php echo get_template_directory_uri() . '/adminpanel/index.html' ?>">Site Admin</a>
        </div>
    </div>
</div>