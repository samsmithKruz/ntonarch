<?php 
$header_include = "";
$title = "Dashboard";
$page = "dashboard";
require_once __DIR__."/inc/userHeader.php"; 

?>
<div class="content ">
    <h1>Welcome !!</h1>
    <p>
        We’re excited to have you here. This dashboard is your central hub for managing and overseeing all aspects of the platform. From here, you can easily navigate to key functionalities and get a snapshot of what’s happening in your system.
    </p>
    <div class="dashboard cards">
        <a href="#" class="card">
            <span class="i_icon">&#xe837;</span>
            <div class="content">
                <span class="head">Manage Roles</span>
                <span class="text">Access role assignments and modifications.</span>
            </div>
        </a>
        <a href="#" class="card">
            <span class="i_icon">&#xe837;</span>
            <div class="content">
                <span class="head">Create Blog</span>
                <span class="text">Shortcut to create a new blog post.</span>
            </div>
        </a>
        <a href="#" class="card">
            <span class="i_icon">&#xe837;</span>
            <div class="content">
                <span class="head">Manage Blogs</span>
                <span class="text">Overview and management of all blog posts.</span>
            </div>
        </a>
        <a href="#" class="card">
            <span class="i_icon">&#xe837;</span>
            <div class="content">
                <span class="head">Draft</span>
                <span class="text">Quick access to manage and edit drafts of blog posts.</span>
            </div>
        </a>
        <a href="#" class="card">
            <span class="i_icon">&#xe837;</span>
            <div class="content">
                <span class="head">Approval Queue</span>
                <span class="text">Summary of items pending approval (content, products, etc.).</span>
            </div>
        </a>
        <a href="#" class="card">
            <span class="i_icon">&#xe837;</span>
            <div class="content">
                <span class="head">Content Approvals</span>
                <span class="text">Review and approve content submissions.</span>
            </div>
        </a>
        <a href="#" class="card">
            <span class="i_icon">&#xe837;</span>
            <div class="content">
                <span class="head">Product Listings</span>
                <span class="text">Quick access to manage and view product listings.</span>
            </div>
        </a>
    </div>
</div>
<?php
$footer_include = "";
require_once __DIR__."/inc/userFooter.php"; 
?>